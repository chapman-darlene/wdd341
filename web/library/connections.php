

<?php
include '../common/header.php';


function dbConnect(){  

    // default Heroku Postgres configuration URL
    $dbUrl = getenv('DATABASE_URL');

    // if (empty($dbUrl)) {
    // // example localhost configuration URL with postgres username and a database called cs313db
    //     //$dbUrl = "postgres://postgres:password@localhost:5432/cs313db";
    //     //$dbUrl = "c:/xampp/htdocs/cs313-php";
    // }

    $dbopts = parse_url($dbUrl);

    //print "<p>$dbUrl</p>\n\n";

    $dbHost = $dbopts["host"];
    $dbPort = $dbopts["port"];
    $dbUser = $dbopts["user"];
    $dbPassword = $dbopts["pass"];
    $dbName = ltrim($dbopts["path"],'/');

    //print "<p>pgsql:host=$dbHost;port=$dbPort;dbname=$dbName</p>\n\n";

    try {
        $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    }
    catch (PDOException $ex) {
        print "<p>error: $ex->getMessage() </p>\n\n";
    die();
    }

    }

dbConnect();

    echo '<h1>Scriptures Resources</h1>';
    foreach($db->query('SELECT book, chapter, verse, content FROM Scriptures') AS $row)
    {
      echo '<b>'.$row['book'].' '.$row['chapter']. ':' .$row['verse'].'-</b> "' .$row['content']. '"';
      echo 'hello';
    }
?>


</main>
</html>
