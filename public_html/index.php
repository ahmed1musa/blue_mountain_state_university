<!DOCTYPE html>

<html lang="en">

<head>
  
  <meta charset="utf-8">

  <title>"Blue Mountain State University Basketball"</title>

  <!-- This says our CSS is compatible with phones, and phones
         don't need to scale it strangely. -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Main CSS styles for Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cerulean/bootstrap.min.css">

    <!-- Optional theme add-on -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cerulean/bootstrap.min.css">

    <!-- If you don't like how sandstone looks, go here and see other themes
         that are available:
         https://bootswatch.com/

         You can replace the 'optional theme' with links from the page below
         to get that theme:
         https://www.bootstrapcdn.com/bootswatch/
    -->
<title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
     width: 100%;
     margin: fill;
  }
  </style>
</head>

<body>




<!-- For more info about the navbar, see:
    https://getbootstrap.com/docs/4.0/components/navbar/
    --->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="index.php">Blue Mountain State University Basketball</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
          

          <li class="nav-item">
            <a class="nav-link" href="schedule.php">Schedule</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="roster.php">Roster</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="stats.php">Stats </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="all_time_players.php"> All-Time Players</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="information.php"> BMSU Information</a>
          </li>


          </li>
        </ul>

      </div>
    </nav>
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="img/campus.jpg" alt="Campus" width="300" height="300">
        <div class="carousel-caption">
          <h3>BMSU Campus</h3>
          <p>Home of The Mountain Goats</p>
        </div>
      </div>

      <div class="item">
        <img src="img/hallway.jpg" alt="Hallway" width="300" height="300">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="img/building.jpg" alt="building" width="300" height="300">
        <div class="carousel-caption">
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>

    </a>
  </div>
</div>

</head>



<!--PICTURE SCROLLING-->
<body>
  <div class="alert alert-info" role="alert">
  You are on BMSU's basketball info pages! For more information about the school please click Learn more!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>

<div class="jumbotron">
    <h1 class="display-4">Welcome to BMSU!</h1>
    <p class="lead">Go Mountain Goats!</p>
    <hr class="my-4">
    <p>Come learn from one of the top schools in the state!</p>
    <a class="btn btn-primary btn-lg" href="information.html" role="button">Learn more</a>
  </div>
  





  
  	<div class=" member">
	<table>
	<tr>
		<th><h4 style="font-size: 18px; font-variant: small-caps; color:black; text-align: center;"><b> Team Member Log in</b></h4></th></tr>
		<tr><td>
	<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-secondary">Log In</button>
</form></td></tr></table>
</div><br>


<footer>

  © Copyright 2019, Blue Mountain State University

</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>



</html>