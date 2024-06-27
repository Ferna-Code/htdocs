<?php

class PruebaController{
    public function index()
    {
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Supervisor/complementos/graficos2.php';
        include VIEWS_PATH . 'Layout/footer.php';
    }
}