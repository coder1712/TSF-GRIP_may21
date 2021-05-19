
<?php
include 'connection.php';

if (isset($_POST['submit'])) {

    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];
    $sql = "select * from customer where id=$from";
    $query = mysqli_query($con, $sql);
    $sql1 = mysqli_fetch_array($query); // returns Sender details.

    $sql = "select * from customer where id=$to";
    $query = mysqli_query($con, $sql);
    $sql2 = mysqli_fetch_array($query);

    // constraint to check negative value by user
    if (($amount) < 0) {
        echo '<script type="text/javascript">';
        echo ' alert("Wrong Amount Values")';
        echo '</script>';
    }

    // constraint to check balance.
    else if ($amount > $sql1['amount']) {

        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }

    // constraint to check zero values
    else if ($amount == 0) {

        echo "<script type='text/javascript'>";
        echo "alert('No amount added')";
        echo "</script>";
    } else {

        // deducting amount from sender's account
        $newbalance = $sql1['amount'] - $amount;
        $sql = "update customer set amount=$newbalance where id=$from";
        mysqli_query($con, $sql);


        // adding amount to reciever's account
        $newbalance = $sql2['amount'] + $amount;
        $sql = "update customer set amount=$newbalance where id=$to";
        mysqli_query($con, $sql);

        $sender = $sql1['customer_name'];
        $sender_email = $sql1['email'];
        $receiver = $sql2['customer_name'];
        $receiver_email = $sql2['email'];
        $sql = "insert into transactions values ('$sender', '$sender_email', '$receiver', '$receiver_email', '$amount')";
        $query = mysqli_query($con, $sql);

        if($query) {
            echo "<script> alert('Transaction Successful');
            window.location='transactions.php';
                   </script>";

        }

        $newbalance = 0;
        $amount = 0;
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Transaction</title>
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

<div class="container">
  <h2>Customers</h2>           
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Customer_ID</th>
        <th>CustomerName</th>
        <th>Email</th>
        <th>Amount</th>
      </tr>
    </thead>
    <tbody>
    <?php
      include 'connection.php';
      $Sender_id = $_GET['id'];
      $selectquery = "select * from customer where id = $Sender_id";
      $query = mysqli_query($con, $selectquery);
      if (!$query) {
        echo "error";
    }
    

      while($res = mysqli_fetch_array($query))
      {
        ?>
        <form method="post" name="tcredit" class="tabletext"><br>
        <tr>
        <td> <?php echo $res['id'];?> </td>
        <td> <?php echo $res['customer_name'];?> </td>
        <td> <?php echo $res['email'];?> </td>
        <td> <?php echo $res['amount'];?> </td>
       </tr>
      <?php
      }
      ?>
    </tbody>
  </table>

  <label style="color : black;"><b>Transfer To:</b></label>
        <select name="to" class="form-control" required>
             <option value="" disabled selected>Choose</option>
             <?php
             include 'connection.php';
            $Sender_id = $_GET['id'];
            $sql = "select * from customer where id!=$Sender_id";
            $query = mysqli_query($con, $sql);
           if (!$query) {
                echo "Error ";
            }
            while ($res = mysqli_fetch_array($query)) {
             ?>
                <option class="table" value="<?php echo $res['id']; ?>">

                    <?php echo $res['customer_name']; ?> (Balance:
                    <?php echo $res['amount']; ?> )

                </option>
                <?php
                }
                ?>
                <div>
            </select>
            <br>
            <br>
            <label style="color : black;"><b>Amount:</b></label>
            <input type="number" class="form-control" name="amount" required>
            <br><br>
            <div class="text-center">
                <button class="btn mt-3" name="submit" type="submit" id="myBtn">Transfer</button>
            </div>
    </form>     

</div>



    <!--Footer-->
     <footer>
    <p class="text-center bg-dark text-white"> @ Copyright Anshul Rana</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    </body>