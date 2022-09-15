<?php
$q=$_POST{"fname"};
$w=$_POST{"lname"};
$e=$_POST{"address"};
$r=$_POST{"email"};
$t=$_POST{"password"};
$y=$_POST{"contact"};
$u=$_POST{"dob"};
$i=$_POST{"gender"};
$o=$_POST{"education"};
$p=$_POST{"bloodgroup"};
$s=$_POST{"country"};
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "receiptsdb1";
// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
echo "Connected sucessfully";
$sql = "INSERT INTO registrations (Firstname, Lastname, Address, Email, Password, Contact, DOB, Gender, Education, Blood Group, Country) VALUES ('$q','$w','$e','$r','$t','$y','$u','$i','$o','$p','$s')";

if ($conn->query($sql) == TRUE) {
	echo "New record created sucessfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>