<?php
class Controlador {
    private $link;
    //constructor de la clase
    public function __construct() {
        include 'conexion.php';
        $this->link = new Conexion;
    }
    public function getUsuario($nombre, $password){

        $sql = "SELECT * FROM `usuarios` WHERE nombre = '".$nombre."' AND contrasenia = '".$password."'";
    
        $registros = $this->link->executeQuery($sql);
    
        return $registros;
    
    }
    //funcion para mostrar los registros
    public function select() {
    
        $sql = "SELECT `nombre`, `email`, `titulo`, `contenido`, `fecha`, `imagen` FROM `publicaciones`";

        $registros = $this->link->executeQuery($sql);
        
        while($filas=mysqli_fetch_array($registros)){
            echo '<h1 class="titulo">', $filas['titulo'], '</h1>';
            echo '<h2>', $filas['nombre'],'</h2>', '<h3 class="text-muted">', $filas['email'],'</h2>';
            echo '<h3>', $filas['fecha'],'</h4>';
            echo '<p class="texto-articulo">';
            echo $filas['contenido'];
            echo '</p>';
            echo '<a id="b-editar" href="#" role="button">Editar</a></td>';
            echo '&nbsp;';
            echo '<a id="b-borrar" href="#" role="button">Borrar</a></td>';
        }
    }
       
    //funcion para insertar registros

    public function insert($nombre, $email, $titulo, $contenido, $fecha, $imagen) {
        $sql = "INSERT INTO `publicaciones` (`nombre`, `email`, `titulo`, `contenido`, `fecha`, `imagen`) VALUES ('$nombre', '$email', '$titulo', '$contenido', '$fecha', '$imagen');";

        $this->link->executeQuery($sql);
    }
}
?>