<?php

/*how many users bought something in february
what products were bought by users who have an aol account
what is the total quantity of products bought by male and female users
what product categories were bought in february*/

$sql1 = SELECT COUNT(1) totalPurchases 
FROM purchase p INNER JOIN user u
ON u.userId = p.user_Id
WHERE p.purchaseDate >= "2018-02-01" 
AND p.purchaseDate <= "2018-02-29" 

$sql2 = SELECT productId
FROM purchase p INNER JOIN user u 
ON u.userID = p.user_Id
WHERE u.email LIKE '%@aol.%'

$sql3 = SELECT SUM(quantity), sex
FROM purchase p INNER JOIN user u 
ON u.userId = p.user_ID 
GROUP BY u.sex


$host = "localhost";
$dbname = "ottermart";
$username = "root";
$password = "";
$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $dbConn ->prepare($sql1);
$stmt->execute();
$records = stmt->fetch();

print_r($records);

echo "Total Purchases in February: " . $records['totalPurchases'];

$stmt = $dbConn ->prepare($sql2);
$stmt->execute();
$records = stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($records);

foreach($records as $record){
    echo $record['productName'] . "<br />";
}
?>