<?php
require_once '../Service/UserService.class.php';

$id=$_POST['id'];
$userid=$_POST['userid'];
$username=$_POST['username'];
$pwd=$_POST['pwd'];
$rolename=$_POST['rolename'];

$userService=new UserService();
$userService->updateUser($id,$userid,$username,$pwd,$rolename);
header("location:../web/usermanager.php");

?>