<?php
    // verify that all data are correct (then the mail is sent), if one of them is not, the form is to be completed again 
    function sendMailOrNot ($lastname_ready, $firstname_ready, $gender_ready, $email_ready, $subject_ready, $msg_ready) 
    {
        if ($lastname_ready == null or $firstname_ready == null or $gender_ready == null or $email_ready == null or $subject_ready == null or $msg_ready == null) {
            header('location: ../views/dataform_error_view.php');
        } else {
            header('location: ../views/send_mail_view.php');
        }
    }

    // function returnVar ($var)
    // {
    //     return $var;
    // }

    // function lastNameErr ($lastname)
    // {
    //     $error_msg = (isset($lastname)) ? ($error_msg = ($lastname == null) ? 'Invalid last name': '') : 'Empty last name';
    //     return $error_msg;
    // }
?>