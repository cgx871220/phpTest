<?php
@require_once 'link.php';

$array = array();
$sql = "SELECT * FROM `user` WHERE `name` ='阿喵'";

$result = mysqli_query($link,$sql);

if(mysqli_num_rows($result)>0){
   

    while($row = mysqli_fetch_array($result)){
        $array[] = $row;
    }
}
elseif(mysqli_num_rows($result)==0){
    echo "沒資料";

}
else{
    echo "錯誤";
}


?>

<body>
    <?php if(!empty($array)):?>
        <?php foreach($array as $index => $data):?>
        
        <li>
            第<?php echo $index+1;?>筆資料
            帳號:<?php echo $data['username'];?>
            密碼:<?php echo $data["password"];?>
        </li>

        <?php endforeach;?>

    <?php else:?>
        echo "空資料";
    <?php endif;?>


</body>