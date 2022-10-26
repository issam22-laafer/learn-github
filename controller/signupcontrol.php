<?php
include("../model/signupmodel.php");
// require "signupmodel.php";
?>
<?php



if(isset($_POST['submit'])){

if(isset($_POST['name'])&&isset($_POST['lastname'])&&isset($_POST['username'])&&isset($_POST['email'])&&isset($_POST['password'])){

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$user = new Userr;
$check = $user->check_existence($name,$lastname);
if($check ==TRUE){

        $user->ajouter($name,$lastname,$username,$email,$password);

        $mssg = "<p style='color : BLACK'>user added succefully</p>";



}else{

       $mssg =  $user->show();
}


}
}

?>