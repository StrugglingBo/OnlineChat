<?php
/**
 * Created by PhpStorm.
 * User: wjw
 * Date: 2016/9/4
 * Time: 17:09
 */
define('mysql_host','localhost');
define('mysql_name','root');
define('mysql_pass','');

function connectDB(){
    return mysqli_connect(mysql_host,mysql_name,mysql_pass);
}