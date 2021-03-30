<?php

function check_db(){
    $pdo = new PDO("mysql:host=localhost;dbname=auth_hash;", 'root', 'root');
    $res = $pdo->exec("CREATE TABLE IF NOT EXISTS users (
        id int not NULL AUTO_INCREMENT,
        login varchar(15) not null,
        password varchar(1000) not NULL,
        PRIMARY KEY(id)
    );");
}

function is_user_exists($login, $password){
    $pdo = new PDO("mysql:host=localhost;dbname=auth_hash;", 'root', 'root');
    $params = array(':login' => $login, ':password' => $password);
    $stmt = $pdo->prepare("SELECT * FROM users WHERE login = :login AND password = :password");


    if ($stmt->execute($params)) {
        while ($row = $stmt->fetch()) {
          echo $row->login;
          return true;
        }
    }
      return false;   
}

function add_new_user($login,$password){
    $pdo = new PDO("mysql:host=localhost;dbname=auth_hash;", 'root', 'root');
    $stmt = $pdo->prepare("INSERT INTO `users`( `login`, `password`) VALUES ( :login , :password)");
    $stmt->bindParam(':login' , $login);
    $stmt->bindParam(':password' , $password);
    if($stmt->execute()){
        return true;
    }else{
        echo($stmt->errorCode());
    }
    return false;
}