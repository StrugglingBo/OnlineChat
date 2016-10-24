<?php
/**
 * Created by PhpStorm.
 * User: wjw
 * Date: 2016/9/4
 * Time: 17:14
 */
if(!isset($_POST['username'])){//检查用户名是否输入
    die('用户名没有输入');
}
if(!isset($_POST['password'])){
    die('密码没有输入');
}

$name = $_POST['username'];
$pass = $_POST['password'];

if(empty($name)){
    die('用户名为空');
}
if(empty($pass)){
    die('密码为空');
}


require_once 'common.php';

$con = connectDB();//连接数据库
mysqli_query($con,'set names utf8');//设置编码格式
mysqli_select_db($con,'liaotian');//选择需要操作的数据库
if($con){
    echo '连接成功';
    mysqli_query($con,"INSERT INTO liaotian(username,password) VALUES('$name','$pass')");//向数据库存入数据
    if(mysqli_errno($con)){
        echo '出错了'.mysqli_errno($con);
    }else{
        header('Location;liaotian');
        header('Location:login.html');
    }
    mysqli_close($con);
}else{
    echo '连接失败';
}