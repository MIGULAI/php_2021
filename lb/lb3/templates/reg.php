<?php 
include '../db/db.php';

    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        echo '<form method="post" action="reg.php">';
        echo 'login: <input type="text" name="login" /> </br>';
        echo 'password: <input type="password" name="password" /> </br>';
        echo '<input type="submit" name="pass" value="Регистрация"/> </br>';
        echo '</form>';
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $new_login;
        $new_pass;
        if(isset($_POST['login']) && isset($_POST['password'])){
            $new_login = $_POST['login'];
            $new_pass = $_POST['password'];      
        }
        else{
            echo 'wrong';
            exit;
        }
    }
    if(is_user_exists($new_login,  $new_pass) == false){
        if(add_new_user($new_login,$new_pass)){
            echo("Пользователь добавлен");
            echo '<a href="../index.php">Home</a>';
        }
    }
    else{
        echo("Пользователь уже существует");
        echo '<a href="../index.php">Home</a>';
    }

?>