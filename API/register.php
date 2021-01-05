<?php 

    include_once 'connection.php';

    function checkDuplicateEntries($table, $column_name, $value, $db){
        try {
            $sqlQuery = "SELECT * FROM " .$table. " WHERE ".$column_name."=:$column_name";
            $statement = $db->prepare($sqlQuery);
            $statement->execute(array(":$column_name" => $value));

            //check for return row
            if($row = $statement->fetch()){
                return true;
            }
            return false;
        }
        catch(PDOException $ex){
            //Handle exception 
        }
    }

    

    //process the form 
    if(isset($_POST['email']) && isset($_POST['username']) && isset($_POST['name']) && isset($_POST['country'])){

        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $country = $_POST['country'];
        $name = $_POST['name'];

        if(checkDuplicateEntries("users", "username", $username, $db)){
            echo "1";
            die();
        }
        else if(checkDuplicateEntries("users", "email", $email, $db)){
            echo "2";
            die();
        }
        else if(strlen($password)<6){
            echo "5";
        }

        else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            try{

                $sqlInsert = "INSERT INTO users (username, email, password, join_date,country,name)
                                VALUES (:username, :email, :password, now(),:country,:name)";


                $statement = $db->prepare($sqlInsert);

                $statement->execute(array(':username' => $username, ':email' => $email, ':password' => $hashed_password, ':country' => $country, ':name' => $name));

                if($statement->rowCount() == 1){

                    echo "3";
                }
            }
            catch(PDOException $ex) {
                echo "4";
            }
        }
        
    }
   
?>