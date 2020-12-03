<?php

    class User{
        private $email
        private $username;
        private $password;
        
        function __construct($email, $username, $password)
        {
            $this->email = $email;
            $this->username = $username;
            $this->password = $password;            
        }
       
        function setEmail($email) {
            $this->email = $email;
        }

        function setUserName($username) {
            $this->username = $username;
        }

        function setPassword($password) {
            $this->password = $password;
        }

        function getEmail() {
            return $this->email;
        }
        
        function getUserName() {
            return $this->username;
        }

        function getPassword() {
            return $this->password;
        }
    }

?>
