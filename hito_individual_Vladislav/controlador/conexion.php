<?php 

//clase para crear la conexion a la base de datos
class Conexion {
    private $host = "localhost";
    private $usuario = "root";
    private $password = "";
    private $bdd = "hitobdd";
    private $link;
    //funcion constructora
    public function __construct() {
        $this->link = new mysqli($this->host, $this->usuario, $this->password, $this->bdd);
        if ($this->link->connect_errno) {
            echo "Falló la conexión a MySQL: (" . $this->link->connect_errno . ") " . $this->link->connect_error;
        }
        return $this->link;
    }
    //funcion para ejecutar consultas
    public function executeQuery($sql) {
        $resultado = mysqli_query($this->link, $sql);
        return $resultado;
    }
    //funcion para cerrar la conexion
    public function close() {
        mysqli_close($this->link);
      }
}
?>
    