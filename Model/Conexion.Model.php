 
<?php
    class Conexion extends mysqli
    {
        function __construct()
        {
        $servidor="localhost";
        $user="root";
        $pass="";
        $BaseDatos="tablas";

        parent:: __construct($servidor,$user,$pass,$BaseDatos);
        $this->query("SET NAMES 'utf8';");
        $this-> connect_errno ? die('Error en la conexion'): $error='</br> Conectado';
        //echo $error;
        unset($error);

        }
        
    }
?>