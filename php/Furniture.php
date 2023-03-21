<?php

require_once('Product.php');

class Furniture extends Product{

    public function __construct($height = 0, $width = 0, $length = 0){
        parent::__construct();
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }

    public function setHeight ($height){
        $this->height = $height;
    }

    public function getHeight (){
        return $this->height;
    }

    public function setWidth ($width){
        $this->width = $width;
    }

    public function getWidth (){
        return $this->width;
    }

    public function setLength ($length){
        $this->length = $length;
    }

    public function getLength (){
        return $this->length;
    }

    public function add(){
        $this->setSku($_POST["sku"]);
        $this->setName($_POST["name"]);
        $this->setPrice($_POST["price"]);
        $this->setHeight($_POST["height"]);
        $this->setWidth($_POST["width"]);
        $this->setLength($_POST["length"]);

        $this->insertData($this->getSku(), $this->getName(), $this->getPrice(), null, $this->getHeight(), $this->getWidth(), $this->getLength(), null);
    }
} 
