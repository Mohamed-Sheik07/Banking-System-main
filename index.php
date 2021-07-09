<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
  <style>
    body{
      background-image: url('img/bg.jpg');
      background-size: 1500px 640px;
      width:100%;
      height:100%;
      
    }
    button{
      margin-top:30%;
      margin-left: 80px;
    
    }
    .r1{
      text-align: center;
    }
    h3{
      color:white;
      font-family:cursive;
      margin-left: 2%;
      margin-top: 30px;
    }
    footer{
      margin-left:85%;
    }
  </style>
  
      
      <!-- Introduction section -->
            
                  <h3>WELCOME<br></h3>
                  <div class="r1">
                  <a href="viewAll.php"><button style="border:solid 3px black; background-color : #2F4F4F;">View All Customers</button></a>
            <a href="transfermoney.php"><button style="background-color : #2F4F4F; border:solid 3px black;">Make a Transaction</button></a>
            <a href="transactionhistory.php"><button style="background-color : #2F4F4F; border:solid 3px black;">Transaction History</button></a>
                 <br>
                </div>
     <footer>
       <strong><p>&copy;2021 MHD SHEIK</p></strong>
     </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </div> 
</body>
</html>