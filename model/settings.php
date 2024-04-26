<?php
session_start();
class Settings{
    public function conexion(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $shema = "leslie";

        $conexion = mysqli_connect($host, $user, $pass,$shema);

        if(!$conexion){
            return false;
        }

        return $conexion;
    }

    public function login($user, $pass){
        $con = Settings::conexion();
        if($con != false){
            $query = $con->prepare("SELECT * FROM usuario WHERE mail = ? and pass = ?");
            $query->bind_param('ss',$user, $pass);
            $query->execute();

            $res = $query->get_result();
            $query->close();

            if($res->num_rows > 0){
                $aux = $res->fetch_assoc();
                $_SESSION['ID'] = $aux['id_user'];
                $_SESSION['nameUs'] = $aux['nombre'];
                return 1;
            }
            else{
                return 2;
            }
        }
        return -1;
    }
}
?>