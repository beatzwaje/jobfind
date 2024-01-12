
<?php
// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobpostal";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$jobTitle = $_POST['jobTitle'];
$company = $_POST['company'];
$location = $_POST['location'];
$description = $_POST['description'];

// Assuming you have validated and sanitized the input data before proceeding

// Update the job listing in the database
$sql = "UPDATE job_listings SET jobTitle = '$jobTitle', company = '$company', location = '$location', description = '$description' WHERE id = ?";

// Assuming you have prepared the query and bound the parameter(s) appropriately

if ($conn->query($sql) === TRUE) {
    // The update was successful
    echo "Job listing updated successfully.";
} else {
    // An error occurred
    echo "Error updating job listing: " . $conn->error;
}

// Close the database connection
$conn->close();
?>