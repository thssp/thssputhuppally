<header id="header" class="fixed-top">
  <div class="container-fluid d-flex justify-content-between align-items-center">
    <a href="index.php" class="logo">
      <img src="assets/img/logo.png" alt="IHRD logo" class="img-fluid">
    </a>
    <h1 class="logo me-auto me-lg-0">
      <a class="d-none d-lg-block" href="index.php">Technical Higher Secondary School Puthuppally</a>
      <a class="d-block d-lg-none" href="index.php">THSS Puthuppally</a>
    </h1>
    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li>
          <a href="?page=home" class="<?php if($page == "home") { echo"active"; } ?>" >Home</a>
        </li>
        <li>
          <a href="?page=about" class="<?php if($page == "about") { echo"active"; } ?>" >About</a>
        </li>
        <li>
          <a href="?page=admission" class="<?php if($page == "admission") { echo"active"; } ?>" >Admissions</a>
        </li>
        <li>
          <a href="?page=faculties" class="<?php if($page == "faculties") { echo"active"; } ?>" >Faculties</a>
        </li>
        <li>
          <a href="?page=facilities" class="<?php if($page == "facilities") { echo"active"; } ?>" >Facilities</a>
        </li>
        <li>
          <a href="?page=activity" class="<?php if($page == "activity") { echo"active"; } ?>" >Activities</a>
        </li>
        <li>
          <a href="?page=achievements" class="<?php if($page == "achievements") { echo"active"; } ?>" >Achievements</a>
        </li>
        <li class="dropdownlist">
          <button class="dropbtn <?php if($page == "gallery" || $page == "videogallery") { echo"active"; } ?>">Gallery</button>
          <div class="dropdownlist-content">
            <a href="?page=gallery">Images</a>
            <a href="?page=videogallery">Videos</a>
          </div>
        </li>
        <li>
          <a href="?page=contact" class="<?php if($page == "contact") { echo"active"; } ?>">Contact</a>
        </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    <!-- .navbar -->
    <!--social links-->
  </div>
</header>


