 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chat";

// Create connection
$conn = new mysqli($servername, $username, "", $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

//inser tdata

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$psw = $_POST['psw'];
$sql = "INSERT INTO details (email, mobile, name, psw) VALUES ('$email','$mobile','$name', '$psw')";




if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
