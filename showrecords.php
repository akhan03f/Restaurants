<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" type="text/css" href="favsongs.css">
  <title>Show records in the database</title>
</head>

<body>

<?php include 'include.htm';?>
<h1>Display Records</h1>

<?php

  $DBConnect = mysql_connect("localhost","akhan03","31255899"); /* changed from itec and pw change */

    if ($DBConnect === false)
      print "Unable to connect to database. Error Number: ".mysql_errno();

    else {

  		$DBname = "akhan03";

  		if (!@mysql_select_db($DBname,$DBConnect))
  			 print "No database found.";

  		else {
  			$TableName = "favres2"; /*changed name from favres*/
  			$SQLString = "select * from $TableName";
  			$QueryResult = @mysql_query($SQLString, $DBConnect);

  			if (mysql_num_rows($QueryResult) ==0)
  				print "There are no entries in the database to show";

  			else {
  				print "Here is the list of items in your database<br>";
  				print "<table width ='100%' border='3px'>";
  				print "<tr><th>Count (PK)</th><th>Name</th><th>Cuisine</th>
                <th>Favorite Restaurant</th></tr>";
  				while (($Row = mysql_fetch_assoc($QueryResult)) !== false) {

  					print"<tr><td>{$Row['Count']}</td>";
  					print"<td>{$Row['name']}</td>";
  					print"<td>{$Row['cuisine']}</td>";
  					print"<td>{$Row['restaurant']}</td></tr>";
				  }

				print "</table>";

			   }
			mysql_free_result($QueryResult);
		  }
		mysql_close($DBConnect);
  }
?>

</body>
</html>
