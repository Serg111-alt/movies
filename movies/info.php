<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <style>
    
    #style {
  font-size:30px; 
  color:black;
    }
    #button4 {
  background: #5c5c5c;
  text-shadow: 0px 2px 0px rgba(0, 0, 0, 0.3);
  font-size: 22px;
  height: 58px;
  width: 155px;
  margin: 10px 0 0 200px;
  overflow: hidden;
  display: block;
  text-align: center;
  line-height: 58px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  text-decoration:none;
  
    }

.place{
  color:red;
}
div.relative {
    position: relative;
    bottom: -700px;
    border: 3px solid #73AD21;
}

    </style>
</head>
<body>
     <div class="relative" id = "style">
    <img src="images/video.png" alt="">
    <p>Вы выбрали фильм <?=$_GET['movie']?>,сеанс <?=$_GET['session']?> Кол-во мест  <?=$_GET['place']?>      
     <?php
      include "discont.php";  
     ?>
    
     <a href="" id="button4" >Оплата</a>
     <a href="content.php" id="button4">Назад</a>
     </div>
     
</body>
</html>
