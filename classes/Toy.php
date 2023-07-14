<?php 

include_once __DIR__ . '/Product.php';

class Toy extends Product{
    public $material;


    public function __construct(String $name, String $brand, Int $price, String $image, String $category, String $material) {
        parent::__construct($name,$brand,$price,$image,$category);
        $this->setMaterial($material);

    }

    public function setMaterial($material){
        $this->material = $material;
    }
    
}





?>