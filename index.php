<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('inc_metadata.php');?>
    <!--Designed by Godly K Mathews 2021-2023 plustwo Batch-->
  </head>
  <body>
    <?php
        $allowed = array('about','home','gallery','videogallery','faculties','contact','admission','facilities','activity','achievements','annoucements');
        $page = ( isset($_GET['page']) ) ? $_GET['page'] : 'index';
       if ( in_array($page, $allowed) )
           {
            $page = $_GET['page'];
            include('inc_header.php');
            include("$page.php");
           }
      else {           
          include('inc_header.php');
          include("home.php");
         }
        ?>

      <!--footer-->
    <?php include('inc_footer.php'); ?>
    <?php include('inc_bottom.php'); ?>
    <?php include('inc_config.php'); ?>
  </body>
</html>