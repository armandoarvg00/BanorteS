<?php 
    class Conexion{
        private $servidor="localhost";
        private $usuario="root";
        private $bd="segurosse_ops";
        private $password="";
        private $conexion="";
        public function Conectar(){
            $this->conexion = @mysqli_connect($this->servidor, $this->usuario, $this->password) ;
            @mysqli_query("SET NAMES 'utf8'", $this->conexion); 
            @mysqli_query("SET time_zone = '-06:00';", $this->conexion); 
            if (!$this->conexion) {
                echo ('<b> Lo sentimos, tuvimos un problema :(, se ha presentado el error 102 del sistema, vuelva a intentarlo más tarde.</b>');
                exit;
            }else{
            }
            if(!@mysqli_select_db($this->conexion,$this->bd)){
                echo "<br/>Error: no se pudo conectar a la BD, revisa los datos de conexion.";
                exit;
            }
            
        }
        function Desconectar() {
            if (gettype($this->conexion) == "resource") {
                mysqli_close($this->conexion);
            }
        }
        function Ejecutar($query) {
            $resultado = mysqli_query($this->conexion,$query);        
            if (!$resultado) {
                $resultado = mysqli_error($this->conexion);
            }        
            return $resultado;
        }
        function getconexion() {
            return $this->conexion;
        }
 
    }
?>