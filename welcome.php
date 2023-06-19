<?php
// session_start();
// include 'config.php';
// $query= mysqli_query($conn, "select * from users where email='{$_SESSION['SESSION_EMAIL']}'");
// if(mysqli_num_rows($query)>0){
//     $row=mysqli_fetch_assoc($query);

//     echo "Welcome ".   $row['name'];

// }
    
    // <div class="hold">
    //     <div class="header">
    //       <div class="container">
    //         <div id="logo">
    //           <h1 id="logotext">GEET</h1>
    //         </div>
    //         <ul class="nav">
    //           <li><a href="#home">Home</a></li>
    //           <li><a href="#album">Albums</a></li>
    //           <li><a href="#AboutUs">About Us</a></li>
    //           <li><a href="#contact">contact</a></li>
    //           <li><a>
    //           
              
            
  //           </a></li>
    //         </ul>
    //       </div>
    //     </div>
    //   </div>

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music | Application</title>
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/price.css">

</head>
<body>


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

      
      
      

      <section id="home">
      <div class="sectionn">

      <!-- <img src="bgimg.webp" height=40% width=100%> -->
        <!-- <div class="bg">
          <img scr="./image/ariana_grande_photo_jon_kopaloff_getty_images_465687098.jpeg" height=50px width=50px>
        </div> -->
        <div class="slider">
          <div class="container slidercontent">
            <h1 class="hero">Geet</h1> 
            <h2 class="hero">Eat.Sleep.Listen.Repeat </h2>
            <!-- <div class="call"><span>Wow</span></div> -->
          </div>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="col four">
            <h1 class="icon">[<a href="loveindex.html"><img src="./images/icons8-love.gif" width="35%"></a>]</h1> 
            <h1 class="service">Love</h1>
            <p>"Love life Listen it"</p>
          </div>
          <div class="col four">
            <h1 class="icon">[<a href="partyindex.html"><img src="./images/icons8-party.gif" width="40%"></a>]</h1>
            <h1 class="service">Party</h1>
            <p>"A Sound Castle for you"</p>
          </div>
          <div class="responsivegroup"></div>
          <div class="col four">
            <h1 class="icon">[<a href="workoutindex.html"><img src="./images/icons8-dumbbell.gif" width="42%"></a>] </h1>
            <h1 class="service">Workout</h1>
            <p>"Music for your Muscles"</p>
          </div>
          <div class="col four">
            <h1 class="icon">[<a href="podcastindex.html"><img src="./images/icons8-play-record.gif" width="38%"></a>]</h1>
            <h1 class="service">Podcasts</h1>
            <p>"From General to Special"</p>
          </div>
          <div class="group"></div>
        </div>
      </div>

      </section>


      <section id="album">
        
      <div class="section bg">
        <div class="container">
          <h1>HIT ALBUMS</h1>
          <h2></h2>
          <!-- <div class="col three bg nopad pointer">
            <div class="imgholder">  </div>
            <h1 class="feature">Wow</h1>
            <p>Wow wow</p>
          </div> -->



          <div class="Card2 ph1">
            <img src="./images/merlin_179096598_efc4232d-7251-4c29-b1c3-b4c4fb4d22fb-mediumSquareAt3X.jpeg" width="100%">
            <div class="overlay">
              <h2 class="title">Taloy Swift</h2>
              <!-- <a class="link">Open</a> -->
            </div>
          </div>

          <div class="Card2 ph1">
            <img src="./images/ariana_grande_photo_jon_kopaloff_getty_images_465687098.jpeg" width="100%">
            <div class="overlay">
              <h2 class="title">Ariana Grande</h2>
              <!-- <a class="link">Open</a> -->
            </div>
          </div>

          <div class="Card2 ph1">
            <img src="./images/selena gomez.webp" width="100%">
            <div class="overlay">
              <h2 class="title">Selena Gomez</h2>
              <!-- <a class="link">Open</a> -->
            </div>
          </div>

          <div class="Card2 ph1">
            <img src="./images/drake-backstreet-boys-i-want-it-that-way.webp" width="100%">
            <div class="overlay">
              <h2 class="title">Drake</h2>
              <!-- <a class="link">Open</a> -->
            </div>
          </div>

          <div class="Card2 ph1">
            <img src="./images/ab6761610000e5eba00b11c129b27a88fc72f36b.jpeg" width="100%">
            <div class="overlay">
              <h2 class="title">Eminem</h2>
              <!-- <a class="link">Open</a> -->
            </div>
          </div>

          <div class="Card2 ph1">
            <img src="./images/Jason-Derulo.jpeg" width="100%"  height="100%">
            <div class="overlay">
              <h2 class="title">Jason Derulo</h2>
              <!-- <a class="link">Open</a> -->
            </div>
          </div>


          
      
          <div class="group"></div>
        </div>
      </div>
    </section>

    <!------------------------------------ PRICE CARDS--------------------------------------------->

             <section class="pricecards">
             <div id="price">
  <!--price tab-->
  <div class="plan">
    <div class="plan-inner">
      <div class="entry-title">
        <h3>Monthly</h3>
        <div class="price">$15<span>/PER MONTH</span>
        </div>
      </div>
      <div class="entry-content">
        <ul>
          <li>&emsp;&emsp;&emsp;<strong>1</strong> Month</li>&emsp;
          <!-- <li><strong>2x</strong> option 2</li>
          <li><strong>3x</strong> option 3</li>
          <li><strong>Free</strong> option 4</li> -->
          <li><strong>Unlimited</strong> Music</li>
        </ul>
      </div>
      <div class="btn">
        <a href="#">Subscribe Now</a>
      </div>
    </div>
  </div>
  <!-- end of price tab-->
  <!--price tab-->
  <div class="plan basic">
    <div class="plan-inner">
      <div class="hot">hot</div>
      <div class="entry-title">
        <h3>Yearly</h3>
        <div class="price">$150<span>/PER YEAR</span>
        </div>
      </div>
      <div class="entry-content">
        <ul>
          <li>&emsp; &emsp; &emsp;<strong>1</strong> Year </li>&emsp;
          <!-- <li><strong>2x</strong> option 2</li>
          <li><strong>3x</strong> option 3</li>
          <li><strong>Free</strong> option 4</li> -->
          <li><strong>Unlimited</strong> Music</li>
        </ul>
      </div>
      <div class="btn">
        <a href="#">Subscribe Now</a>
      </div>
    </div>
  </div>
  <!-- end of price tab-->
 
  <!-- end of price tab-->
