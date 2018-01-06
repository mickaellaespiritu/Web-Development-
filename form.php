<html>
<head></head>
<body>
<form action ="dashboard.php" method="post"> 
<p> Login</p>
<?php
if( isset($_GET ['error']) )
	echo "Please";
?>
<p>Username: 
<br/><input type="text" name="username"/> </p>
<p>Password:
<br/><input type="password" name="password"/> </p>
<p> 
<input type="submit" value="Login"/>
<input type="reset" value="Clear"/> </p>
</form>

<?php
//require"db.php"
?>

<p> Password: 12345</p>
<?php echo "<p>Encrypted shal: ".sha1('12345')."</p>";?>
<?php echo "<p>Encrypted md5: ".md5('12345')."</p>";?>
</body>
</html>