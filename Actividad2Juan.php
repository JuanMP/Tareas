<?php
/**
 *   ACTIVIDAD 2
 *   @author Juan Martinez Perez
 *   @version 1.0.9
 *   
 */


//VALIDACION DE DATOS
$valida = [
    'codigo' => '/^[A-Za-z]-\d{5}$/',
    'nombre' => '/^[A-Za-z]{3,20}$/',
    'precio' => '/^\d+(\.\d{1,2})?$/',
    'descripcion' => '/^[A-Za-z0-9\s]{50,}$/',
    'fabricante' => '/^[A-Za-z0-9\s]{10,20}$/',
    'fechaadquisicion' => '/^\d{4}-\d{2}-\d{2}$/' // Formato: YYYY-MM-DD
];


//VALIDAR SI SE HA ENVIADO EL FORMULARIO CORRECTAMENTE


if (isset($_POST['codigo'])) {                                                              //si el campo fue enviado entrará

    if (trim(!$_POST['codigo'])) {                                                           //si hay espacios entra e imprime
        echo "<br>El campo código no puede estar vacío";
    }else if(!preg_match($valida['codigo'], trim($_POST['codigo']))) {                     //si las expresiones no se cumplen entra
        echo "<br>El campo código debe contener una letra seguida de guión y 5 dígitos";
    }
}


if (isset($_POST['nombre'])) {

    if (trim(!$_POST['nombre'])) {
        echo "<br>El campo nombre no puede estar vacío";
    }else if(!preg_match($valida['nombre'], trim($_POST['nombre']))) {
        echo "<br>El campo nombre debe contener letras entre 3 y 20 carácteres";
    }
}


if (isset($_POST['precio'])) {

    if (trim(!$_POST['precio'])) {
        echo "<br>El campo precio no puede estar vacío";
    }else if(!preg_match($valida['precio'], trim($_POST['precio']))) {
        echo "<br>El campo precio debe contener decimales";
    }
}

if (isset($_POST['descripcion'])) {

    if (trim(!$_POST['descripcion'])) {
        echo "<br>El campo descripción no puede estar vacío";
    }else if(!preg_match($valida['descripcion'], trim($_POST['descripcion']))) {
        echo "<br>El campo descripción debe contener más de 50 carácteres";
    }
}

if (isset($_POST['fabricante'])) {

    if (trim(!$_POST['fabricante'])) {
        echo "<br>El campo fabricante no puede estar vacío";
    }else if(!preg_match($valida['fabricante'], trim($_POST['fabricante']))) {
        echo "<br>El campo fabricante debe contener entre 10 y 20 carácteres";
    }
}

if (isset($_POST['fechaadquisicion'])) {

    if (trim(!$_POST['fechaadquisicion'])) {
        echo "<br>El campo fecha no puede estar vacío";
    }else if(!preg_match($valida['fechaadquisicion'], trim($_POST['fechaadquisicion']))) {
        echo "<br>El campo fecha de adquisición debe ser de tipo date";
    }
}



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validando Información</title>
</head>
<body>
    <h4>UD3 - Actividad 2 - Validando Información</h4>
    <br>



    <form action="Actividad2Juan.php" method="POST">
        Código: <input type="text" name="codigo"><br><br>
        Nombre: <input type="text" name="nombre"><br><br>
        Precio: <input type="text" name="precio"><br><br>
        Descripción: <input type="text" name="descripcion"><br><br>
        Fabricante: <input type="text" name="fabricante"><br><br>
        FechaAdquisición: <input type="text" name="fechaadquisicion"><br><br>
        <input type="submit" value="Enviar">
    </form>


</body>
</html>