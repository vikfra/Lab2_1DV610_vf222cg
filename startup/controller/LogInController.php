<?php
    namespace controller;

    class LogInController {
        private $view;
        private $layoutView;
        private $manager;

        public function __construct($view, $layoutView, \model\LogInManager $manager) {
            $this->view = $view;
            $this->layoutView = $layoutView;
            $this->manager = $manager;
        }
        public function initializeLogIn () {
            $username = $this->view->getRequestUserName();
            $password = $this->view->getRequestPassWord();
            
            if ($this->view->userHasLogIn()) {
                $validLogIn = $this->manager->validateLogIn($username, $password);
                $authenticatedUser = $this->manager->authenticateLogIn($username, $password);
            }
        }
    }