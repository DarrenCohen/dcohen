
    <table border="1" width="600">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="background-color:#99E999">
      <td>1</td>
      <td>The page includes the form elements as the Program Sample: dropdown menu, radio buttons, etc.</td>
      <td width="20" align="center">5</td>
    </tr>
    <tr style="background-color:#99E999">
      <td>2</td>
      <td>Errors are displayed if month or number of locations are not submitted.</td>
      <td width="20" align="center">5</td>
    </tr> 
    <tr style="background-color:#99E999">
      <td>3</td>
      <td>Header and Subheader are displayed with info submitted. </td>
      <td align="center">5</td>
    </tr>    
	<tr style="background-color:#99E999">
      <td>4</td>
      <td>A table with days and weeks is displayed when submitting the form</td>
      <td align="center">5</td>
    </tr> 
    <tr style="background-color:#99E999">
      <td>5</td>
      <td>The number of days in the table correspond to the month selected</td>
      <td align="center">10</td>
    </tr>
    <tr style="background-color:#99E999">
      <td>6</td>
      <td>Random images are displayed in random days</td>
      <td align="center">5</td>
    </tr>       
    <tr style="background-color:#99E999">
      <td>7</td>
      <td>The number of random images correspond to the number of locations and country submitted</td>
      <td align="center">10</td>
    </tr>  
    <tr style="background-color:#99E999">
      <td>8</td>
      <td>The proper name of the location is displayed below the image 
      		(e.g. "New York", "Las Vegas")</td>
      <td align="center">10</td>
    </tr>  
    <tr style="background-color:#99E999">
      <td>9</td>
      <td>The list of months submitted along with the country and number of locations is displayed below the table (using Sessions)</td>
      <td align="center">15</td>
    </tr>    
    <tr style="background-color:#99E999">
      <td>10</td>
      <td>Random locations should be ordered alphabetically, if user checks corresponding radio button (A-Z or Z-A). </td>
      <td align="center">15</td>
    </tr>        
    <tr style="background-color:#99E999">
      <td>11</td>
      <td>The web page uses Bootstrap and has a nice look. </td>
      <td align="center">5</td>
    </tr>        
    <tr style="background-color:#99E999">
      <td>12</td>
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
  getPic($country){
  $rand = rand(1:6);
  }
  ?>
  

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
  <submit>
    <option value='November'></option>
    <option value = 'January'></option>
    <option value = 'February'></option>
    </submit>
    
    <submit>
    <option value='1'></option>
    <option value = '2'></option>
    <option value = '3'></option>
    </submit>
    
    <submit>
    <option value='USA'></option>
    <option value = 'Mexico'></option>
    <option value = 'France'></option>
    </submit>
    
    
    <img src='img/$country/$rand.png'>
<ul>
    <li>November</li>
    <li>January</li>
    <li>February</li>
</ul>

<ul>
    <li>1</li>
    <li>2</li>
    <li>3</li>
</ul>

<ul>
    <li>USA</li>
    <li>Mexico</li>
    <li>France</li>
</ul>

    </body>
</html>