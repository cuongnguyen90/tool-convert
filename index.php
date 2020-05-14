<?php
header('Content-Type: application/json');
include('controller/C_Films.php');




$controller = new C_Films();

$action = $_GET['action'];

if (isset($_GET['mode'])) {

      switch ($_GET['mode']) {
         case 'films':
            echo $controller->allFilms($action);
            break;
         default:



   }
} else {

   echo "hello !";


}
