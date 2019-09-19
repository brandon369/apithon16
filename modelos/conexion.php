<?php

class Conexion{
    public function mdlConectar(){
        $conn = new PDO("mysql:host=localhost;dbname=apithon16","root","");
        $conn->exec("set names utf8");
        return $conn;
    }
}