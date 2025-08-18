
<html>
  <head>
    <title>Dashboard</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
	  <link rel="icon" href="assets/logo.png">
    <style>
      @import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);

      @import url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css");
    </style>
	  <style>
		  .active {
    			background-color: aliceblue;
			}
	  </style>
  </head>

  <body>
    <!-- Banner -->

    <!-- Dashboard -->
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
      <!-- Vertical Navbar -->
      <nav
        class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg"
        id="navbarVertical"
      >
        <div class="container-fluid">
          <!-- Toggler -->
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#sidebarCollapse"
            aria-controls="sidebarCollapse"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Brand -->
          <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
            <img
                    alt="Image Placeholder"
                    src="assets/logo.png"
                    class="avatar avatar- "
                  /> <span class="text-primary fw-bold">       Vote</span>

          </a>
          <!-- User menu (mobile) -->
          <div class="navbar-user d-lg-none">
            <!-- Dropdown -->
            <div class="dropdown">
              <!-- Toggle -->
              <a
                href="#"
                id="sidebarAvatar"
                role="button"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <div class="avatar-parent-child">
                  <img
                    alt="Image Placeholder"
                    src="assets/logo.png"
                    class="avatar avatar- rounded-circle"
                  />
                  <span class="avatar-child avatar-badge bg-success"></span>
                </div>
              </a>
              <!-- Menu -->
              <div
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="sidebarAvatar"
              >
                <a href="#" class="dropdown-item">Profile</a>
                <a href="#" class="dropdown-item">Settings</a>
                <a href="#" class="dropdown-item">Billing</a>
                <hr class="dropdown-divider" />
                <a href="#" class="dropdown-item">Logout</a>
              </div>
            </div>
          </div>
          <!-- Collapse -->
          <div class="collapse navbar-collapse" id="sidebarCollapse">
            <!-- Navigation -->
            <!-- Make sure you include Bootstrap Icons in your <head> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<ul class="navbar-nav">
  <li class="nav-item active">
    <a class="nav-link d-flex align-items-center" href="index.php">
      <i class="bi bi-house-door-fill"></i>
      <p class="ms-2 mb-0" >Dashboard</p>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link d-flex align-items-center" href="#voters">
      <i class="bi bi-people-fill"></i>
      <p class="ms-2 mb-0" >Voters</p>
    </a>
  </li>
  <li class="nav-item">
  <a class="nav-link d-flex align-items-center" href="#positions">
    <i class="bi bi-list-task"></i>
    <p class="ms-2 mb-0">Positions</p>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link d-flex align-items-center" href="#candidates">
    <i class="bi bi-person-badge-fill"></i>
    <p class="ms-2 mb-0">Candidates</p>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link d-flex align-items-center" href="#ballot-position">
    <i class="bi bi-ui-checks-grid"></i>
    <p class="ms-2 mb-0">Ballot Position</p>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link d-flex align-items-center" href="#election-title">
    <i class="bi bi-flag-fill"></i>
    <p class="ms-2 mb-0">Election Title</p>
  </a>
</li>

  <li class="nav-item">
    <a class="nav-link d-flex align-items-center" href="login.php">
      <i class="bi bi-box-arrow-right"></i>
      <p class="ms-2 mb-0">Logout</p>
    </a>
  </li>
</ul>

            <!-- Divider -->
            <hr class="navbar-divider my-5 opacity-20" />
          </div>
        </div>
      </nav>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Main content -->
      <div class="h-screen flex-grow-1 overflow-y-lg-auto">
        <!-- Header -->
        <header class="bg-surface-primary border-bottom pt-6">
          <div class="container-fluid">
            <div class="mb-npx">
              <div class="row align-items-center">
                <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                  <!-- Title -->
                  <h1 class="h2 mb-0 pb-3 ls-tight">Online Voting System web application </h1>
                </div>
                <!-- Actions -->
                <div class="col-sm-6 col-12 text-sm-end">
                  <div class="mx-n1">
                    <a
                      href="#"
                      class="btn d-inline-flex btn-sm btn-neutral border-base mx-1"
                    >
                      <span class="pe-2">
                        <i class="bi bi-person-circle"></i>
                      </span>
                      <span>Profile</span>
                    </a>
                    <a
                      href="#"
                      class="btn d-inline-flex btn-sm btn-primary mx-1"
                    >
                      <span class="pe-2">
                        <i class="bi bi-box-arrow-left"></i>
                      </span>
                      <span>Logout</span>
                    </a>
                  </div>
                </div>
              </div>
              <!-- Nav -->
            </div>
          </div>
        </header>

