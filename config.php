<?php
$host = 'localhost';
$db = 'cagar_budaya';
$user = 'root';
$pass = 'Febi Salsabila';

$conn = new PDO('mysql:host='.$host.';cagar_budaya='.$db.'', $user, $pass);  
if($conn){
    echo 'connect';
}else{
    echo 'not connect';
}

?>