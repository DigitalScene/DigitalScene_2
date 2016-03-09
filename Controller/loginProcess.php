<?php
require_once "../Service/UserService.class.php";
require_once "../Utils/ToMessage.class.php";

$userid=$_GET['userid'];
$pwd=$_GET['pwd'];

$userservice=new UserService();

$tomessage=new tomessage();

$user=$userservice->findUser($userid);


if(!empty($user)&&$user!=""){
    if($pwd==$user->getPassword()){
        //登录验证成功
        session_start();
        if($user->getRolename()==1){
            $rolename="系统管理员";
            $_SESSION["rolename"] =$rolename;
            $_SESSION["username"] =$user->getUsername();
            $tomessage->trace("登录成功，正在转向管理主页","../web/index.php",500);
        }else if($user->getRolename()==0){
            $rolename="普通用户";
            $_SESSION["rolename"] =$rolename;
            $_SESSION["username"] =$user->getUsername();
            $tomessage->trace("登录成功，正在转向管理主页","../web/index.php",500);
        }

    }else{
        //密码错误
      $tomessage->trace("密码错误",-1,1000);
    }
}else{
    $tomessage->trace("用户不存在",-1,1000);
}


?>