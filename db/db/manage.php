<?php
$username="root";
$password="";
$server='localhost';
$db='cars';

$conn = mysqli_connect($server,$username,$password,$db);

if($conn){
   // echo "connection successful";
   ?>
   <script>
        alert(" cars connection successful");
    </script>
        <?php
}else{
    echo " no connection";
}
?>