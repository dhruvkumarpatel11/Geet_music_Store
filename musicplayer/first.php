<?php require_once('db_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music | Application</title>
    <link rel="stylesheet" href="../musicplyer/css/home.css">
    <link rel="stylesheet" href="../musciplayer/css/footer.css">



    <link rel="stylesheet" href="./font-awesome/css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css"> 
    <link rel="stylesheet" href="./css/styles.css">
    <script src="./font-awesome/js/all.min.js"></script>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>



</head>
<body >


    <div class="hold">
        <div class="header">
        <h1 id="logotext">GEET</h1>
          <img src="./images/Geet.png" alt="logo" width="5%">
      
          <ul class="nav">
            <li><a href="#home">Home</a></li>
            <li><a href="#album">Albums</a></li>
            <li><a href="#AboutUs">About Us</a></li>
            <li><a href="#contact">contact</a></li>
            <li><a href="./musicplayer/custom.php">Custom</a></li>
      
            <!-- <img  src="./images/icons8-male-user-96.png" width="50%"> -->
            <li disabled><?php
            session_start();
            include 'config.php';
            $query= mysqli_query($conn, "select * from users where email='{$_SESSION['SESSION_EMAIL']}'");
            if(mysqli_num_rows($query)>0){
                $row=mysqli_fetch_assoc($query);
            
                echo $row['name'];
                echo"<a href='logout.php' style='color:red; font-size: 10px; margin-left:20px;'><u>logout</u></a>";              
              }
            
            ?></li>

          </ul>
          <div class="container">
            <div id="logo">
            </div>
          </div>
          
        </div>
      </div>

      
      

                  <!------------------------- Footer ------------------------------->
                  
                  <!-- <section class="footer_section">Footer Example 4</section> -->
                  <footer class="footer-distributed">
                    
                    <div class="footer-left">
                      
                      <h3>Geet<span> Music </span></h3> 
                      
                      <p class="footer-links">
          <a href="#home" class="link-1">Home</a>
                        
					<a href="#albums">Albums</a>
				
					<a href="#">Pricing</a>
				
					<a href="#AboutUs">About</a>
					
			
					
					<a href="#contact">Contact</a>
				</p>

				<p class="footer-company-name">Geet Music © 2022</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
          <img src="./images/icons8-location-24.png">
					<p><span>130 Columbia </span> Solana Beach, California</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
          <img src="./images/icons8-ringing-phone-24.png">

					<p>+1.111.111.1111</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
          <img src="./images/icons8-mail-24.png" style="margin-top=100px;">
					<p><a href="mailto:support@geet.com">support@geet.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					We are giving you a wonderful music experience, which you have never experienced before. We also gives you knowlwde by our industry leading experts.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"><img src="./images/icons8-facebook-30.png" width="50%"></i></a>
					<a href="#"><i class="fa fa-twitter"><img src="./images/icons8-twitter-30.png" width="50%"></i></a>
					<a href="#"><i class="fa fa-linkedin"><img src="./images/icons8-instagram-30.png" width="50%"></i></a>
					<a href="#"><i class="fa fa-github"><img src="./images/icons8-pinterest-30.png" width="50%"></i></a>

				</div>

			</div>

		</footer>

</body>

<script src="../index.js"></script>
</html>

