
<?php 
include_once __DIR__ . '/Product.php';
class Food extends Product{
    public $type;
    public $ingredient;
    public $expiration;

    public function __construct(String $name, String $brand, Int $price, String $image, String $category,String $ingredient, String $expiration ) {
        parent::__construct($name,$brand,$price,$image,$category);
        $this->setIngredient($ingredient);
        $this->setExpiration($expiration);
    }

    public function setIngredient($ingredient){
        $this->ingredient = $ingredient;
    }
    public function setExpiration($expiration){
        $this->expiration = $expiration;
    }
}





?>