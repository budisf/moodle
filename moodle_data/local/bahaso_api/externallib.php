<?php

use core_completion\progress;

require_once(__DIR__ . '/../../config.php');
require_once($CFG->libdir . '/externallib.php');
require_once($CFG->dirroot . '/user/lib.php');
require_once($CFG->dirroot . '/course/lib.php');

class local_bahaso_api_external extends external_api
{
    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 2.3
     */
    public static function create_categories_parameters()
    {
        return new external_function_parameters(
            array(
                'categories' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'name' => new external_value(PARAM_TEXT, 'new category name'),
                            'parent' => new external_value(
                                PARAM_INT,
                                'the parent category id inside which the new category will be created
                                         - set to 0 for a root category',
                                VALUE_DEFAULT,
                                0
                            ),
                            'idnumber' => new external_value(
                                PARAM_RAW,
                                'the new category idnumber',
                                VALUE_OPTIONAL
                            ),
                            'description' => new external_value(
                                PARAM_RAW,
                                'the new category description',
                                VALUE_OPTIONAL
                            ),
                            'descriptionformat' => new external_format_value('description', VALUE_DEFAULT),
                            'theme' => new external_value(
                                PARAM_THEME,
                                'the new category theme. This option must be enabled on moodle',
                                VALUE_OPTIONAL
                            ),
                        )
                    )
                )
            )
        );
    }

    /**
     * Create categories
     *
     * @param array $categories - see create_categories_parameters() for the array structure
     * @return array - see create_categories_returns() for the array structure
     * @since Moodle 2.3
     */
    public static function create_categories($categories)
    {
        global $DB;

        $params = self::validate_parameters(
            self::create_categories_parameters(),
            array('categories' => $categories)
        );

        $transaction = $DB->start_delegated_transaction();

        $createdcategories = array();
        foreach ($params['categories'] as $category) {
            if ($category['parent']) {
                if (!$DB->record_exists('course_categories', array('id' => $category['parent']))) {
                    throw new moodle_exception('unknowcategory');
                }
                $context = context_coursecat::instance($category['parent']);
            } else {
                $context = context_system::instance();
            }
            self::validate_context($context);
            require_capability('moodle/category:manage', $context);

            // this will validate format and throw an exception if there are errors
            external_validate_format($category['descriptionformat']);

            $newcategory = core_course_category::create($category);
            $context = context_coursecat::instance($newcategory->id);

            $createdcategories[] = array(
                'id' => $newcategory->id,
                'name' => external_format_string($newcategory->name, $context),
                'message' => 'Category created'
            );
        }

        $transaction->allow_commit();

        return $createdcategories;
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 2.3
     */
    public static function create_categories_returns()
    {
        return new external_multiple_structure(
            new external_single_structure(
                array(
                    'id' => new external_value(PARAM_INT, 'new category id'),
                    'name' => new external_value(PARAM_RAW, 'new category name'),
                    'message' => new external_value(PARAM_TEXT, 'message'),
                )
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 2.2
     */
    public static function create_courses_parameters()
    {
        $courseconfig = get_config('moodlecourse'); //needed for many default values
        return new external_function_parameters(
            array(
                'courses' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'fullname' => new external_value(PARAM_TEXT, 'full name'),
                            'shortname' => new external_value(PARAM_TEXT, 'course short name'),
                            'categoryid' => new external_value(PARAM_INT, 'category id'),
                            'idnumber' => new external_value(PARAM_RAW, 'id number', VALUE_OPTIONAL),
                            'summary' => new external_value(PARAM_RAW, 'summary', VALUE_OPTIONAL),
                            'summaryformat' => new external_format_value('summary', VALUE_DEFAULT),
                            'format' => new external_value(
                                PARAM_PLUGIN,
                                'course format: weeks, topics, social, site,..',
                                VALUE_DEFAULT,
                                $courseconfig->format
                            ),
                            'showgrades' => new external_value(
                                PARAM_INT,
                                '1 if grades are shown, otherwise 0',
                                VALUE_DEFAULT,
                                $courseconfig->showgrades
                            ),
                            'newsitems' => new external_value(
                                PARAM_INT,
                                'number of recent items appearing on the course page',
                                VALUE_DEFAULT,
                                $courseconfig->newsitems
                            ),
                            'startdate' => new external_value(
                                PARAM_INT,
                                'timestamp when the course start',
                                VALUE_OPTIONAL
                            ),
                            'enddate' => new external_value(
                                PARAM_INT,
                                'timestamp when the course end',
                                VALUE_OPTIONAL
                            ),
                            'numsections' => new external_value(
                                PARAM_INT,
                                '(deprecated, use courseformatoptions) number of weeks/topics',
                                VALUE_OPTIONAL
                            ),
                            'maxbytes' => new external_value(
                                PARAM_INT,
                                'largest size of file that can be uploaded into the course',
                                VALUE_DEFAULT,
                                $courseconfig->maxbytes
                            ),
                            'showreports' => new external_value(
                                PARAM_INT,
                                'are activity report shown (yes = 1, no =0)',
                                VALUE_DEFAULT,
                                $courseconfig->showreports
                            ),
                            'visible' => new external_value(
                                PARAM_INT,
                                '1: available to student, 0:not available',
                                VALUE_OPTIONAL
                            ),
                            'hiddensections' => new external_value(
                                PARAM_INT,
                                '(deprecated, use courseformatoptions) How the hidden sections in the course are displayed to students',
                                VALUE_OPTIONAL
                            ),
                            'groupmode' => new external_value(
                                PARAM_INT,
                                'no group, separate, visible',
                                VALUE_DEFAULT,
                                $courseconfig->groupmode
                            ),
                            'groupmodeforce' => new external_value(
                                PARAM_INT,
                                '1: yes, 0: no',
                                VALUE_DEFAULT,
                                $courseconfig->groupmodeforce
                            ),
                            'defaultgroupingid' => new external_value(
                                PARAM_INT,
                                'default grouping id',
                                VALUE_DEFAULT,
                                0
                            ),
                            'enablecompletion' => new external_value(
                                PARAM_INT,
                                'Enabled, control via completion and activity settings. Disabled,
                                        not shown in activity settings.',
                                VALUE_OPTIONAL
                            ),
                            'completionnotify' => new external_value(
                                PARAM_INT,
                                '1: yes 0: no',
                                VALUE_OPTIONAL
                            ),
                            'lang' => new external_value(
                                PARAM_SAFEDIR,
                                'forced course language',
                                VALUE_OPTIONAL
                            ),
                            'forcetheme' => new external_value(
                                PARAM_PLUGIN,
                                'name of the force theme',
                                VALUE_OPTIONAL
                            ),
                            'courseformatoptions' => new external_multiple_structure(
                                new external_single_structure(
                                    array(
                                        'name' => new external_value(PARAM_ALPHANUMEXT, 'course format option name'),
                                        'value' => new external_value(PARAM_RAW, 'course format option value')
                                    )
                                ),
                                'additional options for particular course format',
                                VALUE_OPTIONAL
                            ),
                            'customfields' => new external_multiple_structure(
                                new external_single_structure(
                                    array(
                                        'shortname'  => new external_value(PARAM_ALPHANUMEXT, 'The shortname of the custom field'),
                                        'value' => new external_value(PARAM_RAW, 'The value of the custom field'),
                                    )
                                ),
                                'custom fields for the course',
                                VALUE_OPTIONAL
                            )
                        )
                    ),
                    'courses to create'
                )
            )
        );
    }

    /**
     * Create  courses
     *
     * @param array $courses
     * @return array courses (id and shortname only)
     * @since Moodle 2.2
     */
    public static function create_courses($courses)
    {
        global $CFG, $DB;
        require_once($CFG->dirroot . "/course/lib.php");
        require_once($CFG->libdir . '/completionlib.php');

        $params = self::validate_parameters(
            self::create_courses_parameters(),
            array('courses' => $courses)
        );

        $availablethemes = core_component::get_plugin_list('theme');
        $availablelangs = get_string_manager()->get_list_of_translations();

        $transaction = $DB->start_delegated_transaction();

        foreach ($params['courses'] as $course) {

            // Ensure the current user is allowed to run this function
            $context = context_coursecat::instance($course['categoryid'], IGNORE_MISSING);
            try {
                self::validate_context($context);
            } catch (Exception $e) {
                $exceptionparam = new stdClass();
                $exceptionparam->message = $e->getMessage();
                $exceptionparam->catid = $course['categoryid'];
                throw new moodle_exception('errorcatcontextnotvalid', 'webservice', '', $exceptionparam);
            }
            require_capability('moodle/course:create', $context);

            // Fullname and short name are required to be non-empty.
            if (trim($course['fullname']) === '') {
                throw new moodle_exception('errorinvalidparam', 'webservice', '', 'fullname');
            } else if (trim($course['shortname']) === '') {
                throw new moodle_exception('errorinvalidparam', 'webservice', '', 'shortname');
            }

            // Make sure lang is valid
            if (array_key_exists('lang', $course)) {
                if (empty($availablelangs[$course['lang']])) {
                    throw new moodle_exception('errorinvalidparam', 'webservice', '', 'lang');
                }
                if (!has_capability('moodle/course:setforcedlanguage', $context)) {
                    unset($course['lang']);
                }
            }

            // Make sure theme is valid
            if (array_key_exists('forcetheme', $course)) {
                if (!empty($CFG->allowcoursethemes)) {
                    if (empty($availablethemes[$course['forcetheme']])) {
                        throw new moodle_exception('errorinvalidparam', 'webservice', '', 'forcetheme');
                    } else {
                        $course['theme'] = $course['forcetheme'];
                    }
                }
            }

            //force visibility if ws user doesn't have the permission to set it
            $category = $DB->get_record('course_categories', array('id' => $course['categoryid']));
            if (!has_capability('moodle/course:visibility', $context)) {
                $course['visible'] = $category->visible;
            }

            //set default value for completion
            $courseconfig = get_config('moodlecourse');
            if (completion_info::is_enabled_for_site()) {
                if (!array_key_exists('enablecompletion', $course)) {
                    $course['enablecompletion'] = $courseconfig->enablecompletion;
                }
            } else {
                $course['enablecompletion'] = 0;
            }

            $course['category'] = $course['categoryid'];

            // Summary format.
            $course['summaryformat'] = external_validate_format($course['summaryformat']);

            if (!empty($course['courseformatoptions'])) {
                foreach ($course['courseformatoptions'] as $option) {
                    $course[$option['name']] = $option['value'];
                }
            }

            // Custom fields.
            if (!empty($course['customfields'])) {
                foreach ($course['customfields'] as $field) {
                    $course['customfield_' . $field['shortname']] = $field['value'];
                }
            }

            //Note: create_course() core function check shortname, idnumber, category
            $course['id'] = create_course((object) $course)->id;

            $resultcourses[] = array('id' => $course['id'], 'shortname' => $course['shortname']);
        }

        $transaction->allow_commit();

        return $resultcourses;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 2.2
     */
    public static function create_courses_returns()
    {
        return new external_multiple_structure(
            new external_single_structure(
                array(
                    'id'       => new external_value(PARAM_INT, 'course id'),
                    'shortname' => new external_value(PARAM_RAW, 'short name'),
                )
            )
        );
    }

    /**
     * Returns description of method parameters.
     *
     * @return external_function_parameters
     * @since Moodle 2.2
     */
    public static function enrol_users_parameters()
    {
        return new external_function_parameters(
            array(
                'enrolments' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'roleid' => new external_value(PARAM_INT, 'Role to assign to the user'),
                            'userid' => new external_value(PARAM_INT, 'The user that is going to be enrolled'),
                            'courseid' => new external_value(PARAM_INT, 'The course to enrol the user role in'),
                            'timestart' => new external_value(PARAM_INT, 'Timestamp when the enrolment start', VALUE_OPTIONAL),
                            'timeend' => new external_value(PARAM_INT, 'Timestamp when the enrolment end', VALUE_OPTIONAL),
                            'suspend' => new external_value(PARAM_INT, 'set to 1 to suspend the enrolment', VALUE_OPTIONAL)
                        )
                    )
                )
            )
        );
    }

    /**
     * Enrolment of users.
     *
     * Function throw an exception at the first error encountered.
     * @param array $enrolments  An array of user enrolment
     * @since Moodle 2.2
     */
    public static function enrol_users($enrolments)
    {
        global $DB, $CFG;

        require_once($CFG->libdir . '/enrollib.php');

        $params = self::validate_parameters(
            self::enrol_users_parameters(),
            array('enrolments' => $enrolments)
        );

        $transaction = $DB->start_delegated_transaction(); // Rollback all enrolment if an error occurs
        // (except if the DB doesn't support it).

        // Retrieve the manual enrolment plugin.
        $enrol = enrol_get_plugin('manual');
        if (empty($enrol)) {
            throw new moodle_exception('manualpluginnotinstalled', 'enrol_manual');
        }

        foreach ($params['enrolments'] as $enrolment) {
            // Ensure the current user is allowed to run this function in the enrolment context.
            $context = context_course::instance($enrolment['courseid'], IGNORE_MISSING);
            self::validate_context($context);

            // Check that the user has the permission to manual enrol.
            require_capability('enrol/manual:enrol', $context);

            // Throw an exception if user is not able to assign the role.
            $roles = get_assignable_roles($context);
            if (!array_key_exists($enrolment['roleid'], $roles)) {
                $errorparams = new stdClass();
                $errorparams->roleid = $enrolment['roleid'];
                $errorparams->courseid = $enrolment['courseid'];
                $errorparams->userid = $enrolment['userid'];
                throw new moodle_exception('wsusercannotassign', 'enrol_manual', '', $errorparams);
            }

            // Check manual enrolment plugin instance is enabled/exist.
            $instance = null;
            $enrolinstances = enrol_get_instances($enrolment['courseid'], true);
            foreach ($enrolinstances as $courseenrolinstance) {
                if ($courseenrolinstance->enrol == "manual") {
                    $instance = $courseenrolinstance;
                    break;
                }
            }
            if (empty($instance)) {
                $errorparams = new stdClass();
                $errorparams->courseid = $enrolment['courseid'];
                throw new moodle_exception('wsnoinstance', 'enrol_manual', $errorparams);
            }

            // Check that the plugin accept enrolment (it should always the case, it's hard coded in the plugin).
            if (!$enrol->allow_enrol($instance)) {
                $errorparams = new stdClass();
                $errorparams->roleid = $enrolment['roleid'];
                $errorparams->courseid = $enrolment['courseid'];
                $errorparams->userid = $enrolment['userid'];
                throw new moodle_exception('wscannotenrol', 'enrol_manual', '', $errorparams);
            }

            // Finally proceed the enrolment.
            $enrolment['timestart'] = isset($enrolment['timestart']) ? $enrolment['timestart'] : 0;
            $enrolment['timeend'] = isset($enrolment['timeend']) ? $enrolment['timeend'] : 0;
            $enrolment['status'] = (isset($enrolment['suspend']) && !empty($enrolment['suspend'])) ?
                ENROL_USER_SUSPENDED : ENROL_USER_ACTIVE;

            $enrol->enrol_user(
                $instance,
                $enrolment['userid'],
                $enrolment['roleid'],
                $enrolment['timestart'],
                $enrolment['timeend'],
                $enrolment['status']
            );
        }

        $transaction->allow_commit();
    }

    /**
     * Returns description of method result value.
     *
     * @return null
     * @since Moodle 2.2
     */
    public static function enrol_users_returns()
    {
        return null;
    }

    /**
     * Returns description of method parameters.
     *
     * @return external_function_parameters
     */
    public static function unenrol_users_parameters()
    {
        return new external_function_parameters(array(
            'enrolments' => new external_multiple_structure(
                new external_single_structure(
                    array(
                        'userid' => new external_value(PARAM_INT, 'The user that is going to be unenrolled'),
                        'courseid' => new external_value(PARAM_INT, 'The course to unenrol the user from'),
                        'roleid' => new external_value(PARAM_INT, 'The user role', VALUE_OPTIONAL),
                    )
                )
            )
        ));
    }

    /**
     * Unenrolment of users.
     *
     * @param array $enrolments an array of course user and role ids
     * @throws coding_exception
     * @throws dml_transaction_exception
     * @throws invalid_parameter_exception
     * @throws moodle_exception
     * @throws required_capability_exception
     * @throws restricted_context_exception
     */
    public static function unenrol_users($enrolments)
    {
        global $CFG, $DB;
        $params = self::validate_parameters(self::unenrol_users_parameters(), array('enrolments' => $enrolments));
        require_once($CFG->libdir . '/enrollib.php');
        $transaction = $DB->start_delegated_transaction(); // Rollback all enrolment if an error occurs.
        $enrol = enrol_get_plugin('manual');
        if (empty($enrol)) {
            throw new moodle_exception('manualpluginnotinstalled', 'enrol_manual');
        }

        foreach ($params['enrolments'] as $enrolment) {
            $context = context_course::instance($enrolment['courseid']);
            self::validate_context($context);
            require_capability('enrol/manual:unenrol', $context);
            $instance = $DB->get_record('enrol', array('courseid' => $enrolment['courseid'], 'enrol' => 'manual'));
            if (!$instance) {
                throw new moodle_exception('wsnoinstance', 'enrol_manual', $enrolment);
            }
            $user = $DB->get_record('user', array('id' => $enrolment['userid']));
            if (!$user) {
                throw new invalid_parameter_exception('User id not exist: ' . $enrolment['userid']);
            }
            if (!$enrol->allow_unenrol($instance)) {
                throw new moodle_exception('wscannotunenrol', 'enrol_manual', '', $enrolment);
            }
            $enrol->unenrol_user($instance, $enrolment['userid']);
        }
        $transaction->allow_commit();
    }

    /**
     * Returns description of method result value.
     *
     * @return null
     */
    public static function unenrol_users_returns()
    {
        return null;
    }


    /**
     * Returns description of method parameters.
     *
     * @return external_function_parameters
     * @since Moodle 2.2
     */
    public static function enrol_users_midtrans_parameters()
    {
        
        return new external_function_parameters(
            array(
                'enrolments' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'order_id' => new external_value(PARAM_RAW, 'The course to enrol the user role in'),
                            'custom_field3' => new external_value(PARAM_INT, 'Role to assign to the user'),
                            'custom_field2' => new external_value(PARAM_INT, 'The user that is going to be enrolled'),
                            'custom_field1' => new external_value(PARAM_INT, 'The course to enrol the user role in'),
                            'transaction_status' => new external_value(PARAM_RAW, 'Role to assign to the user'),
                            'payment_type' => new external_value(PARAM_RAW, 'The user that is going to be enrolled'),
                            'order_id' => new external_value(PARAM_RAW, 'The course to enrol the user role in'),
                            'fraud_status' => new external_value(PARAM_RAW, 'The course to enrol the user role in'),
                            'timestart' => new external_value(PARAM_INT, 'Timestamp when the enrolment start', VALUE_OPTIONAL),
                            'timeend' => new external_value(PARAM_INT, 'Timestamp when the enrolment end', VALUE_OPTIONAL),
                            'suspend' => new external_value(PARAM_INT, 'set to 1 to suspend the enrolment', VALUE_OPTIONAL)
                        )
                    )
                )
            )
        );
    }
    /**
     * Enrolment of users.
     *
     * Function throw an exception at the first error encountered.
     * @param array $enrolments  An array of user enrolment
     * @since Moodle 2.2
     */
    public static function enrol_users_midtrans($enrolmenku = array())
    {
        global $DB, $CFG;

        require_once($CFG->libdir . '/enrollib.php');

        $transaction = $enrolments[0]['transaction_status'];
        $type = $enrolments[0]['payment_type'];
        $order_id = $enrolments[0]['order_id'];
        $fraud = $enrolments[0]['fraud_status'];
        $course_id = $enrolments[0]['custom_field1'];
        $role_id = $enrolments[0]['custom_field2'];
        $user_id = $enrolments[0]['custom_field3'];
        // printf($transaction);

        $params = self::validate_parameters(
            self::enrol_users_parameters(),
            array('enrolment' => $enrolmenku)
        );
        // var_dump($enrolments[0]);
        // var_dump($params);
        // printf('test');
        // $order_id = $enrolments;

        // $url2 = "https://api.sandbox.midtrans.com/v2/".$order_id."/status";
        // //call api endpoint with data
        // $ch2 = curl_init();

        // //set the url, number of GET vars, GET data
        // curl_setopt($ch2, CURLOPT_URL, $url2);
        // curl_setopt($ch2, CURLOPT_RETURNTRANSFER, $url2);
        // curl_setopt($ch2, CURLOPT_CUSTOMREQUEST, "GET");
        // curl_setopt($ch2, CURLOPT_HTTPHEADER, array(
        //     'Accept: application/json',
        //     'Content-Type: application/json',
        //     'Authorization: Basic ' . base64_encode('SB-Mid-server-TTEgc2WFeTGA-53mKvifCHgw')
        // ));
        // curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
        // curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);

        // //execute post
        // $result2 = curl_exec($ch2);
        // if($result2){
        //     $result_arr = json_decode($result2);
        // }

        // $enrolment = (array)$result_arr;
        // $transaction = $result_arr->transaction_status;
        // $type = $result_arr->payment_type;
        // $order_id = $result_arr->order_id;
        // $fraud = $result_arr->fraud_status;
        // $course_id = $result_arr->custom_field1;
        // $role_id = $result_arr->custom_field2;
        // $user_id = $result_arr->custom_field3;
        
        if ($transaction == 'capture') {
        // For credit card transaction, we need to check whether transaction is challenge by FDS or not
        if ($type == 'credit_card'){
            if($fraud == 'challenge'){
            // TODO set payment status in merchant's database to 'Challenge by FDS'
            // TODO merchant should decide whether this transaction is authorized or not in MAP
            $message =  "Transaction order_id: " . $order_id ." is challenged by FDS";
            }
            else {
            // TODO set payment status in merchant's database to 'Success'
            $transaction = $DB->start_delegated_transaction(); // Rollback all enrolment if an error occurs
            // (except if the DB doesn't support it).

            // Retrieve the manual enrolment plugin.
            $enrol = enrol_get_plugin('paypal');
            if (empty($enrol)) {
                throw new moodle_exception('manualpluginnotinstalled', 'enrol_manual');
            }
            // foreach ($enrolments as $enrolment) {
                // Ensure the current user is allowed to run this function in the enrolment context.
                $context = context_course::instance( $course_id , IGNORE_MISSING);
                self::validate_context($context);

                // Check that the user has the permission to manual enrol.
                require_capability('enrol/manual:enrol', $context);

                // Throw an exception if user is not able to assign the role.
                $roles = get_assignable_roles($context);
                if (!array_key_exists( $role_id , $roles)) {
                    $errorparams = new stdClass();
                    $errorparams->roleid =  $role_id ;
                    $errorparams->courseid =  $course_id ;
                    $errorparams->userid =  $user_id ;
                    throw new moodle_exception('wsusercannotassign', 'enrol_paypal', '', $errorparams);
                }

                // Check manual enrolment plugin instance is enabled/exist.
                $instance = null;
                $enrolinstances = enrol_get_instances( $course_id , true);
                foreach ($enrolinstances as $courseenrolinstance) {
                    if ($courseenrolinstance->enrol == "paypal") {
                        $instance = $courseenrolinstance;
                        break;
                    }
                }
                if (empty($instance)) {
                    $errorparams = new stdClass();
                    $errorparams->courseid =  $course_id ;
                    throw new moodle_exception('wsnoinstance', 'enrol_paypal', $errorparams);
                }

                $enrolment['status'] = (isset($enrolments[0]['suspend']) && !empty($enrolments[0]['suspend'])) ?
                ENROL_USER_SUSPENDED : ENROL_USER_ACTIVE;

                $enrol->enrol_user(
                    $instance,
                     $user_id ,
                     $role_id ,
                    0,
                    0,
                    $enrolment['status']
                );
            // }
            $transaction->allow_commit();
            $message =  "Transaction order_id: " . $order_id ." successfully captured using " . $type;
            }
            }
        }
        else if ($transaction == 'settlement'){
        // TODO set payment status in merchant's database to 'Settlement'
            $transaction = $DB->start_delegated_transaction(); // Rollback all enrolment if an error occurs
            // (except if the DB doesn't support it).

            // Retrieve the manual enrolment plugin.
            $enrol = enrol_get_plugin('paypal');
            if (empty($enrol)) {
                throw new moodle_exception('manualpluginnotinstalled', 'enrol_manual');
            }
            // foreach ($enrolments as $enrolment) {
                // Ensure the current user is allowed to run this function in the enrolment context.
                $context = context_course::instance( $course_id , IGNORE_MISSING);
                self::validate_context($context);

                // Check that the user has the permission to manual enrol.
                require_capability('enrol/manual:enrol', $context);

                // Throw an exception if user is not able to assign the role.
                $roles = get_assignable_roles($context);
                if (!array_key_exists( $role_id , $roles)) {
                    $errorparams = new stdClass();
                    $errorparams->roleid =  $role_id ;
                    $errorparams->courseid =  $course_id ;
                    $errorparams->userid =  $user_id ;
                    throw new moodle_exception('wsusercannotassign', 'enrol_paypal', '', $errorparams);
                }

                // Check manual enrolment plugin instance is enabled/exist.
                $instance = null;
                $enrolinstances = enrol_get_instances( $course_id , true);
                foreach ($enrolinstances as $courseenrolinstance) {
                    if ($courseenrolinstance->enrol == "paypal") {
                        $instance = $courseenrolinstance;
                        break;
                    }
                }
                if (empty($instance)) {
                    $errorparams = new stdClass();
                    $errorparams->courseid =  $course_id ;
                    throw new moodle_exception('wsnoinstance', 'enrol_paypal', $errorparams);
                }

                // Check that the plugin accept enrolment (it should always the case, it's hard coded in the plugin).
                // if (!$enrol->allow_enrol($instance)) {
                //     $errorparams = new stdClass();
                //     $errorparams->roleid =  $role_id ;
                //     $errorparams->courseid =  $course_id ;
                //     $errorparams->userid =  $user_id ;
                //     throw new moodle_exception('wscannotenrol', 'enrol_paypal', '', $errorparams);
                // }

                // Finally proceed the enrolment.
                // $enrolments['timestart'] = isset($enrolments[0]['timestart']) ? $enrolments[0]['timestart'] : 0;
                // $enrolments['timeend'] = isset($enrolments[0]['timeend']) ? $enrolments[0]['timeend'] : 0;
                $enrolment['status'] = (isset($enrolments[0]['suspend']) && !empty($enrolments[0]['suspend'])) ?
                ENROL_USER_SUSPENDED : ENROL_USER_ACTIVE;

                $enrol->enrol_user(
                    $instance,
                     $user_id ,
                     $role_id ,
                    0,
                    0,
                    $enrolment['status']
                );
            // }
            $transaction->allow_commit();
        $message =  "Transaction order_id: " . $order_id ." successfully transfered using " . $type;
        
        }
        else if($transaction == 'pending'){
        // TODO set payment status in merchant's database to 'Pending'
        $message =  "Waiting customer to finish transaction order_id: " . $order_id . " using " . $type;
        }
        else if ($transaction == 'deny') {
        // TODO set payment status in merchant's database to 'Denied'
        $message =  "Payment using " . $type . " for transaction order_id: " . $order_id . " is denied.";
        }
        else if ($transaction == 'expire') {
        // TODO set payment status in merchant's database to 'expire'
        $message = "Payment using " . $type . " for transaction order_id: " . $order_id . " is expired.";
        }
        else if ($transaction == 'cancel') {
        // TODO set payment status in merchant's database to 'Denied'
        $message =  "Payment using " . $type . " for transaction order_id: " . $order_id . " is canceled.";
        }   
       
        $resultcourses1[] = array('status1' => 1, 'message2' => "test", 'data3' => "testjuga");
        $resultcourses[] = array('status' => 200, 'message' =>   $message , 'data' => $resultcourses1);
        return $resultcourses;
    }

    /**
     * Returns description of method result value.
     *
     * @return null
     * @since Moodle 2.2
     */
    public static function enrol_users_midtrans_returns()
    {
        return new external_multiple_structure(
            new external_single_structure(
                array(
                    'status'       => new external_value(PARAM_INT, 'status'),
                    'message' => new external_value(PARAM_RAW, 'message'),
                    'data' => new external_multiple_structure( 
                        new external_single_structure(   
                        array(
                        'status1'  => new external_value(PARAM_INT, 'course'),
                        'message2' => new external_value(PARAM_RAW, 'short '),
                        'data3' => new external_value(PARAM_RAW,'DATA'),
                        )
                    )
                ),

                )
            )
        );
    }
}
