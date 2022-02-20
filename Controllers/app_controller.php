<?php
// Requerimos los modelo de products
require_once('Models/products.php');
require_once('Models/categories.php');
require_once('Models/reviews.php');
require_once('Models/users.php');

// En product almacenamos los productos de la tabla
$product = new Products();
// Creamos productsMatrix que llamará al método getProducts para traernos todos los productos para el forEach
$productsMatrix = $product -> getProducts();
// En category almacenamos las categorías de la tabla
$category = new Category();
// Creamos categoriesMatrix que llamará al método getCategories para traernos todos los productos para el forEach
$categoriesMatrix = $category -> getCategories();
// En review almacenamos las reviews de la tabla
$review = new Review();
// Creamos reviewsMatrix que llamará al método getReviews para traernos todos los productos para el forEach
$reviewsMatrix = $review -> getReviews();
// En review almacenamos las reviews de la tabla
$user = new User();
// Creamos reviewsMatrix que llamará al método getReviews para traernos todos los productos para el forEach
$usersMatrix = $user -> getUsers();

// Requerimos las vista para el listado de productos
require_once('Views/Product_list_view/product_list_view.php');
require_once('Views/Category_list_view/category_list_view.php');
require_once('Views/Review_list_view/review_list_view.php');
require_once('Views/User_list_view/user_list_view.php');

?>