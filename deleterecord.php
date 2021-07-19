<html>
<head>
  <link rel="stylesheet" type="text/css" href="favsongs.css">
  <title>Delete names from the database</title>
</head>

<body>

<?php include 'include.htm';?>
<h1>Delete a Record</h1>
<h2>Select record ID to delete: </h2>

<?php

  $DBConnect = mysql_connect("itec315.frostburg.edu","akhan03","3125589");

    if ($DBConnect === false)
      print "Unable to connect to database. Error Number: ".mysql_errno();

    else {

  		$DBname = "akhan03";

  		if (!@mysql_select_db($DBname,$DBConnect))
  			 print "No database found.";

  		else {
  			$TableName = "favres";
  			$SQLString = "select * from $TableName";
  			$QueryResult = @mysql_query($SQLString, $DBConnect);

  			if (mysql_num_rows($QueryResult) ==0)
  				print "There are no entries in the database to show";

  			else {
  				print "Here is the list of records in your database<br>";
  				print "<table width = '100%' border ='1'>";
  				print "<tr><th>Count as PK</th><th>Name</th><th>Cuisine</th>
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



<form method="POST" action="gone.php">

  <p>Record to Delete: <input type="text" name="record" /></p>
  <p><input type="submit" value="Submit" /></p>

</form>



</body>
</html>
