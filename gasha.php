

<!DOCTYPE html>
<html>

<head>
  <title>Create Account </title>
 <style>
 body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 20px;
  
}

h1 {
  font-size: 28px;
color:darkred;
 margin-left:390px;
}

h2 {
  font-size: 25px;
  margin-top: 20px;
  margin-left:390px;
  color:darkred;
}

form {
  margin-top: 20px;
  margin-left:300px;
 
  width:40%;
}

fieldset {
  border: none;
  padding: 0;
}

legend {
  font-weight: bold;
}

label {
  display: block;
  margin-top: 10px;
  color:orange;
}

input {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
}

small {
  display: block;
  margin-top: 12px;
  font-size: 15px;
  color: darkred;
}

button {
  margin-top: 20px;
  margin-left:600px;
  padding: 10px 20px;
  background-color: green;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

footer {
  margin-top: 20px;
  border-top: 1px solid #ccc;
  padding-top: 10px;
  font-size: 22px;
  color:darkblue;
}

.footer-links {
  margin-bottom: 10px;
  color:yellow;
}

.footer-links a {
  margin-right: 10px;
  text-decoration: none;
  color:orange;
}

.contact-info p {
  margin: 5px 0;
}.poe{
margin-left:100px;
width:45%;
}.education-level {
  max-width: 400px;
  margin: 0 auto;
}



form {
  display:flex;
  flex-direction: column;
}

label {
  margin-bottom: 10px;
  color:darkblue;
}

select,
input[type="text"],
input[type="file"] {
  padding: 8px;
  margin-bottom: 15px;
}

.file-size-info {
  display: block;
  margin-top: 5px;
  font-size: 0.9em;
  color: indigo;
}

 </style>
</head>

<body>


<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "jobpostal";
$con = mysqli_connect($server, $user, $password, $db);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $phonenumber = $_POST['phoneNumber'];
    $password = $_POST['password'];
  
    $province= $_POST['province'];
    $district = $_POST['district'];
    $sector = $_POST['sector'];
    $maritalstatus = $_POST['maritalStatus'];
    $nationality = $_POST['nationality'];
    $educationfield = $_POST['educationField'];
    $qualification = $_POST['qualification'];
    $certificate = $_POST['certificate'];

    // File Upload
    $targetDir = 'uploads/';
    $targetFile = $targetDir . basename($_FILES['attachment']['name']);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if ($fileType !== 'pdf') {
        echo 'Only PDF files are allowed.';
        exit;
    }

    if ($_FILES['attachment']['size'] > 2 * 1024 * 1024) {
        echo 'File size should not exceed 2MB.';
        exit;
    }

    if (!move_uploaded_file($_FILES['attachment']['tmp_name'], $targetFile)) {
        echo 'Sorry, there was an error uploading your file.';
        exit;
    }
    
    $query = "INSERT INTO employee (email, phone_number, password, province, district, sector, marital_status, nationality, education_field, qualification, certificate, attachment) VALUES ('$email', '$phonenumber', '$password', '$province', '$district', '$sector', '$maritalstatus', '$nationality', '$educationfield', '$qualification', '$certificate', '$targetFile')";

    if (mysqli_query($con, $query)) {
        echo 'Recorded successfully';
    } else {
        echo 'Not inserted: ' . mysqli_error($con);
    }
}

mysqli_close($con);
?>
  <h1>CREATE EMPLOYEE ACCOUNT</h1>
  <h2>Login Information</h2>

  <div class="peo">
    <form method="POST" action="" enctype="multipart/form-data">
      <label for="email">Email (Your username)*</label>
      <input type="email" name="email" placeholder="Enter Email Here">

      <label for="phoneNumber">Phone Number</label>
      <input type="tel" name="phoneNumber" placeholder="Enter Phone Number Here">

      <label for="password">Password</label>
      <input type="password" name="password" placeholder="Enter Password Here">

      <label for="repeatPassword">Repeat Password</label>
      <input type="password" name="repeatPassword" placeholder="Confirm Password Here">
      <small>Password should contain at least 10 characters with at least one lowercase character, one uppercase character, two numeric/digit characters, and one special character (!, @, ..).</small>

      <h2>Your Personal Information</h2>

      <label for="province">Province</label>
      <select name="province" id="province">
        <option value="">Select Province</option>
        <option value="province1">Province 1</option>
        <option value="province2">Province 2</option>
        <!-- Add more options if needed -->
      </select>

      <label for="district">District</label>
      <select name="district" id="district">
        <option value="">Select District</option>
        <option value="district1">District 1</option>
        <option value="district2">District 2</option>
        <!-- Add more options if needed -->
      </select>

      <label for="sector">Sector</label>
      <select name="sector" id="sector">
        <option value="">Select Sector</option>
        <option value="sector1">Sector 1</option>
        <option value="sector2">Sector 2</option>
        <!-- Add more options if needed -->
      </select>

      <label for="maritalStatus">Marital Status</label>
      <select name="maritalStatus" id="maritalStatus">
        <option value="">Select Marital Status</option>
        <option value="single">Single</option>
        <option value="married">Married</option>
      </select>

      <label for="nationality">Nationality</label>
      <select name="nationality" id="nationality">
        <option value="">Select Country</option>
        <option value="country1">Country 1</option>
        <option value="country2">Country 2</option>
        <!-- Add more options if needed -->
      </select>

      <label for="educationField">Education Field:</label>
      <select name="educationField" id="educationField">
        <option value="">Select Education Field</option>
        <option value="field1">Field 1</option>
        <option value="field2">Field 2</option>
        <!-- Add more options if needed -->
      </select>

      <label for="qualification">Qualification:</label>
      <select name="qualification" id="qualification">
        <option value="">Select Qualification</option>
        <option value="qualification1">Qualification 1</option>
        <option value="qualification2">Qualification 2</option>
        <!-- Add more options if needed -->
      </select>

      <label for="certificate">Certificate:</label>
      <select name="certificate" id="certificate">
        <option value="">Select Certificate</option>
        <option value="certificate1">Certificate 1</option>
        <option value="certificate2">Certificate 2</option>
        <!-- Add more options if needed -->
      </select>

      <label for="attachment">Attach Certificate:</label>
      <input type="file" id="attachment" name="attachment" accept="application/pdf">
      <span class="file-size-info">Only PDF files are accepted | Maximum file size is 2MB</span>

      <div class="button-container">
        <button type="submit" name="submit">Submit</button>
      </div>
    </form>
  </div>

  <footer>
    <div class="footer-links">
      <a href="#">Contact us</a>
      <a href="#">About us</a>
      <a href="#">RDB</a>
    </div>
    <div class="contact-info">
      <p>Contact Information:</p>
      <p>Telephone: (+250) 727 775 170</p>
      <p>Email: skills@rdb.rw / kora@rdb.rw</p>
      <p>© 2022 Kora - JobPortal. All Right Reserved.</p>
    </div>
  </footer>
</body>
</html>