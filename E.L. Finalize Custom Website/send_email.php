<?php
// set the variables from form input (name, email, subject, message)
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$password = '';

$conn = new mysqli('localhost', 'root' , $password, 'testdb');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to insert a record into the "contact_submissions" table
$sql = "INSERT INTO contact (name, email, message, subject) VALUES ('$name', '$email', '$message', '$subject')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    header("Location: confirmation.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
