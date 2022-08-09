<?php
session_start();

$con = mysqli_connect('localhost','root');
if($con){
//   echo"connection sucessfull";
?>
     <script>
         alert("connection sucessfull");
      </script>
 <?php
}else{
    // echo"no connection";
    ?>
     <script>
         alert("connection sucessfull");
      </script>
 <?php
}
mysqli_select_db($con,'session');

$name = $_POST['user'];
$pass = $_POST['password'];
$q = "select * from signin where username = '$name'&& password = '$pass' ";
$res = mysqli_query($con,$q);
$num= mysqli_num_rows($res);
if($num==1){
    $_session['username']=$name;
    header('location:carorder.php');
}else{
    header('location:log.php');
}
?>
