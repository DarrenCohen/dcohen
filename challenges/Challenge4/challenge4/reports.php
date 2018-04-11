<?php

 $sql1 = "SELECT COUNT(1)
            FROM purchase p
            INNER JOIN user u
            on p.user_id = u.userId
            WHERE purchaseDate >= \"2018-02-01\" AND purchaseDate <= \"2018-02-29\"";
            
 $sql2 = "SELECT productName
            FROM user u
            INNER JOIN purchase p
            on u.userId = p.user_id
            NATURAL JOIN product
            WHERE email LIKE \"%@aol.com\" ";
            
 $sql3 = "SELECT SUM(quantity), sex
            FROM user u
            INNER JOIN purchase p
            on u.userId = p.user_id
            GROUP BY sex";

 $sql4 = "SELECT DISTINCT(catName)
            FROM purchase p
            INNER JOIN user u
            on p.user_id = u.userId
            NATURAL JOIN product 
            NATURAL JOIN category cat
            WHERE purchaseDate >= \"2018-02-01\" AND purchaseDate <= \"2018-02-29\"";
            
 ?>