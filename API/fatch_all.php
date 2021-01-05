<?php 
include_once 'connection.php';
try {

    session_start();

    if(isset($_SESSION['id'])){


        $user_id = $_SESSION['id'];



        //check if user exists in the db 
        $sqlQuery = "SELECT posts.*, users.username FROM posts INNER JOIN users ON posts.user_id = users.id ORDER BY created_at DESC";
        $statement = $db->prepare($sqlQuery);
        $statement->execute();

        //fetch data from DB & compare it with inputted data 
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        $json = json_encode($results);        
        echo $json;
    


    }else{
        echo "error";
    }
}catch (PDOException $ex) {
            //Display error message
            echo "Connection failed ".$ex->getMessage();
    }
    
?>