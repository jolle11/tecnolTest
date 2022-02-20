<?php

class Review{
    // Declaramos los atributos de la clase Review
    private $id;
    private $title;
    private $textReview;

    // Creamos el constructor para la clase Review
    public function __construct(){
        require_once('DB/db.php');
        $this -> db = DB::dbConnect();
        $this -> reviews = array();
    }
    // Creamos una función para traer los datos que se insertaran en la tabla
    public function getReviews() {
        $reviewQuery = $this -> db -> query("select title, reviewText, users.userName, products.productName from reviews inner join users on reviews.userId=users.id join products on reviews.productId=products.id");
        // Con un bucle while recorremos la tabla por cada fila que encuentra la añade a Reviews
        // Para consultar a la base de datos usaremos la libreria PDO
        while($rows = $reviewQuery -> fetch(PDO::FETCH_ASSOC)){
            $this -> reviews[] = $rows;
        }
        return $this -> reviews;
    }

}

?>
