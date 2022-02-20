<?php

class Products{
    // Declaramos una variable db que almacenará la conexión a la base de datos
    // usando el metodo del archivo DB.php
    private $db;
    // Declaramos otra variable products que recibirá los productos de la base de datos
    private $products;

    // Declaramos los atributos de la clase Products
    private $id;
    private $productName;
    private $price;
    private $productDescription;
    private $categoryId;

    // Creamos el constructor para la clase Products
    public function __construct(){
        require_once('DB/db.php');
        $this -> db = DB::dbConnect();
        $this -> products = array();
    }
    // Creamos una función para traer los datos que se insertaran en la tabla
    public function getProducts() {
        // En este caso, la query esta compuesta por un select con un join para que el campo de categoria muestre
        // el nombre de la categoria y no el id
        $productQuery = $this -> db -> query("select products.productName, price, productDescription, categories.categoryName from products inner join categories on products.categoryId=categories.id;");
        // Con un bucle while recorremos la tabla por cada fila que encuentra la añade a Products
        // Para consultar a la base de datos usaremos la libreria PDO
        while($rows = $productQuery -> fetch(PDO::FETCH_ASSOC)){
            $this -> products[] = $rows;
        }
        return $this -> products;
    }
    // Creamos la función setProducts para poder añadir nuevos productos en la tabla
    public function setProducts($productName, $price, $productDescription, $categoryId) {
        $this -> productName = $productName;
        $this -> price = $price;
        $this -> productDescription = $productDescription;
        $this -> categoryId = $categoryId;
    }


}

?>
