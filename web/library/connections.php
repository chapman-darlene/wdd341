<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../css/main_style.css">
    <link href="../css/main_nav.css" rel="stylesheet">
    <link href="../css/shopping.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  
  </head>

    <body>

    <header>    
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/common/nav.php'; 
      ?>       
    </header>
<?php

 

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

?>

<h1>Scriptures Resources</h1>';
    <?php foreach($db->query('SELECT book, chapter, verse, content FROM scriptures') AS $row)
    {
      echo '<b>'.$row['book'].' '.$row['chapter']. ':' .$row['verse'].'-</b> "' .$row['content']. '"';
      echo 'hello';
    }
    ?>

</main>
</html>
