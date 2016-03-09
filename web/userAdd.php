<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>数字场景制作平台</title>
    <script src="./asssets/js/jquery-2.1.1.js"></script>
    <script type="text/javascript">

    </script>
</head>
<body>
<div id="head" style="">
    <h2 style="width: 100%;margin: 0 auto;border: 1px solid black;text-align: center;">欢迎 <?php session_start();echo $_SESSION['username']."(".$_SESSION['rolename'].")";?>登录</h2>
</div>

<div style="width: 100%;height: 600px;margin: 0 auto;border: 1px solid red;">
    <div name="left"  style="border: 1px solid green;width: 10%;height: 600px;float: left;">
        <div> <a href="./usermanager.php" >用户管理</a></div>
        <div><a href="#">项目信息</a> </div>
        <div><a href="#">图片处理</a> </div>
        <div><a href="#">音频处理</a> </div>
        <div><a href="#">数字场景制作</a> </div>
        <div><a href="#">已完成</a></div>
    </div>

    <div name="right" style="border: 1px solid yellow;width: 89%;height: 600px;float: left;">
        <h2>添加用户</h2>
        <form action="../Controller/userAddProcess.php" method="post">
        <table width='700px' border=0 bordercolor='green' cellspacing='0px'>
            <tr><td>用户名</td><td><input type="text" name="userid"/></td> </tr>
            <tr><td>昵称</td><td><input type="text" name="username"/></td></tr>
            <tr><td>密码</td><td><input type="password" name="pwd"/></td></tr>
            <tr><td>角色名</td><td><input type="text" name="rolename"/></td></tr>
            <tr><td><input type="submit" value="提交"/></td><td><input type="reset" value="重置"/></td> </tr>
        </table>
        </form>
    </div>
</div>
</body>
</html>