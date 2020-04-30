<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.table_dark {
  font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
  font-size: 14px;
  width: 640px;
  text-align: left;
  border-collapse: collapse;
  background: #252F48;
  margin: 10px;
  border: 16px white;
  border-radius: 20px;
}
.table_dark th {
  color: #EDB749;
  border-bottom: 1px solid #37B5A5;
  padding: 12px 17px;
  
  
}
.table_dark td {
  color: #CAD4D6;
  border-bottom: 1px solid #37B5A5;
  border-right:1px solid #37B5A5;
  padding: 7px 17px;
  
 
}
.table_dark tr:last-child td {
  border-bottom: none;
}
.table_dark td:last-child {
  border-right: none;
}
@media only screen and (max-width: 800px),(min-device-width: 320px) and (max-device-width: 600px){ /* Force table to not be like tables anymore */ 
table#mceItemTable, table#mceItemTable thead, table#mceItemTable tbody, table#mceItemTable th, table#mceItemTable td, table#mceItemTable tr {display: block;word-break:break-all;} }
    </style>
</head>
<body>
<?php
include "db.php";
function out_arr() {
    global $films;
    $arr_out = array();
    $arr_out[] = "<table id = 'mceItemTable' class='table_dark'  border =  '1' >";
    $arr_out[] = "<tr><td>№</td><td>Название/страна</td><td>Жанр</td><td>Режиссер</td><td>Слоган</td><td>Актеры(в главной роли)</td><td>Рейтинг</td><td  colspan='3' style = text-align:center;>Сеансы</td><td colspan='1' style = text-align:center;>Цена/свободно мест</td><td>Год выпуска</td></tr>";
    foreach ($films as $film) {
        static $i = 1;
       
        $str = "<tr>";
        $str .= "<td>" . $i . "</td>";
        foreach ($film as $key => $value) {
            if (!is_array($value))
                $str .= "<td>$value</td>";
            else {
                foreach ($value as $k => $v)
                    $str .= "<td>$v</td>";
            }
        }
        $str .= "</tr>";
        $arr_out[] = $str;
        $i++;
    }
    $arr_out[] = "</table>";
    return $arr_out;
}

function out_arr_search(array $arr_index = null) {
    global $films; 
    $arr_out = array();
    $arr_out[] = "<table id = 'mceItemTable' class='table_dark'  border =  '1' >";
    $arr_out[] = "<tr><td>№</td><td>Название/страна</td><td>Жанр</td><td>Режиссер</td><td>Слоган</td><td>Актеры(в главной роли)</td><td>Рейтинг</td><td  colspan='3' style = text-align:center;>Сеансы</td><td colspan='1' style = text-align:center;>Цена/свободно мест</td><td>Год выпуска</td></tr>";
    foreach ($films as $index => $film) {
        if ($arr_index != null && in_array($index, $arr_index)) {
            static $i = 1;
            $str = "<tr>" . "<td>" . $i . "</td>";
            foreach ($film as $key => $value) {
                if (!is_array($value)) {
                    $str .= "<td>$value</td>";
                } else {
                    foreach ($value as $k => $v) {
                        $str .= "<td>$v</td>";
                    }
                }
            }
            $str .= "<td>" . "</td></tr>";
            $arr_out[] = $str;
            $i++;
        }
    }
    $arr_out[] = "</table>";
    return $arr_out;
}

function test_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

function out_search($data) {
    global $films;   
    $arr_index = array();
    foreach ($films as $film_number => $film) {
        foreach ($film as $key => $value) {
            if (!is_array($value)) {
                if (strstr($value, $data)){
                    $arr_index[] = $film_number;
                }
            }
            else {
                foreach ($value as $k => $v) {
                    if (strstr($v, $data) || strstr($k, $data)) {
                        $arr_index[] = $film_number;
                    }
                }
            }
        }
    }
    return out_arr_search(array_unique($arr_index));
}

function check_autorize($log, $pas) {
    global $users;
    if (in_array($log, $users)) {
        return true;
    } else {
        return false;
    }
}

function check_admin($log, $pas) {
    global $users;
    if (in_array($log, $users) && ($pas == $users["admin"])) {
        return true;
    } else {
        return false;
    }
}

function check_log($log) {
    if ($log == "admin") {
        return true;
    } else {
        return false;
    }
}

function name($a, $b) { 
    if ($a["name"] < $b["name"])
        return -1;
    elseif ($a["name"] == $b["name"])
        return 0;
    else
        return 1;
}

function genre($a, $b) { 
    if ($a["genre"] < $b["genre"])
        return -1;
    elseif ($a["genre"] == $b["genre"])
        return 0;
    else
        return 1;
}

function producer($a, $b) { 
    if ($a["producer"] < $b["producer"])
        return -1;
    elseif ($a["producer"] == $b["producer"])
        return 0;
    else
        return 1;
}

function yearofcreation($a, $b) { 
    if ($a["yearofcreation"] < $b["yearofcreation"])
        return -1;
    elseif ($a["yearofcreation"] == $b["yearofcreation"])
        return 0;
    else
        return 1;
}
function rating($a, $b) { 
    if ($a["rating"] < $b["rating"])
        return -1;
    elseif ($a["rating"] == $b["rating"])
        return 0;
    else
        return 1;
}
function Sessions($a, $b) { 
    if ($a["Sessions"] < $b["Sessions"])
        return -1;
    elseif ($a["Sessions"] == $b["Sessions"])
        return 0;
    else
        return 1;
}
function actors($a, $b) { 
    if ($a["actors"] < $b["actors"])
        return -1;
    elseif ($a["actors"] == $b["actors"])
        return 0;
    else
        return 1;
}
function sorting($p) {
    global $films;
    uasort($films, $p);
}
?>
</body>
</html>

