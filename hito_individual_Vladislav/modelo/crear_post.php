<?php
//archivo para conseguir la información 
require_once '..\controlador\controlador.php';

$c = new Controlador;

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];
$fecha = $_POST['fecha'];
$imagen = $_POST['imagen'];


//lamada del metodo para añadir el registro
$c->insert($nombre, $email, $titulo, $contenido, $fecha, $imagen);

header(("location: ../vistas/posts.php"));


?>