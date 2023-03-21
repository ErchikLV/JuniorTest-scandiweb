<?php

require_once('Product.php');

class DVD extends Product{

    public function __construct($size = 0){
        parent::__construct();
        $this->size = $size;
    }

    public function setSize ($size){
        if (!empty($size))
            $this -> size = $size;
    }

    public function getSize (){
        return $this -> size;
    }

    public function add(){
        $this->setSku($_POST["sku"]);
        $this->setName($_POST["name"]);
        $this->setPrice($_POST["price"]);
        $this->setSize($_POST["size"]);

        $this->insertData($this->getSku(), $this->getName(), $this->getPrice(), $this->getSize(), null, null, null, null);
    }
} 


