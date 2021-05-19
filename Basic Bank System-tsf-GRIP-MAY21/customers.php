<!DOCTYPE html>
<html>
    <head>
    <title>Customers</title>
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
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="transactions.php">Transactions</a>
      </li>
    </ul>
    </div>
    </nav> 

    
     <!--table-->
     <div class="container">
  <h2>Customers</h2>           
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Customer_ID</th>
        <th>CustomerName</th>
        <th>Email</th>
        <th>Amount</th>
        <th>Transfer</th>
      </tr>
    </thead>
    <tbody>
    <?php
      include 'connection.php';
      $selectquery = "select * from customer";
      $query = mysqli_query($con, $selectquery);

      while($res = mysqli_fetch_array($query))
      {
        ?>
        <tr>
        <td> <?php echo $res['id'];?> </td>
        <td> <?php echo $res['customer_name'];?> </td>
        <td> <?php echo $res['email'];?> </td>
        <td> <?php echo $res['amount'];?> </td>
        <td><a href="payment.php?id= <?php echo $res['id']; ?>"> <button type="button" class="btn" style="background-color : #ff4d4d;">Transfer</button></a></td>
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
