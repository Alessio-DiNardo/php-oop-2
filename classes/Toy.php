<?php 

include_once __DIR__ . '/Product.php';
class Toy {
    public $material;


    public function __construct(String $material,) {
        parent::__construct(String $name, String $brand, Int $price, String $image, String $category);
        $this->setMaterial = $material;
        $this->setName = $brand;
        $this->setPrice = $price;
        $this->setImage = $image;
        $this->setCategory = $category;
    }

    public function setMaterial($material){
        $this->material = $material;
    }
    
}





?>