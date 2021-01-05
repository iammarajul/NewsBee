<?php 
include_once 'connection.php';
try {

    if(isset($_POST['username']) && isset($_POST['password'])){


        $user = $_POST['username'];
        $password = $_POST['password'];


        //check if user exists in the db 
        $sqlQuery = "SELECT * FROM users WHERE username = :username";
        $statement = $db->prepare($sqlQuery);
        $statement->execute(array(':username' => $user));

        //fetch data from DB & compare it with inputted data 
        while($row = $statement->fetch()){
            $id = $row['id'];
            $hashed_password = $row['password'];
            $username = $row['username'];
            $country = $row['country'];

            //If pwd's match create the session 
            if(password_verify($password, $hashed_password)){
                session_start();
                $_SESSION['id'] = $id;
                $_SESSION['username'] = $username;
                $_SESSION['country'] = $country;

                $fingerprint = md5($_SERVER['REMOTE_ADDR']. $_SERVER['HTTP_USER_AGENT']);
                $_SESSION['last_active'] = time();
                $_SESSION['fingerprint'] = $fingerprint;

                //call sweetalert 
                echo "1";            
            }
            else{
                echo "2";
            }
        }


    }
}catch (PDOException $ex) {
            //Display error message
            echo "Connection failed ".$ex->getMessage();
    }
    
?>