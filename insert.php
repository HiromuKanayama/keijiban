<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");

$pdo->exec("insert into 4each_kejiban(handlname,title,comments)
values('".$_POST['handlname']."','".$_POST['title']."','".$_POST['comments']."');");

header("Location:http://localhost/4each_kejiban/index.php");

?>