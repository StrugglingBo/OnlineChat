<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>聊天室</title>
    <script src="jquery-3.0.0.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        *{
            margin: 0;
            padding:0;
        }
        #p{
            font-size:40px;
            color:deeppink;

        }
        #div{
            width: 400px;
            height: 500px;
            border:1px solid aqua;
            overflow: auto;
            overflow-x: hidden; /*禁用横向滚动条*/

        }

        input{
            width: 90px;
            height: 20px;

        }
        body{
            background:url("Img/2.jpg") no-repeat;
            background-size: 100% 100%;
            background-attachment: fixed; /*指定单个图片铺满屏幕*/
        }
    </style>
</head>
<body>
    <p id="p" style="position: absolute;left: 1000px;top:25px;">欢迎进入聊天室</p>

    <div style="position: absolute;left: 950px;top: 70px;">

        <div id="div">
            <ul></ul>
        </div>

        <div>
            <form>
                <input type="text" placeholder="请输入你是谁" id="myname" value="<?php echo $_COOKIE['username']?>">
                <input type="text" placeholder="请输入聊天对象" id="toname">
                <input type="text" placeholder="请输入聊天内容" id="chat">
<!--                <input type="button" value="发送" id="btn">-->
                <button type="button" class="btn btn-success" id="btn">发 送</button>
            </form>
        </div>

    </div>


<script>
    $(function () {
        $('#btn').click(function () {
            var myname = $('#myname').val();
            var toname = $('#toname').val();
            var chat = $('#chat').val();

//            console.log(myname,toname,chat);
            $.ajax({
                url:'chatinfo.php',
                type:'post',
                dataType:'text',
                data:{'myname':myname,'toname':toname,'chat':chat},
                success:function (data) {
//                    console.log('回调函数'+data);

                },
                error:function () {
                    console.log('错误');
                }
            });
        })
    })


    var xhr = null;
    if(XMLHttpRequest){
        xhr = new XMLHttpRequest();
    }else {
        xhr = new ActiveXObject('Microsoft.XMLHTTP');
    }

    var time = setInterval(function () {
        xhr.open('get','liaotianHtml.php',true);
        xhr.send();

        xhr.onreadystatechange = function () {
//        console.log(xhr.readyState);
            if(xhr.readyState == 4){
                if(xhr.status == 200){
//                console.log(xhr.responseText);
                    var ul = document.getElementsByTagName('ul')[0];
                    ul.innerHTML = xhr.responseText;

                }
            }
        }
    },400);
</script>

</body>
</html>