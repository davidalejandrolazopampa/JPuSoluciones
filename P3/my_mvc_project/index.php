<?php
// index.php

if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else {
    $controller = 'employee';
    $action = 'create';
}

require_once('controllers/EmployeeController.php');
$controllerInstance = new EmployeeController();

if ($controller == 'employee' && $action == 'create') {
    $controllerInstance->create();
    require_once('views/employee/create.php');
}
?>
