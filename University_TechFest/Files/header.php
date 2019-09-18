
<html> 
<body>
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">Felicific '19</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
     
        <br>
        <?php 
        session_start();
        if(isset($_SESSION["uname"]))
        {
            echo 'Welcome'.$_SESSION["uname"];
            echo '<a href="ShowParticipation.php" class="w3-bar-item w3-button">Participation</a>';
            echo '<a href="logout.php" class="w3-bar-item w3-button">Logout</a>';
            }
        else 
        {

            echo '<a href="Login.php" class="w3-bar-item w3-button">Login</a>';
            echo '<a href="Register.php" class="w3-bar-item w3-button">Register</a>';
            
        }
            ?>
      <a href="#about" class="w3-bar-item w3-button">About</a>

      
      
      <!--<a href="#contact" class="w3-bar-item w3-button">Contact</a>-->
    </div>
  </div>
</div>


      </body>
</html>