<?php
// Creamos la clase DB
class DB{
    public static function dbConnect(){
        // Declaramos las variables que usaremos para la conexión a la base de datos
        $host = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "tecnoltest";
        try{
            // Usamos el método PDO para conectar con la base de datos
            $conexion = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
            $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion -> exec("SET CHARACTER SET UTF8");
        }catch(Exception $error){
            die("Error " . $error -> getMessage());
            echo "Línea del error" . $error -> getLine();
        }
        return $conexion;
    }
}
?>