<?php

require_once('../config.php');
require_once($CFG->libdir . '/externallib.php');
require_once($CFG->dirroot . '/user/lib.php');
require_once($CFG->dirroot . '/course/lib.php');
require_once($CFG->libdir . '/enrollib.php');
require_once($CFG->libdir . '/accesslib.php');
require_once('../lib/enrollib.php');

header("Content-Type:application/json"); 
$data = file_get_contents('php://input');

$json = json_decode($data);

$transaction = $json->transaction_status;

// create signature key
$signatureKey = hash('sha512', $json->order_id . $json->status_code . $json->gross_amount . 'SB-Mid-server-TTEgc2WFeTGA-53mKvifCHgw');

// get data from transakasi from enrol_midtrans
// $user = $DB->get_record('enrol_paypal', ['id' => 7]);
// // if($signatureKey !== $user->signature_key){
// //     echo 'Data tidak valid';
// // }

// // update status
// $updateOrder = new stdClass();
// $updateOrder->id = $user->id;
// $updateOrder->payment_status = $json->transaction_status;

// $updateUser = $DB->update_record('enrol_paypal', $updateOrder);

// echo 'Success';

$transaction = $json->transaction_status;
$type = $json->payment_type;
$order_id = $json->order_id;
$fraud = $json->fraud_status;
$course_id = $json->custom_field1;
$role_id = $json->custom_field2;
$user_id = $json->custom_field3;

if($signatureKey == $json->signature_key){

    if ($transaction == 'capture') {
        // For credit card transaction, we need to check whether transaction is challenge by FDS or not
        if ($type == 'credit_card'){
            if($fraud == 'challenge'){
            // TODO set payment status in merchant's database to 'Challenge by FDS'
            // TODO merchant should decide whether this transaction is authorized or not in MAP
            $message =  "Transaction order_id: " . $order_id ." is challenged by FDS";
            }
            else {
            $message =  "Transaction order_id: " . $order_id ." successfully captured using " . $type;
            }
            }
        }
        else if ($transaction == 'settlement'){
        // TODO set payment status in merchant's database to 'Settlement'
            $transaction = $DB->start_delegated_transaction(); // Rollback all enrolment if an error occurs
            // // (except if the DB doesn't support it).

            // // Retrieve the manual enrolment plugin.
             $enrol = enrol_get_plugin('paypal');
            if (empty($enrol)) {
                throw new moodle_exception('manualpluginnotinstalled', 'enrol_paypal');
            }
            // foreach ($enrolments as $enrolment) {
                // Ensure the current user is allowed to run this function in the enrolment context.
                $context = context_course::instance( $course_id , IGNORE_MISSING);
                // self::validate_context($context);

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

                // // Check manual enrolment plugin instance is enabled/exist.
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

                // // Check that the plugin accept enrolment (it should always the case, it's hard coded in the plugin).
                if (!$enrol->allow_enrol($instance)) {
                    $errorparams = new stdClass();
                    $errorparams->roleid =  $role_id ;
                    $errorparams->courseid =  $course_id ;
                    $errorparams->userid =  $user_id ;
                    throw new moodle_exception('wscannotenrol', 'enrol_paypal', '', $errorparams);
                }

                // // Finally proceed the enrolment.
                // $enrolments['timestart'] = isset($enrolments[0]['timestart']) ? $enrolments[0]['timestart'] : 0;
                // $enrolments['timeend'] = isset($enrolments[0]['timeend']) ? $enrolments[0]['timeend'] : 0;
                $suspend = 0;
                $enrolment['status'] = $suspend != 0 ?
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
            $ue = new stdClass();
            $ue->enrolid      = 12;
            $ue->status       = 0;
            $ue->userid       = $user_id;
            $ue->timestart    = 0;
            $ue->timeend      = 0;
            $ue->modifierid   = $user_id;
            $ue->timecreated  = time();
            $ue->timemodified = $ue->timecreated;
            $ue->id = $DB->insert_record('user_enrolments', $ue);
            // $transaction->allow_commit();
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

    }else {
        $message =  "Signature Key not falid";
    }
   

    $resultcourses[] = array('status' => 200, 'message' =>   $message );
    var_dump($resultcourses);

















// var_dump($data->payment_status); 


// if($transaction == 'capture' OR $transaction == 'settlement') {
//     echo 'transaksi sukses';
// }



// require_once(dirname(__FILE__) . '/Midtrans.php');

// \Midtrans\Config::$isProduction = false;
// \Midtrans\Config::$serverKey = 'SB-Mid-server-bf84DGxlK8m7CxP3WEYRziGs';
// $notif = new \Midtrans\Notification();

// $transaction = $notif->transaction_status;
// $type = $notif->payment_type;
// $order_id = $notif->order_id;
// $fraud = $notif->fraud_status;

// var_dump($transaction);


// if ($transaction == 'capture') {
//     // For credit card transaction, we need to check whether transaction is challenge by FDS or not
//     if ($type == 'credit_card') {
//         if ($fraud == 'challenge') {
//             // TODO set payment status in merchant's database to 'Challenge by FDS'
//             // TODO merchant should decide whether this transaction is authorized or not in MAP
//             echo "Transaction order_id: " . $order_id . " is challenged by FDS";
//         } else {
//             // TODO set payment status in merchant's database to 'Success'
//             echo "Transaction order_id: " . $order_id . " successfully captured using " . $type;
//         }
//     }
// } else if ($transaction == 'settlement') {
//     // TODO set payment status in merchant's database to 'Settlement'
//     echo "Transaction order_id: " . $order_id . " successfully transfered using " . $type;
// } else if ($transaction == 'pending') {
//     // TODO set payment status in merchant's database to 'Pending'
//     echo "Waiting customer to finish transaction order_id: " . $order_id . " using " . $type;
// } else if ($transaction == 'deny') {
//     // TODO set payment status in merchant's database to 'Denied'
//     echo "Payment using " . $type . " for transaction order_id: " . $order_id . " is denied.";
// } else if ($transaction == 'expire') {
//     // TODO set payment status in merchant's database to 'expire'
//     echo "Payment using " . $type . " for transaction order_id: " . $order_id . " is expired.";
// } else if ($transaction == 'cancel') {
//     // TODO set payment status in merchant's database to 'Denied'
//     echo "Payment using " . $type . " for transaction order_id: " . $order_id . " is canceled.";
// }

// OLD

// require_once('../config.php');

// get data dari response yang dikirim dari midtrans
// $name = $_POST['json'];
// $response = json_decode($name);
// var_dump($_POST);

// pilih transaction_status, order_id, type, transaction_id, gross_amount
// $transaction = $response->transaction_status;
// $order_id = $response->order_id;
// $type = $response->payment_type;
// $transaction_id = $response->transaction_id;
// $gross_amount = $response->gross_amount;

// simpan ke table yang ada di database moodle
// $data = new stdClass();
// $data->businness = 'Bahaso';
// $data->receiver_email = 'myunusrukmana@gmail.com';
// $data->receiver_id = 1;
// $data->item_name = 'General English';
// $data->courseid = 1;
// $data->userid = 1;
// $data->instanceid = 1;
// $data->memo = 'this is memo';
// $data->tax = $gross_amount;
// $data->payment_status = $transaction;
// $data->txn_id = $order_id;
// $data->payment_type = $type;

// var_dump($data);

// $DB->insert_record('enrol_midtrans', $data);  

// ?>