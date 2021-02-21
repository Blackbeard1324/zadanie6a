<?php


require_once 'init.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch ($action){
    default:
        include_once 'app/controllers/CalcCtrl.class.php';
        $ctrl = new CalcCtrl();
        $ctrl->generateView();
    break;

    case 'calcCompute' :
        include_once 'app/controllers/CalcCtrl.class.php';
        $ctrl = new CalcCtrl();
        $ctrl->process();
    break;
}