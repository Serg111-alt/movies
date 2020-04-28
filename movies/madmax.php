<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
    #style {
  font-size:30px; 
  background:yellow;
    }
    #button4 {
  background: #5c5c5c;
  text-shadow: 0px 2px 0px rgba(0, 0, 0, 0.3);
  font-size: 22px;
  height: 58px;
  width: 155px;
  margin: 50px 0 0 50px;
  overflow: hidden;
  display: block;
  text-align: center;
  line-height: 58px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  text-decoration:none;
    }
.cont{  
    padding:580px 340px  20px;
}

    </style>
</head>
<body>
     <div class = "cont">
    <img src="images/video.png" alt="">
    <p id = "style">Вы выбрали фильм <?=$_GET['stars']?> Кол-во мест  <?=$_GET['place1']?></p>
    <form method="post" action="movies.php" name="myform">
    <label for="place1"> Выберите  кол-во мест: </label>
      <select name="place1">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4" >4</option>
        <option value="5" selected>5</option>
        <option value="6">6</option>
        <option value="7">7</option>
      </select>
      <button name="formSubmit">ОК</button>
      </form>
      <?php
     $s = 99;
     echo  "Ваша цена"." ". $s*$_GET['place1'];
     ?>
      <a href="" id="button4">Оплата</a>
      
     </div>
   
</body>
</html>
