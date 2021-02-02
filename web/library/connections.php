<?php

function get_db(){

    $db = 'NULL';

    try{
        // default Heroku Postgres configuration URL
        $dbUrl = getenv('DATABASE_URL');

        // if (empty($dbUrl) || empty($dbURL)) {
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

        $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
        // this line makes PDO give us an exception when there are problems, and can be very helpful in debugging!
		$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }
    catch (PDOException $ex) {
        print "<p>error: $ex->getMessage() </p>\n\n";
        die();
    }
    return $db;
}
?>

