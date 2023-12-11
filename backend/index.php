<?php
header("Access-Control-Allow-Origin: *");

include "Rectangle.php";
include "Circle.php";

$rectangle = new Rectangle("red", 60, 30);
$circle = new Circle("yellow", 20);
echo $rectangle->calculateArea() . "<br>";
echo $circle->calculateArea();
// echo json_encode($data);

?>