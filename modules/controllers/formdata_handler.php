<?php
    class VerifyEachData {
        public $lastname;
        public $firstname;
        public $gender;
        public $email;
        public $subject;
        public $msg;

        public function __construct($lastname, $firstname, $gender, $email, $subject, $msg) {
            $this -> lastname = $lastname;
            $this -> firstname = $firstname;
            $this -> gender = $gender;
            $this -> email = $email;
            $this -> subject = $subject;
            $this -> msg = $msg;
        }

        function verifyLastName () {
            if (isset($this -> lastname)) {
                $regex_digit = '/\d+/';
                $regex_special_char = '/[#$%&*()+=\-\[\];,.\/{}|":<>?~\\\\]/';
                $nodigit = ( preg_match($regex_digit, $this -> lastname) ) ? false : true;
                $nochar = ( preg_match($regex_special_char, $this -> lastname) ) ? false : true;
                if ($nodigit == true and $nochar == true) {
                    $verified_lname =  $this -> lastname;
                    return $verified_lname;
                } else {
                    $err_lname = 'Invalid last name';
                    return $err_lname;
                }
            } else {
                return $err_lname = 'No last name';
            }
        }

        function verifyFirstName () {
            if (isset($this -> firstname)) {
                $regex_digit = '/\d+/';
                $regex_special_char = '/[#$%&*()+=\-\[\];,.\/{}|":<>?~\\\\]/';
                $nodigit = (preg_match($regex_digit, $this -> firstname)) ? false : true;
                $nochar = ( preg_match($regex_special_char, $this -> firstname) ) ? false : true;
                if ($nodigit == true and $nochar == true) {
                    $verified_fname =  $this -> firstname;
                    return $verified_fname;
                } else {
                    $err_fname = 'Invalid first name';
                    return $err_fname;
                }
            } else {
                return $err_fname = 'No first name';
            }
        }

        function verifyGender () {
            if (isset($this -> gender)) {
                $verified_gender = $this -> gender;
                if ($verified_gender == 'woman' or $verified_gender == 'man' or $verified_gender == 'other') {
                    return $verified_gender;
                } else {
                    $err_gender = 'No gender selected';
                    return $err_gender;
                }
            }
        }

        function verifyEmailAddress () {
            if (isset($this -> email)) {
                $sanitized_email = filter_var($this -> email, FILTER_SANITIZE_EMAIL);
                if (filter_var($sanitized_email, FILTER_VALIDATE_EMAIL)) {
                    $verified_email = filter_var($sanitized_email, FILTER_VALIDATE_EMAIL);
                    return $verified_email;
                } else {
                    $err_email = 'Invalid email address';
                    return $err_email;
                }
            }
        }

        function verifySubject () {
            if (isset($this -> subject)) {
                $verified_subject = $this -> subject;
                if ($verified_subject == 'buy' or $verified_subject == 'problem' or $verified_subject == 'other') {
                    return $verified_subject;
                } else {
                    $err_subject = 'No subject selected';
                    return $err_subject;
                }
            }
        }

        function verifyMsg () {
            if (isset($this -> msg)) {
                if (!(ctype_space($this -> msg))) {
                    $verified_msg = $this -> msg;
                    return $verified_msg;
                } else {
                    $err_msg = 'Please write something';
                    return $err_msg;
                }
            } else {
                return $err_msg = 'No written message';
            }
        }
    }

    class SetDataReady extends VerifyEachData {
        function lastNameReady ($lastname_data) {
            if ($lastname_data  !== 'Invalid last name' AND $lastname_data !== 'No last name') {
                return $lastname_data;
            } else {
                return $lastname_data = null;
            }
        }

        function firstNameReady ($firstname_data) {
            if ($firstname_data !== 'Invalid first name' AND $firstname_data  !== 'No first name') {
                return $firstname_data;
            } else {
                return null;
            }
        }

        function genderReady ($gender_data) {
            if ($gender_data !== 'No gender selected') {
                return $gender_data;
            } else {
                return null;
            }
        }

        function emailAddressReady ($email_data) {
            if ($email_data !== 'Invalid email address') {
                return $email_data;
            } else {
                return null;
            }
        }

        function subjectReady ($subject_data) {
            if ($subject_data !== 'No subject selected') {
                return $subject_data;
            } else {
                return null;
            }
        }

        function msgReady ($msg_data) {
            if ($msg_data !== 'No written message' AND $msg_data !== 'Please write something') {
                return $msg_data;
            } else {
                return null;
            }
        }
    }

    class Lastname {
        public $lastname;

        public function __construct($lastname) {
            $this -> lastname = $lastname;
        }

        private function verifyLastName () :string {
            if (isset($this -> lastname)) {
                $regex_digit = '/\d+/';
                $regex_special_char = '/[#$%&*()+=\-\[\];,.\/{}|":<>?~\\\\]/';
                $nodigit = ( preg_match($regex_digit, $this -> lastname) ) ? false : true;
                $nochar = ( preg_match($regex_special_char, $this -> lastname) ) ? false : true;
                if ($nodigit == true and $nochar == true) {
                    return $this -> lastname;
                } else {
                    $err_lname = 'Invalid last name';
                    return $err_lname;
                }
            } else {
                return $err_lname = 'No last name';
            }
        }

        public function lastNameReady () :string {
        $verified_lastname = $this -> verifyLastName();
            if ($verified_lastname  !== 'Invalid last name' AND $verified_lastname !== 'No last name') {
                return (string) $verified_lastname;
            } else {
                $verified_lastname = null;
                return  (string) $verified_lastname;
            }
        }

        public function __toString()
        {
            $lastname_tostring = $this -> lastNameReady();
            return (string) $lastname_tostring;
        }
    }
?>