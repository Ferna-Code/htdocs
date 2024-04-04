<?php

class SupervisorController{
    public function index(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Supervisor/index.php';
    }
}