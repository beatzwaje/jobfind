<!DOCTYPE html>
<html>
<head>
  <title>Add Job Form</title>
  <style>
   /* Apply general styling to the form */
.form-container {
  max-width: 400px;
  margin: 0 auto;
  padding: 40px;
  background-color: #f4f4f4;
  border-radius: 5px;
}

h2 {
  text-align: center;
}

/* Style the form inputs and labels */
.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  font-weight: bold;
}

input[type="text"],
textarea,
input[type="date"] {
  width: 100%;
  padding: 35px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

/* Style the submit button */
button[type="submit"] {
  background-color: #4caf50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #45a049;
}

/* Add some spacing and center the form */
body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f2f2f2;
}
</style>
</head>
<body>

  
    <div class="form-container">
      <h2>Add Job</h2>
      <form action="#" method="POST">
        <div class="form-group">
          <label for="job-name">Job Name:</label>
          <input type="text" id="job-name" name="job-name" required>
        </div>
        <div class="form-group">
          <label for="job-category">Job Category:</label>
          <input type="text" id="job-category" name="job-category" required>
        </div>
        <div class="form-group">
          <label for="department">Department:</label>
          <input type="text" id="department" name="department" required>
        </div>
        <div class="form-group">
          <label for="description">Description:</label>
          <textarea id="description" name="description" required></textarea>
        </div>
        <div class="form-group">
          <label for="validation-date">Validation Date:</label>
          <input type="date" id="validation-date" name="validation-date" required>
        </div>
        <div class="form-group">
          <button type="submit">Add Job</button>
        </div>
      </form>
    </div>
    <?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $jobName = $_POST["job-name"];
    $jobCategory = $_POST["job-category"];
    $department = $_POST["department"];
    $description = $_POST["description"];
    $validationDate = $_POST["validation-date"];

    // Database connection details
    $servername = "localhost";
    $dbname = "jobpostal";
    $dbusername = "root";
    $dbpassword = "";

    // Create a connection to the database
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute an SQL statement to insert the job data into the database
    $sql = "INSERT INTO jobs (job_name, job_category, department, description, validation_date)
            VALUES ('$jobName', '$jobCategory', '$department', '$description', '$validationDate')";

    if ($conn->query($sql) === true) {
        echo "Job added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
  }
?>
</body>
</html>