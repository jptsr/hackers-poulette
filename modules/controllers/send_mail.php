<?php
    require 'mail_or_error.php';

    $retrieved_data = new SetDataReady($_POST['lastname'], $_POST['firstname'], $_POST['gender'], $_POST['email'], $_POST['subject'], $_POST['msg']);
    
    // handle data sanitization + validation
    $lname_data = $retrieved_data -> verifyLastName();
    // $fname_data = $retrieved_data -> verifyFirstName();
    // $gender_data = $retrieved_data -> verifyGender();
    // $email_data = $retrieved_data -> verifyEmailAddress();
    // $subject_data = $retrieved_data -> verifySubject();
    // $msg_data = $retrieved_data -> verifyMsg();
    
    // // verify if each data is or isn't correct
    echo $lname_data_ready = $retrieved_data -> lastNameReady($lname_data);
    // $fname_data_ready = $retrieved_data -> firstNameReady($fname_data);
    // $gender_data_ready = $retrieved_data -> genderReady($gender_data);
    // $email_data_ready = $retrieved_data -> emailAddressReady($email_data);
    // $subject_data_ready = $retrieved_data -> subjectReady($subject_data);
    // $msg_data_ready = $retrieved_data -> msgReady($msg_data);
    
    // verify that all data are correct (then the mail is sent), if one of them is not, the form is to be completed again 
    // if ($lname_data_ready == null or $fname_data_ready == null or $gender_data_ready == null or $email_data_ready == null or $subject_data_ready == null or $msg_data_ready == null) {
    //     // quel input est mauvais ?
    //     header('location: ../views/dataform_error_view.php');
    // } else {
    //     header('location: ../views/send_mail_view.php');
    // }
    // $mail_or_error = new SendMailOrError($_POST['lastname'], $_POST['firstname'], $_POST['gender'], $_POST['email'], $_POST['subject'], $_POST['msg']);
    // $send_mail = $mail_or_error -> sendMailOrNot($lname_data_ready, $fname_data_ready, $gender_data_ready, $email_data_ready, $subject_data_ready, $msg_data_ready);

    $lname = new Lastname($_POST['lastname']);
    $lname -> lastNameReady();
    print_r($lname);
    echo gettype($lname);
?>