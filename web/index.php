<?php
  //main controller file

//link database connection by require_once call
require_once '/library/connections.php';
//link helper functions
//require_once 'library/functions.php';
//link model
//require_once 'model/';
//link accounts-model
//require_once 'model/accounts-model.php';
//link products model
//require_once 'model/products-model.php';


  //Start homepage
    $action = filter_input(INPUT_POST, 'action');
  if ($action == NULL){
      $action = filter_input(INPUT_GET, 'action');
      if($action == NULL){
          $action = 'home';
    }
  
  switch ($action){
      case 'home':
          include 'view/home.php';
            break;    
      default:
          include 'view/home.php';
      }
  }
?>