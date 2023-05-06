<?php include('inc_config.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Gallery - THSS Puthuppally</title>
    <?php include('inc_metadata.php');?>
    <!--Designed by Godly K Mathews 2021-2023 plustwo Batch-->
  </head>
  <body>
    <!--Header-->
    <?php include('inc_header.php');?>


      
    <main id="main">
      <!-- ======= Gallery Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
          <br>
          <br>
          <br>
          <div class="section-title">
            <h2>Gallery</h2>
            <br>
          </div>

          <!--Desktop View-->
          <div class="d-none d-lg-block">          
            <div class="col-lg-4 col-md-6">
                <div >
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/aJ09OY09_uY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div> 

             <div class="col-lg-4 col-md-6">
                <div >
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/hv2kOhj3IEw" title="Punarjeni Short Film THSS Puthuppally" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>               </div>
            </div>            
          </div>
          <!--End Desktop Veiw-->

            <!--Mobile View-->
          <div class="d-block d-lg-none">   
            <div class="row" data-aos="fade-up" data-aos-delay="200">       
              <div class="col-lg-4 col-md-6">
                 <iframe width="100%" height="300" src="https://www.youtube.com/embed/aJ09OY09_uY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
             </div> 
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
               <div class="col-lg-4 col-md-6 portfolio-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/hv2kOhj3IEw" title="Punarjeni Short Film THSS Puthuppally" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>               </div>            
          </div>
          </div>
          <!--End Mobile Veiw-->

          </div>
      </section>
      <!-- End Gallery Section -->

    </main>
    <!-- End #main -->


    <!--footer-->
    <?php include('inc_preloader.php'); ?>
    <?php include('inc_footer.php'); ?>
    <?php include('inc_bottom.php'); ?>
  </body>
</html>