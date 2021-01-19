<?php
    include '../../includes/nav.php';
?>
<!DOCTYPE html>
    <head>
    </head>
    <body>


    <?php
        $name = $email = $major = $comment = $continent = "";
        $nameErr = $emailErr = $majorErr = $contErr = "";


        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (empty($_POST["name"])) {
              $nameErr = "Name is required";
            } else {
              $name = test_input($_POST["name"]);
              // check if name only contains letters and whitespace
              if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
              }
            }
                        
            if (empty($_POST["email"])) {
              $emailErr = "Email is required";
            } else {
              $email = test_input($_POST["email"]);
              // check if e-mail address is well-formed
              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
              }
            }
                        
            if (empty($_POST["comment"])) {
              $comment = "";
            } else {
              $comment = test_input($_POST["comment"]);
            }
          
            if (empty($_POST["major"])) {
              $majorErr = "Major is required";
            } else {
              $major = test_input($_POST["major"]);
            }
        

          if (empty($_POST["continent"])) {
            $majorErr = "Major is required";
          } else {
            $major = test_input($_POST["major"]);
          }
        } //end form post 

          function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
        
    ?>





        <h1>Week 3 Team Activity</h1>
        <p><span class="error">* required field</span></p>
        <form action="" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <!--name input-->
            <label for="name">Name:</label><span class="error"> * <?php echo $nameErr;?></span><br>
            <input type="text" name="name"><br>
            <br>
            <!--email input-->

            <label for="email">Email:</label><span class="error"> * <?php echo $emailErr;?></span><br>
            <input type="text" name="email"><br>
            <a href="mailto:#">Send Email</a><br>
            <br>
            <!--major input-->
            <label for="major">Major:</label><span class="error"> * <?php echo $majorErr;?></span><br>
            <input type="radio" name="major" value="cs">Computer Science <br>
            <input type="radio" name="major" value="wdd">Web Design and Development <br>
            <input type="radio" name="major" value="cit">Computer information Technology <br>
            <input type="radio" name="major" value="ce">Computer Engineering <br>
            
            <br>
            <!--continent input-->
            <label for="continent">Continents Traveled:</label><span class="error"> * <?php echo $contErr;?></span><br>
            <input type="checkbox" name="continent" value="na">North America<br>
            <input type="checkbox" name="continent" value="sa">South America<br>
            <input type="checkbox" name="continent" value="eu">Europe<br>
            <input type="checkbox" name="continent" value="as">Asia<br>
            <input type="checkbox" name="continent" value="au">Australia<br>
            <input type="checkbox" name="continent" value="af">Africa<br>
            <input type="checkbox" name="continent" value="an">Antarctica<br>
            
            <br>

             <!--comment input-->
            <textarea name="comment" rows="5" cols="40"></textarea><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php
            echo "<h2>Your Input:</h2>";
            echo $name;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $major;
            echo "<br>";
            echo $continent;
            echo "<br>";
            echo $comment;
            echo "<br>";
        ?>


    </body>
</html>