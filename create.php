<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


//create sql request 
//define variables
$id = $_POST["id"];
$name = $_POST["name"];
$Qte = $_POST["Qte"];
$prise = $_POST["prise"];

$sql = "INSERT INTO article( id, name,Qte , prise) VALUES ('".$id."','".$name."','".$Qte."','".$prise."')";

//execute request 
if ($conn->query($sql) === TRUE) {
    header( 'Location: ./index.php' ) ;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
//close connection 
$conn->close();
?>
