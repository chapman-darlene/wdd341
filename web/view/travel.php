<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/common/header.php';
?>

<main>
<?php $_SESSION['cart'] = 'cart'; ?>
    <h1>Travel Packages</h1>
    <div class="container">
        <div class="card">
            <img src="../assets/images/jupiter.png" alt="Picture of Jupiter" class="img-cart">
            <h1>Trip to Jupiter</h1>
            <p class="price">$1,500,000</p>
            <p class="description">Enjoy a luxury trip orbiting Jupiter, with a stop on Mars. Stay in the Mars hotel for 7 days and 6 nights before returning to Earth.</p>
            <p><button id="addCart" onclick='window.location.href="cart.php"'>Add to Cart</button></p>
        </div> <!--end card -->

        <div class="card">
            <img src="../assets/images/venus.png" alt="Picture of Venus" class="img-cart">
            <h1>Trip to Venus</h1>
            <p class="price">$700,000</p>
            <p class="description">Enjoy a luxury trip orbiting Venus and back to earth</p>
            <p><button>Add to Cart</button></p>
        </div> <!--end card -->

        <div class="card">
            <img src="../assets/images/mars.png" alt="Picture of Mars" class="img-cart">
            <h1>Trip to Mars</h1>
            <p class="price">$800,000</p>
            <p class="description">Enjoy the luxury trip to Mars. Stay in the Mars hotel for 7 days and 6 nights before returning to Earth.</p>
            <p><button>Add to Cart</button></p>
        </div> <!--end card -->

        <div class="card">
            <img src="../assets/images/saturn.png" alt="Picture of Saturn" class="img-cart">
            <h1>Trip to Saturn</h1>
            <p class="price">$1,750,000</p>
            <p class="description">Enjoy the luxury trip orbiting Saturn, with a stop on Mars. Stay in the Mars hotel for 7 days and 6 nights before returning to Earth.</p>
            <p><button>Add to Cart</button></p>
        </div> <!--end card -->

    </div> <!--end container -->

</main>
</body>
</html>


