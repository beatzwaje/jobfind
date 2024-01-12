<html>
<head>
<style>
<meta charset="UTF-8">
<meta htpp-equiv="X-UA_compatible"content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css>
*.navbar {
    background-color: #f1f1f1;
    overflow: hidden;
    padding-left: 11px;
    padding-right: 14px;
    margin-right: 30px;
}

.navbar a {
    float: left;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

.navbar a:hover {
    background-color: #ddd;
    color: black;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 17px;
    border: none;
    outline: none;
    color: black;
    background-color: inherit;
    margin: 0;
    padding: 14px 16px;
    cursor: pointer;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #ddd;
}
.register-button:hover,
.signin-button:hover {
  background-color: #555;
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
body{
background-color:blue;
font-family:'roboto' ,sans-serif;
}.login
{  
width:460px;
height:340px;
margin:auto;
border-radius:3px;
background-color:white ;
}.papa
{
text-align:center;
color:black;
font-size:30px;


}h1 
{text-align:center;
color:green;
font-size:20px;
}
form{
width:360px;
margin-left:30px

}
form label
{
display:flex
margin-top:20px;
font-size:18px;
}form input
{
width:100%;
padding:12px 12px 12px 12px;
border:none;
border:1px solid green;
border-radius:6px;
outline:none;

}
button
{
width:310px;
height:35px;
margin-left:40px;
border:none;
border-radius:3px;
border:1px solid yellow;
background-color:chocolate;
color:blue;
font-size:15px;
text-align:center-left;
}p
{
text-align:center;
color:blue;
font-size:30px;
}
</style>
</head>
<body background="pan.jpg" >

<nav>
        <div class="navbar">
            <a href="home.html">HOME</a>

            <div class="dropdown">
                <button class="dropbtn">JOBSEEKERS</button>
                <div class="dropdown-content">
                    <a href="home.HTML">find job</a>
                    <a href="#">how to apply</a>
                    
                </div>
            </div>

            <a href="#news"><sub>TRAININGS</sub></a>

            <a href="vubaha.html"><sub>DEPARTMENT</sub></a>

            <a href="happy.html"><sub>DIGITAL JOBS</sub></a>

            <div class="dropdown">
                <button class="dropbtn">EMPLOYER</button>
                <div class="dropdown-content">
                    <a href="new 4.php">post job</a>
                    <a href="#">manage applicants</a>
                    
                </div>
            </div>
            

            <a href="wap.html">REGISTER</a>

            <a href="new 4.php"><sub>SIGNIN</sub></a>

            <a href="new 4.phps "><sub>ADMIN LOGIN</sub></a>
        </div>
    </nav>
    <?php
// Assuming you have already established a database connection
// Replace "your_database_name" and other connection details with your actual values
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobpostal";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the submitted email and password
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Validate the user's credentials
$sql = "SELECT * FROM employee WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result && $result->num_rows == 1) {
    // User found, allow the user to log in
    header("Location: apply.php");
    // Redirect to the desired page or perform other actions
} else {
    // Invalid credentials, redirect back to the login page with an error message
    echo "Invalid email or password.";
    // Redirect to the login page or perform other actions
}

// Close the database connection
$conn->close();
?>s
<div class="login">
<body>
    <h1>Login</h1>
    <form action="kujamo.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Password" required><br><br>
        
        <button type="submit">Submit</button>
    </form>
    <p>I don't have an account. Please go to <a href="gasha.php">create your account</a>.</p>
</body>
</html>