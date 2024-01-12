 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
     <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
     body{

background-color:green;
 }





   .main-content {
  width: 10%;

  margin-right:0%;  /* Updated */
  margin-top: 80%;
  padding-left:20%;
  padding-right:20%;
  text-align: center;
  color:green;
}
.main-content table {
  margin-top:10%;
  width: 7%;
  margin-left: 2%;
  border-collapse: collapse;
}
.table th,
.table td {
  text-align: right;
  border: 1px solid black;
}
</style>
  
</head>
<body>

<table border="1" >
  <?php
  $host = 'localhost';
  $db_name = 'jobpostal';
  $username = 'root';
  $password = '';

  // Create a connection
  $conn = new mysqli($host, $username, $password, $db_name);

  // Check if the connection was successful
  if ($conn->connect_error) {
      die('Connection failed: ' . $conn->connect_error);
  }

  $sql = "SELECT * FROM employee";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  
echo "
  <tr>
        <th>EMP ID</th>
        <th>EMAIL</th>
        <th>PHONENUMBER</th> 
        <th>PASSWORD</th> 
        
        <th>PROVINCE</th> 
        <th>DISTRICT</th> 
        <th>SECTOR</th>
        <th>MARITIALSTATUS</th> 
        <th>DISABILITY</th> 
        <th>NATIONALITY</th> 
         
        <th>EDUCATIONFIELD</th>
        
        
         
        <th> QUALIFICATION</th> 
        
        <th>CERTIFICATE</th> 
        <th>ATTACHMENT_FILE</th> 
      </tr>";
    while ($row = $result->fetch_assoc()) {
      echo "<tr>
        <td>".$row['empid']."</td>
        <td>".$row['email']."</td>
        <td>".$row['phoneNumber']."</td> 
        <td>".$row['password']."</td> 
        
        <td>".$row['province']."</td> 
        <td>".$row['district']."</td> 
        <td>".$row['sector']."</td>
        <td>".$row['maritalStatus']."</td> 
        <td>".$row['disability']."</td> 
        <td>".$row['nationality']."</td>  
        <td>".(isset($row['educationfield']) ? $row['educationfield'] : "")."</td>
        
        
        
        <td>".$row['qualification']."</td> 
      
        <td>".$row['certificate']."</td> 
        <td>".(isset($row['attachment_file']) ? $row['attachment_file'] : "")."</td> 
      </tr>";
    }

    echo "</table>";
  } else {
    echo "<p>No employee found.</p>";
  }

  // Close the connection
  $conn->close();
  ?>
  </table>
</div>   
</main>
</div>
</body>
</html>