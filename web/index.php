<!DOCTYPE html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!--phpinfo();-->
  </head>

  <body>

    <header>
        <?php
          include_once 'includes/nav.html';
          ?>
    </header>
    <section class="main-section">

      <div>
        <h1>Astronomy</h1>
      </div>
        <div class="img-selection">
            <img src="assets/images/venus.jpg">
            <img src="assets/images/moon.jpg">
            <img src="assets/images/mars.jpg">
            <img src="assets/images/jupiter.jpg">
        </div>
    </section>
    </body>

    <script src="JavaScript/jquery-3.5.1.min.js"></script>
    <script src="JavaScript/jquery-3.5.1.js"></script>
    <script src="JavaScript/mainScript.js"></script>
    <script src="JavaScript/jquery_file.js"></script>
</html>