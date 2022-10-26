<?php
include("../model/signin_model.php");
session_start();
if(isset($_POST['login'])){

if(isset($_POST['username'])&&isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = new Userr;
        $check = $user->check_existence($username,$password);
        if($check == FALSE){
                $_SESSION['userr']= $_POST['username'];
                header("location:../view/welcomepage.php");
                $mssg = '<p style="color:red">password or username are correct</p>';
        }
        else{
                $mssg = '<p style="color:red">password or username are incorrect</p>';
        }


}



}



?>