<?php
session_start();
header('location:log.php');
$con = mysqli_connect('localhost','root');
if($con){
//  echo"connection sucessfull";
?>
     <script>
        alert("connection sucessfull");
     </script>
    <?php
}else{
    // echo"no connection";
    ?>
     <script>
        alert(" no connection!");
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
    echo"dublicate data";
}else{
    $qy="insert into signin(username , password)values('$name','$pass')";
 
    mysqli_query($con,$qy);
}
?>
