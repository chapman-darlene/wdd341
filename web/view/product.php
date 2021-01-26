<?php

class Product
{

    public $product = array (
        'jupiter' => array(
            "id" => "1",
            "name" => "Jupiter",
            "image" => "../assets/images/jupiter.png",
            "price" => "1,750,000", 
            "description" => "Enjoy a luxury trip orbiting Jupiter, with a stay in the elite resort hotel on Mars, for 7 days and 6 nights before returning to Earth."),
        'venus' => array(
            "id" => "2", 
            "name" => "Venus",
            "image" => "../assets/images/venus.png", 
            "price" => "800,000", 
            "description" => "Enjoy a luxury trip orbiting Venus. Stay in the elite resort hotel on the Moon for 4 days and 3 nights before returning to Earth"),
        'mars' => array(
            "id" => "3",
            "name" => "Mars", 
            "image" => "../assets/images/mars.png",
            "price" => "1,000,000", 
            "description" => "Enjoy a luxury trip to Mars. Stay in the elite resort hotel on Mars for 7 days and 6 nights before returning to Earth."),
        'saturn' =>array(
            "id" => "4",
            "name" => "Saturn",
            "image" => "../assets/images/saturn.png",
            "price" => "2,000,000", 
            "description" => "Enjoy a luxury trip orbiting Saturn, with a stay in the elite resort hotel on Mars, for 7 days and 6 nights before returning to Earth.")
        );
            public function getAllProduct()
            {
                return $this->productArray;
            }
        }
?>
