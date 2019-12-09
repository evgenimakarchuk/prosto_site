<?php
session_start(); 
require_once('config/config.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="styles/animate.css">
    <link rel="stylesheet" href="styles/bootstrap.css">
    <link rel="stylesheet" href="styles/slick.css">
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>Главная</title>
</head>
<body>
    <div class="hader">
        <div class="hader__contaner" id="hader">
        <?php
            if(isset($_SESSION['user_id'])){
                $query="SELECT * FROM users WHERE id=".(int)$_SESSION['user_id'];
                $result = mysqli_query($link,$query);
if(!$result){
    exit($query);
}
$duta_user = mysqli_fetch_array($result);
echo $duta_user['id'];
        ?>
        <div><svg class="icon icon--signin" 
                  width="20" 
                  height="20" 
                  xmlns="http://www.w3.org/2000/svg"
                  style="background-color: white;">
             </svg>
        </div>
        <a href=/cabinet.php> Кабинет пользователя</a>
        <a href=/logout.php> Выход</a> 
        <?php
            }else{
        ?>
        <a href="/login.php">Войти</a>
        <a href="/form.php">Регистрация</a>
        <?php
            }
        ?>
            
            <a class="link" href="/article.php?url=offers">Предложения</a>
            <a class="link" href="/article.php?url=company">Для юр. лиц</a>
            <a class="link" href="/article.php?url=aboute">О компании</a>
            <a class="link" href="/article.php?url=vacancy">Наши вакансии</a>
            <a class="link" href="/article.php?url=contact">Контакты</a>
        </div>
    </div>