<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DB
 * database connection setting 
 * @author faagbede
 */

//Generate singleton class
class DB {
    //hold the class instance
    private static $instance = NULL;
    
    //Singleton Design Pattern
    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$instance = new PDO('mysql:host=localhost;dbname=faagbede', 'faagbede', '******', $pdo_options);
      }
      return self::$instance;
    }
}
