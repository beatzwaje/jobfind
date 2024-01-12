<html>
<head>
<style>
https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css
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
.employer-account {
  max-width: 600px;
  margin: 0 auto;
}.pa
{
background-color:white;
color:darkblue;
font-size:30px;
}

h2, h3 {
  text-align: center;
}

form {
  display: flex;
  flex-direction: column;
}

label {
  margin-bottom: 10px;
}

input[type="text"],
input[type="password"],
select {
  padding: 8px;
  margin-bottom: 15px;
}

.button-container {
  display: flex;
  justify-content: space-between;
  margin-top: 20px;
  
}

button {
  padding: 10px 15px;
  background-color: #007bff;
  color: #fff;
  border: none;
  cursor: pointer;
}

button[type="submit"]:hover,
button[type="button"]:hover {
  background-color: #0056b3;
}.employer-account{
background-color:gray
color:blue
font-size:30px;
}.footer {
  background-color: #f5f5f5;
  padding: 20px;
}

.footer-content {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
}

.address {
  margin-bottom: 10px;
}

.footer-links a {
  margin-right: 10px;
  color: #333;
  text-decoration: none;
}

.footer-bottom {
  margin-top: 20px;
  text-align: center;
  padding-bottom:15px
}

.footer-bottom p {
  font-size: 24px;
  color: solidgreen;
}

.contact-info {
  margin-top:12px;
}

.contact-info a {
  color: #007bff;
  text-decoration: none;
}

.contact-info a:hover {
  text-decoration: underline;
}
</style>
</head>
<body background="kare.avif">
<body onload="displayGreeting()">



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
    
<div class="employer-account">
  
  <div class="pa">
  <h2>EMPLOYER ACCOUNT </h2>
  <h3>Login Information</h3>
<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "jobpostal";
$con = mysqli_connect($server, $user, $password, $db);

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $employer_type = $_POST['employer_type'];
    $employer_name = $_POST['employer_name'];
    $national_id = $_POST['national_id'];
    $district = $_POST['district'];
    $pobox = $_POST['pobox'];
    $website = $_POST['website'];
    $province = $_POST['province'];
    $sector = $_POST['sector'];
    $physical_address = $_POST['physical_address'];
    
    $query = "INSERT INTO register(email, username, password, employer_type, employer_name, national_id, district, pobox, website, province, sector, physical_address) VALUES ('$email', '$username', '$password', '$employer_type', '$employer_name', '$national_id', '$district', '$pobox', '$website', '$province', '$sector', '$physical_address')";
    
    $results = mysqli_query($con, $query);
    if (!$results) {
        die("Not inserted" . mysqli_error($con));
    }
    
    echo "Recorded successfully";
}
?>
  <form action="" method="POST">
  <label for="username">Email:</label>
    <input type="text" id="Email" name="email">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" >
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    
    <label for="confirm-password">Confirm Password:</label>
    <input type="password" id="confirm-password" name="confirm-password">
    
    <h3>Personal Info</h3>
    <label for="employer-type">Employer Type:</label>
    <select id="employer-type" name="employer_type">
      <option value="">Select Employer Type</option>
      <option value="">CORPORATE</option>
    </select>
    
    <label for="employer-name">Employer Name:</label>
    <input type="text" id="employer-name" name="employer_name">
   
    <label for="national-id">National ID Number:</label>
    <input type="text" id="national-id" name="national_id">
    
    
    
    <h3>Employer Address</h3>
    <label for="district">District:</label>
    <input type="text" id="district" name="district">
	<label for="pobox">P.o.Box:</label>
    <input type="text" id="pobox" name="pobox">
    
    <label for="website">Website:</label>
    <input type="text" id="website" name="website">
    
    <label for="province">Province:</label>
    <select id="province" name="province">
      <option value="">Select Province</option>
      <option value="">kigali city</option>
      <option value="">southern Province</option>
	   <option value="">western province</option>
	    <option value="">eastern Province</option>
    </select>
    
    <label for="district">District:</label>
    <select id="district" name="district">
      <option value="">Select District</option>
       <option value="">nyabihu</option>
	 <option value="">rubavu</option>
	 <option value="">rusizi</option>
	 <option value="">nyarugenge</option>
	 <option value="">kayonza</option>
	 <option value="">musanze</option>
      
    </select>
    
    <label for="sector">Sector:</label>
    <select id="sector" name="sector">
      <option value="">Select Sector</option>
      <option value="">burama</option>
	  <option value="">bwiza</option>
	  <option value="">cyohoha</option>
	  <option value="">mukamira</option>
	  <option value="">ruhengeri</option>
	  <option value="">nyakiliba</option>
      
    </select>
    
    <label for="physical-address">Physical Address:</label>
    <input type="text" id="physical-address" name="physical_address">
    </div>
    
    <div class="button-container">
      <button type="button">Back</button>
      <button type="submit" name="submit">register</button>
	   </div>
	   </form>
	  <footer class="footer">
	  
  <div class="footer-content">
    <address>
      Street: KN 5 Rd, KG 9 Ave, Kigali-Rwanda<br>
      Kora JobPortal
    </address>
    <div class="footer-links">
      <a href="contact.html">Contact us</a>
      <a href="about.html">About us</a>
      <a href="rdb.html">RDB</a>
    </div>
    <div class="contact-info">
      <p>
        Telephone: (+250) 727 775 170<br>
        Email: <a href="mailto:skills@rdb.rw">skills@rdb.rw</a> / <a href="mailto:kora@rdb.rw">kora@rdb.rw</a>
      </p>
    </div>
  </div>
  <div class="footer-bottom">
    <p>© 2022 Kora - JobPortal. All Rights Reserved.</p>
  </div>
</footer>
   

</div>
</body>
</html>