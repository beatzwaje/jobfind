<!DOCTYPE html>
<html>

<head>
    <title>Job Opportunities</title>
    <style>
       body {
            background-image: url("a1.jpg");
        }

       /* Styles for the navigation bar */
.navbar {
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
        .table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            background-color:gray;
            

        }

        th,
        td {
            
            text-align: left;
            padding: 20px;
            margin-left:310spx;
        }

        th {
            background-color: #f2f2f2;
        }
h1{
    color:blue;
    margin-left:350px;

}p{
color:red;
font-size:40px;
}
    </style>
</head>

<body background="a1.jpg  ">
    
      
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
    
<form>

    
    <h1> Excieting Job Opportunities</h1>
    <p class="job-description">We are seeking a talented and motivated individual
         to join our team. This is a rewarding opportunity to make a real impact and contribute to our innovative projects.</p>
       <div class="table">
       <table > 
   
       <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "jobpostal";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['jobid'])) {
                $jobIdToDelete = $_GET['jobid'];
                $sql = "DELETE FROM jobs WHERE id=$jobIdToDelete";
                if ($conn->query($sql) === TRUE) {
                    echo "Job deleted successfully.";
                } else {
                    echo "Error deleting job: " . $conn->error;
                }
            }

            if (isset($_POST['updateJob'])) {
                $jobId = $_POST['jobId'];
                $jobName = $_POST['jobName'];
                $jobCategory = $_POST['jobCategory'];
                $department = $_POST['department'];
                $description = $_POST['description'];
                $sql = "UPDATE jobs SET job_name='$jobName', job_category='$jobCategory', department='$department', description='$description' WHERE id=$jobId";
                if ($conn->query($sql) === TRUE) {
                    echo "Job information updated successfully.";
                } else {
                    echo "Error updating job information: " . $conn->error;
                }
            }

            $sql = "SELECT * FROM jobs";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<tr> <th>Job Name</th> <th>Job Category</th> <th>Department</th> <th>Description</th> <th>Action</th> </tr>";
                while ($row = $result->fetch_assoc()) {
                    $jobId = $row['id'];
                    $jobName = $row['job_name'];
                    $jobCategory = $row['job_category'];
                    $department = $row['department'];
                    $description = $row['description'];
                    echo "<tr> <td>$jobName</td> <td>$jobCategory</td> <td>$department</td> <td>$description</td> <td> <a href='kujamo.php?jobid=$jobId'>Apply</a> </td> </tr>";
                }
                echo "</table>";
            } else {
                echo "No registered jobs found.";
            }

            $conn->close();
            ?>
</table>
<div>
</body>

</html>