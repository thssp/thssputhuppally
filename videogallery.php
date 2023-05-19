
  <head>
    
    <title>Gallery - THSS Puthuppally</title>
   
  </head>
 
      
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

 <!--Videos-->
 <div>  

  <div class="col-lg-5">
     <h3 style="text-align: center;">About School</h3>              
     <?php include('inc_about_youtube.php')?>
   </div>

   <div class="col-lg-5">
     <h4 style="text-align: center;">Punarjeni-Short Film by 2021-22 +1 Students</h4>              
     <div class="youtube-player" data-id="hv2kOhj3IEw" data-related="0" data-control="1" data-info="0" data-fullscreen="1" style="width:100%;background-color:black;position: relative;cursor: pointer;max-height:360px;height:100%; overflow:hidden;display: block;padding-bottom: 56.25%;">
      <img src="//i.ytimg.com/vi/hv2kOhj3IEw/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;">
       <div style="background-color: rgba(0, 0, 0, 0.5); box-shadow: 0px 0px 0px 5px rgba(0, 0, 0, 0.5);position:absolute; border: 4px solid #fff;border-radius: 50%;left:50%;top:50%; margin-left:-36px; margin-top:-36px; height: 72px; width: 72px; align-items: center; display: flex; justify-content: center;">
        <div class="triangle" style="border-style: solid;height: 0;width: 0;border-color: rgba(0,0,0,0) rgba(0,0,0,0) rgba(0,0,0,0) #ffffff;border-width: 16px 0 16px 24px;margin-left:6px;">
       </div> 
      </div> 
     </div>
   </div>

</div>
<!--End video-->      

          </div>
        </div>
      </section>
      <!-- End Gallery Section -->

    </main>
    <!-- End #main -->

    <script> (function() { var v = document.getElementsByClassName("youtube-player"); for (var n = 0; n < v.length; n++) { v[n].onclick = function () { var iframe = document.createElement("iframe"); iframe.setAttribute("src", "//www.youtube.com/embed/" + this.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&rel="+ this.dataset.related +"&controls="+this.dataset.control+"&showinfo=" + this.dataset.info); iframe.setAttribute("frameborder", "0"); iframe.setAttribute("id", "youtube-iframe"); iframe.setAttribute("style", "width: 100%; height: 100%; position: absolute; top: 0; left: 0;"); if (this.dataset.fullscreen == 1){ iframe.setAttribute("allowfullscreen", ""); } while (this.firstChild) { this.removeChild(this.firstChild); } this.appendChild(iframe); }; } })(); </script>