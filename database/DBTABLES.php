<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";

	//CREATE A CONNECTION
	$con = new mysqli($host, $user, $pass);
	
	// Check connection
	if ($con->connect_error) {
	    die("Connection failed: " . $con->connect_error);
	} 

	echo "connected successfully<br>";

	//create a database
	$db = new mysqli("CREATE DATABASE coolCribs");
	 if($con->query($db)===FALSE) {
		die("Database creation failed: " .mysqli_error($con));
	}
	else  {
		echo "Database created<br>";
	}

	$con->close();

	//create a new connection n select database to use
	$db = "coolCribs";
	$conn = new mysqli($host, $user, $pass, $db);
		 if($conn->query($conn)===FALSE) {
		echo("Database selection failed:" .mysqli_error($conn));
	}

	echo "Database selected<br>";

	//create home owner table

	$landlord = "CREATE TABLE homeOwner (
		nin INT(20) NOT NULL,
		sex VARCHAR(15),
		name VARCHAR(50),
		contact1 INT(25),
		contact2 INT(25),
		email VARCHAR(40),
		verified VARCHAR(5),
		village VARCHAR(25),
		parish VARCHAR(25),
		subcounty VARCHAR(25),
		county VARCHAR(25),
		district VARCHAR(25),
		region VARCHAR(25),
		rating INT(2),
		photo BLOB,
		religion VARCHAR(15),
		tribe VARCHAR(15),
		natinality VARCHAR(15),
		CONSTRAINT PK_homeOwner PRIMARY KEY (nin)
	)";


	if($conn->query($landlord)===FALSE) {
		echo("homeOwner table not created: " .mysqli_error($conn) ."<br>");
	}
	else {
	echo "homeOwner table created<br>";
			}

	//create indexs
	
?>