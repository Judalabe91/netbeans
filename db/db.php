<?php
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("remotemysql.com", "thHuJbTDrP", "thHuJbTDrP", "CK0PlU26gV");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>
