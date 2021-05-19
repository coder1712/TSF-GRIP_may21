<!DOCTYPE html>
<html>
    <head>
    <title>Home</title>
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
        <a class="nav-link" href="customers.php">Customers <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="transactions.php">Transactions</a>
      </li>
    </ul>
    </div>
 
</nav>

      <!--about Bank-->
        <section>
            <div class="container-fluid">
                <h1 class="text-center text-capitalize pt-5">About Us</h1>
                <hr class="w-25 mx-auto pt-5">

                <div class="row mb-5">
                    <div class="col-lg-6 col-md-6 col-12"><img src="https://images.unsplash.com/photo-1541354329998-f4d9a9f9297f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFuayUyMGJ1aWxkaW5nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid"></div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <h1>Who are we?</h1>
                        <hr>
                        <p>Established in 2021. Build for The Sparks Foundation GRIP-MAY-2021.It is an online bank where one user can transfer money from his account to other.</p>
                    </div>
                </div>

            </div>
        </section>

        <!--User Interface-->
        <section>
        <div class="container">
            <hr class="w-25 mx-auto pt-5">

              <div class="row text-center mb-4">
                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="card" >
                        <img class="card-img-top" src="https://image.shutterstock.com/image-vector/user-icon-symbol-business-people-600w-1486352189.jpg" alt="Show customers">
                        <div class="card-body">
                          <h4 class="card-title">Customers</h4>
                          <a href="customers.php" class="btn btn-primary">Show </a>
                        </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="https://thumbs.dreamstime.com/z/logo-fast-transfer-money-dollar-bill-quick-motion-vector-concept-rapid-transfer-funds-logo-fast-transfer-money-112215690.jpg" alt="Transactions">
                        <div class="card-body">
                          <h4 class="card-title">Transactions</h4>
                          <a href="transactions.php" class="btn btn-primary">Show</a>
                        </div>
                    </div>
                  </div>
                </div>
               
            </div>
         </section>
    <!--Footer-->
    <footer>
    <p class="text-center bg-dark text-white"> @ Copyright Anshul Rana</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

    </html>
