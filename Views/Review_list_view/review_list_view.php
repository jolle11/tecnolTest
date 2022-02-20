<h2 class="display-5">Reviews</h2>
<table class="table table-striped">

<tr>
    <th>TÍTULO</th>
    <th>REVIEW</th>
    <th>USUARIO</th>
    <th>PRODUCTO</th>
</tr>

<?php

    foreach ($reviewsMatrix as $review){
        echo '<td>' . $review["title"] . '</td>';
        echo '<td>' . $review["reviewText"] . '</td>';
        echo '<td>' . $review["userName"] . '</td>';
        echo '<td>' . $review["productName"] . '</td></tr>';
    }
?>

</table>
<br>