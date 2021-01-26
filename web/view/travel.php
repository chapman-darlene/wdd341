<?php

include $_SERVER['DOCUMENT_ROOT'] . '/common/header.php';
	
	session_start();
	$_SESSION['cart'] = array();
	$cart = $_SESSION['cart'];
	

?>

<main>

    <h1>Travel Packages</h1>
    <div class="container">
	<div class="card">
		<form action="cart.php" method="POST" class="main-form">
			<img src="../assets/images/jupiter.png" alt="Picture of Jupiter" class="img-cart">
			<h1>Trip to Jupiter</h1>
			<p class="price">$1,750,000* per person</p>
			<p class="description">Enjoy a luxury trip orbiting Jupiter, with a stay in the elite resort hotel on Mars, for 7 days and 6 nights before returning to Earth.</p>
			
			<input type="text" name="planet" value="Jupiter" hidden>
			<input type="number" name="price" value="1750000" hidden>
			<input class="card-button" type ="submit" name="action" value="Buy">
		</form>
	</div> <!--end card -->

	<div class="card">
		<form action="cart.php" method="POST" class="main-form">
			<img src="../assets/images/venus.png" alt="Picture of Venus" class="img-cart">
			<h1>Trip to Venus</h1>
			<p class="price">$800,000* per person</p>
			<p class="description">Enjoy a luxury trip orbiting Venus. Stay in the elite resort hotel on the Moon for 4 days and 3 nights before returning to Earth</p>			
			<input type="text" name="planet" value="Venus" hidden>
			<input type="number" name="price" value="800000" hidden>
			<input class="card-button" type ="submit" name="action" value="Buy">
		</form>        	
        </div> <!--end card -->
  
	<div class="card">
		<form action="cart.php" method="POST" class="main-form">
			<img src="../assets/images/mars.png" alt="Picture of Mars" class="img-cart">
			<h1>Trip to Mars</h1>
			<p class="price">$1,000,000* per person</p>
			<p class="description">Enjoy a luxury trip to Mars. Stay in the elite resort hotel on Mars for 7 days and 6 nights before returning to Earth.</p>
			<input type="text" name="planet" value="Mars" hidden>
			<input type="number" name="price" value="1000000" hidden>
			<input class="card-button" type ="submit" name="action" value="Buy">
    	</form>
	</div> <!--end card -->
    
    <div class="card">
		<form action="cart.php" method="POST" class="main-form">
            <img src="../assets/images/saturn.png" alt="Picture of Saturn" class="img-cart">
            <h1>Trip to Saturn</h1>
            <p class="price">$2,000,000* per person</p>
            <p class="description">Enjoy a luxury trip orbiting Saturn, with a stay in the elite resort hotel on Mars, for 7 days and 6 nights before returning to Earth.</p>
            <input type="text" name="planet" value="Saturn" hidden>
			<input type="number" name="price" value="2000000" hidden>
			<input class="card-button" type ="submit" name="action" value="Buy">
		</form>
    </div> <!--end card --> 
  	</div> <!--end container -->
	<div class="view-cart">
		<a href="cart.php"><button class="btn">View Cart</button></a>
	</div>

</main>
</body>

</html>