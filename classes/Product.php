<?php 

include_once __DIR__ . '/Toy.php';
include_once __DIR__ . '/Food.php';

class product{
    protected $name;
    protected $brand;
    protected $price;
    protected $image;
    protected $category;

    public function __construct(String $name, String $brand, Int $price, String $image, String $category){
        $this->setName($name);
        $this->setBrand($brand);
        $this->setPrice($price);
        $this->setImage($image);
        $this->setCategory($category);
    }

    public function setName($name){
        $this->name = $name;
    }
    public function setBrand($brand){
        $this->brand = $brand;
    }
    public function setprice($price){
        $this->price = $price;
    }
    public function setImage($image){
        $this->image = $image;
    }
    public function setCategory($category){
        $this->category = $category;
    }



}




?>
