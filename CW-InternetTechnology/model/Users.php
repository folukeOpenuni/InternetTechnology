<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users
 *
 * @author faagbede
 */
class Users {

    public $userID;
    public $foreame = "";
    public $surname = "";
    public $username = "";
    public $pwd = "";
    public $email = "";

    public function __construct($userID, $foreame, $surname, $username, $pwd, $email) {
        $this->userID = $userID;
        $this->foreame = $foreame;
        $this->surname = $surname;
        $this->username = $username;
        $this->pwd = $pwd;
        $this->email = $email;
    }

    
    
       public static function authenticate() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //check if emailAddres is set and not empty
            if (isset($_POST['username']) && $_POST['username'] != "") {
                //sanitize email address 
                $filteredUsername = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            //check if password is set and not empty
            if (isset($_POST['pwd']) && $_POST['pwd'] != "") {
                //sanitise pwd  
                $filteredPwd = filter_input(INPUT_POST, 'pwd', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            include 'DB.php';
            //get instance of database connection
            $dbCon = DB::getInstance();
            $username = $filteredUsername;
            $pwd = $filteredPwd;
            //check user credentials 
            $req = $dbCon->query("SELECT * FROM login WHERE username='$username' AND password = '$pwd' ");
            
            $userType = $req->fetch();
            $result = $req->execute();
            $count = 0;
            foreach ($req->fetchAll() as $temp) {
                $count++;
            }
            //If result matched $myusername and $mypassword, table row must be 1 row
            if ($count == 1) {
                
                //check if admin or normal user
                if($userType['role'] == 1){
                    $_SESSION['username'] = $username;
                    //$_SESSION['username'] = $username;
                    
                    echo "<script type='text/javascript'>window.location.href = 'http://lamp.scim.brad.ac.uk:50218/InternetTechnology/CW-InternetTechnology/profile.php';</script>";
                    exit();
                    //echo "welcome admin";
                    //header("Location: products.php"); 
                }   else{
                    $_SESSION['username'] = $username;
                    echo "<script type='text/javascript'>window.location.href = 'http://lamp.scim.brad.ac.uk:50218/InternetTechnology/CW-InternetTechnology/products.php';</script>";
                    exit();
                }
                //echo "Succeful log in";
                //header("Location: products.php"); 
                //echo "OK";
            } else {
                $massage = "email or password is wrong";
                echo "<script type='text/javascript'>alert('$massage')";
                //echo "NG";
                echo "email or password is wrong";
            }
        }
    }
    

    public static function logout(){
        session_start();
        session_destroy(); 
        echo "<script type='text/javascript'>window.location.href = 'http://lamp.scim.brad.ac.uk:50218/InternetTechnology/CW-InternetTechnology/index.php';</script>";
        exit();
    }

    public static function register() {
        require_once 'DB.php';
        $dbCon = DB::getInstance();     //get instance of database connection
    }

    public static function addUser() {
        require_once 'DB.php';
        $dbCon = DB::getInstance();     //get instance of database connection
    }

    public static function removeUser() {
        require_once 'DB.php';
        $dbCon = DB::getInstance();     //get instance of database connection
    }

    public static function updateUser() {
        require_once 'DB.php';
        $dbCon = DB::getInstance();     //get instance of database connection
    }

}
