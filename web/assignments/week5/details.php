<?php

    include $_SERVER['DOCUMENT_ROOT'] . '/common/header.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/library/connections.php';
    $db = get_db();
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
      $id = $_POST['id'];
    }

?>

<body>
  <h1>Scripture Details</h1>
  <?php 

    details($id, $db);
    function details($id, $db) {
      $stmt = $db->prepare('SELECT book, chapter, verse, content FROM Scriptures WHERE id=:id');
      $stmt->bindValue(':id', $id, PDO::PARAM_INT);
      $stmt->execute();
      $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
      foreach($rows AS $row) {
          echo '<strong>'.$row['book'].' '.$row['chapter'].':'.$row['verse'].'</strong> - "'.$row['content'].'"<br><br>';
      }
    }
  ?>
</body>

</html>