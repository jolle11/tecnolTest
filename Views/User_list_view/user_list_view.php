<h2 class="display-5">Usuarios</h2>
<table class="table table-striped">

<tr>
    <th>ID</th>
    <th>NOMBRE</th>
    <th>CIUDAD</th>
</tr>

<?php

    foreach ($usersMatrix as $user){
        echo '<td>' . $user["id"] . '</td>';
        echo '<td>' . $user["userName"] . '</td>';
        echo '<td>' . $user["userCity"] . '</td></tr>';
    }
?>

</table>
<br>