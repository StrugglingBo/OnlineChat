<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/5
 * Time: 8:18
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
//    echo '连接成功';
    $result = mysqli_query($con,"SELECT * FROM liaotian WHERE username='$name'");//获取数据库中的数据
    if(mysqli_num_rows($result) == 0){
        header('Location:index.html');//未获取到数据库中存放的用户名，则返回注册界面
    }else{
        $result_array = mysqli_fetch_assoc($result);
        $password = $result_array['password'];

        if($pass == $password){
//            echo '登录成功';
            setcookie('username',$name);//setcookit方式是从浏览器中拿到$name值
            header('Location:liaotian.php');
        }else{
            echo '用户名或密码不匹配';
        }
    }
    mysqli_close($con);
}else{
    echo '连接失败';
}
