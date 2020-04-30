<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="other.css">
    <script src="script.js"></script>
    <style>
    #massage{
    font-size:35px;
    color:black;
}

    </style>
</head>
<body>
<?php
ob_start(); 
include_once "action.php";

if (isset($_POST['go'])) {
    $login = $_POST['login'];
    $password = $_POST['pass'];
    if (check_autorize($login,$password)) {
        echo "<p  style = color:black;font-size:25px;margin-left:400px >Приветствуем, $login</p>";
        if (check_admin($login, $password)) {
            echo "<a href='hello.php?login=$login' style = weight:bold; ><p style = font-size:25px;margin-left:400px>Просмотр статистики</p></a>";
            ob_end_flush();
        }
    } else {
        echo "<p style = \"color:black;font-size:25px;margin-left:500px\">Вы не зарегистрированы!</p>";
    }
}            
?>          
                <?php
// echo "<div style=\"font-size:50px;color:white;\">Вход</div>";

$str_form = "<span id='massage'></span>
            <div class='form-row' >
            
            <form   action ='form.php' id='signin' name='autoForm' class='ui-form'  method='post' onSubmit='return overify_login(this);' >
            
            <input type='text' disabled value='Статистика для админа' name='fname_dis' size='20'>
            <i class=\"fa fa-user\" aria-hidden=\"true\"></i> <input type='text' name='login' placeholder = 'login'>
            <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> <input   type='password' name='pass' placeholder = 'password'>
 			 <input type='submit' name='go' value='Подтвердить' class = 'button'>
              </form></div>";
              echo $str_form;
              include "header.php";
?>
</body>
</html>
