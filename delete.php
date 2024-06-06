<?php
    @require_once('link.php');



    $sql = "DELETE FROM `user` WHERE `username` = 'Mr.bean'";

    $result = mysqli_query($link,$sql);


    if(mysqli_affected_rows($link)>0){
        echo "刪除";
    }
    elseif(mysqli_affected_rows($link)==0){
        echo "沒有刪到";
    }else{
        echo "錯誤";
    }



?>