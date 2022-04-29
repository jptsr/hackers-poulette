<?php
    require 'formdata_handler.php';

    class SendMailOrError extends SetDataReady {
        // verify that all data are correct (then the mail is sent), if one of them is not, the form is to be completed again 
        function sendMailOrNot ($lastname_ready, $firstname_ready, $gender_ready, $email_ready, $subject_ready, $msg_ready) {
            if ($lastname_ready == null or $firstname_ready == null or $gender_ready == null or $email_ready == null or $subject_ready == null or $msg_ready == null) {
                $err_lname = (isset($_POST['lastname'])) ? ($err_lname = ($lastname_ready == null) ? 'Invalid last name': '') : 'Empty last name';
                $err_fname = (isset($_POST['firstname'])) ? ($err_fname = ($firstname_ready == null) ? 'Invalid first name': '') : 'Empty first name';
                $err_gender = (isset($_POST['gender'])) ? ($err_gender = ($gender_ready == null) ? 'Invalid gender': '') : 'Empty gender';
                $err_email = (isset($_POST['email'])) ? ($err_email = ($email_ready == null) ? 'Invalid email address': '') : 'Empty email address';
                $err_subject = (isset($_POST['subject'])) ? ($err_subject = ($subject_ready == null) ? 'Invalid subject': '') : 'Empty subject';
                $err_msg = (isset($_POST['msg'])) ? ($err_msg = ($msg_ready == null) ? 'Invalid message': '') : 'Empty message';
                header('location: ../views/dataform_error_view.php');
            } else {
                header('location: ../views/send_mail_view.php');
            }
        }
    }
?>