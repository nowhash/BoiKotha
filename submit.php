<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "boikotha";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(!empty($_POST)){
$name=$_POST['name'];
$bname=$_POST['bname'];
$rname=$_POST['rname'];
$tname=$_POST['tname'];
$comment=$_POST['comment'];
$comment= $_POST['comment'];
}
$sql = "INSERT INTO  boikotha_post(name,bname,rname,tname,comment)
VALUES ('$name','$bname','$rname','$tname','$comment')";

if ($conn->query($sql) === TRUE) {
    echo "Your Post updated Successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
