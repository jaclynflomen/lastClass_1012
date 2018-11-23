<?php 

$user = "root";
$pwd = "root";

try {
    $conn = new PDO('mysql:host=localhost;dbname=vue_video',$user, $pwd);

} catch (PDOException $exception) {
    echo 'connect error!' . $exception->getMessage();
}

?>