<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/common/header.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/library/connections.php';
    $db = get_db();

    $text = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $text = $_POST['text'];
        }
?>

<main>

<h1>Scriptures Resources</h1>
    <?php foreach($db->query('SELECT book, chapter, verse, content FROM scriptures') AS $row)
        {
        echo '<strong>'.$row['book'].' '.$row['chapter']. ':' .$row['verse'].'-</strong> "' .$row['content']. '"';
        
        }
    ?>

    <form method='post' action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?> ">
        <label for="text">Search: </label>
        <input type="text" id="text" name="text">
  </form>


  <?php 
    if ($_SERVER["REQUEST_METHOD"] == "GET" AND $text == "") {
        foreach($db->query('SELECT book, chapter, verse, content FROM Scriptures') AS $row)
        {
            echo '<b>'.$row['book'].' '.$row['chapter'].':'.$row['verse'].'</b> - "'.$row['content'].'"<br><br>';
        }
    } else {
        searchBook($text, $db);
    }

    function searchBook($text, $db) {
        $stmt = $db->prepare('SELECT * FROM Scriptures WHERE book=:text');
        $stmt->bindValue(':text', $text, PDO::PARAM_STR);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($rows AS $row) {
            echo '<strong>'.$row['book'].' '.$row['chapter'].':'.$row['verse'].'</strong> - 
            <form action="details.php" method="POST">
            <input type="hidden" name="id" value="' . $row['id'] . '">
            <input type="submit">
            </form>
            
            <br><br>';
        }
    }
  ?>

</main>
</html>

</body>
</html>