</div>

              </section>

    
    <section id="AboutUs">

     



    <div class="section">
      <div class="diagonal-box">
        <div class="content1"> 
      <div class="container">
        
          <h1>About Us</h1>

      
   
          
          <div class="aboutsplit">
            <div class="aboutleft">
          <div class="col three">
            <h1 class="icon side"></h1>
            
            <img src="./images/pexels-josh-sorenson-995301.jpg" width="200%" height="250%">
            <!-- <h1 class="feature side"></h1> -->
          </div>
          <div class="aboutright">
            <p class="side">Geet makes it simple to locate the ideal song or podcast for every situation on your phone, computer, tablet, and more.


              On Geet, there are numerous tracks and episodes. So you can always find the perfect music or podcast, whether you're driving, exercising, having fun, or just relaxing. Select the music you want to hear or let Geet surprise you.
              
              Additionally, you can look through the celebrity and artistic collections.</p>
            </div>
          </div>
        </div>
          <div class="group margin"></div>
        </div>
      </div>
      </div>
          </div>

    </section>


    
    
    <section id="contact">
      
      
      <div class="section bg">
        <div class="container">
          <h1>Contact Us</h1>
          <div class="contain">
            
            <div class="wrapper">
              
              <div class="form">
                <div class="contactform">
                  <h2 class="form-headline">Send us a message</h2>
                </div>
                <form id="submit-form" action="contact.php">
                  <p>
                    <input id="name" name="cname" class="form-input" type="text" placeholder="Your Name*" required>
                    <small class="name-error"></small>
                  </p>
                  <p>
                    
                  </p>
                  <p>
                    <input id="email" name="cemail" class="form-input" type="email" placeholder="Your Email*">
                    <small class="name-error"></small>
                    
                    <small></small>
                  </p>
                  <p class="full-width">
                    <textarea  minlength="20" name="message" id="message" cols="30" rows="7" placeholder="Your Message*" required></textarea>
                    <small></small>
                  </p>
                  <p class="full-width">
                    <input type="checkbox" id="checkbox" name="checkbox" checked> Yes, I would like to receive communications by call / email about Company's services.
                  </p>
                  <p class="full-width">
                    <input type="submit" class="submit-btn" value="Submit" onclick="checkValidations()">
                    
                    <button class="reset-btn" onclick="reset()">Reset</button>
                  </p>
                  
                  
                  
                </form>
              </div>
              
              <div class="contacts contact-wrapper">
                
                
                </div>
              </div>
            </div>
            <!-- <div class="section">
              <div class="footer">
                <div class="container white">
                  <div class="col four left">
                    </div>
                    <div class="col four left">
                      </div>
                      <div class="col four left">
                        </div>
                        <div class="col four left">
                          </div>
                          <div class="group"></div>
                        </div>
                      </div>
                    </div> -->
                  </section>


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

<script src="index.js"></script>
</html>

