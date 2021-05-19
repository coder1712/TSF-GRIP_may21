<!DOCTYPE html>
<html>
    <head>
    <title>Transactions</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">
    </head>
    <body>
         <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
    <img src="https://www.logodesign.net/logo/piggy-bank-merged-with-a-bank-building-4574ld.png?size=2&industry=bank&bg=0" width="30" height="30" alt="">
    </a>
  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="customers.php">Customers</a>
      </li>
    </ul>
    </div>
    </nav>

     <!--Transactions table-->
  <div class="container">
  <h2>Transactions History</h2>           
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Sender Name</th>
        <th>Sender Email</th>
        <th>Receiver</th>
        <th>Receiver Email</th>
        <th>Transferred Amount</th>
      </tr>
    </thead>
    <tbody>
    <?php
      include 'connection.php';
      $selectquery = "select * from transactions";
      $query = mysqli_query($con, $selectquery);

      while($res = mysqli_fetch_array($query))
      {
        ?>
        <tr>
        <td> <?php echo $res['Sender'];?> </td>
        <td> <?php echo $res['Sender_email'];?> </td>
        <td> <?php echo $res['Receiver'];?> </td>
        <td> <?php echo $res['Receiver_email'];?> </td>
        <td> <?php echo $res['Transffered_Amount'];?> </td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>

     <!--Footer-->
     <footer>
    <p class="text-center bg-dark text-white"> @ Copyright Anshul Rana</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
<?php
include 'connection.php'?>