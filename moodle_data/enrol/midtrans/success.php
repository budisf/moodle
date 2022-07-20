<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
</head>
<script type="text/javascript">
    var count = 100; // Timer
    var redirect = "https://30ee-103-121-18-25.ap.ngrok.io/course/view.php?id=2"; // Target URL (Change to your URL)

    function countDown() {
        var timer = document.getElementById("timer"); // Timer ID
        if (count > 0) {
            count--;
            timer.innerHTML = "This page will redirect in " + count + " seconds."; // Timer Message
            setTimeout("countDown()", 1000);
        } else {
            window.location.href = redirect;
        }
    }
</script>
<style>
    body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
    }

    h1 {
        color: #88B04B;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-weight: 900;
        font-size: 40px;
        margin-bottom: 10px;
    }

    p {
        color: #404F5E;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-size: 20px;
        margin: 0;
    }

    i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left: -15px;
    }

    .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
    }

    /* < !-- HTML !--><button class="button-3"role="button">Button 3</button> */

    /* CSS */
    .button-3 {
        appearance: none;
        background-color: #2ea44f;
        border: 1px solid rgba(27, 31, 35, .15);
        border-radius: 6px;
        box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
        box-sizing: border-box;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        font-family: -apple-system, system-ui, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
        font-size: 14px;
        font-weight: 600;
        line-height: 20px;
        padding: 6px 16px;
        position: relative;
        text-align: center;
        text-decoration: none;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        vertical-align: middle;
        white-space: nowrap;
    }

    .button-3:focus:not(:focus-visible):not(.focus-visible) {
        box-shadow: none;
        outline: none;
    }

    .button-3:hover {
        background-color: #2c974b;
    }

    .button-3:focus {
        box-shadow: rgba(46, 164, 79, .4) 0 0 0 3px;
        outline: none;
    }

    .button-3:disabled {
        background-color: #94d3a2;
        border-color: rgba(27, 31, 35, .1);
        color: rgba(255, 255, 255, .8);
        cursor: default;
    }

    .button-3:active {
        background-color: #298e46;
        box-shadow: rgba(20, 70, 32, .2) 0 1px 0 inset;
    }

    .footer {
        margin-top: 10px;
    }
</style>

<body>
    <div class="card">
        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
            <i class="checkmark">✓</i>
        </div>
        <h1>Success</h1>
        <p>We received your purchase request!
            <br /> we'll be in touch shortly!
        </p>
        <div class="footer animated slow fadeInUp">
            <p id="timer">
                <script type="text/javascript">
                    countDown();
                </script>
            </p>
        </div>
    </div>
</body>

<body>
    <?php

    require_once('../../config.php');

    // get data dari response yang dikirim dari midtrans
    $name = $_POST['json'];
    $response = json_decode($name);
    // var_dump($response);

    // pilih transaction_status, order_id, type, transaction_id, gross_amount
    $transaction = $response->transaction_status;
    $order_id = $response->order_id;
    $type = $response->payment_type;
    $transaction_id = $response->transaction_id;
    $gross_amount = $response->gross_amount;

    // simpan ke table yang ada di database moodle
    $data = new stdClass();
    $data->businness = 'Bahaso';
    $data->receiver_email = 'myunusrukmana@gmail.com';
    $data->receiver_id = 1;
    $data->item_name = 'General English';
    $data->courseid = 1;
    $data->userid = 1;
    $data->instanceid = 1;
    $data->memo = 'this is memo';
    $data->tax = $gross_amount;
    $data->payment_status = $transaction;
    $data->txn_id = $order_id;
    $data->payment_type = $type;

    // var_dump($data);

    $DB->insert_record('enrol_midtrans', $data);

    ?>
</body>

</html>