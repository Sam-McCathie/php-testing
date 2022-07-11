<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

// GET - shows up in url
echo "<h3>GET example</h3>";
echo "Name: " . $_GET['name'];
echo "<br/>";
echo "Age: " . $_GET['age'];
?>

<br><br>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label>Age: </label>
  <input type="number" name="age">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>

<hr>

<?php
// POST - does not show up in url
echo "<h3>POST example</h3>";
echo "Name: " . $_POST['name'];
echo "<br/>";
echo "Age: " . $_POST['age'];
?>

<br><br>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label>Age: </label>
  <input type="number" name="age">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>