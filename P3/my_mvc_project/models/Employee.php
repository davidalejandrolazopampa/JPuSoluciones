<?php
// models/Employee.php

class Employee {
    private $conn;
    private $table_name = "Empleados";

    public $ID;
    public $Apellidos;
    public $Nombres;
    public $Fecha_Nacimiento;
    public $Edad;
    public $Ciudad_Nacimiento;
    public $Sexo;
    public $Estado_Civil;
    public $DNI_CE;
    public $Numero_Hijos;
    public $Discapacidad;
    public $Tipo_Discapacidad;
    public $Observaciones;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " 
                  SET Apellidos=:Apellidos, Nombres=:Nombres, Fecha_Nacimiento=:Fecha_Nacimiento, Edad=:Edad, 
                      Ciudad_Nacimiento=:Ciudad_Nacimiento, Sexo=:Sexo, Estado_Civil=:Estado_Civil, 
                      DNI_CE=:DNI_CE, Numero_Hijos=:Numero_Hijos, Discapacidad=:Discapacidad, 
                      Tipo_Discapacidad=:Tipo_Discapacidad, Observaciones=:Observaciones";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":Apellidos", $this->Apellidos);
        $stmt->bindParam(":Nombres", $this->Nombres);
        $stmt->bindParam(":Fecha_Nacimiento", $this->Fecha_Nacimiento);
        $stmt->bindParam(":Edad", $this->Edad);
        $stmt->bindParam(":Ciudad_Nacimiento", $this->Ciudad_Nacimiento);
        $stmt->bindParam(":Sexo", $this->Sexo);
        $stmt->bindParam(":Estado_Civil", $this->Estado_Civil);
        $stmt->bindParam(":DNI_CE", $this->DNI_CE);
        $stmt->bindParam(":Numero_Hijos", $this->Numero_Hijos);
        $stmt->bindParam(":Discapacidad", $this->Discapacidad);
        $stmt->bindParam(":Tipo_Discapacidad", $this->Tipo_Discapacidad);
        $stmt->bindParam(":Observaciones", $this->Observaciones);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>
