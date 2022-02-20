<?php

class User{
    // Declaramos los atributos de la clase User
    private $id;
    private $userName;
    private $userCity;

    // Creamos el constructor para la clase User
    public function __construct(){
        require_once('DB/db.php');
        $this -> db = DB::dbConnect();
        $this -> reviews = array();
    }
    // Creamos una función para traer los datos que se insertaran en la tabla
    public function getUsers() {
        $reviewQuery = $this -> db -> query("select * from users");
        // Con un bucle while recorremos la tabla por cada fila que encuentra la añade a Users
        // Para consultar a la base de datos usaremos la libreria PDO
        while($rows = $reviewQuery -> fetch(PDO::FETCH_ASSOC)){
            $this -> reviews[] = $rows;
        }
        return $this -> reviews;
    }

}

?>
