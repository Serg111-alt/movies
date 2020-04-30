<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="select.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <style>
#style{

    background:black;
    color:white;
    width:200px;
    height:50px;
}
#place{
    color:red;
}

#text{
  font-size:20px;
  background:black;
  color:white;  
 
  
}
    </style>
</head>
<body>
<?php
include "sort.php";
?>
   </br>
     <form method="post" action="movies.php" name="myform">
      <label for="movie" id = "text"> Покупка билетов,
        Выберите фильм:</label>
      <select name="movie" class = "select-css">
        <option value="Джон Уик">Джон Уик 2(1 место-99грн)</option>
        <option value="1917">1917</option>
        <option value="Безумный Макс: Дорога ярости">Безумный Макс: Дорога ярости</option>
        <option value="Джанго освобождённый" selected>Джанго освобождённый</option>
        <option value="Ярость" selected>Ярость</option>
        <option value="Одинокий Рейнджер" selected>Одинокий Рейнджер</option>

 
      </select>
      <form method="post" action="movies.php" name="myform">
    <label for="place" id = "text"> Выберите  кол-во мест: </label>
      <select name="place" class = "select-css" >
        <option value="1"selected>1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4" >4</option>
        <option value="5" >5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
   
      <form method="post" action="movies.php" name="myform">
    <label for="session" id = "text"> Выберите  сеанс: </label>
      <select name="session" class = "select-css" >
        <option value="№1"selected>№1</option>
        <option value="№2">№2</option>
        <option value="№3">№3</option>
        
      </select>
      <form method="post" action="movies.php" name="myform">
    <label for="discont" id = "text">Если есть купон на скидку: </label>
      <select name="discont" class = "select-css" >
        <option value="0.10">10%</option>
        <option value="0.15">15%</option>
        <option value="0.30">30%</option>
        <option value="1"selected>Купона нет</option>
        
      </select>
      <button name="formSubmit" id = "style">ОК</button>  
      
    </form>



    
 
</body>
</html>
