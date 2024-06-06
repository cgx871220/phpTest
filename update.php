<?php
@require_once('link.php');
$sql = "UPDATE `user` SET  `password`='5487' WHERE `id` = 2";

$result = mysqli_query($link,$sql);

if(mysqli_affected_rows($link) >0){
    echo "已更新";
}
elseif(mysqli_affected_rows($link) == 0){
    echo "沒得更新";
}
else{
    echo "錯誤";
}




?>