<html>
<head>
  <link rel="stylesheet" type="text/css" href="favsongs.css">
  <title>Inputs</title>
</head>

<body>
<?php include 'include.htm';?>

<h1>Input Information</h1>
<h2>This is an input page.</h2>
<h2>Please input your information below: </h2>

<div class="container">
<fieldset>
  <form method="POST" action="storerecords.php">
    <p>Name: <input type="text" name="name" /></p>
    <p>Favorite Cuisine: <input type="text" name="cuisine" /></p>
    <p>Favorite Restaurant: <input type="text" name="restaurant" /></p>
    <p><input type="submit" value="Submit" /></p>
  </form>
</fieldset>
</div>

<body>
<html>
