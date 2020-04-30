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
