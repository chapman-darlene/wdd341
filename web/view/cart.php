<?php 

include_once $_SERVER['DOCUMENT_ROOT'] . '/common/header.php';

session_start();



if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
    array_push($_SESSION['cart'], $_POST);
   
}

// elseif(!in_array($_POST ["action"], $_SESSION['cart'])) {
//             // Add new item to cart
//             $_SESSION ['cart'][] = $_POST["action"];
        
//     }



// //Add
// if (isset ( $_POST ["action"] )) {
//     // Check the item is not already in the cart
//     if (!in_array($_POST ["action"], $_SESSION['cart'])) {
//         // Add new item to cart
//         $_SESSION ['cart'][] = $_POST["action"];
//     }
// }

// if (isset ( $_POST ['delete'] )) { // a remove button has been clicked
//     // Remove the item from the cart
//     if(!empty($_SESSION["cart"])) {

//         foreach($_SESSION["cart"] as $select => $val) {  
    
//             unset($_SESSION["cart"]);
    
//         }    
//     }
// }
  
?>

<main>
    
    <div class="container">
        <table class ="main–table card">
        <thead>Your ordered a trip to:</thead>
        <tr>
        <td><?php echo "Planet: " . htmlspecialchars($_POST["planet"]) ?>
        </td>
        </tr>
        <tr>
        <td>The cost is: <?php echo "Price: $" . number_format($_POST["price"]) ?></td>
        </tr>
        </table>
        <br>
        <a href="travel.php"><button>Continue Shopping</button></a>
        



    </div>
</main>
