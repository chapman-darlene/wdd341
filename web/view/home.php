<?php
  //attach header
  include '../includes/common/header.php'; 
?>

<main>

<h1 class="main-h1">A Few of my Favorite Things</h1>
<hr>
    <section class="main-section">   
      <div class="container-fluid">
        <h5 class="text-animation">Hover Over an Image to See More Information</h5> 
        <div class="row bkg-img">
            <div class="col-md">
                <h3>Family</h3>
                <img class="photo" src="../assets/images/AdobeStock_292115734_lr.png">
                <div class="info">
                  <div class="text"><blockquote cite="https://www.churchofjesuschrist.org/study/manual/gospel-topics/family?lang=eng">
                  "Whatever problems your family is facing, whatever you must do to solve them, the beginning and the end of the solution is charity, the pure love of Christ."<br>President Dieter F. Uchtdorf
                  </blockquote></div><!--end blockquote-->
                </div><!--end info-->
            </div><!--end col-->
            <div class="col-md">
                <h3>Photography</h3>
                <img class="photo" src="../assets/images/AdobeStock_101026418_lr.png">
                <div class="info">
                  <div class="text"><blockquote cite="https://www.brainyquote.com/quotes/jacqueshenri_lartigue_141222">
                  "Photography to me is catching a moment which is passing, and which is true."<br>Jacques-Henri Lartigue
                  </blockquote></div><!--end block quote-->
                </div><!--end info-->
              </div><!--end col-->
            <div class="col-md">
                <h3>Astronomy</h3>
                <img class="photo" src="../assets/images/AdobeStock_366936856_lr.png">  
                <div class="info">
                  <div class="text"><blockquote cite="https://www.nasa.gov/feature/goddard/2020/nasa-ibex-charts-11-years-change-at-boundary-interstellar-space-heliosphere-sun">
                  "Far, far beyond the orbits of the planets lie the hazy outlines of the magnetic bubble in space that we call home."<br>Lina Tran, NASA’s Goddard Space Flight Center, Greenbelt, Md.
                  </blockquote></div><!--end block quote-->
                </div><!--end info-->   
            </div><!--end col-->
        </div><!--end row-->
        <div class="row">
          <div class="col-lg info-section">
            <h2 class="main-h2">Travel to the Stars</h2>
            <p class="text-p">An exciting new opportunity to travel through our solar system.</p>
            <p><button class="btn" onclick="location.href='travel.php'">Learn More</button></p>
          </div>
        </div>    
      </div><!--end container-fluid-->
    </section>
  </
  </body>

    <script src="JavaScript/jquery-3.5.1.min.js"></script>
    <script src="JavaScript/jquery-3.5.1.js"></script>
    <script src="JavaScript/main.js"></script>
    <script src="JavaScript/jquery_file.js"></script>
</html>