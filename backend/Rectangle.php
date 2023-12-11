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

    static function calculateArea($cWidth, $cHeight) {
        return $cWidth * $cHeight;
    }
}
?>