<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>数字场景制作平台</title>

    <?php
    header("content-type:text/html;charset=utf-8;");
    require_once "../Service/UserService.class.php";

    $userService=new UserService();
    $arr=$userService->findAll();
    ?>
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
        <div ><a href="./userAdd.php">添加用户</a> </div>


        <table width='700px' border=1 bordercolor='green' cellspacing='0px'>
            <tr><td>id</td><td>用户名</td><td>昵称</td><td>角色名</td><td>编辑</td><td>删除</td></tr>
            <?php
            for($i=0;$i<count($arr);$i++){
                $row=$arr[$i];
                $str="<tr><td>{$row['id']}</td><td>{$row['userid']}</td><td>{$row['username']}</td>"."<td>";
                  if($row['rolename']==1){
                      $str.="系统管理员";
                  }else if($row['rolename']==0){
                      $str.="普通用户</td>";
                  }
                $str.="<td><a href='./userEdit.php?id={$row["id"]}'>编辑用户</a></td>";
                $str.="<td><a href='./userDelete.php?id={$row["id"]}'>删除用户</a></td></tr>";
                echo $str;
            }
            ?>
        </table>
    </div>
</div>
</body>
</html>