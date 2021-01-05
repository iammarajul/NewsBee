<?php
    include_once 'connection.php';
    session_start();
    $fingerprint = md5($_SERVER['REMOTE_ADDR']. $_SERVER['HTTP_USER_AGENT']);
    if(!isset($_SESSION['username'])){
        header('location: login.php');
        die();
    }

try {

    if(isset($_POST['url']) && isset($_POST['image']) && isset($_POST['title']) && isset($_POST['description'])){


        $url = $_POST['url'];
        $image = $_POST['image'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $user_id = $_SESSION['id'];
        $source = $_POST['source'];

        $news_date = $_POST['news_date'];
        $author = $_POST['author'];
        $category = $_POST['category'];
        $description2 = $_POST['description2'];

        
        $sqlInsert = "INSERT INTO posts (user_id, title, url, image,des,created_at,source,news_date,author,category,description)
                        VALUES (:user_id, :title, :url,:image ,:des,now(),:source,:news_date,:author,:category,:description)";


        $statement = $db->prepare($sqlInsert);

        $statement->execute(array(':user_id' => $user_id, ':title' => $title, ':url' => $url, ':image' => $image, ':des' => $description, ':source' => $source, ':news_date' => $news_date, ':author' => $author , ':category' => $category, ':description' => $description2));

        if($statement->rowCount() == 1){

            echo "1";
        }else{
            echo "2";
        }


    }
}catch (PDOException $ex) {
            //Display error message
            echo "Connection failed ".$ex->getMessage();
}
    
?>
