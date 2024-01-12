<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style> 

  .container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

form {
  width: 100%;
  max-width: 400px;
}

.form-content {
  display: flex;
  flex-direction: column;
  align-items: center;
}

h1 {
  text-align: center;
  margin-top: 2rem;
}

.form-group {
  margin-bottom: 1.5rem;
  align-items:center;
}

label {
  font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="date"],
input[type="file"] {
  width: 100%;
  padding: 0.5rem;
  border: 1px solid #ced4da;
  border-radius: 4px;
  background-color:yellow;
  justify-content:center;
}

button[type="submit"] {
  display: block;
  width: 100%;
  padding: 0.75rem;
  font-size: 1rem;
  font-weight: bold;
  text-align: center;
  color: #fff;
  background-color: #007bff;
  border: none;
  border-radius: 4px;
  cursor: pointer;

}

button[type="submit"]:hover {
  background-color: #0069d9;
}

input[type="file"] {
  display: inline-block;
}

.mt-3 {
  margin-top: 1rem;
}

</style>
<body><?php
// Database configuration
$server = "localhost";
$user = "root";
$password = "";
$db = "jobpostal";

// Create a connection
$conn = mysqli_connect($server, $user, $password, $db);

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Collect form data
    $fullName = $_POST['fullname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $telephone = $_POST['tel'];
    $startDate = $_POST['starting_date'];

    // Prepare the SQL statement
    $sql = "INSERT INTO apply (fullname, email, address, city, zip, telephone, start_date) 
            VALUES ('$fullName', '$email', '$address', '$city', '$zip', '$telephone', '$startDate')";

    $results = mysqli_query($conn, $sql);
    if (!$results) {
        die("Not inserted" . mysqli_error($conn));
    }

    echo "Recorded successfully";
}
?>

    
    <h1>FILL THIS FORM CORRECTLY</h1>
    <form " method="POST" >
      <div class="form-group">
        <label for="exampleInputName">Full Name</label>
        <input type="text" name="fullname" class="form-control" id="exampleInputName" placeholder="Enter your name and surname" required="required">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" required="required">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address">
      </div>
      <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">City</label>
          <input type="text" name="city" class="form-control" id="inputCity" placeholder="Istanbul">
        </div>
        <div class="form-group col-md-2">
          <label for="inputZip">Zip</label>
          <input type="text" name="zip" class="form-control" id="inputZip" placeholder="34000">
        </div>
      </div>
      <div class="form-group">
        <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
        <div class="col-10">
          <input class="form-control" name="tel" type="tel" value="1-(555)-555-5555" id="example-tel-input">
        </div>
      </div>
      <div class="form-group">
        <label for="example-date-input" class="col-3 col-form-label">Start Date</label>
        <div class="col-10">
          <input class="form-control" name="starting_date" type="date" value="2020-02-01" id="example-date-input">
        </div>
      </div>
      <div class="form-group mt-3">
        <label class="mr-4">Upload your CV:</label>
        <input type="file" name="file">
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>


  </div>
</body>

</html>