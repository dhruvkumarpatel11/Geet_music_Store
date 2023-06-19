<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Player</title>
    

    <link rel="stylesheet" href="css/musicplayers.css">
</head>
<body>

    <div class="hold">
        <div class="header">
          <div class="container">
            <div id="logo">
              <h1 id="logotext">GEET</h1>
            </div>
            <ul class="nav">
              <li><a href="index.html">Home</a></li>
              <li><a href="index.html">Albums</a></li>
              <li><a href="index.html">About Us</a></li>
              <li><a href="index.html">contact</a></li>
            </ul>
          </div>
        </div>
      </div>

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
            <button class="btn backward-btn"><img src="./images/pre.png" alt=""></button>
            <button class="play-btn pause">
                <span></span>
                <span></span>
            </button>
            <button class="btn forward-btn"><img src="./images/nxt.png" alt=""></button>

        </div>

    </div>

    <script  type="text/javascript" href="data_lovesong.js"></script>
    <script  type="text/javascript" href="app.js"></script>

</body>
</html>