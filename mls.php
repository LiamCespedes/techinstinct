<!DOCTYPE html>
<php lang="en">
<title>MySportsDatabase</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>

<?php


?>


<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="./index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="./nfl.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">NFL Stats</a>
    <a href="./nba.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">NBA Stats</a>
    <a href="./mlb.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">MLB Stats</a>
    <a href="./mls.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">MLS Stats</a>
    <a href="./myleagues.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">My Leagues</a>
    <a href="./logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log Out</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="./nfl.php" class="w3-bar-item w3-button w3-padding-large">NFL</a>
    <a href="./nba.php" class="w3-bar-item w3-button w3-padding-large">NBA</a>
    <a href="./mlb.php" class="w3-bar-item w3-button w3-padding-large">MLB</a>
    <a href="./mls.php" class="w3-bar-item w3-button w3-padding-large">MLS</a>
    <a href="./myleagues.php" class="w3-bar-item w3-button w3-padding-large">My Leagues</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">MLS Statistics</h1>
  <p class="w3-xlarge">Standings, player rankings, and more...</p>
  
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/MLS_crest_logo_RGB_-_FC_Dallas.svg/424px-MLS_crest_logo_RGB_-_FC_Dallas.svg.png" width="150px" class="w3-padding-large w3-large w3-margin-top" alt="NBA Logo">
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Standings for 2021</h1>

    </div>

  </div>
  <div id="wg-api-football-standings"
     data-host="api-football-v1.p.rapidapi.com"
     data-league="253"
     data-team=""
     data-season="2021"
     data-key="38be8fff6dmsh4554baba0a8d9f8p124d22jsn6c41dafc87a1"
     data-theme=""
     data-show-errors="false"
     class="api_football_loader"></div>
    <script
        type="module"
        src="https://widgets.api-sports.io/football/1.1.8/widget.js">
    </script>

</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">

    <div class="w3-twothird">
      <h1>Top Players</h1>
      <h5 class="w3-padding-32">This section is under construction</h5>

      <p class="w3-text-grey">Under construction</p>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
<?php
          require('dbConn.php');
          //session_start();
          $randFact = rand(1, 25);
          $query = "SELECT fact FROM facts WHERE id = " . $randFact . ";";
          $result = mysqli_query($db,$query) or die(mysql_error());
          $row = mysqli_fetch_array($result);
          echo "<h1> Fun Fact: " . $row['fact'] . "</h1>";
    ?>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
