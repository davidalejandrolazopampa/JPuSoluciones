# Modelo Relacional para el Registro de Información del Personal

## Tablas Necesarias

### Empleados
- **ID** (INT, PK)
- **Apellidos** (VARCHAR)
- **Nombres** (VARCHAR)
- **Fecha_Nacimiento** (DATE)
- **Edad** (CHAR)
- **Ciudad_Nacimiento** (VARCHAR)
- **Sexo** (CHAR)
- **Estado_Civil** (VARCHAR)
- **DNI_CE** (VARCHAR)
- **Numero_Hijos** (INT)
- **Discapacidad** (BOOLEAN)
- **Tipo_Discapacidad** (VARCHAR)
- **Observaciones** (TEXT)

### Direcciones
- **ID** (INT, PK)
- **EmpleadoID** (INT, FK)
- **Dirección** (TEXT)
- **Distrito** (VARCHAR)
- **Provincia** (VARCHAR)
- **Departamento** (VARCHAR)
- **Teléfono_Casa** (VARCHAR)
- **Celular** (VARCHAR)
- **E_mail** (VARCHAR)
- **Contacto_Emergencia** (INT, FK)

### Familiares
- **ID** (INT, PK)
- **EmpleadoID** (INT, FK)
- **Parentesco** (VARCHAR)
- **Nombre_Apellidos** (VARCHAR)
- **Fecha_Nacimiento** (DATE)
- **Edad** (CHAR)
- **Sexo** (CHAR)
- **Ocupación** (VARCHAR)
- **Depende_Economicamente** (BOOLEAN)

### Formación Académica
- **ID** (INT, PK)
- **EmpleadoID** (INT, FK)
- **Secundaria** (VARCHAR)
- **Tecnico** (VARCHAR)
- **Universitario** (VARCHAR)
- **Postgrado** (VARCHAR)
- **ID_idioma** (INT, FK)
- **ID_Office** (INT, FK)

### Experiencia Profesional
- **ID** (INT, PK)
- **EmpleadoID** (INT, FK)
- **Empresa** (VARCHAR)
- **Cargo** (VARCHAR)
- **Fecha_Ingreso** (DATE)
- **Fecha_Cese** (DATE)
- **Remuneración** (DECIMAL)
- **Jefe_Inmediato** (VARCHAR)
- **Motivo_Desvinculación** (TEXT)
- **Solicitar_Info_Empleador** (BOOLEAN)

### Referencias Laborales
- **ID** (INT, PK)
- **EmpleadoID** (INT, FK)
- **Nombre** (VARCHAR)
- **Parentesco** (VARCHAR)
- **Teléfono** (VARCHAR)

### Otros Datos
- **ID** (INT, PK)
- **EmpleadoID** (INT, FK)
- **Fuente_Oferta** (VARCHAR)

### Contactos
- **Contacto_Emergencia** (INT, PK)
- **Nombre** (VARCHAR)
- **Parentesco** (VARCHAR)
- **Teléfono** (VARCHAR)

### Idioma
- **ID_idioma** (INT, PK)
- **Nivel** (VARCHAR)

### Office
- **ID_Office** (INT, PK)
- **Nivel** (VARCHAR)

## Modelo Relacional grafico
Archivo draw.io