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
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="./index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="./nfl.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">NFL Stats</a>
    <a href="./nba.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">NBA Stats</a>
    <a href="./mlb.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">MLB Stats</a>
    <a href="./mls.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">MLS Stats</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="./nfl.php" class="w3-bar-item w3-button w3-padding-large">NFL</a>
    <a href="./nba.php" class="w3-bar-item w3-button w3-padding-large">NBA</a>
    <a href="./mlb.php" class="w3-bar-item w3-button w3-padding-large">MLB</a>
    <a href="./mls.php" class="w3-bar-item w3-button w3-padding-large">MLS</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">NBA Statistics</h1>
  <p class="w3-xlarge">Standings, player rankings, and more...</p>
  
  <img src="http://assets.stickpng.com/images/58428defa6515b1e0ad75ab4.png" width="270px" class="w3-padding-large w3-large w3-margin-top" alt="NBA Logo">
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Standings for 2021</h1>
    </div>

    <div class="w3-container">
        <h2>Eastern Conference</h2>
      
        <table class="w3-table w3-striped">
          <tr>
            <th>Rank</th>
            <th>Team</th>
            <th>Wins</th>
            <th>Losses</th>
          </tr>
          <tr>
            <td>1</td>
            <td>Sample</td>
            <td>Sample</td>
            <td>Sample</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Sample</td>
            <td>Sample</td>
            <td>Sample</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Sample</td>
            <td>Sample</td>
            <td>Sample</td>
          </tr>
        </table>
      </div>

      <div class="w3-container">
        <h2>Western Conference</h2>
      
        <table class="w3-table w3-striped">
          <tr>
            <th>Rank</th>
            <th>Team</th>
            <th>Wins</th>
            <th>Losses</th>
          </tr>
          <tr>
            <td>1</td>
            <td>Sample</td>
            <td>Sample</td>
            <td>Sample</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Sample</td>
            <td>Sample</td>
            <td>Sample</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Sample</td>
            <td>Sample</td>
            <td>Sample</td>
          </tr>
        </table>
      </div>

  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">

    <div class="w3-twothird">
      <h1>Top Players</h1>
      <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

      <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
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