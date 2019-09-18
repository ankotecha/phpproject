<!DOCTYPE html>
<html>
<title>Home Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
<body>
<?php include('header.php')
?><!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="image/homeimage.jpg" alt="Hamburger Catering" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
   <font color="white"> <h1 class="w3-xxlarge">Felicific \'19</h1></font>
  </div>
</header>
<!-- Page content -->

<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
        <br>
        <br>
        <img src="image/12335.jpg" class="w3-round w3-image w3-opacity-min" width="100%">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About Felicific</h1><br>
 <h5 class="w3-center">Tradition since 1889</h5>
      <p class="w3-large">Tech fest is biggest event of the university where students perform technical and non technical stuffs
          
        . Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute iruredolor in reprehende<span class="w3-tag w3-light-grey">seasonal</span> ingredients.</p>
      </div>
  </div>
  
  <hr>
  
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
        <div class="w3-col l6 w3-padding-large">

            <br><br>               <img src="image/222.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" width="400" height="1000">
    </div>
      <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Our Event</h1><br>
      <a href="EventRegister.php">
      <h4>Event1</h4>
      <p class="w3-text-grey">Event Description</p><br>
      </a>
      <a href="codejam.php">
      <h4>Event2</h4>
      <p class="w3-text-grey">Event Description</p><br>
      </a>
      <a href="RoboRace.php">
      <h4>Event3</h4>
      <p class="w3-text-grey">Event Description</p><br>
      </a>
      <a href="bizzbrainz.php">
      <h4>Event4</h4>
      <p class="w3-text-grey">Event Description</p><br>
      </a>
      <a href="Huntronics.php">
      <h4>Event5</h4>
      <p class="w3-text-grey">Event Description</p><br></div>
    </a>
<!--            <a href="Musicalnight.php">
      <h4>Musical Night</h4>
      <p class="w3-text-grey">Event Description</p><br></div>
    </a>-->

  </div>

  <hr>

  
<!-- End page content -->
</div>

<?php include("footer.php")?>

</body>
</html>

