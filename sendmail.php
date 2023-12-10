<?php
if ($_REQUEST['xAction'] == "sendMail") {
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <fp7456209@gmail.com>' . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();

    // $to = "derekfk399@gmail.com";
    $recipients = array(
        'fp7456209@gmail.com',
        'derekfk399@gmail.com',
        'm.faisalansari82@gmail.com',
        'dilshad222000@yahoo.com',
        'dilshad@valormech.in',
        'info@7techitservices.com',
        'riz1.ahamed@gmail.com',
    );
    $subject = $_REQUEST['subject'];
    $message = '
    <p><b>Your Name: </b>' . $_REQUEST['name'] . '</p>
    <p><b>Your Email: </b>' . $_REQUEST['email'] . '</p>
    <p><b>Message: </b>' . $_REQUEST['message'] . '</p>';

    $success = true;
    foreach ($recipients as $recipient) {
        if (!mail($recipient, $subject, $message, $headers)) {
            $success = false;
            break;
        }
    }
    if ($success) {
        echo "OK";
    } else {
        echo "ERR";
    }
} else {
    echo "ERR";
}

$recipients = array(
    'fp7456209@gmail.com',
    'derekfk399@gmail.com',
);

$success = true;
foreach ($recipients as $recipient) {
    if (!mail($recipient, $subject, $message, $headers)) {
        $success = false;
        break;
    }
}

if ($success) {
    echo "<script>Swal.fire({
        icon: 'success',
        text: 'Your Email Has Been Sent',
    })</script>";
} else {
    echo "<script>Swal.fire({
        icon: 'error',
        text: 'Sorry, Your Email Has Not Been Sent',
    })</script>";
}
