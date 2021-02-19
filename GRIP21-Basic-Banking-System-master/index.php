<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="https://www.freelogodesign.org/file/app/client/thumb/f2e9bea9-ecfa-4cbf-a140-b2a332c9cc3d_200x200.png?1613582321182" type="image/png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!--stylesheet-->
  <link rel="stylesheet" href="./css/e.css">

  <!--google fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <title>Basic Banking System</title>
  <style>
    * {
      font-family: Poppins;
    }

    a:link {
      color: #143D59;
    }

    a:hover {
      color: #143D59;
      text-decoration: none;
    }

    h5 {
      color: #143D59
    }
  </style>
</head>

<body>
  <nav>
    <div class="container-fluid nav-wrapper  #E71989 orange red darken-3 accent-4 z-depth-5">
      <a href="index.php" class="brand-logo"><img src="https://www.freelogodesign.org/file/app/client/thumb/f2e9bea9-ecfa-4cbf-a140-b2a332c9cc3d_200x200.png?1613582321182" style="height:70px;width:60px" /></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        <li><a href="./php/transfermoney.php">View Customers</a></li>
        <li><a href="./php/transactionhistory.php">Transactions</a></li>
      </ul>
    </div>
  </nav>

  <!--heading / title -->
  <div class="center head mt-0">
    <h2><b><span><img src="https://www.freelogodesign.org/file/app/client/thumb/f2e9bea9-ecfa-4cbf-a140-b2a332c9cc3d_200x200.png?1613582321182" style="height:70px;width:60px" /></span>HBFC BANK</b></h2>
  </div>

  <!---3 col start-->
  <div class="row center sect">


    <!--end of card 1-->

    <!--second col-->
    <div class="col s4">
      <!-- Promo Content 2 goes here -->
      <div class="row">
        <div class="col s12 m6">
          <div class="card small">
            <div class="card-image">
              <img class="cust" src="./images/banks.png">
            </div>
            <button onclick="location.href='./php/transfermoney.php'" style="color:#143D59" class="waves-effect waves-light #E71989 orange red darken-3 accent-4 btn-large"><b>Perform Transactions</b><i class="material-icons right">add_circle</i></button>
          </div>
        </div>
      </div>
    </div>
    <!--end of card 2-->

    <div class="col s4">
      <!-- Promo Content 1 goes here -->
      <div class="row">
        <div class="col s12 m6">
          <div class="card small">
            <div class="card-image">
              <img src="./images/cust.jpg">
            </div>
            <br />

            <h5><b>Welcome to HBFC Bank !</b></h5>
            <br />
            <p class="teal darken-1"><br /></p>
          </div>
        </div>
      </div>
    </div>
    <!--middle-->

    <div class="col s4">
      <!-- Promo Content 3 goes here -->
      <div class="row">
        <div class="col s12 m6">
          <div class="card small">
            <div class="card-image">
              <img class="cust" src="./images/his.png">
            </div>
            <button type="button" onclick="location.href='./php/transactionhistory.php'" style="color:#143D59" class="waves-effect waves-light #E71989 orange red darken-3 accent-4 btn-large"><b> Transaction History</b><i class="material-icons right">send</i></button>
          </div>
        </div>
      </div>
    </div>
    <!--end of card 1-->

  </div>
  <!--sectio-->


  <footer class="center footer">
    <h6 class="info"><b>2021 (Feb) © Internship Project</b></h6>
    The Sparks Foundation
  </footer>

  <script src="./js/main.js"></script>
  <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>