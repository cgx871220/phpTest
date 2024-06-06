<?php
$host = '127.0.0.1';
$user = 'root';
$password = 'password';
$database = 'my_db';


$link = mysqli_connect($host,$user,$password,$database);


if($link){
    mysqli_query($link,"SETS NAMES utf8");
}
else{
    echo "連線錯誤". mysqli_error($link);
}
?>