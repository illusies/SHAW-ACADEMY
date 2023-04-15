<?php include_once 'db.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>Joe's Coaches</title>
    <link rel="stylesheet" href="css//style.css">
  </head>

  <body>
    <div class="nav-wrapper">
      <nav>
        <ul class="nav-list">
          <img id="icon" src="img/icon2.png" alt="">
          <li class="nav-item"><a href="index.html">Account</a></li>
          <li><a href="#">Logout</a></li>
        </ul>
      </nav>
    </div>

    <div class="employees">
      <h2>Employess</h2>
      <div class="employee-list">

<?php
$sqlStatement = 'select employees.firstName, employees.lastName, employees.jobTitle, departments.departmentName, employees.email, employees.salary from employees join departments on employees.departmentCode = departments.departmentCode;';

$queryResult = mysqli_query($dbConnection,$sqlStatement);
$resultCheck = mysqli_num_rows($queryResult);

$currency = "$";

if($resultCheck>0){
  while($row=mysqli_fetch_assoc($queryResult)){
    echo "<li>
      <div class='employee-card'>
        <img class='user-img' src='img/default.png' alt=''>
        <span>
          <div class='employment-details'>
            <span class='name-format'>".$row['firstName']."</span>
            <span class='name-format'>".$row['lastName']."</span>
            <br>
            <span>".$row['jobTitle']."</span>
            <br>
            <span>".$row['departmentName']."</span>
            <br>
            <span>".$row['email']."</span>
            <br>
            <span>".$currency.$row['salary']."</span>
          </div>
        </span>
      </div>
    </li>";
  }
}

 ?>

      </div>
    </div>

    <div class="interviews">
      <h2>Upcoming Interviews</h2>
      <li>
        <div class="list-item">
          <h3>Marketing</h3>
          <p>Social Media Content Specialist</p>
          <button class="accept-btn" type="button" name="button">Accept</button>
          <button class="reject-btn" type="button" name="button">Reject</button>
        </div>
      </li>

      <li>
        <div class="list-item">
          <h3>Driver</h3>
          <p>Advanced Coach Driver</p>
          <button class="accept-btn" type="button" name="button">Accept</button>
          <button class="reject-btn" type="button" name="button">Reject</button>
        </div>
      </li>

      <li>
        <div class="list-item">
          <h3>Software Developer</h3>
          <p>Full-stack Developer</p>
          <button class="accept-btn" type="button" name="button">Accept</button>
          <button class="reject-btn" type="button" name="button">Reject</button>
        </div>
      </li>
    </div>

    <!-- MODAl -->
    <div id="employeeModal" class="modal">
      <div class="modal-content">
        <header class="modal-header">
          <!-- <span onclick="document.getElementById('quoteModal').style.display='none'" class="w3-button w3-display-topright">X</span>-->
          <div class="modal-header-content">
            <span>Add employee</span>
          </div>
        </header>
        <div class="modal-container">
          <label for="fname">First Name</label>
          <input type="text" id="name">
          <br>
          <label for="fname">Last Name</label>
          <input type="text" id="surname">
          <br>
          <label for="fname">Position</label>
          <input type="text" id="position">
          <br>
          <label for="fname">Department</label>
          <input type="text" id="department">
          <br>
          <label for="fname">Email</label>
          <input type="text" id="email">
          <br>
          <label for="fname">Salary</label>
          <input type="text" id="salary">
          <br>

          <button id="confirmBtn" type="button" name="button" onclick="addEmployee()">Confirm</button>
        </div>
        <div>
          <footer class="modal-footer">
          </footer>
        </div>
      </div>
    </div>

    <!-- MODAL -->
    <div id="interviewModal" class="modal">
      <header class="modal-header">
        <div class="modal-header-content">
          <span>Add interview</span>
        </div>
      </header>
      <div class="modal-container">
        <label for="fname">Department</label>
        <input type="text" id="int-department">
        <br>
        <label for="fname">Position</label>
        <input type="text" id="int-position">
        <br>
        <button id="confirmBtn" type="button" name="button" onclick="adInterview()">Confirm</button>
      </div>
      <footer class="modal-footer">
      </footer>
    </div>

    <button class="btn" type="button" name="button" onclick="showAddIntModal()">Add Interview</button>
    <button class="btn" type="button" name="button" onclick="showAddEmpModal()">Add Employee</button>

    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
