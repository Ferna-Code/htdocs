<?php

class empresacontroller{
    function index(){
        include VIEWS_PATH . 'Layout/nav.php';
        include VIEWS_PATH . 'empresas/index.php';
        include VIEWS_PATH . 'Layout/footer.php';

    }

}