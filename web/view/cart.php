<?php 

include_once $_SERVER['DOCUMENT_ROOT'] . '/common/header.php';

session_start();


if (!isset($_SESSION['cart'])) {   
    $_SESSION['cart'] = array();
    array_push($_SESSION['cart'] = $_POST);
}elseif(isset($_SESSION['cart'])){
    array_push($_SESSION['cart'], $_POST);
}


$planet = htmlspecialchars($_POST["planet"]);
$price = htmlspecialchars(number_format($_POST["price"]));
   
print_r($_SESSION['cart']);

  
?>

<main>
    
    <div class="cart-container">
        
            <h1 class="cart-h1">Your Ticket Purchase:</h1><br>
            <br>
            <h3 class="cart-h3"><?php echo "Planet:  " . $planet; ?></h3><br>
            <h3 class="cart-h3"><?php echo "Price:  $" . $price; ?></h3>
            <br>
            <a href="travel.php"><button  class="btn" >Continue Shopping</button></a>
       
    </div>
</main>
</body>
</html>
