<?php include('server.php') ?>

<?php
 
$username = "root";
$server="localhost";
$password=" ";
$dbname="quiz";

    $conn = new mysqli($server, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 
$name = $_SESSION['username'];
echo $name;

$sql = "SELECT username, subjects, totalmarks, score  FROM userprofile  WHERE  username = '$name'";

$result = $conn->query($sql) or die($conn->error);

  while($row = $result->fetch_assoc()) {
    echo " Name: " . $row["username"]. " - subject: " . $row["subjects"]. " - Total Marks: " . $row["totalmarks"]. " - Score: " . $row["score"] ;
  }

$conn->close();
?>