<h2 class="display-5">Products</h2>
<table class="table table-striped">

<tr>
    <th>NOMBRE</th>
    <th>PRECIO</th>
    <th>DESCRIPCIÓN</th>
    <th>CATEGORÍA</th>
</tr>

<?php

    foreach ($productsMatrix as $product){
        echo '<td>' . "<a href='Views/Product_detail_view/product_detail_view.php'>" . $product["productName"] . '</a>' . '</td>';
        echo '<td>' . $product["price"] . '€' . '</td>';
        echo '<td>' . $product["productDescription"] . '</td>';
        echo '<td>' . $product["categoryName"] . '</td></tr>';
    }
?>

</table>
<br>