<?
    function getProduct(){
    //Creat Connection object from the acme connection folder 
        $db = dbConnect(); 
        // The SQL statement to be used with the database 
        //$sql = 'SELECT categoryId, categoryName FROM categories ORDER BY categoryName ASC'; 
        // The next line creates the prepared statement using the acme connection      
        $stmt = $db->prepare($sql);
        // The next line runs the prepared statement 
        $stmt->execute(); 
        // The next line gets the data from the database and 
        // stores it as an array in the $categories variable 
        $product = $stmt->fetchAll(); 
        // The next line closes the interaction with the database 
        $stmt->closeCursor(); 
        // The next line sends the array of data back to where the function 
        // was called (this should be the controller) 
        return $product;
    }
?>