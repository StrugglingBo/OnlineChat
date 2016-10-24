<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/5
 * Time: 20:48
 */
if(!isset($_POST['myname'])){
    header('Location:login.html');
}

$myname = $_POST['myname'];
$toname = $_POST['toname'];
$chat = $_POST['chat'];

echo $myname,$toname,$chat;

date_default_timezone_set('Asia/Shanghai');//获取当前时间
$time = date('Y-m-d H:i:s',time());
//echo $time;

if(empty($toname)){
    $toname = 'all';
}
if(empty($chat)){//当输入的信息为空时，程序死掉，将发送不了消息；
    die();
}


require_once 'common.php';

$con = connectDB();
mysqli_select_db($con,'liaotian');
mysqli_query($con,'set names utf8');

if($con){
//    echo "连接成功";
    $result ="insert into chatinfo(myname,toname,chat,timer)VALUES ('$myname','$toname','$chat','$time')";

    mysqli_query($con,$result);
    if(mysqli_errno($con)){
        echo '出错了';
    }else{
//        echo '数据插入成功';
    }

    mysqli_close($con);
}else{
    echo '连接成功';
}