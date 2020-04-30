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
include_once "action.php";
$str_form_sort = '<h3 style = color:black;>Сортировать по:</h3>
<form  name="sortForm"   method="post">
 <select name="sort"style = height:40px; class = "select-css"  >
   <option value="name">Названию фильма</option>
   <option value="genre">Жанру</option>
   <option value="producer">Режиссеру</option>
   <option value="yearofcreation">по дате выпуска</option>
   <option value="rating">по рейтингу</option>
   <option value="Sessions">по началу сеанса</option>
   <option value="actors">по актерам</option>
 </select>
 <input name="gosort" type="submit" id = "style" value="Подтвердить">
</form>';
echo $str_form_sort;


    if (isset($_POST['gosort'])) {
    sorting($_POST['sort']);
}

$out = out_arr();

if (count($out) > 0) {
    foreach ($out as $row) {
        echo $row;
    }
} else
    echo "Нет данных...";

if (isset($_POST['gosearch'])) {
    $data = test_input($_POST['search']);
    $out = out_search($data);


    if (count($out) > 0) {
        foreach ($out as $row) {
            echo $row;  
        }
    } else
        echo "Ничего не найдено...";
    

    
}
$str_form_search = "<h3 style = color:black;>Поиск:</h3>
			<form  name='searchForm' id = 'searchForm'  method='post'  >
              <input type='text'style = height:40px;  name='search' class = 'select-css' >
 			 <input type='submit'  id = 'style' name='gosearch'  value='Подтвердить'>
              <input type='submit' id = 'style' name='clear' value='Сбросить'>
              
 		     </form>";

    echo $str_form_search;
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
