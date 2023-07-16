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
	<link rel="stylesheet" href="css/navstyle.css">
	<link rel="stylesheet" href="css/img1.css">

    <title> Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
 
  
      <div class="container-fluid">
      <!-- Introduction section -->
	  <div>
            <div   style="background-color : #74C973;">
              <div align="center" >
                <img class="bank"  src="img/bank2.png" >
              </div>
            </div>
			<div  style="background-color : #A9CCEC;">
                <div  align="center">
                  <h3>Welcome to</h3>
                  <h1>SNEHA BANK</h1>
                </div>
              </div>
			  </div>

      <!-- Activity section -->
            <div  class="row activity text-center">
			  
                  <div class="col-md act">
                    <img class="im" width="70%" src="img/user1.jpg" >
                    <br>
                    <a href="createuser.php"><button style="background-color : green;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img class="im" width="80%" src="img/transfer.jpg" >
                    <br>
                    <a href="transfermoney.php"><button style="background-color : green;">Make a Transaction</button></a>
                  </div>
				  
				  
                  <div class="col-md act">
                    <img class="im" width="80%" src="img/history.jpg" >
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : green;">Transaction History</button></a>
                  </div>
				  <div class="col-md act">
                    <img class="im" width="70%" src="img/list.png" >
                    <br>
                    <a href="userdetail.php"><button style="background-color : green;">View user details</button></a>
                  </div>
				  
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>SNEHA M</b> <br> SPARKS Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  
  </body>
</html>