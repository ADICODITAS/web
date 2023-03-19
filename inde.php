<?php
// connect to the database
$servername = "ddd.mysql.database.azure.com";
$username = "admin12";
$password = "Coditas@123456";
$dbname = "database_name";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// check if the form has been submitted
if (isset($_POST['submit'])) {
    // get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    // insert data into database
    $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
