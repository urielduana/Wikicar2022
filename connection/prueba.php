<?php
include("queries.php");


$prueba = new BasicSelect("User_name, Id_user", "user", "");
$result = $prueba->getBasicSelect();

echo "<form >";
echo '<select name="name" id="">';
echo "<option> Seleccionar </option>\n";

while($row = mysqli_fetch_row($result)){
    foreach($row as $field){
        echo "<option>$field</option>\n";
    }
}

echo "</select>";
echo "</form>";
$prueba->setClose($prueba);

?>