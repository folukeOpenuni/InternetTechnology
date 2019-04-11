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
class product {

    private $id;
    private $name;
    private $price;
    private $image;
    //    const AllowedTypes = ['jpeg', 'jpg', 'png', 'gif'];
    const AllowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
    const InputKey = 'image';       

    public function __construct($id, $name, $price, $image) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }

    public static function addProduct() {
        require_once 'DB.php';
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
            //die("File Missing!");
            trigger_error("File Missing!");
        }
        if ($_FILES[self::InputKey]['error'] > 0) {
            trigger_error("Handle the error! " . $_FILES[InputKey]['error']);
        }
        if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes)) {
            trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey]['type']);
        }
        $tempFile = $_FILES[self::InputKey]['tmp_name'];
        //$path = "C:/xampp/htdocs/blogFinalProject/views/images/";
        $path = dirname(__DIR__) . "../img/";
        $destinationFile = $path . $_FILES[self::InputKey]['name'];

        if (!move_uploaded_file($tempFile, $destinationFile)) {
            trigger_error("Handle Error");
        }

        //Clean up the temp file
        if (file_exists($tempFile)) {
            unlink($tempFile);
        }
    }

}
