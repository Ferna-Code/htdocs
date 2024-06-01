<?php
require_once __DIR__ . '/../../Models/experciencialaboral_model.php';

interface experciencialaboralDao{

    function getdata(experciencialaboral_model $admin); 
}