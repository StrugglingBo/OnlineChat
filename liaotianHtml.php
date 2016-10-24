<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/6
 * Time: 17:48
 */
//echo '你好';
require_once 'common.php';

$con = connectDB();
mysqli_select_db($con,'liaotian');
mysqli_query($con,'set names utf8');

if($con){
//    echo "连接成功";
    $sql = 'SELECT * FROM chatinfo';
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) == 0){
        echo '欢迎光临';
    }else{
        $num = mysqli_num_rows($result);
        while ($num > 0){
            $result_array = mysqli_fetch_assoc($result);//关联数组
            $myname = $result_array['myname'];
            $toname = $result_array['toname'];
            $chat = $result_array['chat'];
            $time = $result_array['timer'];

            echo '<br><li style="font-size:20px; color:aqua;">'.$myname.'跟'.$toname.'聊天中 '.$time.'<br>'.$chat.'</li>';

            $num --;
        }
    }
}else{
    echo 'error';
}