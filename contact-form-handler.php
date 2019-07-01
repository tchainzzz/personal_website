<?php
    if(isset($_POST['email']) && isset($_POST['name'])) {
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $email = $_POST['email'];
        mail("tchang97@stanford.edu", "$subject", "$message", "From:", "$email");
        echo "Thank you for your comments!";
    } else {
        echo "Something went wrong. Try filling in the form again. Perhaps you missed a field?";
    }
?>