<!Doctype html>
<html lang="en">

<head>
  <!-- meta tags -->
  <meta charset="utf-8">
  <meta charset="ISO-8859-1-">
  <meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="That website is used to tranfers money between multiple users.">

  <title> Banking System</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">


</head>

<body>
  <!-- navbar -->
  <?php
  include 'navbar.php';
  ?>


  <!-- Introduction section -->

  <div class="container-fluid">
    <div class="row intro" style="background-color : black;">
      <div class="col-sm-12 col-md">
        <div class="heading text-center my-25">
          <h3>Welcome to</h3><br>
          <h1>REAL BANK <br> EASY WAY <br> TO MANAGE <br> YOUR ASSET.</h1><br>

        </div>
      </div>
      <div class="col-sm-12 col-md img text-center">
        <img src="images/bank4.png" height="100px" class="img-fluid ">

      </div>
    </div>

    <!-- Activity section -->
  <img src="images/spiral.png" alt="error contact to developer" style="width:100%; position:absolute; z-index:-1">

  <center style="margin:60px 0px 20px 0px;">
        <div class="container"
            style="backdrop-filter: blur(10px); box-shadow:3px 3px 15px black; border-radius:30px; padding:20px 0px 20px 0px;">
            <h1 style="text-shadow:2px 2px 2px gray; color:white;"><b>Our Services</b></h1>
            <div class="container" style="margin:30px 0px 20px 0px;">
                <div class="row">
                    <div class="col-lg">
                        <div
                            style="background-color:#343a40; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-users fa-7x"></i><br><br>
                            <a href="index.php"><button type="button" class="btn btn-outline-light mybtn">Create Account</button></a><br>
                            <br><h6>Click Above for Creating a new Bank Account. </h6>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div
                            style="background-color:#343a40; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-comments-dollar fa-7x"></i><br><br>
                            <a href="send_money.php"><button type="button" class="btn btn-outline-light mybtn">Transfer
                                    Money</button></a><br>
                           <br> <h6>Click Above, so you can send money from your account.</h6>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div
                            style="background-color:#343a40; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-coins fa-7x"></i><br><br>
                            <a href="check_blc.php"><button type="button" class="btn btn-outline-light mybtn">Transaction History</button></a><br>
                           <br> <h6>Click Above, you can check the remaining balance in your account.</h6>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </center>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        
        $(document).ready(function () {

            $(".zoomin").animate({
                width: '400px'
            }, '5000', 'linear');
            $(".zoomfont").animate({
                fontSize: '71px'
            }, '5000', 'linear');
        });
    </script>

</div>
  <!-- Header section -->

  <?php
  include 'footer.php';
  ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>