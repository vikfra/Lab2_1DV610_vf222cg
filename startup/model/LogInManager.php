<?php
    namespace model;

    class LogInManager {
        public $loggedIn = false;
        public $message;

        public function authenticateLogIn($username, $password) {
            if ($username == 'Admin' && $password == 'Password') {
                $this->loggedIn = true;
                $this->message = 'Welcome';
            } else if ($username && $password) {
                $this->message = 'Wrong name or password';
            }
        }

        public function validateLogIn ($username, $password) {
            if (empty($username)) {
                $this->message = 'Username is missing';
            } else if (empty($password)) {
                $this->message = 'Password is missing';
            } 
        }
    }