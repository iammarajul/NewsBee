<?php 
include_once 'connection.php';
try {

    session_start();
    echo $_POST['post_id'];
    if(isset($_SESSION['id']) && isset($_POST['post_id'])){


        $user_id = $_SESSION['id'];
        $post_id = $_POST['post_id'];



        //check if user exists in the db 
        $sqlQuery = "DELETE FROM posts WHERE user_id = :user_id and id = :post_id";
        $statement = $db->prepare($sqlQuery);
        $statement->execute(array(':user_id' => $user_id , ':post_id' => $post_id ));


        //fetch data from DB & compare it with inputted data 
        echo "1";
    


    }else{
        echo "error";
    }
}catch (PDOException $ex) {
            //Display error message
            echo "Connection failed ".$ex->getMessage();
    }
    
?>
