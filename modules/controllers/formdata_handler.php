<?php
    class NameData 
    {
        public $name;

        public function __construct($name)
        {
            $this -> name = $name;
        }

        private function verifyName ()
        {
            if (isset($this -> name)) {
                $regex_digit = '/\d+/';
                $regex_special_char = '/[#$%&*()+=\-\[\];,.\/{}|":<>?~\\\\]/';
                $nodigit = ( preg_match($regex_digit, $this -> name) ) ? false : true;
                $nochar = ( preg_match($regex_special_char, $this -> name) ) ? false : true;
                if ($nodigit == true and $nochar == true) {
                    return $this -> name;
                } else {
                    $err_name = 'Invalid name';
                    return $err_name;
                }
            } else {
                return $err_name = 'No name';
            }
        }

        public function nameReady ()
        {
        $verified_name = $this -> verifyName();
            if ($verified_name  !== 'Invalid name' AND $verified_name !== 'No name') {
                return (string) $verified_name;
            } else {
                $verified_name = null;
                return $verified_name;
            }
        }

        public function errorMsgLast () 
        {
            $data = $this -> nameReady();
            
            return ($this -> name) ? ($error = ($data == null) ? 'Invalid last name' : '') : 'Empty last name';
        }

        public function errorMsgFirst () 
        {
            $data = $this -> nameReady();
            
            return ($this -> name) ? ($error = ($data == null) ? 'Invalid first name' : '') : 'Empty first name';
        }
    }

    class Gender
    {
        public $gender;
        
        public function __construct ($gender)
        {
            $this -> gender = $gender;
        }

        private function verifyGender ()
        {
            if (isset($this -> gender)) {
                if ($this -> gender == 'woman' or $this -> gender == 'man' or $this -> gender == 'other') {
                    return $this -> gender;
                } else {
                    $err_gender = 'No gender selected';
                    return $err_gender;
                }
            }
        }

        public function genderReady () 
        {
            $verified_gender = $this -> verifyGender();
            if ($verified_gender !== 'No gender selected') {
                return (string) $verified_gender;
            } else {
                $verified_gender = null;
                return $verified_gender;
            }
        }

        public function errorMsg () 
        {
            $data = $this -> genderReady ();
            return ($this -> gender) ? ($error = ($data == null) ? 'Invalid lastname' : '') : 'Empty lastname';
        }
    }

    class emailAddress 
    {
        public $email;

        public function __construct ($email)
        {
            $this -> email = $email;
        }

        private function verifyEmailAddress ()
        {
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

        public function emailAddressReady ()
        {
            $verified_email = $this -> verifyEmailAddress();
            if ($verified_email !== 'Invalid email address') {
                return (string) $verified_email;
            } else {
                $verified_email = null;
                return $verified_email;
            }
        }

        public function errorMsg () 
        {
            $data = $this -> emailAddressReady ();
            return ($this -> email) ? ($error = ($data == null) ? 'Invalid lastname' : '') : 'Empty lastname';
        }
    }

    class Subject
    {
        public $subject;

        public function __construct ($subject)
        {
            $this -> subject = $subject;
        }

        private function verifySubject ()
        {
            if (isset($this -> subject)) {
                if ($this -> subject == 'buy' or $this -> subject == 'problem' or $this -> subject == 'other') {
                    return $this -> subject;
                } else {
                    $err_subject = 'No subject selected';
                    return $err_subject;
                }
            }
        }
        
        public function subjectReady ()
        {
            $verified_subject = $this -> verifySubject();
            if ($verified_subject !== 'No subject selected') {
                return (string) $verified_subject;
            } else {
                $verified_subject = null;
                return $verified_subject;
            }
        }

        public function errorMsg () 
        {
            $data = $this -> subjectReady();
            return ($this -> subject) ? ($error = ($data == null) ? 'Invalid subject' : '') : 'Empty subject';
        }
    }

    class Message
    {
        public $msg;

        public function __construct ($msg)
        {
            $this -> msg = $msg;         
        }

        private function verifyMsg ()
        {
            if (isset($this -> msg)) {
                if (!(ctype_space($this -> msg))) {
                    return $this -> msg;
                } else {
                    $err_msg = 'Please write something';
                    return $err_msg;
                }
            } else {
                return $err_msg = 'No written message';
            }
        }

        public function msgReady ()
        {
            $verified_msg = $this -> verifyMsg();
            if ($verified_msg !== 'No written message' AND $verified_msg !== 'Please write something') {
                return (string) $verified_msg;
            } else {
                $verified_msg = null;
                return $verified_msg;
            }
        }

        public function errorMsg () 
        {
            $data = $this -> verifyMsg();
            return ($this -> msg) ? ($error = ($data == null) ? 'Invalid subject' : '') : 'Empty subject';
        }
    }
?>