<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <style>

    /* Profile Section */
/* Dropdown */
.admin-profile {
  display: flex;
  align-items: center;
  justify-content: flex-end;
  margin-right: 20px;
  font-size: 14px;
  color: #666;
}

.admin-profile img {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  margin-right: 10px;
}

.dro{
  position: relative;
}

.drop {
  background-color: transparent;
  border: none;
  cursor: pointer;
  color: #666;
  padding: 0;
}

.dropdown  {
  display: none;
  position: absolute;
  top: 100%;
  right: 0;
  min-width: 120px;
  background-color: #f9f9f9;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  z-index: 1;
}

.dropdown a {
  color: #333;
  padding: 8px 12px;
  text-decoration: none;
  display: block;
}

.dro:hover .dropdown {
  display: block;
}

.dro a:hover {
  background-color: #ddd;
}
.logosec {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px;
}

.logo {
  font-size: 24px;
  font-weight: bold;
}

.icn {
  width: 20px;
  height: 20px;
}

.searchbar {
  display: flex;
  align-items: center;
  margin: 20px 0;
}

input[type="text"] {
  padding: 8px;
  border: 1px solid #ddd;
  border-radius: 4px;
  width: 200px;
}

.searchbtn {
  margin-left: 10px;
}

.message {
  display: flex;
  align-items: center;
}

.circle {
  width: 10px;
  height: 10px;
  background-color: green;
  border-radius: 50%;
  margin-right: 5px;
}

.dp {
  margin-left: 10px;
}

/* Sidebar */
.sidebar {
  width: 200px;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  background-color: #333;
  color: #fff;
  padding: 20px;
}
.logo { 
  font-size: 27px; 
  font-weight: 600; 
  color: rgb(47, 141, 70); 
} 
  
.icn { 
  height: 30px; 
} 
.menuicn { 
  cursor: pointer; 
} 
  
.searchbar, 
.message, 
.logosec { 
  display: flex; 
  align-items: center; 
  justify-content: center; 
} 
  
.searchbar2 { 
  display: none; 
} 
  
.logosec { 
  gap: 60px; 
} 
  
.searchbar input { 
  width: 250px; 
  height: 42px; 
  border-radius: 50px 0 0 50px; 
  background-color: var(--background-color3); 
  padding: 0 20px; 
  font-size: 15px; 
  outline: none; 
  border: none; 
} 
.searchbtn { 
  width: 50px; 
  height: 42px; 
  display: flex; 
  align-items: center; 
  justify-content: center; 
  border-radius: 0px 50px 50px 0px; 
  background-color: var(--secondary-color); 
  cursor: pointer; 
} 
  
.message { 
  gap: 40px; 
  position: relative; 
  cursor: pointer; 
} 
.circle { 
  height: 7px; 
  width: 7px; 
  position: absolute; 
  background-color: #fa7bb4; 
  border-radius: 50%; 
  left: 19px; 
  top: 8px; 
} 
.dp { 
  height: 40px; 
  width: 40px; 
  background-color: #626262; 
  border-radius: 50%; 
  display: flex; 
  align-items: center; 
  justify-content: center; 
  overflow: hidden; 
} 
.main-container { 
  display: flex; 
  width: 100vw; 
  position: relative; 
  top: 70px; 
  z-index: 1; 
} 
.dpicn { 
  height: 42px; 
} 
  
.logo img {
  width: 50px;
  height: 50px;
}

.dropdown-btn {
  background-color: #444;
  color: #fff;
  border: none;
  width: 100%;
  padding: 10px;
  text-align: left;
  cursor: pointer;
}

.dropdown-container {
  display: none;
}
 
.box:hover { 
  transform: scale(1.08); 
} 
  
.box:nth-child(1) { 
  background-color: var(--one-use-color); 
} 
.box:nth-child(2) { 
  background-color: var(--two-use-color); 
} 
.box:nth-child(3) { 
  background-color: var(--one-use-color); 
} 
.box:nth-child(4) { 
  background-color: var(--two-use-color); 
} 
  
