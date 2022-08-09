
<?php include("header.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cars</title>
     <!-- bootstrap cdn -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     
<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php 
 
  ?>
  <section class="contact" id="contact">

<h1 class="heading"><span>contact</span> us</h1>

<div class="row">

    
  <div class="col-sm-3">
    <div class="card">
      <form action="" method="post">
    <img src="product-images/10.webp" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title">nano </h5>
    <p class="card-text">price( 77000 rs/-).</p>
    <input type="hidden" name="carname" value="nano 2015">
    <input  type="hidden"  name="price" value="77000 rs">
   
    <input type="text " placeholder="Name" class=" box " name="name"required/>
     <input type="email"  placeholder="email" class="box " name="email" required/>
      <input type="text" pattern="[7-9]{1}[0-9]{9}" id="phone" placeholder="contact " class="box " name="contact" required/>
      <input type="text " placeholder="offer you make " class=" box " name="offer"required/>
<br>
      <input type="submit"  value="submit " class="btn" name= "submit">
      </div>
    </div>
  </div>
  </form>
  <div class="col-sm-3">
    <div class="card">
      <form action="" method="post">
    <img src="product-images/02.webp" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title">sentro 2012</h5>
    <p class="card-text">price( 177000 rs/-).</p>
    <input type="hidden" name="carname" value="sentro 2012">
    <input  type="hidden"  name="price" value="177000 rs">
   
    <input type="text " placeholder="Name" class=" box " name="name"required/>
     <input type="email"  placeholder="email" class="box " name="email" required/>
      <input type="text" pattern="[7-9]{1}[0-9]{9}" id="phone" placeholder="contact " class="box " name="contact" required/>
      <input type="text " placeholder="offer you make " class=" box " name="offer"required/>
<br>
      <input type="submit"  value="submit " class="btn" name= "submit">
      </div>
    </div>
  </div>
  </form>
  <div class="col-sm-3">
    <div class="card">
      <form action="" method="post">
    <img src="product-images/06.webp" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title">hundai  </h5>
    <p class="card-text">price( 200000 rs/-).</p>
    <input type="hidden" name="carname" value="hundai ">
    <input  type="hidden"  name="price" value="200000 rs">
   
    <input type="text " placeholder="Name" class=" box " name="name"required/>
     <input type="email"  placeholder="email" class="box " name="email" required/>
      <input type="text" pattern="[7-9]{1}[0-9]{9}" id="phone" placeholder="contact " class="box " name="contact" required/>
      <input type="text " placeholder="offer you make " class=" box " name="offer"required/>
<br>
      <input type="submit"  value="submit " class="btn" name= "submit">
      </div>
    </div>
  </div>
  </form>
  <div class="col-sm-3">
    <div class="card">
      <form action="" method="post">
    <img src="product-images/07.webp" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title">Chevrolet </h5>
    <p class="card-text">price( 177000 rs/-).</p>
    <input type="hidden" name="carname" value="skoda 2011">
    <input  type="hidden"  name="price" value="177000 rs">
   
    <input type="text " placeholder="Name" class=" box " name="name"required/>
     <input type="email"  placeholder="email" class="box " name="email" required/>
      <input type="text" pattern="[7-9]{1}[0-9]{9}" id="phone" placeholder="contact " class="box " name="contact" required/>
      <input type="text " placeholder="offer you make " class=" box " name="offer"required/>
<br>
      <input type="submit"  value="submit " class="btn" name= "submit">
      </div>
    </div>
  </div>
  </form>
  <div class="col-sm-3">
    <div class="card">
      <form action="" method="post">
    <img src="product-images/07.webp" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title">hundai i10 2015 </h5>
    <p class="card-text">price( 127000 rs/-).</p>
    <input type="hidden" name="carname" value="hundai i10 2015">
    <input  type="hidden"  name="price" value="127000 rs">
   
    <input type="text " placeholder="Name" class=" box " name="name"required/>
     <input type="email"  placeholder="email" class="box " name="email" required/>
      <input type="text" pattern="[7-9]{1}[0-9]{9}" id="phone" placeholder="contact " class="box " name="contact" required/>
      <input type="text " placeholder="offer you make " class=" box " name="offer"required/>
<br>
      <input type="submit"  value="submit " class="btn" name= "submit">
      </div>
    </div>
  </div>
  </form>
  
  

  <?php
include 'manage.php';

 if(isset($_POST['submit'])){

$carname = $_POST['carname'];
$price = $_POST['price'];
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$offer = $_POST['offer'];





$insertquery= "insert into cars(carname,price,name,email,contact,offer) values('$carname','$price','$name','$email','$contact','$offer')";

$res=mysqli_query($conn,$insertquery);

if($res){
     // echo "data insert properly";
    ?>
    <script>
        alert("Request posted ");
    </script>
        <?php
}else{
    ?>
    <script>
        alert("Try again ");
    </script>
        <?php
    }
}
        ?>

  
 

<a href="index.php" class="btn btn-info ">back</a>

<?php include("footer.php")?>


</body>
</html>
</div>