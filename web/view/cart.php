<?php

session_start();
$cart = $_SESSION['cart'];

// set Session
if (! isset ( $_SESSION ['cart'] )) {
    $_SESSION ['cart'] = array($ticket);
}

// Add
    if (isset ( $_POST ["buy"] )) {
        $ticket = $_POST['ticket[]'];
        // Check the item is not already in the cart
        if (!in_array($_POST ["buy"], $_SESSION['cart'])) {
            // Add new item to cart
            $_SESSION ['cart'][] = $_POST["buy"];
        }
    }

      $itemName;
      $price;
      $itemNumber;
      $ticket = $_POST['ticket[]'];
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
    echo $ticket;
    echo $cart;
  
?>