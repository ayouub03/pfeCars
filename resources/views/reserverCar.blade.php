<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Car Reservation</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
  }
  .container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }
  header {
    background-color: #00aaff;
    color: #fff;
    padding: 20px;
    text-align: center;
    margin-bottom: 20px;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
  }
  h2 {
    margin-bottom: 20px;
  }
  .car-details {
    margin-bottom: 20px;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #f8f9fa;
  }
  .car-details h3 {
    margin-top: 0;
  }
  .reservation-form {
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #f8f9fa;
  }
  label {
    font-weight: bold;
  }
  input[type="date"] {
    width: calc(50% - 10px);
    margin-right: 10px;
  }
  input[type="submit"] {
    background-color: #00aaff;
    color: #fff;
    padding: 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
  }
  input[type="submit"]:hover {
    background-color: #0077cc;
  }
  .car-info {
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #f8f9fa;
    height: 100%;
  }
</style>
</head>
<body>

<header>
  <h1>Car Reservation</h1>
</header>

<div class="container">
  <div class="row">
    <div class="col-md-12 mt-3">
        <h2>Car Information</h2>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/images/mercidess - Copy.jpg" class="d-block w-100" alt="Car Image 1">
            </div>
            <div class="carousel-item">
              <img src="/images/odiBlack - Copy.jpg" class="d-block w-100" alt="Car Image 2">
            </div>
            <div class="carousel-item">
              <img src="/images/pexels-mike-bird-116675 - Copy.jpg" class="d-block w-100" alt="Car Image 3">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="car-info">
          <h3>Toyota Camry</h3>
          <p>Hosted by: John Doe</p>
          <p>Past Reviews: 4.5 stars</p>
          <p>Features: [Feature 1, Feature 2, Feature 3]</p>
          <p>Conditions for Reserving: [Condition 1, Condition 2, Condition 3]</p>
          <p>Location: [GPS Map Here]</p>
        </div>
      </div>
    <div class="col-md-12">
      <h2>Reservation Form</h2>
      <div class="reservation-form">
        <form action="#" method="post">
          <div class="form-group">
            <label for="start-date">Start Date:</label>
            <input type="date" class="form-control" id="start-date" name="start-date" required>
            <label for="end-date">End Date:</label>
            <input type="date" class="form-control" id="end-date" name="end-date" required>
          </div>
          <div class="form-group">
            <label for="total-price">Total Price:</label>
            <input type="text" class="form-control" id="total-price" name="total-price" readonly>
          </div>
          <input type="submit" class="btn btn-primary" value="Reserve Now">
        </form>
      </div>
    </div>

  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
