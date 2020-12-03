<?php
    require_once 'config.php';
    
    class DataBase{
        
        private $conexion;
        
        function conectar(){
            try
            {
                $this->conexion = new PDO('mysql:host='.SERVIDOR.';dbname='.BASEDATOS, USUARIO, CONTRASEÑA);
            } catch (Exception $ex)
            {
                $error = $ex->getMessage();
                echo $error;
                exit();
            }
        }
        
        function desconectar(){
            $this->conexion = null;
        }
    
        function ejecutarSql($sql){
            try
            {
                $resul = $this->conexion->query($sql);
                return $resul;
            } catch (Exception $ex) {
                $error = $ex->getMessage();
                echo $error;
                exit();
            }
        }

        function ejecutarSqlActualizacion($sql){
            try
            {
                $resul = $this->conexion->prepare($sql);
            } catch (Exception $ex)
            {
                $error = $ex->getMessage();
                echo $error;            
                exit();
            }
        }
    
        function siguienteFila($rst){
            return $rst->fetch();
        }

        function cantidadFilas($rst){
            return $rst->rowcount();
        }
    }

?>

