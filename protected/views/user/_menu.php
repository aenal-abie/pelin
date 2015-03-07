<?php

$currController = Yii::app()->controller->id;
$currControllers = explode('/', $currController);
$currAction = Yii::app()->controller->action->id;
$currRoute = Yii::app()->controller->getRoute();
$currRoutes = explode('/', $currRoute);

$menu = array();
if (in_array($currAction, array('index', 'view', 'create', 'update', 'admin', 'calendar', 'import')))
    $menu[] = array('label' => 'Daftar User', 'url' => array('index'), 'icon' => 'fa fa-list-ol', 'active' => ($currAction == 'index') ? true : false);

if (in_array($currAction, array('index', 'view', 'create', 'update', 'admin', 'calendar', 'import')))
    $menu[] = array('label' => 'Buat User Baru', 'url' => array('create'), 'icon' => 'fa fa-qrcode', 'active' => ($currAction == 'create') ? true : false);

