<?php
@require_once('link.php');

$sql = "INSERT INTO `user` (`username`,`password`,`name`) VALUE ('Mr.bean','55688','豆豆先生')";


$result = mysqli_query($link,$sql);

if(mysqli_affected_rows($link)>0){
    $newID = mysqli_insert_id($link);


    echo "新增的資料ID為${newID}";
}
elseif(mysqli_affected_rows($link)==0){
    echo "沒有新增資料";
}
else{
    echo "出現錯誤";
}


?>