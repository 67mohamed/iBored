<!-- Navigation -->
  <div class="contain-to-grid fixed">
    <nav class="top-bar" data-topbar>
      <ul class="title-area">
        <li class="name">
          <h1>
            <a href="home.php">AutoYoutube</a>
          </h1>
        </li>
        <li class="toggle-topbar menu-icon">
          <a href="#" class="left-off-canvas-toggle has-dropdown"><span>
            Menu
          </span></a>

        </li>     
      </ul>


      <section class="top-bar-section">
        <ul class="right">
          
          <li ><a href="home.php">Home</a></li>
          <li><a href="feature.php">This Week's Featured Video</a></li>
          <li><a href="http://www.ibored.me">iBored</a></li>
          <li><a href="http://www.youtube.com/watch?v=<?php echo htmlspecialchars($_GET["v"]);?>">Return to YouTube</a></li>
          
        </ul>
      </section>
      </nav>
  </div>  
  <!-- End Navigation -->