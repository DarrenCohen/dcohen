<?php

function getDatabaseConnection() { //$dbname parameter
mysql://b40fd45b582efa:a9453da8@/heroku_cd82f18b9512e4e?reconnect=true
$host = "us-cdbr-iron-east-05.cleardb.net";
$dbname = "heroku_cd82f18b9512e4e"; //$dbname
$username = "b40fd45b582efa";     //root
$password = "a9453da8";

//checks whether the URL contains "herokuapp" (using Heroku)
if(strpos($_SERVER['HTTP_HOST'], 'herokuapp') !== false) {
   $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
   $host = $url["host"];
   $dbname = substr($url["path"], 1);
   $username = $url["user"];
   $password = $url["pass"];
}

$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

return $dbConn;

}

?>