<?php

session_start();

include("../common/db.php");      //   ../ for another folder

if(isset($_POST['signup'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    $query = $conn->prepare("insert into user (`id`,`username`,`email`,`password`,`address`)
    values
    (NULL,'$username','$email','$password','$address')
    ");

    $result = $query->execute();
    echo $user->insert_id;
    if($result){
        $_SESSION["user"] = ["username" => $username,"email" =>$email,"user_id"=>$user->insert_id];
        header("location: /discussion board");   //relocate to home page using folder name
    }else{
        echo "No resistraion yet";
    }

}else if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = "";
    $user_id = "";
    $result = $conn->prepare("select * from user where email='$email' and password='$password'");
    $result->execute();

    if($result->rowCount() == 1){
        foreach($result as $row){
            $username = $row['username'];
            $user_id = $row['id'];
        }
        echo $username;
        $_SESSION["user"] = ["username" => $username,"email" =>$email,"user_id"=>$user_id];
        header("location: /discussion board");
    }

}else if(isset($_GET['logout'])){
        echo "1";
        session_unset();
        header("location: /discussion board");
}else if(isset($_POST['ask'])){

    $title = $_POST['title'];
    $description = $_POST['description'];
    $catagory_id = $_POST['catagory'];
    $user_id = $_SESSION['user']['user_id'];
    // echo $catagory_id;

    $query = $conn->prepare("insert into questions (`id`,`title`,`description`,`catagory_id`,`user_id`)
    values
    (NULL,'$title','$description','$catagory_id','$user_id')
    ");

    $result = $query->execute();
  
    if($result){
        header("location: /discussion board");   //relocate to home page using folder name
    }else{
        echo "No resistraion yet";
    }
}else if (isset($_POST["answer"])) {
    $answer = $_POST['answer'];
    $question_id = $_POST['question_id'];
    $user_id = $_SESSION['user']['user_id'];

    $query = $conn->prepare("Insert into `answers`
    (`id`,`answer`,`question_id`,`user_id`)
    values
    (NULL,'$answer','$question_id','$user_id');
    ");
    $result = $query->execute();
    if ($result) {
        header("location: /discussion board?q-id=$question_id");
    } else {
        echo "Answer is not submitted";
    }

}


?>