<?php
require_once __DIR__ . '/../../Models/experiencialaboral_model.php';

interface experiencialaboralDao{

    function getdata(experiencialaboral_model $admin); 
}