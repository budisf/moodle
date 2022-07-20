    <?php

    require_once('../../config.php');


    header("Content-Type:application/json"); 
    
    // get data from body
    $data = file_get_contents('php://input');

    // convert object data to json
    $json = json_decode($data);
    
    // collect all data
    $transaction_type = $json->transaction_type;
    $transaction_time = $json->transaction_time;
    $transaction_status = $json->transaction_status;
    $transaction_id = $json->transaction_id;
    $status_message = $json->status_message;
    $status_code = $json->status_code;
    $signature_key = $json->signature_key;
    $payment_type = $json->payment_type;
    $order_id = $json->order_id;
    $merchant_id = $json->merchant_id;
    $gross_amount = $json->gross_amount;
    $fraud_status = $json->fraud_status;
    $role_id = $json->custom_field1;
    $user_id = $json->custom_field2;
    $course_id = $json->custom_field3;

    // create signature key (Change to Your Server Key Midtrans)
    $signatureKey = hash('sha512', $order_id . $status_code . $gross_amount . 'YOUR_SERVER_KEY');

    // get data transaction from user
    $user = $DB->get_record('enrol_midtrans', ['txn_id' => $order_id]);
    // if($signatureKey !== $signature_key){
    //     echo 'Data tidak valid';
    // }

    // update status
    $updateOrder = new stdClass();
    $updateOrder->id = $user->id;
    $updateOrder->payment_status = $transaction_status;
    $updateOrder->option_name1 = $transaction_id; //transaction_id
    $updateOrder->option_selection1_x = $transaction_status;
    $updateOrder->option_name2 = $transaction_status;
    $updateOrder->option_selection2_x = $transaction_status;

    $updateUser = $DB->update_record('enrol_midtrans', $updateOrder);

    echo 'Success';

    // new experiment
    $ue = new stdClass();
    $ue->enrolid      = 12; // change to your enrolid
    $ue->status       = is_null($status) ? 0 : 1;
    $ue->userid       = $user_id;
    $ue->timestart    = 0;
    $ue->timeend      = 0;
    $ue->modifierid   = 3;
    $ue->timecreated  = time();
    $ue->timemodified = $ue->timecreated;
    $ue->id = $DB->insert_record('user_enrolments', $ue);

    $inserted = true;

    // ?>
