<?php
    require 'formdata_handler.php';

    $retrieved_data = new SetDataReady($_POST['lastname'], $_POST['firstname'], $_POST['gender'], $_POST['email'], $_POST['subject'], $_POST['msg']);
    //verify if data are ok
    $lname_data = $retrieved_data -> verifyLastName();
    $fname_data = $retrieved_data -> verifyFirstName();
    $gender_data = $retrieved_data -> verifyGender();
    $email_data = $retrieved_data -> verifyEmailAddress();
    $subject_data = $retrieved_data -> verifySubject();
    $msg_data = $retrieved_data -> verifyMsg();
    //prepare data to be sent
    $lname_data_ready = $retrieved_data -> lastNameReady($lname_data);
    $fname_data_ready = $retrieved_data -> firstNameReady($fname_data);
    $gender_data_ready = $retrieved_data -> genderReady($gender_data);
    $email_data_ready = $retrieved_data -> emailAddressReady($email_data);
    $subject_data_ready = $retrieved_data -> subjectReady($subject_data);
    $msg_data_ready = $retrieved_data -> msgReady($msg_data);

    // echo $lname_data_ready . '<br>' . $fname_data_ready . '<br>' . $gender_data_ready . '<br>' . $email_data_ready . '<br>' . $subject_data_ready . '<br>' . $msg_data_ready;
    // var_dump($lname_data_ready);
    
    // check if every data are ok, if not -> form is to be completed again
    if ($lname_data_ready == null or $fname_data_ready == null or $gender_data_ready == null or $email_data_ready == null or $subject_data_ready == null or $msg_data_ready == null) {
        echo 'Something went wrong, please retry';
        // afficher header + footer + msg erreur + bouton vers index.html
        header('location: ');
    } else {
        header('location: ../views/send_mail_view.php');
    }
?>