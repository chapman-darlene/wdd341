<?php 

include_once $_SERVER['DOCUMENT_ROOT'] . '/common/header.php';

session_start();



if (!isset($SESSION['cart'])) {
    $_SESSION['cart'] = array();
    array_push($_SESSION['cart'], $_POST);
    print_r($_SESSION['cart']);
} 



// Add
// if (isset ( $_POST ["action"] )) {
//     // Check the item is not already in the cart
//     if (!in_array($_POST ["action"], $_SESSION['cart'])) {
//         // Add new item to cart
//         $_SESSION ['cart'][] = $_POST["action"];
//     }
// }

// else if (isset ( $_POST ['delete'] )) { // a remove button has been clicked
//     // Remove the item from the cart
//     if (false !== $key = array_search($_POST['delete'], $_SESSION['cart'])) {
//         unset($_SESSION['cart'][$key]);
//     }
// }
  
?>

<main>
    <div class="container">
        <table class ="main–table">
        <thead>Your ordered a trip to:</thead>
        <tr>
        <td><?php echo "Planet: " . htmlspecialchars($_POST["planet"]) ?>
        </td>
        </tr>
        <tr>
        <td>The cost is: <?php echo "Price: " . htmlspecialchars($_POST["price"])  ?></td>
        </tr>
        </table>

    </div>
</main>
