

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!-- font awesome kitcode link -->
    <script src="https://kit.fontawesome.com/610aca874a.js" crossorigin="anonymous"></script>



    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
<?php include("header.php")?>
    <section class="home" id="home">

        
        <h3 data-speed="-2" class="home-parallax">Find your car </h3>
        <img data-speed="5" class="home-parallax" src="image/car123.webp" alt="">
     
        
    </section>

    <section class="Our services" id="Our services">

        <h1 class="heading"> Our <span> services.</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-car"></i>
                <h3>car selling</h3>
                <p>A website for selling second hand cars online. !wanna to buy a car in a sutaible price just contact us </p>

            </div>
</section>

<?php include("availablecar.php")?>

<?php include("contact.php")?>

<?php include("footer.php")?>
    
</body>
</html>

