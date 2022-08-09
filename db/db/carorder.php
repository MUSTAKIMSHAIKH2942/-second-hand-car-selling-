
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- font awesome kitcode link -->
 <script src="https://kit.fontawesome.com/610aca874a.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="css/style.css">

    <title>car order</title>
  <style> 
   body {
  background-image: url('image/car24.jpg');
  }
  .table,
th,
td {
    border: 0px solid;
    text-align: center;
    background-color: rgb(254, 249, 249);
    margin: 6px 0;
    padding: 10px 20px;
    border-top: var(--border);
    font-size: 2rem;
    color: var(--black);
}
</style>
</head>



<body>
<section class="Our services" id="Our services">

<h1 class="heading"> list of customer <span> who response.</span> 
<a href="logout.php" class="btn "> logout</a></h1>



  
     <div class ="tabel-responsive">
         <table>
             <thead>
                 <tr>
                     <th>SR.NO</th>
                     <th>CARNAME</th>
                     <th>PRICE</th>
                     <th>NAME</th>
                     <th>EMAIL</th>
                     <th>CONTACT</th>                    
                     <th> OFFERED BY CUSTOMER</th>
                     
             </thead>
             <tbody>
             <?php
  
           include 'manage.php';
  

             $selectquery = "select * from cars";  
            $query = mysqli_query($conn,$selectquery); 
            $nums = mysqli_num_rows($query);
            while($res = mysqli_fetch_array($query)){
              
              ?>
              <tr>
           <td><?php echo $res['id'];?></td>           
              <td><?php echo $res['carname'];?></td>
              <td><?php echo $res['price'];?></td>
              <td><?php echo $res['name'];?></td>
              <td> <?php echo $res['email'];?></td>
              <td><?php echo $res['contact'];?></td>
              <td><?php echo $res['offer'];?></td>
              
              
         </tr>
        <?php    
        }
         ?>
            
        
             </tbody>
         </table>
     </div>  
  
    </body>
</html>