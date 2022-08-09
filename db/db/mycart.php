
<?php

include ("header.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <head>
    <body>
        
 
    <table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">sr no.</th>
      <th scope="col">car name</th>
      <th scope="col">price</th>

    </tr>
  </thead>
  <tbody class="text-center">
      <?php
      if(isset($_SESSION['cart']))
      { 
      foreach($_SESSION['cart'] as $key => $value)
      {
          print_r($value);
          echo"
      
    <tr>
      
      <td>1</td>
      <td>$value[car_name]</td>
      <td>$value[car_price]</td>
      <td><button class='btn btn-sm btn-outline-danger'>remove</button><td>
    </tr>";
      }
    }
    ?>
  </tbody>
</table>

    
</body>
</html>