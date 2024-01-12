<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    margin: 0px;
  padding:0px;

  box-sizing:border-box;
  
}

.topnav {
  overflow: auto;
  background-color: black;
  
}

.topnav a{
  float: left;
  color: #f2f2f2;
  text-align: ;
  padding: 14px 16px;
  text-decoration: none;
  font-size=17px;
  
 
}

.topnav a:hover {
  background-color: yellow;
  color:orange;
  
}
.topnav a.active {
  background-color: #04AA6D;
  color: pink;

}
.text-box a{
width:90%;
color:white;
position:absolute;
top:50%;
left:50%;
transform: translate(-50%,-50%);
text-align:center;
}
.text-box p{
margin:10px 0px;
text-align:center;
transform:scaleY(1);
color:blue;
font-size:20px;
}
.hero-btn{
text-decolation:none;
color:green;

padding:5px 6px;
fontsize: 0px;
background:transparent;
position:relative;
cursor:pointer;
}
hero-btn:hover{
border: solidgreen;
background color:red;
transition:1s;

}

    
.login-container {
  width: 300px;
  margin-top:30px;
  margin-left:400px;
  padding: 20px;
  background-color: #f2f2f2;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.login-container h2 {
  text-align: center;
  margin-bottom: 20px;
}

.login-container form {
  display: flex;
  flex-direction: column;
}

.login-container label {
  margin-bottom: 10px;
}

.login-container input[type="text"],
.login-container input[type="password"] {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 10px;
}

.login-container .incorrect-message {
  color: red;
  margin-bottom: 10px;
}

.login-container .remember-me {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.login-container .remember-me input[type="checkbox"] {
  margin-right: 5px;
}

.login-container input[type="submit"] {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
  </style>
</head>
<body>
<div class="topnav"> 

<a href="REMA.html">HOME</a>
 
 
 <a  href= "rem.html">JOBSEEKERS</a>
 
        <a href="#news"><sub>TRAININGS</sub></a>
   <a href="vubaha.html"><sub>DEPARTMENT</sub></a>
       <a href="happy.html"><sub>DIGITAL JOBS</sub></a>
   <a href="#news"><sub></sub></a>
  <a href="#contact"><sub>CONTENT</sub></a>
<a href="wap.html">REGISTER</a>
   <a href="kujamo.html"><sub>SIGN IN</sub></a>
     <a href="cusa.html"><sub>CONTACT US</sub></a>
     <a href="kujamo.html"><sub>ADMIN LOGIN</sub></a>
</div>
  
<div class="login-container">
    <h2>Login </h2>
    <form action="#" method="POST">
      <label for="username">Username or email:</label>
      <input type="text" id="username" name="username" required>
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      
      <p class="incorrect-message">Incorrect username or password.</p>
      
      <div class="remember-me">
        <input type="checkbox" id="remember" name="remember">
        <label for="remember">Remember Me</label>
		<input type="submit" value="Login">
      </div>
      </form>
      
    
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $username = $_POST["username"];
    $password = $_POST["password"];

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

    // Prepare a SQL statement to check the username and password
    $sql = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    // Check if the query returned any rows
    if ($result->num_rows == 1) {
        // Username and password are correct
        // Start a session or generate a token to authenticate the user
        // Redirect the user to a protected page
        header("Location: adddepar.php");
        exit();
    } else {
        // Incorrect username or password
        echo '<script>alert("Incorrect username or password.");</script>';
    }

    // Close the database connection
    $conn->close();
}
?>
</body>
</html>