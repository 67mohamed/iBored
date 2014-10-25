<!DOCTYPE html>
<html>
  <head>
    <title>AutoYoutube</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/normalize.css" rel="stylesheet" media="screen">
    <link href="css/foundation.min.css" rel="stylesheet" media="screen">
    <link href="css/foundation-icons.css" rel="stylesheet" media="screen">
    <link href="css/my-styles.css" rel="stylesheet" media="screen">
    <script src="js/modernizr.js"></script>
  </head>
  <body>
       
  <?php

    include("header.php");
    include_once("analyticsTracking.php");
  ?>

  <!-- Headline Content -->

  <!-- Search Bar to be later implemented 
  <div class="row has-form firstPanel">
    <div class="row collapse">
      <div class="large-8 small-9 columns">
        <input type="text" placeholder="Search for Video">
      </div>
      <div class="large-4 small-3 columns ">
        <a href="#" class="button expand">Search</a>
      </div>
    </div>
  </div>  -->

  <div class="row panel firstPanel">
    <div class="small-12 large-8 large-offset-2 columns" >
      <div id="video" align="center" width="560" class="flex-video">   
        <iframe class="youtube-player" type="text/html" width="560" height="315" src="https://www.youtube.com/embed/<?php echo htmlspecialchars($_GET["v"]);?>?version=3&loop=1&autoplay=1&playlist=<?php echo htmlspecialchars($_GET["v"]);?>" frameborder="0" allowfullscreen="1"></iframe>
      </div>
      <div class="range-slider" data-slider>
        <span class="range-slider-handle"></span>
        <span class="range-slider-active-segment"></span>
        <input type="hidden">
      </div>
    </div>  
  </div>
  
  <div class="row panel">
    <div align="center">
      <a href="#"  class="button expand" data-reveal-id="downloadModal">Download</a>
        
    </div>
  </div>

  <div id="downloadModal" class="reveal-modal" data-reveal>
    <div class="row">
      <div class="column large-6"  >
        <h3 >Video</h3>
        <ul class="button-group round expand" >
          <li><a href="youtube/getvideo.mp4?videoid=<?php echo htmlspecialchars($_GET["v"]);?>&format=ipad" class="button expand">High Quality MP4</a></li>
        </ul>
      </div>
    <div class="column large-6">
    <h3>Audio</h3>
    <ul class="button-group round expand">
      <li><a href="http://youtubeinmp3.com/fetch/?video=http://www.youtube.com/watch?v=<?php echo htmlspecialchars($_GET["v"]);?>" class="button expand">MP3</a></li>
      
    </ul>
    </div>
    </div>
    <div class="row">
      By using this service, you agree to our <a href="terms.html">Terms of Use.</a>
    </div>
    <a href="#" class="close-reveal-modal">&#215</a>
  </div>

 
  

  



<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/fastclick.js"></script>
<script src="js/foundation.min.js"></script>
<script>
  $(document).foundation();
</script>


  </body>
</html>