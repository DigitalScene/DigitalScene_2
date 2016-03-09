<?php

require_once "../Model/user.class.php";
require_once "../Utils/SqlHelper.class.php";


class UserService{

    public function findUser($userid){
        $sql="select * from user WHERE userid='$userid'";
        $SqlHelper=new SqlHelper();
        $arr=$SqlHelper->execute_dql2($sql);


        if(sizeof($arr)==1){
            $user=new user();
            $user->setId($arr[0]['id']);
            $user->setUserid($arr[0]['userid']);
            $user->setUsername($arr[0]['username']);
            $user->setPassword($arr[0]['password']);
            $user->setRolename($arr[0]['rolename']);
            return $user;
        }else{
            return null;
        }

    }

    public function findAll(){
        $sql="select * from user";
        $sqlHelper=new SqlHelper();
        $arr=$sqlHelper->execute_dql2($sql);
        return $arr;
    }

    public function addUser($userid,$username,$password,$rolename){
        $sql="insert into user (userid,username,password,rolename) values('$userid','$username','$password','$rolename')";
        $sqlHelper=new SqlHelper();
        $res=$sqlHelper->execute_dml($sql);
        return $res;
    }

    public function checkUser(){

    }

    public function findUserById($id){
        $sql="select * from user WHERE id='$id'";
        $SqlHelper=new SqlHelper();
        $arr=$SqlHelper->execute_dql2($sql);


        if(sizeof($arr)==1){
            $user=new user();
            $user->setId($arr[0]['id']);
            $user->setUserid($arr[0]['userid']);
            $user->setUsername($arr[0]['username']);
            $user->setPassword($arr[0]['password']);
            $user->setRolename($arr[0]['rolename']);
            return $user;
        }else{
            return null;
        }

    }

    public function updateUser($id,$userid,$username,$pwd,$rolename){
        $sql="update user set userid='$userid' and username='$username' and pwd='$pwd' and rolename='$rolename' WHERE id='$id'";
        $SqlHelper=new SqlHelper();
        $res=$SqlHelper->execute_dml($sql);
        return $res;

    }


}

?>