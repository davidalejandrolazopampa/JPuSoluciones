-- Crear la base de datos
CREATE DATABASE EmpleadosDB;

-- Usar la base de datos
USE EmpleadosDB;

-- Crear la tabla Empleados
CREATE TABLE Empleados (
    EmpleadoID INT AUTO_INCREMENT PRIMARY KEY,
    Apellidos VARCHAR(255),
    Nombres VARCHAR(255),
    Fecha_Nacimiento DATE,
    Edad CHAR(3),
    Ciudad_Nacimiento VARCHAR(255),
    Sexo CHAR(1),
    Estado_Civil VARCHAR(50),
    DNI_CE VARCHAR(50),
    Numero_Hijos INT,
    Discapacidad BOOLEAN,
    Tipo_Discapacidad VARCHAR(255),
    Observaciones TEXT
);

-- Crear la tabla Direcciones
CREATE TABLE Direcciones (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    EmpleadoID INT,
    Dirección TEXT,
    Distrito VARCHAR(255),
    Provincia VARCHAR(255),
    Departamento VARCHAR(255),
    Teléfono_Casa VARCHAR(50),
    Celular VARCHAR(50),
    E_mail VARCHAR(255),
    Contacto_Emergencia INT,
    FOREIGN KEY (EmpleadoID) REFERENCES Empleados(ID),
    FOREIGN KEY (Contacto_Emergencia) REFERENCES Contactos(Contacto_Emergencia)
);

-- Crear la tabla Familiares
CREATE TABLE Familiares (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    EmpleadoID INT,
    Parentesco VARCHAR(255),
    Nombre_Apellidos VARCHAR(255),
    Fecha_Nacimiento DATE,
    Edad CHAR(3),
    Sexo CHAR(1),
    Ocupación VARCHAR(255),
    Depende_Economicamente BOOLEAN,
    FOREIGN KEY (EmpleadoID) REFERENCES Empleados(ID)
);

-- Crear la tabla Formación Académica
CREATE TABLE Formacion_Academica (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    EmpleadoID INT,
    Secundaria VARCHAR(255),
    Tecnico VARCHAR(255),
    Universitario VARCHAR(255),
    Postgrado VARCHAR(255),
    ID_idioma INT,
    ID_Office INT,
    FOREIGN KEY (EmpleadoID) REFERENCES Empleados(ID),
    FOREIGN KEY (ID_idioma) REFERENCES Idioma(ID_idioma),
    FOREIGN KEY (ID_Office) REFERENCES Office(ID_Office)
);

-- Crear la tabla Experiencia Profesional
CREATE TABLE Experiencia_Profesional (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    EmpleadoID INT,
    Empresa VARCHAR(255),
    Cargo VARCHAR(255),
    Fecha_Ingreso DATE,
    Fecha_Cese DATE,
    Remuneración DECIMAL(10, 2),
    Jefe_Inmediato VARCHAR(255),
    Motivo_Desvinculación TEXT,
    Solicitar_Info_Empleador BOOLEAN,
    FOREIGN KEY (EmpleadoID) REFERENCES Empleados(ID)
);

-- Crear la tabla Referencias Laborales
CREATE TABLE Referencias_Laborales (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    EmpleadoID INT,
    Nombre VARCHAR(255),
    Parentesco VARCHAR(255),
    Teléfono VARCHAR(50),
    FOREIGN KEY (EmpleadoID) REFERENCES Empleados(ID)
);

-- Crear la tabla Otros Datos
CREATE TABLE Otros_Datos (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    EmpleadoID INT,
    Fuente_Oferta VARCHAR(255),
    FOREIGN KEY (EmpleadoID) REFERENCES Empleados(ID)
);

-- Crear la tabla Contactos
CREATE TABLE Contactos (
    Contacto_Emergencia INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(255),
    Parentesco VARCHAR(255),
    Teléfono VARCHAR(50)
);

-- Crear la tabla Idioma
CREATE TABLE Idioma (
    ID_idioma INT AUTO_INCREMENT PRIMARY KEY,
    Nivel VARCHAR(50)
);

-- Crear la tabla Office
CREATE TABLE Office (
    ID_Office INT AUTO_INCREMENT PRIMARY KEY,
    Nivel VARCHAR(50)
);
