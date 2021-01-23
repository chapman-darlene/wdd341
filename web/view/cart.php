<?php

session_start();
$cart = $_SESSION['cart'];

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
      $buy = $_POST["buy"];
      echo $buy;
      echo $ticket;
  
?>