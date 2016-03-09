<?php
require_once "../Service/UserService.class.php";

$userid=$_POST['userid'];
$username=$_POST['username'];
$pwd=$_POST['pwd'];
$rolename=$_POST['rolename'];

$userService=new UserService();
$res=$userService->addUser($userid,$username,$pwd,$rolename);
header("location:../web/usermanager.php");
?>