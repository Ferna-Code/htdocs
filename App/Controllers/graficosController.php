<?php

class GraficosController{
    public function index()
    {
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'Supervisor/complementos/graficos.php';
        include VIEWS_PATH . 'Layout/footer.php';
    }
}