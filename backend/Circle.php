<?php 
    include_once "Shape.php";

    class Circle extends Shape {
        public $radius;
    
        public function __construct($cColor, $cRadius) {
            parent::__construct($cColor);
            $this->radius = $cRadius;
        } 
    
        public function calculateArea() {
            return $this->radius * $this->radius * 3.14;
        }
    }
?>