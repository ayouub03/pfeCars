<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard - Car Sharing Platform</title>
  <!-- Add your CSS link here -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"> <!-- Font Awesome for icons -->
 <link rel="stylesheet" href="admine.css">
</head>
<body>
  <header>
    <h1>Admin Dashboard</h1>
  </header>

  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i> <!-- Font Awesome bars icon for toggle button -->
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <!-- Add navigation links to different sections of the admin interface -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#dashboard"><i class="fas fa-chart-line"></i> Dashboard</a> <!-- Font Awesome chart icon -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#user-management"><i class="fas fa-users"></i> User Management</a> <!-- Font Awesome users icon -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#listing-management"><i class="fas fa-car"></i> Listing Management</a> <!-- Font Awesome car icon -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#booking-management"><i class="fas fa-calendar-alt"></i> Booking Management</a> <!-- Font Awesome calendar icon -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#reports"><i class="fas fa-newspaper"></i> Reports</a> <!-- Font Awesome chart bar icon -->
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <!-- Main content area where different sections will be displayed -->
    <section id="dashboard">
      <h2>Dashboard</h2>
      <div class="summary">
        <div class="card card-users">
          <i class="fas fa-users"></i>
          <h3>Total Users</h3>
          <p>500</p>
        </div>
        <div class="card card-listings">
          <i class="fas fa-car"></i>
          <h3>Total Listings</h3>
          <p>200</p>
        </div>
        <div class="card card-bookings">
          <i class="fas fa-calendar-alt"></i>
          <h3>Total Bookings</h3>
          <p>1000</p>
        </div>
      </div>
      
      <div class="chart-container">
        <canvas id="growthChart"></canvas>
      </div>
    </section>
    <section id="user-management">
        <h2>User Management</h2>
        <div class="user-list">
          <div class="search-bar">
            <input type="text" placeholder="Search by Name or ID">
            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>john@example.com</td>
                <td>Admin</td>
                <td>
                  <button class="btn btn-primary"><i class="fas fa-eye"></i> View Profile</button>
                  <button class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</button>
                </td>
              </tr>
              <!-- More user rows here -->
            </tbody>
          </table>
        </div>
      </section>
      <section id="listing-management">
        <h2>Listing Management</h2>
        <div class="listing-list">
          <div class="search-bar">
            <input type="text" placeholder="Search by Car Name or ID">
            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Car Name</th>
                <th>Owner</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Toyota Camry</td>
                <td>John Doe</td>
                <td>Active</td>
                <td>
                  <button class="btn btn-primary"><i class="fas fa-eye"></i> View Details</button>
                  <button class="btn btn-warning"><i class="fas fa-times-circle"></i> Deactivate</button>
                  <button class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</button>
                </td>
              </tr>
              <!-- More listing rows here -->
            </tbody>
          </table>
        </div>
      </section>
      <section id="booking-management">
        <h2>Booking Management</h2>
        <div class="booking-list">
          <div class="search-bar">
            <input type="text" placeholder="Search by Car Name or Renter">
            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Car Name</th>
                <th>Renter</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Toyota Camry</td>
                <td>Alice Smith</td>
                <td>2024-03-01</td>
                <td>2024-03-05</td>
                <td>Confirmed</td>
                <td>
                  <button class="btn btn-primary"><i class="fas fa-eye"></i> View Details</button>
                  <button class="btn btn-success"><i class="fas fa-check"></i> Approve</button>
                  <button class="btn btn-danger"><i class="fas fa-times"></i> Reject</button>
                </td>
              </tr>
              <!-- More booking rows here -->
            </tbody>
          </table>
        </div>
      </section>
      <section id="reports">
        <h2>Reports</h2>
        <div class="report-list">
          <div class="search-bar">
            <input type="text" placeholder="Search by Reporter or Reported">
            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th>Report</th>
                <th>Reporter</th>
                <th>Reported</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Harassment report against user John Doe by Alice Smith for inappropriate behavior</td>
                <td>
                  <div class="user">
                    <span>John Doe</span>
                    <button class="btn btn-profile"><i class="fas fa-user"></i></button>
                  </div>
                </td>
                <td>
                  <div class="user">
                    <span>Alice Smith</span>
                    <button class="btn btn-profile"><i class="fas fa-user"></i></button>
                  </div>
                </td>
                <td>
                  <button class="btn btn-info">Investigating</button>
                </td>
              </tr>
              <!-- More report rows here -->
            </tbody>
          </table>
        </div>
      </section>
      
      
      
    <!-- Add other sections here -->
  </main>
  

  <!-- Add your JavaScript link here -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const ctx = document.getElementById('growthChart').getContext('2d');
  
      const userData = [100, 150, 200, 250, 300]; // Example user data
      const listingData = [50, 70, 90, 110, 130]; // Example listing data
      const bookingData = [200, 250, 300, 350, 400]; // Example booking data
  
      const chart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
          datasets: [
            {
              label: 'Users',
              data: userData,
              backgroundColor: 'rgba(0, 0, 255, 0.5)',
              borderColor: 'rgba(0, 0, 255, 1)',
              borderWidth: 1
            },
            {
              label: 'Listings',
              data: listingData,
              backgroundColor: 'rgba(0, 255, 0, 0.5)',
              borderColor: 'rgba(0, 255, 0, 1)',
              borderWidth: 1
            },
            {
              label: 'Bookings',
              data: bookingData,
              backgroundColor: 'rgba(255, 0, 0, 0.5)',
              borderColor: 'rgba(255, 0, 0, 1)',
              borderWidth: 1
            }
          ]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });
    });
  </script>
  



  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
