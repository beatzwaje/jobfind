<html>
<head>
<?php
$usnm=$-POST['username'];
echo ".usnm.";
?>
<title>registration form</title></head>
<style>body {
  font-family: Arial, sans-serif;
}

.login-container {
  width: 300px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #f9f9f9;
}

.login-container h2 {
  text-align: center;
}

.login-container input[type="text"],
.login-container input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
  box-sizing: border-box;
}

.login-container input[type="submit"] {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 3px;
  background-color: #4CAF50;
  color: #fff;
  cursor: pointer;
}

.login-container input[type="submit"]:hover {
  background-color: #45a049;
}
</style>
<body style="background-color:pink;">

<div class="login-container">
    <h2>admin Login </h2>
    <form action="#" method="post">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
	  </div>
    
</body>
</html>