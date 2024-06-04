<?php
// controllers/EmployeeController.php

require_once 'config/database.php';
require_once 'models/Employee.php';

class EmployeeController {
    private $db;
    private $employee;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->employee = new Employee($this->db);
    }

    public function create() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->employee->Apellidos = htmlspecialchars(strip_tags($_POST['Apellidos']));
            $this->employee->Nombres = htmlspecialchars(strip_tags($_POST['Nombres']));
            $this->employee->Fecha_Nacimiento = htmlspecialchars(strip_tags($_POST['Fecha_Nacimiento']));
            $this->employee->Edad = htmlspecialchars(strip_tags($_POST['Edad']));
            $this->employee->Ciudad_Nacimiento = htmlspecialchars(strip_tags($_POST['Ciudad_Nacimiento']));
            $this->employee->Sexo = htmlspecialchars(strip_tags($_POST['Sexo']));
            $this->employee->Estado_Civil = htmlspecialchars(strip_tags($_POST['Estado_Civil']));
            $this->employee->DNI_CE = htmlspecialchars(strip_tags($_POST['DNI_CE']));
            $this->employee->Numero_Hijos = htmlspecialchars(strip_tags($_POST['Numero_Hijos']));
            $this->employee->Discapacidad = htmlspecialchars(strip_tags($_POST['Discapacidad']));
            $this->employee->Tipo_Discapacidad = htmlspecialchars(strip_tags($_POST['Tipo_Discapacidad']));
            $this->employee->Observaciones = htmlspecialchars(strip_tags($_POST['Observaciones']));

            if ($this->employee->create()) {
                echo "Employee was created.";
            } else {
                echo "Unable to create employee.";
            }
        }
    }
}
?>
