<?php 
class Toy {
    public $name;
    public $material;
    public $from;
    public $price;


    public function __construct(String $name, String $material, String $from, Int $price ) {
        $this->name = $name;
        $this->material = $material;
        $this->from = $from;
        $this->price = $price;
    }


    function set_Info(){
        $allInfo= [];
        $allInfo[] = $this->name;
        $allInfo[] = $this->material;
        $allInfo[] = $this->from;
        $allInfo[] = $this->price;
        
    }
}





?>