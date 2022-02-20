<h2 class="display-5">Categorías</h2>
<table class="table table-striped">

<tr>
    <th>ID</th>
    <th>NOMBRE</th>
</tr>

<?php

    foreach ($categoriesMatrix as $category){
        echo '<td>' . $category["id"] . '</td>';
        echo '<td>' . $category["categoryName"] . '</td></tr>';
    }
?>

</table>
<br>