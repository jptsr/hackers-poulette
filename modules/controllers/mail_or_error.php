<?php
    require 'formdata_handler.php';
    require 'functions.php';

    $lname = new NameData($_POST['lastname']);
    $lname_ok = $lname->nameReady();
    $err_lname = $lname->errorMsgLast();

    $fname = new NameData($_POST['firstname']);
    $fname_ok = $fname->nameReady();
    $err_fname = $fname->errorMsgFirst();

    $gender = new Gender($_POST['gender']);
    $gender_ok = $gender->genderReady();
    $err_gender = $gender->errorMsg();

    $email = new emailAddress($_POST['email']);
    $email_ok = $email->emailAddressReady();
    $err_email = $email->errorMsg();

    $subject = new Subject($_POST['subject']);
    $subject_ok = $subject->subjectReady();
    $err_subject = $subject->errorMsg();
    
    $msg = new Message($_POST['msg']);
    $msg_ok = $msg->msgReady();
    $err_msg = $msg->errorMsg();

    session_start();
    // stock sender data
    $_SESSION['lastname'] = $lname_ok;
    $_SESSION['firstname'] = $fname_ok;
    $_SESSION['gender'] = $gender_ok;
    $_SESSION['email'] = $email_ok;
    $_SESSION['subject'] = $subject_ok;
    $_SESSION['msg'] = $msg_ok;
    // error message
    $_SESSION['err_lname'] = $err_lname;
    $_SESSION['err_fname'] = $err_fname;
    $_SESSION['err_gender'] = $err_gender;
    $_SESSION['err_email'] = $err_email;
    $_SESSION['err_subject'] = $err_subject;
    $_SESSION['err_msg'] = $err_msg;

    sendMailOrNot($lname_ok, $fname_ok, $gender_ok, $email_ok, $subject_ok, $msg_ok);
?>

