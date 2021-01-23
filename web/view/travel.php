<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/common/header.php';

    session_start();
    $cart = $_SESSION['cart'];



?>

<main>
    <h1>Travel Packages</h1>
    <div class="container">
    <form class="main-form" action="cart.php" method="POST">
        <div class="card">
            <img src="../assets/images/jupiter.png" alt="Picture of Jupiter" class="img-cart">
            <h1>Trip to Jupiter</h1>
            <p class="price">$1,500,000*<br> per person</p>
            <p class="description">Enjoy a luxury trip orbiting Jupiter, with a stay in the elite resort hotel on Mars, for 7 days and 6 nights before returning to Earth.</p>this flickering            
            <p><input type="number" name="ticket[]" value="0" hidden></p>
            <p><input type="submit" class="card-button" name="buy" value="Add to Cart"></p>
        </div> <!--end card -->
    </form>
    <form class="main-form" action="cart.php" method="POST">
        <div class="card">
            <img src="../assets/images/venus.png" alt="Picture of Venus" class="img-cart">
            <h1>Trip to Venus</h1>
            <p class="price">$800,000*<br>per person</p>
            <p class="description">Enjoy a luxury trip orbiting Venus. Stay in the elite resort hotel on the Moon for 4 days and 3 nights before returning to Earth</p>
            <p><input type="number" name="ticket[]" value="1" hidden></p>
            <p><input type="submit" class="card-button" name="buy" value="Add to Cart"></p>
        </div> <!--end card -->
    </form>
    <form class="main-form" action="cart.php" method="POST">
        <div class="card">
            <img src="../assets/images/mars.png" alt="Picture of Mars" class="img-cart">
            <h1>Trip to Mars</h1>
            <p class="price">$900,000*<br>per person</p>
            <p class="description">Enjoy a luxury trip to Mars. Stay in the elite resort hotel on Mars for 7 days and 6 nights before returning to Earth.</p>
            <p><input type="number" name="ticket[]" value="2" hidden></p>
            <p><input type="submit" class="card-button" name="buy" value="Add to Cart"></p>
        </div> <!--end card -->
    </form>
    <form class="main-form" action="cart.php" method="POST">
        <div class="card">
            <img src="../assets/images/saturn.png" alt="Picture of Saturn" class="img-cart">
            <h1>Trip to Saturn</h1>
            <p class="price">$2,000,000*<br>per person</p>
            <p class="description">Enjoy a luxury trip orbiting Saturn, with a stay in the elite resort hotel on Mars, for 7 days and 6 nights before returning to Earth.</p>
            <p><input type="number" name="ticket[]" value="3" hidden></p>
            <p><input type="submit" class="card-button" name="buy" value="Add to Cart"></p>
        </div> <!--end card -->
    </form>

        <div class="view-cart">
        <a href="/view/cart.php"><button class="btn">View Cart</button></a>

        </div>


    </div> <!--end container -->

</main>
</body>trail
</html>


