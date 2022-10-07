
<html>
    <body>
        
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>qte</th>
        <th>price</th>
</tr>
        

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
// affichage les info existes dans la bd
$sql = "SELECT id, name, Qte, prise FROM article";
$result = $conn->query($sql);
//affichage sous forme tab
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td> " . $row["id"]. " </td><td> " . $row["name"]. "</td><td> " . $row["Qte"]. "</td><td>" . $row["prise"]. "
    </td><td><button> <a href='./update.php?id=" . $row['id'] . "'>Update</a></button><button><a href='./delete.php?id=" . $row['id'] . "'>Delete</a></button></td></tr>" ;
  }
} else {
  echo "0 results";
}
$conn->close();
?>

</table>
<button> <a href="create.html"> Create </a></button>

</body>
</html>