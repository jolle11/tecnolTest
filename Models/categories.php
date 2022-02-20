<?php

class Category{
    // Declaramos los atributos de la clase Category
    private $id;
    private $name;
    // Creamos el constructor para la clase Category
    public function __construct(){
        require_once('DB/db.php');
        $this -> db = DB::dbConnect();
        $this -> categories = array();
    }
    // Creamos una función para traer los datos que se insertaran en la tabla
    public function getCategories() {
        $categoryQuery = $this -> db -> query("select * from categories");
        // Con un bucle while recorremos la tabla por cada fila que encuentra la añade a Categories
        // Para consultar a la base de datos usaremos la libreria PDO
        while($rows = $categoryQuery -> fetch(PDO::FETCH_ASSOC)){
            $this -> categories[] = $rows;
        }
        return $this -> categories;
    }

}

?>
