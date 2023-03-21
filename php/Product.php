<?php

require_once('connection.php');

abstract class Product { 
    protected $id = null;
    protected $sku = null;
    protected $name = null;
    protected $price = null;

    protected $height = null;
    protected $width = null;
    protected $length = null;

    protected $size = null;

    protected $weight = null;

    protected $conn;

    abstract public function add();

    public function __construct($id = 0, $sku = '', $name = '', $price = 0){
        $this->id = $id;
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->conn = new mysqli(DBHOST, DBUSER, DBPASSWORD, DBNAME);
    }

    public function setId ($id){
        $this->id = $id;
    }

    public function getId (){
        return $this->id;
    }

    public function setSku ($sku){
        $this->sku = $sku;
    }

    public function getSku (){
        return $this->sku;
    }

    public function setName ($name){
        $this->name = $name;
    }

    public function getName (){
        return $this->name;
    }

    public function setPrice ($price){
        $this->price = $price;
    }

    public function getPrice (){
        return $this->price;
    }

    public function insertData($sku, $name, $price, $size, $height, $width, $length, $weight){   
        $sql = $this->conn->prepare("INSERT INTO product (sku, name, price, size, height, width, length, weight) VALUES (?,?,?,?,?,?,?,?)");
        $sql->execute([$sku, $name, $price, $size, $height, $width, $length, $weight]);
    }

    public function checkSku(){
        if (isset($_POST["sku"])){
            $query = "SELECT * FROM product WHERE sku = '".$_POST["sku"]."'";
            $result = mysqli_query($this->conn, $query);
                if (mysqli_num_rows($result) > 0){
                    echo "<span style='color:red;'>SKU is not available!</span>";
                    echo "<script>$('#submitBtn').prop('disabled', true);</script>";
                }
                else {
                    echo "<span style='color:green;'>SKU is available!</span>";
                    echo "<script>$('#submitBtn').prop('disabled', false);</script>";
                }
        }
    }

    public function deleteProduct(){
        $dataArr = $_POST['idproduct'];
        foreach ($dataArr as $id) {
            $this->setId($id);
            $sql = $this->conn->prepare("DELETE FROM product WHERE idproduct=?");
            $sql->execute([$this->getId()]);
        }
    }

}