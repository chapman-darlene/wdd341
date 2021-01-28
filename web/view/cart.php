<?php 

include_once $_SERVER['DOCUMENT_ROOT'] . '/common/header.php';

session_start();


$_SESSION['cart'] = $_POST;

if (!isset($_SESSION['cart'])) {   
    $_SESSION['cart'] = array();
    array_push($_SESSION['cart'] = $_POST);
}elseif(isset($_SESSION['cart'])){
    array_push($_SESSION['cart'], $_POST);
}


$planet = htmlspecialchars($_POST["planet"]);
$price = htmlspecialchars(number_format($_POST["price"]));
   
//print_r($_SESSION['cart']);

  
?>

<main>
    
    <div class="container">
        <table class ="main–table">
        <thead>Your ordered a trip to:</thead>
            <tr>
                <td><?php echo "Planet: " . $planet; ?>
                </td>
            </tr>
            <tr>
                <td>The cost is: <?php echo "Price: $" . $price; ?></td>
            </tr>
        </table>
        <br>

        <table class="main-table">
            <thead>Items in your cart:</thead>
            <tr>
                <td>
                    <?php 
                        foreach($_POST as $item){
                            $planet = htmlspecialchars($_POST['planet']);
                            $price = htmlspecialchars(number_format($_POST['price']));
                            echo '<tr><td>' .$planet .'</td><td>' .$price. '</td></tr>';
                        }
                        
                    ?>

                </td>
            </tr>
        </table>
        <a href="travel.php"><button>Continue Shopping</button></a>
        



    </div>
</main>
