<?php
$v = "";
$f = "";
$s = "";
$d = "";
if (isset($_POST['formSubmit'])) {
    $v = $_POST['movie'];
    $f = $_POST['place'];
    $s = $_POST['session'];
    $d = $_POST['discont'];
    $movie = $_POST['movie'];
    $place= $_POST['place'];
    $session = $_POST['session'];    
    $discont = $_POST['discont'];
 
 
    $redir = "info.php";
    switch ($v) {
        case "Безумный Макс: Дорога ярости":$redir = "info.php";
            break;
        case "Джанго освобождённый":$redir = "info.php";
            break;
        case "Джон Уик":$redir = "info.php";
            break;
        case "Одинокий Рейнджер":$redir = "info.php";
            break;
        case "Ярость":$redir = "info.php";
            break;
            case "1917":$redir = "info.php";
        break;
        default:echo ("Error!");exit();
            break;
    }
    $redir = "info.php";
    switch ($f) {
        case "1":$redir = "info.php";
            break;
        case "2":$redir = "info.php";
            break;
        case "3":$redir = "info.php";
            break;
        case "4":$redir = "info.php";
            break;
        case "5":$redir = "info.php";
            break;
        case "6":$redir = "info.php";
                break;
        case "7":$redir = "info.php";
               break;
        case "8":$redir = "info.php";
               break;
        case "9":$redir = "info.php";
              break;
        case "10":$redir = "info.php";
              break;
        default:echo ("Error!");exit();
            break;
    }
    $redir = "info.php";
    switch ($s) {
        case "№1":$redir = "info.php";
            break;
        case "№2":$redir = "info.php";
            break;
        case "№3":$redir = "info.php";
            break;
            
        default:echo ("Error!");exit();
            break;
    }
    $redir = "info.php";
    switch ($d) {
        case "0.10":$redir = "info.php";
            break;
        case "0.15":$redir = "info.php";
            break;
        case "0.30":$redir = "info.php";
            break;
            case "1":$redir = "info.php";
            break;
        default:echo ("Error!");exit();
            break;
    }
    header("Location: $redir?movie=$movie&place=$place&session=$session&discont=$discont");
    exit();
}
