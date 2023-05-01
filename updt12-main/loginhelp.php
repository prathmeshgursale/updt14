<?php
// Establish a connection to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "authentication";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$data1 =$_POST["email"];
$data2 =$_POST["password"];
// Construct the SQL query to select data from a table
$sql = "SELECT * FROM credentials WHERE email='$data1' ";
$sql = "SELECT * FROM credentials WHERE passwd='$data2' ";

// Execute the SQL query and store the result in a variable
$result = $conn->query($sql);

// Check if there are any rows returned by the query
if ($result->num_rows > 0) {
  // Loop through each row and extract the data
  while($row = $result->fetch_assoc()) {
    // Store the data in a variable
    $da1 = $row["email"];
    // Do something with the data
    // echo $data;
  }
} 
// Execute the SQL query and store the result in a variable
$result = $conn->query($sql);

// Check if there are any rows returned by the query
if ($result->num_rows > 0) {
  // Loop through each row and extract the data
  while($row = $result->fetch_assoc()) {
    // Store the data in a variable
    $da2 = $row["passwd"];
    // Do something with the data
    // echo $data;
  }
} 

if($data1 ==$da1 && $data2 ==$da2)
{
    header("location:loginsuccess.php");
}
else
{
    echo "login unsuccessfull";
}

?>