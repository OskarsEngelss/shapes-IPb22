<?php 
include_once "Shape.php";

class Rectangle extends Shape {
    public $width;
    public $heigth;

    public function __construct($cColor, $cWidth, $cHeight) {
        parent::__construct($cColor);
        $this->width = $cWidth;
        $this->height = $cHeight;
    } 

    public function calculateArea() {
        return $this->width * $this->height;
    }
}
?>