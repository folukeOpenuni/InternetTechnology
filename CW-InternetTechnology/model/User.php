<?php
/**
 * Description of User
 *
 * @author faagbede
 */
class User {

    private $id;
    private $forename;
    private $surname;
    private $username;
    private $email;
    private $pwd;
    

    /**
     * This is constructor for the user class
     * @param type $id the userID 
     * @param type $forename the first name of the user
     * @param type $surname the last name of the user
     * @param type $username the username of the user
     * @param type $email the email address of the user
     * @param type $DOB the date of birth of the user
     * @param type $pwd the password of the user
     */
    public function __construct($id, $forename, $surname, $username, $email, $pwd) {
        $this->id = $id;
        $this->forename = $forename;
        $this->surname = $surname;
        $this->username = $username;
        $this->email = $email;
        $this->pwd = $pwd;
    }
    
    
    public static function signin() {

        include 'DB.php';
        $dbCon = DB::getInstance();     //get instance of database connection

        $req = $dbCon->prepare("SELECT * FROM registerUsers WHERE username = :username AND pwd = :pwd");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (!empty(trim($_POST['username']))) {//check username is set and not empty                
                $filteredUsername = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS); //sanitize username
                $username = $filteredUsername;
            }

            // Check that password is not empty 
            if (!empty(trim($_POST['pwd'])) && trim($_POST['pwd'] != "")) {
                $pwd = trim($_POST['pwd']);
            }



            //check username and password matches the database record
            $sql = "SELECT * FROM registerUsers WHERE username = :username";
            $result = $dbCon->prepare($sql); //prepare result
            $result->bindParam(':username', $username, PDO::PARAM_STR);

            if ($result->execute()) {

                if ($result->rowCount() > 0) {
                    // echo "welcome to stemin mug community";
                    $pwd = 
                    $row = $result->fetch();
                    $hashPwd = $row['pwd'];


                    if (password_verify($pwd, $hashPwd)) {
                        $pwd = trim($_POST['pwd']);
                        $_SESSION['username'] = $username;
                        $_SESSION['forename'] = $row['forename'];
                        $_SESSION['surname'] = $row['surname'];

                        //echo "welcome to stemin mug community";
                        //header("Location: profile.php");
                        //redirect_to();
                    }
                } else {

                    echo "your username or password is wrong";
                }
            }



            $username = $filteredUsername;
        }
    }

    public static function signup() {
        include 'DB.php';
        $dbCon = DB::getInstance();     //get instance of database connection
        //prepare sql and bind parameters
        $req = $dbCon->prepare("INSERT INTO registerUsers (forename, surname, username, email, pwd) VALUES (:forename, :surname, :username, :email, :pwd)");


        if (!empty(trim($_POST['forename']))) {//check forename is set and not empty
            $filteredForename = filter_input(INPUT_POST, 'forename', FILTER_SANITIZE_SPECIAL_CHARS); //sanitize forename
        }
        if (!empty(trim($_POST['surname']))) {//check surname is set and not empty
            $filteredSurname = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_SPECIAL_CHARS); //sanitize surname
        }


        if (!empty(trim($_POST['username']))) {//check username is set and not empty                
            $filteredUsername = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS); //sanitize username
            //$username = $filteredUsername; 
        }


        if (!empty(trim($_POST['email']))) {//check email is set and not empty
            $filteredEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS); //sanitize email
        }

        //hash password
        if (!empty(trim($_POST['pwd']))) {//check password is set and not empty
            //hash password.  The default algorithm to use for hashing if no algorithm is provided.
            $pwd = $_POST['pwd'];
            $Hashpwd = password_hash($pwd, PASSWORD_DEFAULT);
        }

        $forename = $filteredForename;
        $surname = $filteredSurname;
        $username = $filteredUsername;
        $email = $filteredEmail;
        $pwd = $Hashpwd;

        //bind parameters. PDO~::PARAM_STR => Represents the SQL CHAR, VARCHAR, or other string data type.
        $req->bindParam(':forename', $forename, PDO::PARAM_STR);
        $req->bindParam(':surname', $surname, PDO::PARAM_STR);
        $req->bindParam(':username', $username, PDO::PARAM_STR);
        $req->bindParam(':email', $email, PDO::PARAM_STR);
        $req->bindParam(':pwd', $pwd);

        if ($req->execute()) {
           
            //header("Location: http://lamp.scim.brad.ac.uk:50218/InternetTechnology/CW-InternetTechnology/profile.php");
            header("Location: '../profile.php'");
            //die();
            exit();
        }
    }
       
    public static function addUser(){
        
    }
    
    public static function removeUser(){
        
    }
    
    public static function updateUser(){
        
    }

}