<main class="py-6 bg-surface-secondary">
  <div class="container-fluid">
    
    <!-- Dashboard Widgets -->
    <div class="row mb-4">
      <!-- # of Positions -->
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card shadow border-0 text-white bg-primary">
          <div class="card-body">
            <h5># of Positions</h5>
            <h2>1</h2>
          </div>
        </div>
      </div>
      <!-- # of Candidates -->
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card shadow border-0 text-white bg-success">
          <div class="card-body">
            <h5># of Candidates</h5>
            <h2>2</h2>
          </div>
        </div>
      </div>
      <!-- Total Voters -->
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card shadow border-0 text-white bg-warning">
          <div class="card-body">
            <h5>Total Voters</h5>
            <h2>14</h2>
          </div>
        </div>
      </div>
      <!-- Voters Voted -->
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card shadow border-0 text-white bg-danger">
          <div class="card-body">
            <h5>Voters Voted</h5>
            <h2>13</h2>
          </div>
        </div>
      </div>
    </div>

    <!-- Votes Tally Section -->
    <div class="card shadow border-0 mb-7">
      <div class="card-header">
        <h4>Votes Tally - President</h4>
      </div>
      <div class="card-body">
        <canvas id="votesChart"></canvas>
      </div>
    </div>
  </div>
</main>
<section id="voters" class="py-6 bg-surface-secondary">
  <div class="container-fluid">
    <div class="card shadow border-0 mb-7">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Voters</h4>
     <!-- Add Voter Button -->
<button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addVoterModal">
  <i class="bi bi-plus-circle"></i>  Add New Voter
</button>

<!-- Modal -->
<div class="modal fade" id="addVoterModal" tabindex="-1" aria-labelledby="addVoterModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="save_voter.php" method="POST" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="addVoterModalLabel">Add New Voter</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body">
          <div class="mb-3">
            <label for="firstname" class="form-label">Firstname</label>
            <input type="text" class="form-control" name="firstname" required>
          </div>

          <div class="mb-3">
            <label for="lastname" class="form-label">Lastname</label>
            <input type="text" class="form-control" name="lastname" required>
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

      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover table-bordered align-middle">
            <thead class="table-dark">
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <!-- Example static data (replace with PHP loop later) -->
              <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>john@example.com</td>
                <td><span class="badge bg-success">Voted</span></td>
                <td>
                  <a href="edit_voter.php?id=1" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                  <a href="delete_voter.php?id=1" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jane Smith</td>
                <td>jane@example.com</td>
                <td><span class="badge bg-secondary">Not Voted</span></td>
                <td>
                  <a href="edit_voter.php?id=2" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                  <a href="delete_voter.php?id=2" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Positions Section -->
<section id="positions" class="py-6 bg-surface-secondary">
  <div class="container-fluid">
    <div class="card shadow border-0 mb-7">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Positions</h4>
        <a href="add_position.php" class="btn btn-sm btn-primary">
          <i class="bi bi-plus-circle"></i> Add Position
        </a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover table-bordered align-middle">
            <thead class="table-dark">
              <tr>
                <th>#</th>
                <th>Position Name</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>President</td>
                <td>
                  <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                  <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Candidates Section -->
<section id="candidates" class="py-6 bg-surface-secondary">
  <div class="container-fluid">
    <div class="card shadow border-0 mb-7">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Candidates</h4>
        <a href="add_candidate.php" class="btn btn-sm btn-primary">
          <i class="bi bi-person-plus-fill"></i> Add Candidate
        </a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover table-bordered align-middle">
            <thead class="table-dark">
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Position</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Admin</td>
                <td>President</td>
                <td>
                  <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                  <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Ballot Position Section -->
<section id="ballot-position" class="py-6 bg-surface-secondary">
  <div class="container-fluid">
    <div class="card shadow border-0 mb-7">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Ballot Position</h4>
        <a href="add_ballot.php" class="btn btn-sm btn-primary">
          <i class="bi bi-ui-checks"></i> Add Ballot
        </a>
      </div>
      <div class="card-body">
        <p class="text-muted">Ballot positions decide the order of candidates in the election ballot.</p>
        <!-- Example table -->
        <table class="table table-hover table-bordered align-middle">
          <thead class="table-dark">
            <tr>
              <th>#</th>
              <th>Position</th>
              <th>Candidate</th>
              <th>Order</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>President</td>
              <td>Admin</td>
              <td>1</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<!-- Election Title Section -->
<section id="election-title" class="py-6 bg-surface-secondary">
  <div class="container-fluid">
    <div class="card shadow border-0 mb-7">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Election Title</h4>
        <a href="add_election.php" class="btn btn-sm btn-primary">
          <i class="bi bi-flag-fill"></i> Add Election
        </a>
      </div>
      <div class="card-body">
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            College Student Election 2025
            <span>
              <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
              <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
            </span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>


<!-- Chart.js Script -->
<!-- <script>
  const ctx = document.getElementById('votesChart').getContext('2d');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Admin', 'Candidate B'],
      datasets: [{
        label: 'Votes',
        data: [8, 5],  // Example votes count
        backgroundColor: ['#007bff', '#28a745']
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: { beginAtZero: true }
      }
    }
  });
</script> -->

      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>





				
   



