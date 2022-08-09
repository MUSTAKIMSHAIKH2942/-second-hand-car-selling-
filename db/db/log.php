<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log</title>
    <script src="https://kit.fontawesome.com/610aca874a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
 
 .grid-container {
  
  grid-template-columns: auto auto auto;
  background-color: #2196F3;
  padding: 0px;
  
}
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 30px;
  font-size: 20px;
  text-align: left;
}

</style>
</head>
<body>

<script>

function content1(){

document.getElementById("div1").style.display="block"; document.getElementById("div2").style.display="none";
}
function content2() {
document.getElementById("div1").style.display="none"; document.getElementById("div2").style.display="block";
}

</script>

   
<h1 class="heading"><i class="fas fa-car"></i> login <span>form</span> </h1>
<div class="col-md-5 col-sm-5 col-12">


<button class="btn "  onclick ="content2()" >Login </button>


          <section>
          <div id="div1" style="display:none" class="mt-4">
           <div class="grid-container">
             <div class="grid-item">
             <i class="fas fa-user-plus"></i><br><h2>create an account</h2><br>
         <form action="registration.php" method="post">
         <label for="Name">Name</label><br>
               <input type="text " placeholder="Name" class=" box " name=""required/><br></br>
               <label for="contact">Contact</label><br>
               <input type="tel " placeholder="Contact no." class=" box " name=""required/><br></br>
               <label for="username">Username</label><br>
               <input type="text " placeholder="user name" class=" box " name="user"required/><br></br>
               <label for="fname">password</label><br>
               <input type="password " placeholder="password " class="box " name="password"required> <br>               
                <input type="submit" value="submit" class="btn" >
      </form>
   </div>
  </div>
</div>


          <div id="div2" style="display:none" class="mt-4">
           <div class="grid-container">
             <div class="grid-item">
             <i class="fas fa-users "></i><br><h2>Enter username and passsword</h2><br>
         <form action="validation.php" method="post">
               <label for="username">Username</label><br>
               <input type="text " placeholder="user name" class=" box " name="user"required/><br></br>
               <label for="fname">password</label><br>
               <input type="password " placeholder="password " class="box " name="password"required> <br>               
                <input type="submit" value="submit" class="btn" >
      </form>
   </div>
  </div>
</div>
</section>

 <?php include "footer.php" ?>

    
</body>

</html>
<?php


    if(isset($_POST['submit'])){

        $email = $_SESSION['email']-$_POST['email'];
        $pwd = $_POST['password'];
        $sql="select from register where email '$email";

        $run= mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($run);
        $pwd_fetch=$row['password'];
        $pwd_decode= password_verify($pwd, $pwd_fetch);

        if($pwd_decode){
        echo "<script>window.open('carorder.php ?success-Login successfully', '_self')</script>";
        } else{
        echo "<script>window.open('index.php?error-Username or password is incorrect', '_self')</script>";

        }
    }
?>