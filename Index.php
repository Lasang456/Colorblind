<?php require_once 'init.php';?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Welcome to the TAMUC Online Colorblindness Test</title>
    <link rel="stylesheet" href="main.css" type="text/css"/>
  </head>
  <body>
    <!-- <div style="min-width: 1461px; margin: 0 auto;">
    <div class="hero-bg">
      <div class="tamucbtn">
          <div class="tamuclogo">
              <img class="pull-left" src="logolion.png" alt="tamuclogo" width="175" height="125"><h1>TAMUC Online Colorblindness Test!</h1>
              <a class="signup" href="accoutcreation.php"><button type="button" class="btn btn-warning">Sign Up</button></a>
              <a href="login.php"><button type="button" class="btn btn-warning">Sign In</button></a> -->
              <?php
    session_start();
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $loggedin= true;

        echo $_SESSION["username"];
  }
  else{
      $loggedin=false;
  }
  
  if(!$loggedin){
      echo '<div style="min-width: 1461px; margin: 0 auto;">
      <div class="hero-bg">
        <div class="tamucbtn">
            <div class="tamuclogo">
                <img class="pull-left" src="logolion.png" alt="tamuclogo" width="175" height="125"><h1>TAMUC Online Colorblindness Test!</h1>
                <a class="signup" href="accoutcreation.php"><button type="button" class="btn btn-warning">Sign Up</button></a>
                <a href="login.php"><button type="button" class="btn btn-warning">Sign In</button></a>';
        }
    
        if($loggedin) { 
        echo '<th><div> <button class="logout"><a href="logout.php">Logout</a></button>
        </div>
        </th>';
        }
        ?>
            </div>
      </div>
      <div class="shopping">
              <a href="#"><img src="shopping-cart-48.png" alt="shoppingcart" width="65" height="65"></a>
      </div>
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="Index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">How It Works</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Store</a>
        </li>
        <li class="nav-item">
          <a class="nav-link Active" href="accountsettings.php">Account Settings</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="#">Feedback</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Support</a>
        </li>
      </ul>
    </div>

    <section class="welcomebanner">
        <div class="para">
          <h2>Welcome to the TAMUC Online Colorblindness Test!</h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam deserunt quos molestiae cupiditate nobis ullam voluptate voluptas eligendi ipsum maiores hic quaerat sapiente animi corrupti architecto, porro minus veritatis numquam corporis consectetur. Ea odio voluptatum exercitationem numquam. Unde consequuntur dicta quibusdam sapiente exercitationem recusandae natus aut? Optio aliquam voluptas libero.</P>
        </div>
        <div class="sim">
          <img class="mySlides" src="flowers.png" style="width:100%">
          <img class="mySlides" src="bee.png" style="width:100%">
          <img class="mySlides" src="dots.jpeg" style="width:100%">
        </div>
    </section>

    <section class="testbuttons">
      <div class="redtestbutton">
        <h3>Red/Green Test</h3>
        <a href="redtest.html"><button type="button" class="btn btn-danger"><img src="Eye Logo 3.png" alt="eye" height="50" width="50"><br></br>Take the Test!</button></a>
      </div>
      <div class="bluetestbutton">
        <h3>Blue/Yellow Test</h3>
        <a href="bluetest.html"><button type="button" class="btn btn-primary"><img src="Eye Logo 3.png" alt="eye" height="50" width="50"><br></br>Take the Test!</button></a>
      </div>
    </section>

    <section class="aheader">
      <h1>Our Team!</h1>
    </section>

    <section class="analysts">
      <div class="klay">
        <h3>Klay Dabbs <small>(Project Lead)</small></h3>
        <p>Project Lead, in charge of day to day operations with the system.  Laid basic groundwork for GUI and the Front-end design. Looking to graduate with a BS in Computer Science and work in Full-Stack web development.</p>
      </div>
      <div class="justin">
        <h3>Justin Smith<small>(System Analyst)</small></h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, dicta. Animi hic autem reprehenderit facere ea fuga illum deleniti doloribus, nostrum libero mollitia, assumenda dignissimos! Sint libero odit molestias nostrum!</p>
      </div>
      <div class="alexis">
        <h3>Alexis Sanchez <small>(System Analyst)</small></h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi tempore magni, id provident sint debitis voluptatum deleniti error accusantium officiis pariatur ratione fugiat nobis vero quaerat velit corporis at praesentium cupid</p>
      </div>
      <div class="Lasang">
        <h3>Lasang Dolma Dong-Lama <small>(System Analyst)</small></h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam fugit consectetur perspiciatis necessitatibus, quae accusamus iure reiciendis tenetur nihil expedita neque! Expedita repellat quas ipsam officiis quo dolorem itaque at?</p>
      </div>
      <div class="shalu">
        <h3>Shalu Shivhare <small>(System Analyst)</small></h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex nisi maxime enim provident iste ab mollitia architecto sapiente! Possimus itaque nobis ab placeat quas doloremque maxime voluptate enim in non?</p>
      </div>
    </section>

    <section class="Howit">
      <div class="ishi">
        <img src="ishi.jpg" alt="ishihara dot preview" style="width:100%">
      </div>
      <div class="howitworks">
        <h1>How It Works</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum libero doloribus beatae iure, vel vero fugit qui at sed, nulla placeat voluptates modi. Iure illo necessitatibus repudiandae culpa delectus porro ut eum amet excepturi odit fugit vel, impedit cum facilis modi unde, quam magni provident sed inventore, ipsa sunt molestias.</p>
      </div>
    </section>
    
    <footer class="footer">
      <div class="container">
        <span class="text-muted">© 2021 ALL RIGHTS RESERVED. TEXAS A&M UNIVERSITY-COMMERCE.</span>
      </div>
    </footer>
  

    <script>
      var myIndex = 0;
      carousel();

    function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
   }

    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
  }
    </script>


    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </div>
  </body>
</html>