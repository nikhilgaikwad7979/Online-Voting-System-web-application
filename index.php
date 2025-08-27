<?php
session_start();
include("conn.php");  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['uname'];
    $password = $_POST['pswd'];

     $sql = "SELECT id, full_name, email, password, role FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['user_id'] = $row['id'];
        $_SESSION['full_name'] = $row['full_name'];
        $_SESSION['role'] = $row['role'];
        if ($row['role'] == "admin") {
            header("Location: Includes/Admin/index.php");
        }
        elseif($row['role'] == "voter"){
        header("Location: Includes/user/index.php");
        }
       else {
            header("Location: voter_home.php"); 
        }
        //  if () {
          
        // } else {
        //     header("Location: voter_home.php"); 
        // }
        exit();
    } else {
        echo "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Index</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    @import url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css");
  
    body, html {
      height: 100%;
      margin: 0;
    }
    .bg-image {
      background: url("Includes/Admin/assets/bg4.png") no-repeat center center;
      background-size: cover;
      height: 100vh;
    }
    .bg-image1 {
      background: url("Includes/Admin/assets/bg3.png") no-repeat center center;
      background-size: cover;
      height: 100vh;
    }
  </style>
</head>
<body class="bg-light">
  <div class="container-fluid h-100">
    <div class="row h-100">
      <!-- Left side background -->
      <div class="col-md-7 bg-image d-none d-md-block"></div>

      <!-- Right side login -->
      <div class="col-md-5 d-flex align-items-center justify-content-center bg-image1" >
        <div class="card p-4 shadow w-100" style="max-width: 400px;">
            <div class="button">
                <button type="button" class="btn btn-outline-success text-dark " data-bs-toggle="modal" data-bs-target="#addVoterModal">Resister</button>
                <!-- <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addVoterModal">
                <i class="bi bi-plus-circle"></i> Resister
                </button> -->

<!-- Modal -->
<div class="modal fade" id="addVoterModal" tabindex="-1" aria-labelledby="addVoterModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="addVoterModalLabel">Add New Voter</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body">
          <div class="mb-3">
            <label for="firstname" class="form-label">Full Name</label>
            <input type="text" class="form-control" name="firstname" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" required>
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
          </div>

          <div class="mb-3">
            <label for="mobile" class="form-label">Mobile Number</label>
            <input type="text" class="form-control" name="mobile" required>
          </div>
          <div class="mb-3">
  <label for="role" class="form-label">Role</label>
  <select class="form-control" name="role" id="role" required>
    <option value="">-- Select Role --</option>
    <option value="admin">Admin</option>
    <option value="voter">Voter</option>
  </select>
</div>


          <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" class="form-control" name="photo" accept="image/*">
          </div>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
                <button type="button" class="btn btn-outline-success text-dark">Admin Login</button>
             
              </div>
          <form action="#" class="was-validated" method="post">
           
            <h4 class="text-center mb-4">Login for Voting</h4>
           
            <div class="mb-3">
              <label for="uname" class="form-label">Username:</label>
              <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required />
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="mb-3">
              <label for="pwd" class="form-label">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required />
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required />
              <label class="form-check-label" for="myCheck">I agree.</label>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Check this checkbox to continue.</div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>
<!--?php
include("conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['firstname'];
    $email    = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
    $mobile   = $_POST['mobile'];
    $role     = $_POST['role'];

    $photo = "";
    if (!empty($_FILES["photo"]["name"])) {
        $targetDir = "Includes/Admin/uploads/";  
        $photo = time() . "_" . basename($_FILES["photo"]["name"]);
        $targetFilePath = $targetDir . $photo;

        // Upload file
        if (!move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFilePath)) {
            echo "<div class='alert alert-danger'>Error uploading photo.</div>";
            $photo = ""; 
        }
    }

    // Insert into DB
    $sql = "INSERT INTO users (full_name, email, password, mobile, role, img) 
            VALUES ('$fullname', '$email', '$password', '$mobile', '$role', '$photo')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>New voter added successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
    }
}
?-->
