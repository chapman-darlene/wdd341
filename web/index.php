<!DOCTYPE html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/main_style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!--phpinfo();-->
  </head>

  <body>

    <header>    
        <?php
          include_once 'includes/nav.html';
          ?>
          <div class="description"><h1>A Few of My Favorite Things</h1></div>
    </header>
    <section class="main-section">
      <hr>     
      <div class="container-fluid">
        <h2>Hover Over an Image to See More Information</h2> 
        <div class="row">
            <div class="col-md">
                <h3>Family</h3>
                <img class="photo" src="assets/images/AdobeStock_292115734_lr.png">
                <div class="info">
                  <div class="text"><blockquote cite="https://www.churchofjesuschrist.org/study/manual/gospel-topics/family?lang=eng">
                  "Whatever problems your family is facing, whatever you must do to solve them, the beginning and the end of the solution is charity, the pure love of Christ."<br>President Dieter F. Uchtdorf
                  </blockquote></div><!--end blockquote-->
                </div><!--end info-->
            </div><!--end col-->
            <div class="col-md">
                <h3>Photography</h3>
                <img class="photo" src="assets/images/AdobeStock_101026418_lr.png">
                <div class="info">
                  <div class="text"><blockquote cite="https://www.brainyquote.com/quotes/jacqueshenri_lartigue_141222">
                  "Photography to me is catching a moment which is passing, and which is true."<br>Jacques-Henri Lartigue
                  </blockquote></div><!--end block quote-->
                </div><!--end info-->
              </div><!--end col-->
            <div class="col-md">
                <h3>Astronomy</h3>
                <img class="photo" src="assets/images/AdobeStock_366936856_lr.png">  
                <div class="info">
                  <div class="text"><blockquote cite="https://www.nasa.gov/feature/goddard/2020/nasa-ibex-charts-11-years-change-at-boundary-interstellar-space-heliosphere-sun">
                  "Far, far beyond the orbits of the planets lie the hazy outlines of the magnetic bubble in space that we call home."<br>Lina Tran, NASA’s Goddard Space Flight Center, Greenbelt, Md.
                  </blockquote></div><!--end block quote-->
                </div><!--end info-->   
            </div><!--end col-->
        </div><!--end row-->
        <div class="row">
          <div class="col-lg">
            <h3>More to Learn</h3>
            <p>There is always more to learn about a subject or a person. These are only a few of the things that I enjoy, and that make me who I am.</p>
          </div>
        </div>    
      </div><!--end container-fluid-->
    </section>
  </body>

    <script src="JavaScript/jquery-3.5.1.min.js"></script>
    <script src="JavaScript/jquery-3.5.1.js"></script>
    <script src="JavaScript/mainScript.js"></script>
    <script src="JavaScript/jquery_file.js"></script>
</html>