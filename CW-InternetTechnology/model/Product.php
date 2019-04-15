<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of product
 *
 * @author faagbede
 */
class Product {

    private $productID;
    private $image;
    private $title;
    private $description;
    private $price;
   
    //    const AllowedTypes = ['jpeg', 'jpg', 'png', 'gif'];
    const AllowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
    const InputKey = 'image';       

    public function __construct($productID, $image, $title, $description, $price) {
        $this->productID = $productID;
        $this->image = $image;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        
    }

    public static function addProduct() {
        require_once 'DB.php';
        $dbCon = DB::getInstance();//get instance of database connection
        $req = $dbCon->prepare("INSERT INTO product (image, title, description, price) VALUES (:image, :title, :description, :price)");
        
        if(isset($_POST['title'])&& $_POST['title']!=""){
        $filteredTitle = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        
        if(isset($_POST['description'])&& $_POST['description']!=""){
        $filteredDes = filter_input(INPUT_POST,'description', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        
        if(isset($_POST['price'])&& $_POST['price']!=""){
        $filteredPrice = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        
        $image = $_FILES['image']['name'];
        $title = $filteredTitle;
        $description = $filteredDes;
        $price = $filteredPrice;
        
        $req->bindParam(':image', $image);
        $req->bindParam(':title', $title);
        $req->bindParam(':description', $description);
        $req->bindParam(':price', $price);
        
        $req->execute();
        Product::uploadFile($_FILES['image']['name']); //upload product image
    }

    public static function removeProduct() {
        require_once 'DB.php';
        
    }

    public static function updateProduct() {
        require_once 'DB.php';
    }

    public static function viewProduct() {
        
    }

    public static function searchProduct() {
        
    }

    public static function uploadFile(string $name) {
        
        if (empty($_FILES[self::InputKey])) {
            trigger_error("File Missing!");
        }
        if ($_FILES[self::InputKey]['error'] > 0) {
            trigger_error("Handle the error! " . $_FILES[InputKey]['error']);
        }
        if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes)) {
            trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey]['type']);
        }
        $tempFile = $_FILES[self::InputKey]['tmp_name'];
        $path = dirname(__DIR__) . "/img/";
        $destinationFile = $path . $_FILES[self::InputKey]['name'];

        
//        echo $_FILES['image']['name']; 
//        echo $_FILES['image']['size'];
//        echo $_FILES['image']['type']; 
               
        
        if (!move_uploaded_file($tempFile, $destinationFile)) {
            trigger_error("Handle Error");
        } 
//        if (move_uploaded_file( $_FILES['image']['name'], $destinationFile)) {
//            echo "<script type='text/javascript'>alert('succefull')";
//    }   else{
//        echo "<script type='text/javascript'>alert('file could not be move')";
//    }

        //Clean up the temp file
        if (file_exists($tempFile)) {
            unlink($tempFile);
        }
    }

}
