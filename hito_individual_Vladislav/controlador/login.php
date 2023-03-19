<?php
$nombre = $_POST['usuario'];
$password = $_POST['password'];
md5($password);

if (!empty($_POST['usuario']) AND !empty($_POST['password']) ) {

    require_once 'controlador.php';
    $c = new Controlador();

     //Busqueda en la base de datos del usuario

    $datos=$c->getUsuario($nombre, $password);

    $numfilas = $datos->num_rows;

    // condicion para comprobar si el usuario y la contraseña existen, si es asi se accede a la pagina principal y se crea la cookie

    if ($numfilas <> 0){

        $userdata= mysqli_fetch_assoc($datos);
        $_SESSION["user_id"] = $userdata["id"];
        $fecha = time();
        setcookie ("usuario", $nombre,time()+ 3600, "/");
        setcookie ("password", $password,time()+ 3600, "/");
        setcookie ("fecha_acceso", $fecha,time()+ 3600, "/");
        setcookie ("usuario", $nombre,time()+ 3600, "/");
        setcookie ("ip", $_SERVER["REMOTE_ADDR"], time()+ 3600, "/");
        header("Location:../vistas/blog.php");
    }else{
        header("Location:login.php");

    }
} else{
    header("Location:../index.php");
}

?>