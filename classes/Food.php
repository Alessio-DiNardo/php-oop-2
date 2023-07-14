<?php 
class Food {
    public $type;
    public $ingredient;
    public $expiration;



    public function __construct(String $type, String $ingredient, String $expiration, ) {
        $this->type = $type;
        $this->ingredient = $ingredient;
        $this->expiration = $expiration;
    }

}





?>