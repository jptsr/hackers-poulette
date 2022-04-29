<?php
    require 'formdata_handler.php';
    require 'functions.php';
    
    $data_sender = [];

    $lname = new NameData($_POST['lastname']);
    $data_sender['lastname'] = $lname->nameReady();
    $fname = new NameData($_POST['firstname']);
    $data_sender['firstname'] = $fname->nameReady();
    $gender = new Gender($_POST['gender']);
    $data_sender['gender'] = $gender->genderReady();
    $email = new emailAddress($_POST['email']);
    $data_sender['email'] = $email->emailAddressReady();
    $subject = new Subject($_POST['subject']);
    $data_sender['subject'] = $subject->subjectReady();
    $msg = new Message($_POST['msg']);
    $data_sender['msg'] = $msg->msgReady();

    session_start();
    $_SESSION['lastname'] = $data_sender['lastname'];
    $_SESSION['firstname'] = $data_sender['firstname'];
    $_SESSION['gender'] = $data_sender['gender'];
    $_SESSION['email'] = $data_sender['email'];
    $_SESSION['subject'] = $data_sender['subject'];
    $_SESSION['msg'] = $data_sender['msg'];

    sendMailOrNot($data_sender['lastname'], $data_sender['firstname'], $data_sender['gender'], $data_sender['email'], $data_sender['subject'], $data_sender['msg']);
?>

