<?php

defined('MOODLE_INTERNAL') || die();
$functions = array(
    'local_bahaso_api_create_categories' => array(
        'classname' => 'local_bahaso_api_external',
        'methodname' => 'create_categories',
        'classpath' => 'local/bahaso_api/externallib.php',
        'description' => 'Create course category',
        'type' => 'write',
        'ajax' => true,
    ),
    'local_bahaso_api_create_courses' => array(
        'classname' => 'local_bahaso_api_external',
        'methodname' => 'create_courses',
        'classpath' => 'local/bahaso_api/externallib.php',
        'description' => 'Create new course',
        'type' => 'write',
        'ajax' => true,
    ),
    'local_bahaso_api_enrol_users' => array(
        'classname' => 'local_bahaso_api_external',
        'methodname' => 'enrol_users',
        'classpath' => 'local/bahaso_api/externallib.php',
        'description' => 'Enrol user to Course',
        'type' => 'write',
        'ajax' => true,
    ),
    'local_bahaso_api_unenrol_users' => array(
        'classname' => 'local_bahaso_api_external',
        'methodname' => 'unenrol_users',
        'classpath' => 'local/bahaso_api/externallib.php',
        'description' => 'Unenrol user from Course',
        'type' => 'write',
        'ajax' => true,
    ),
    'local_bahaso_api_enrol_users_midtrans' => array(
        'classname' => 'local_bahaso_api_external',
        'methodname' => 'enrol_users_midtrans',
        'classpath' => 'local/bahaso_api/externallib.php',
        'description' => 'Enrol user from Course',
        'type' => 'write',
        'ajax' => true,
    )
    
);

$services = array(
    'Bahaso API Services' => array(
        'functions' => array(
            'local_bahaso_api_create_categories',
            'local_bahaso_api_create_courses',
            'local_bahaso_api_enrol_users',
            'local_bahaso_api_unenrol_users',
            'local_bahaso_api_enrol_users_midtrans'
        ),
        'restrictedusers' => 0,
        'enabled' => 1,
        'shortname' => 'bahaso_api'
    )
);
