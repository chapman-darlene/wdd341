<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/common/header.php';

    $itemName;
    $price;
    $itemNumber;
    $ticket = array();
    foreach($ticket as $selected){

        if ($selected == 0) {
            $ticket = array(
                $itemName = 'jupiter',
                $price = 1750000,
                $itemNumber = 1
            );
        }elseif($selected == 1) {
            $ticket = array(
                $itemName = 'venus',
                $price = 800000,
                $itemNumber = 1
            );
        }elseif($selected == 2) {
            $ticket = array(
                $itemName = 'mars',
                $price = 900000,
                $itemNumber = 1
            );
        }elseif($selected == 3) {
            $ticket = array(
                $itemName = 'saturn',
                $price = 2000000,
                $itemNumber = 1
            );
        }
    }//end foreach
    $buy = $_POST["buy"];
    print $buy;

    session_start();
    $cart = $_SESSION['cart'];


// set Session
if (! isset ( $_SESSION ['cart'] )) {
    $_SESSION ['cart'] = array($ticket);
}

// Add
    if (isset ( $_POST ["buy"] )) {
        // Check the item is not already in the cart
        if (!in_array($_POST ["buy"], $_SESSION['cart'])) {
            // Add new item to cart
            $_SESSION ['cart'][] = $_POST["buy"];
        }
    }

?>

<main>
    <h1>Travel Packages</h1>
    <div class="container">
    <form action="$_SESSION['PHP_SELF']" method="POST">
        <div class="card">
            <img src="../assets/images/jupiter.png" alt="Picture of Jupiter" class="img-cart">
            <h1>Trip to Jupiter</h1>
            <p class="price">$1,500,000 per person</p>
            <p class="description">Enjoy a luxury trip orbiting Jupiter, with a stay in the elite resort hotel on Mars, for 7 days and 6 nights before returning to Earth.</p>
            <input type="hidden" name="ticket[]">
            <p><input type="submit" value="Add to Cart" name="buy"></p>
        </div> <!--end card -->

        <div class="card">
            <img src="../assets/images/venus.png" alt="Picture of Venus" class="img-cart">
            <h1>Trip to Venus</h1>
            <p class="price">$800,000</p>
            <p class="description">Enjoy a luxury trip orbiting Venus. Stay in the elite resort hotel on the Moon for 4 days and 3 nights before returning to Earth</p>

            <input type="hidden" name="ticket[]">
            <p><input type="submit" value="Add to Cart" name="buy"></p>
        </div> <!--end card -->

        <div class="card">
            <img src="../assets/images/mars.png" alt="Picture of Mars" class="img-cart">
            <h1>Trip to Mars</h1>
            <p class="price">$900,000</p>
            <p class="description">Enjoy a luxury trip to Mars. Stay in the elite resort hotel on Mars for 7 days and 6 nights before returning to Earth.</p>
            <input type="hidden" name="ticket[]">
            <p><input type="submit" value="Add to Cart" name="buy"></p>
        </div> <!--end card -->
        <form action="cart.php" method="POST">
        <div class="card">
            <img src="../assets/images/saturn.png" alt="Picture of Saturn" class="img-cart">
            <h1>Trip to Saturn</h1>
            <p class="price">$1,750,000</p>
            <p class="description">Enjoy a luxury trip orbiting Saturn, with a stay in the elite resort hotel on Mars, for 7 days and 6 nights before returning to Earth.</p>
            <input type="hidden" name="ticket[]">
            <p><input type="submit" value="Add to Cart" name="buy"></p>
        </div> <!--end card -->
        </form>

        <div class="view-cart">
        <a href="/view/cart.php"><button class="btn">View Cart</button></a>

        </div>


    </div> <!--end container -->

</main>
</body>trail
</html>


