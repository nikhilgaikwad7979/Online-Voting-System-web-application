<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">
  <div class="d-flex align-items-center justify-content-center min-vh-100">
    <div class="card p-4 shadow w-100" style="max-width: 400px;">
      <form action="/action_page.php" class="was-validated">
        <h4 class="text-center mb-4">Login</h4>

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
          <label class="form-check-label" for="myCheck">I agree </label>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Check this checkbox to continue.</div>
        </div>
<div class="row ">
  <button type="submit" class="btn btn-primary w-25">Login</button>
  <button type="submit" class="btn btn-primary w-25 ">SignUp</button>
</div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
