<?php

$mysqli = NEW MYSQLi("localhost","root","","vehicles");
$resultSet = $mysqli->query("SELECT makes.makes_name AS makesName, models.models_name AS modelsName FROM makes,models WHERE makes.makes_name = 'Acura' AND models.makes_id = makes.makes_id");

while($rows = $resultSet->fetch_assoc())
{
    $make = $rows['makesName'];
    $model = $rows['modelsName'];
    echo "<p>Make: $make<br/>Model: $model</p>";
}
?>