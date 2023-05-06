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
          <a <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"'; ?> href="index.php">Home</a>
        </li>
        <li>
          <a <?php if (basename($_SERVER['PHP_SELF']) == 'about.php') echo 'class="active"'; ?> href="about.php">About</a>
        </li>
        <li>
          <a <?php if (basename($_SERVER['PHP_SELF']) == 'admission.php') echo 'class="active"'; ?> href="admission.php">Admissions</a>
        </li>
        <li>
          <a <?php if (basename($_SERVER['PHP_SELF']) == 'faculties.php') echo 'class="active"'; ?> href="faculties.php">Faculties</a>
        </li>
        <li>
          <a <?php if (basename($_SERVER['PHP_SELF']) == 'facilities.php') echo 'class="active"'; ?> href="facilities.php">Facilities</a>
        </li>
        <li>
          <a <?php if (basename($_SERVER['PHP_SELF']) == 'activity.php') echo 'class="active"'; ?> href="activity.php">Activities</a>
        </li>
        <li>
          <a <?php if (basename($_SERVER['PHP_SELF']) == 'achievements.php') echo 'class="active"'; ?> href="achievements.php">Achievements</a>
        </li>
        <li class="dropdownlist">
          <button class="dropbtn <?php if (basename($_SERVER['PHP_SELF']) == 'gallery.php') echo 'active'; elseif (basename($_SERVER['PHP_SELF']) == 'videogallery.php') echo 'active'; ?>">Gallery</button>
          <div class="dropdownlist-content">
            <a href="gallery.php">Images</a>
            <a href="videogallery.php">Videos</a>
          </div>
         </li>
        <li>
          <a <?php if (basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'class="active"'; ?> href="contact.php">Contact</a>
        </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    <!-- .navbar -->
    <!--social links-->
  </div>
</header>
