<?php

require_once('Product.php');

class Book extends Product{

    public function __construct($weight = 0){
        parent::__construct();
        $this->weight = $weight;
    }

    public function setWeight ($weight){
        $this->weight = $weight;
    }

    public function getWeight (){
        return $this->weight;
    }

    public function add(){
        $this->setSku($_POST["sku"]);
        $this->setName($_POST["name"]);
        $this->setPrice($_POST["price"]);
        $this->setWeight($_POST["weight"]);

        $this->insertData($this->getSku(), $this->getName(), $this->getPrice(), null, null, null, null, $this->getWeight());
    }
} 
