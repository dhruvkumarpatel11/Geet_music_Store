<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Player</title>
    <link rel="stylesheet" href="css/musicplayer.css">

    
</head>
<body>
  <!-- <div class="hold">
    <div class="header">
      <div class="container">
        <div id="logo">
          <h1 id="logotext">GEET</h1> 
           <img src="./images/Geet.png" alt="logo">
        </div>
        <ul class="nav">
          <li><a href="welcome.php">Home</a></li>
          <li><a href="welcome.php">Albums</a></li>
          <li><a href="welcome.php">About Us</a></li>
          <li><a href="welcome.php">contact</a></li>
          <li><a href="./musicplayer/custom.php">Custom</a></li>
    
           <img  src="./images/icons8-male-user-96.png" width="50%"> 
          <li disabled><?php
          // session_start();
          // include 'config.php';
          // $query= mysqli_query($conn, "select * from users where email='{$_SESSION['SESSION_EMAIL']}'");
          // if(mysqli_num_rows($query)>0){
          //     $row=mysqli_fetch_assoc($query);
          
          //     echo $row['name'];
          //     echo"<a href='logout.php' style='color:red; font-size: 10px; margin-left:20px;'><u>logout</u></a>";              
          //   }
          
          // ?>
          </li>

        </ul>
      </div>
      
    </div>
  </div> -->




    <audio src="" id="audio"></audio>

    
    <div class="music-player">
        <h1 class="music-name">song one</h1>

        <p class="artist-name">artist</p>

        <div class="disk"></div>

        <div class="song-slider">
            <input type="range" value="0" class="seek-bar">
            <span class="current-time">00:00</span>
            <span class="song-duration">00:00</span>
        </div>


        <div class="controls">
            <button class="btn backward-btn"><img src="images/pre.png" alt=""></button>
            <button class="play-btn pause">
                <span></span>
                <span></span>
            </button>
            <button class="btn forward-btn"><img src="./images/nxt.png" alt=""></button>

        </div>

    </div>
    <script  type="text/javascript" href="data.js"></script>
            <script  type="text/javascript" href="app.js"></script>
</body>
</html>