.box img { 
  height: 50px; 
} 
.box .text { 
  color: green; 
}
.dropdown-container a {
  display: block;
  padding: 8px 16px;
  text-decoration: none;
  color: #fff;
}

.dropdown-container a:hover {
  background-color: #555;
}

/* Main content */
main {
  margin-left: 220px;
  padding: 20px;
}

.box-container {
  display: flex;
  color:gray;
  justify-content: space-between;
  margin-bottom: 20px;
}

.box {
  display: flex;
  align-items: center;
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: 4px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.text {
  margin-right: 20px;
}

.topic-heading {
  font-size: 28px;
  font-weight: bold;
  margin-bottom: 5px;
}

.topic {
  font-size: 16px;
  color: #666;
}

/* Responsive styles */
@media (max-width: 768px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
    padding: 10px;
    background-color:gray;
  }

  main {
    margin-left: 0;
    padding: 20px;
    background-color:red;
  }
}

  </style>
</head>
<body>
  

  <div class="sidebar">
  <div class="logosec">
      <div class="logo">beatzjob</div>
      <img src="down.png" class="icn menuicn" id="menuicn" alt="menu-icon">
    </div>
    <h3 class="dropdown-btn">Job Listing Management</h3>
    <div class="dropdown-container">
      <a href="joblist.php">View Job Listings</a>
      <a href="admedit.php">Edit Job Listings</a>
      <a href="#">Delete Job Listings</a>
      <a href="#">Approve/Reject Job Listings</a>
    </div>

    <h3 class="dropdown-btn">User Management</>
    <div class="dropdown-container">
      <a href="#">View Users</a>
      <a href="#">Edit Users</a>
      <a href="#">Disable Users</a>
    </div>

    <h3 class="dropdown-btn">Employer Management</h3>
    <div class="dropdown-container">
      <a href="#">View Employers</a>
      <a href="#">Edit Employers</a>
      <a href="#">Verify Employers</a>
      <a href="#">Manage Complaints</a>
    </div>

    <h3 class="dropdown-btn">Applicant Management</h3>
    <div class="dropdown-container">
      <a href="#">View Applicants</a>
      <a href="#">Review Applications</a>
      <a href="#">Shortlist Applicants</a>
      <a href="#">Reject Applicants</a>
      <a href="#">Hired Applicants</a>
    </div>

    <h3 class="dropdown-btn">Analytics and Reporting</h3>
    <div class="dropdown-container">
      <a href="#">View Metrics</a>
      <a href="#">Generate Reports</a>
    </div>

  <h3 class="dropdown-btn">Communication Tool</h3>
    <div class="dropdown-container">
      <a href="#">Messaging System</a>
      <a href="#">Email Notifications</a>
      <a href="#">Alerts and Updates</a>
    </div>
  </div>

  <main>
  <div class="admin-profile">
  <img src="240.jpeg" alt="Admin Profile">
  <span>Admin</span>
  <div class="dro">
    <button onclick="toggleDropdown()" class="drop">Account</button>
    <div id="dropdown" class="dropdown">
      
      <a href="#">Logout</a>
    </div>
  </div>
</div>


    <h1>Dashboard<h1>
    <div class="box-container">
      <div class="box box1">
        <div class="text">
          <h2 class="topic-heading">60.5k</h2>
          <h2 class="topic">rejected application</h2>
        </div>
        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(31).png" alt="Views">
      </div>

      <div class="box box2">
        <div class="text">
          <h2 class="topic-heading">150</h2>
          <h2 class="topic">pending appication</h2>
        </div>
        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210185030/14.png" alt="likes">
      </div>

      <div class="box box3">
        <div class="text">
          <h2 class="topic-heading">320</h2>
          <h2 class="topic">approved application</h2>
        </div>
        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(32).png" alt="comments">
      </div>

      
  </div>
</div>
</div>
</main>
  
  <script>
    // JavaScript for dropdown functionality
    var dropdownBtns = document.getElementsByClassName("dropdown-btn");
    for (var i = 0; i < dropdownBtns.length; i++) {
      dropdownBtns[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
  </script>
</body>
</html>
 