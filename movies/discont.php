<?php
      $ticket = 99;
      $pl =  $ticket*$_GET['place'];
      $dis = $pl*$_GET['discont'];
      $p = $pl - $dis;
      if($_GET['discont'] == 1){
         echo  "Ваша цена"." ". $pl."грн"." "."без скидки";
      }
      else{
          
           echo  "Ваша цена"." ". $p."грн"." "."со скидкой по купону";
      }   
     