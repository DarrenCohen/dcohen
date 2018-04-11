  
  <table border="1" width="600">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="background-color:#99E999">
      <td>1</td>
      <td>Name and country of birth of female actresses who were NOT born in the USA, ordered by last name</td>
      <td width="20" align="center">15</td>
    </tr>  
    <tr style="background-color:#99E999">
      <td>2</td>
      <td>Number of movies per category and their average duration</td>
      <td width="20" align="center">15</td>
    </tr>  
    <tr style="background-color:#99E999">
      <td>3</td>
      <td>All info about the top three longest movies released after 2000</td>
      <td width="20" align="center">15</td>
    </tr>     
     <tr style="background-color:#99E999">
       <td>4</td>
       <td>List of  actors and actresses who have not won an academy award, ordered by last name </td>
       <td align="center">15</td>
     </tr>
     <tr style="background-color:#99E999">
      <td>5</td>
      <td>List of celebrities who have won an oscar, ordered by "award_year". Include full name, movie title, oscar year, and award category.</td>
      <td width="20" align="center">15</td>
    </tr>     
     <tr style="background-color:#99E999">
      <td>6</td>
      <td>This rubric is properly included AND UPDATED (BONUS)</td>
      <td width="20" align="center">2</td>
    </tr>     
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center"><b></b></td>
    </tr> 
  </tbody></table>    


<?php
include 'dbConn.php';
//include '../includes/dbConn.php';
$sql = getDatabaseConnection("midterm");

echo "first_Name . last_Name . country_of_birth <br />";
$stmt = $dbConn->query($sql);
$result = $stmt->FetchAll();
foreach($result as $entry){
    SELECT firstName, lastName, country_of_birth 
    FROM celebrity 
    WHERE country_of_birth IS != 'USA' 
    AND gender = 'F' 
    ORDER BY lastName;
    echo "$entry[$result] <br />";}

echo "Category . Number_of_Movies . Average_Duration: <br />";
$stmt = dbConn->query($sql);
$result = $stmt->FetchAll();
foreach($result as $entry){
    SELECT movie_category, SUM(movie_title), AVG(duration) 
    FROM movie 
    GROUP BY movie_category;
    echo "$entry[$result] <br />";}
    
    //Top three longest movies released after 2000

echo "Title . Movie_Category . Duration . Company . Release_Year: <br />";
$stmt = dbConn->query($sql);
$result = $stmt->FetchAll();
foreach($result as $entry){
    SELECT * FROM movie 
    WHERE release_year > 2000 
    SORT BY duration DESC 
    LIMIT 3;
    echo "$entry[$result] <br />";}


$stmt = dbConn->query($sql);
$result = $stmt->FetchAll();
foreach($result as $entry){
    SELECT firstName, lastName 
    FROM celebrity INNER JOIN oscar 
    WHERE celebrity_Id = celebrityId 
    AND award_cat_id IS NULL 
    ORDER BY lastName;
    echo "$entry[$result] <br />";}

echo "firstName . lastName . movie_title . award_category . award_year: <br />";
$stmt = dbConn->query($sql);
$result = $stmt->FetchAll();
foreach($result as $entry){
    SELECT firstName, lastName, movie_title, award_category, award_year 
    FROM celebrity RIGHT JOIN movie LEFT JOIN oscar LEFT JOIN award_category 
    WHERE oscarId != NULL
    SORT BY release_year;
    echo "$entry[$result] <br />";}
?>