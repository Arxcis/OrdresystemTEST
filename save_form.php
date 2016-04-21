<p>Header header header</p>
<?php
	//echo $_POST['Varenavn'];
	//echo $_POST['Varenummer'];
	//echo $_POST['Kunde'];
	//echo $_POST['Telefon'];

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "eviate_db";
	$port = 8889;
	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

	if(mysqli_connect_errno())
	{
		die("Connection Failed!" . mysqli_connect_error());
	}
	else 
	{
		echo "Connected to database {$dbname}";
	}

	$sql = "INSERT INTO ordreliste (Varenavn, Varenummer, Kundenavn, Telefonnummer)
VALUES ('1', '2', '3', 'john@example.com')";
?>

<br>
<p> My name is Jonas</p>