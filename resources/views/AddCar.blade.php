<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Become a Host</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .step {
      display: none;
    }

    .step.active {
      display: block;
    }
    /* Global Styles */
/* Body Background */
body {
  font-family: Arial, sans-serif;
  background-color: #f8f9fa; /* Fallback color */
  background-image: url(/images/pexels-pixabay-164634.jpg); /* URL to your background image */
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}


.container {
  max-width: 800px;
  margin: auto;
  background-color: #ffffffad;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgb(0, 0, 0);
}

h2 {
  text-align: center;
  color: #333;
}

.step {
  display: none;
}

.step.active {
  display: block;
}

/* Form Styles */
form {
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 20px;
}

label {
  font-weight: bold;
}

input[type="text"],
input[type="number"],
select,
textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button {
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.btn-primary {
  background-color: #007bff;
  color: #fff;
}

.btn-primary:hover {
  background-color: #0056b3;
}

.btn-success {
  background-color: #28a745;
  color: #fff;
}

.btn-success:hover {
  background-color: #218838;
}

/* File Upload Styles */
.form-control-file {
  display: inline-block;
}

/* Checkbox Styles */
.form-check-label {
  font-weight: normal;
}

/* Tips Section Styles */
ul {
  list-style-type: none;
  padding-left: 0;
}

ul li {
  margin-bottom: 5px;
}

/* Responsive Styles */
@media (max-width: 576px) {
  .container {
    padding: 10px;
  }
}

  </style>
</head>
<body>
  <div class="container mt-5">
    <h2>Become a Host</h2>
    <div id="step1" class="step active">
      <!-- Step 1: Car Details -->
      <h3>Step 1: Car Details</h3>
      <form id="step1Form">
        <div class="form-group">
          <label for="fullAddress">Full Address of the Car:</label>
          <input type="text" class="form-control" id="fullAddress" required>
        </div>
        <div class="form-group">
          <label for="carName">Car Name and Model:</label>
          <input type="text" class="form-control" id="carName" required>
        </div>
        <div class="form-group">
          <label for="carYear">Car Year:</label>
          <select class="form-control" id="carYear" required>
            <option value="">Select Year</option>
            <!-- Dynamically generate years from 1900 to current year -->
            <!-- JavaScript will be used to populate this -->
          </select>
        </div>
        <div class="form-group">
          <label for="odometers">Odometers (km):</label>
          <select class="form-control" id="odometers" required>
            <option value="">Select Odometers</option>
            <!-- Dynamically generate odometer options -->
            <!-- JavaScript will be used to populate this -->
          </select>
        </div>
        <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
      </form>
    </div>
   
    <!-- Step 2: Car License and Insurance -->
<div id="step2" class="step">
  <h3>Step 2: Car License and Insurance</h3>
  <form id="step2Form">
    <div class="form-group">
      <label for="licensePlate">Full Licence Plate Number:</label>
      <input type="text" class="form-control" id="licensePlate" required>
    </div>
    <div class="form-group">
      <label for="insuranceExpiration">Insurance Expiration Date:</label>
      <input type="date" class="form-control" id="insuranceExpiration" required>
    </div>
    <div class="form-group">
      <label>Car Features:</label><br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="usbAdapter" value="usbAdapter">
        <label class="form-check-label" for="usbAdapter">USB Adapter</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="gps" value="gps">
        <label class="form-check-label" for="gps">GPS</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="auxInput" value="auxInput">
        <label class="form-check-label" for="auxInput">AUX Input</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="bluetooth" value="bluetooth">
        <label class="form-check-label" for="bluetooth">Bluetooth</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="backupCamera" value="backupCamera">
        <label class="form-check-label" for="backupCamera">Backup Camera</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="keylessEntry" value="keylessEntry">
        <label class="form-check-label" for="keylessEntry">Keyless Entry</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="sunroof" value="sunroof">
        <label class="form-check-label" for="sunroof">Sunroof</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="heatedSeats" value="heatedSeats">
        <label class="form-check-label" for="heatedSeats">Heated Seats</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="leatherSeats" value="leatherSeats">
        <label class="form-check-label" for="leatherSeats">Leather Seats</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="cruiseControl" value="cruiseControl">
        <label class="form-check-label" for="cruiseControl">Cruise Control</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="parkingSensors" value="parkingSensors">
        <label class="form-check-label" for="parkingSensors">Parking Sensors</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="laneAssist" value="laneAssist">
        <label class="form-check-label" for="laneAssist">Lane Assist</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="blindSpotMonitoring" value="blindSpotMonitoring">
        <label class="form-check-label" for="blindSpotMonitoring">Blind Spot Monitoring</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="automaticParking" value="automaticParking">
        <label class="form-check-label" for="automaticParking">Automatic Parking</label>
      </div>
    </div>
    
    <div class="form-group">
      <label for="carDescription">Description:</label>
      <textarea class="form-control" id="carDescription" rows="4" placeholder="Enter car description"></textarea>
    </div>
    <button type="button" class="btn btn-primary" onclick="previousStep()">Previous</button>
    <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>

  </form>
</div>

    <!-- Step 3: Goals -->
    <div id="step3" class="step">
      <!-- Step 3: Goals -->
      <h3>Step 3: Goals</h3>
      <form id="step3Form">
        <div class="form-group">
          <label for="primaryGoal">What is your primary goal for sharing this car?</label>
          <select class="form-control" id="primaryGoal" required>
            <option value="">Select Primary Goal</option>
            <option value="Earn Extra Income">Earn Extra Income</option>
            <option value="Utilize Idle Asset">Utilize Idle Asset</option>
            <option value="Share Community Resources">Share Community Resources</option>
            <!-- Add more options if needed -->
          </select>
        </div>
        <div class="form-group">
          <label for="carUsageFrequency">How often do you use this car?</label>
          <select class="form-control" id="carUsageFrequency" required>
            <option value="">Select Car Usage Frequency</option>
            <option value="Daily">Daily</option>
            <option value="Weekly">Weekly</option>
            <option value="Occasionally">Occasionally</option>
            <!-- Add more options if needed -->
          </select>
        </div>
        <div class="form-group">
          <label for="carShareFrequency">How often do you want to share this car?</label>
          <select class="form-control" id="carShareFrequency" required>
            <option value="">Select Car Share Frequency</option>
            <option value="Daily">Daily</option>
            <option value="Weekly">Weekly</option>
            <option value="Monthly">Monthly</option>
            <!-- Add more options if needed -->
          </select>
        </div>
        <button type="button" class="btn btn-primary" onclick="previousStep()">Previous</button>
        <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
      </form>
    </div>
    
    <!-- Step 4: Advance Notice -->
    <div id="step4" class="step">
      <!-- Step 4: Advance Notice -->
      <h3>Step 4: Advance Notice</h3>
      <form id="step4Form">
        <div class="form-group">
          <label for="advanceNotice">How much advance notice do you need before a trip starts? (in hours)</label>
          <select class="form-control" id="advanceNotice" required>
            <option value="">Select Advance Notice</option>
            <option value="1">6 hours</option>
            <option value="3">12 hours</option>
            <option value="6">24 hours recommended</option>
            <option value="6">48 hours </option>
    
          </select>
        </div>
        <div class="form-group">
          <label for="tripDurationMin">Trip Duration (Minimum):</label>
          <select class="form-control" id="tripDurationMin" required>
            <option value="">Select Minimum Trip Duration</option>
            <option value="1">1 day</option>
            <option value="3">2 days </option>
            <option value="6">3 days</option>
          
          </select>
        </div>
        <div class="form-group">
          <label for="tripDurationMax">Trip Duration (Maximum):</label>
          <select class="form-control" id="tripDurationMax" required>
            <option value="">Select Maximum Trip Duration</option>
            <option value="1">1 week</option>
            <option value="3">2 weeks</option>
            <option value="7">1 month</option>
          
          </select>
        </div>
        <button type="button" class="btn btn-primary" onclick="previousStep()">Previous</button>
        <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
      </form>
    </div>
    
    <!-- Step 5: Car Photos -->
    <div id="step5" class="step">
      <!-- Step 5: Car Photos -->
      <h3>Step 5: Car Photos</h3>
      <p>Please upload at least 6 photos of your car from different angles for best results.</p>
      <form id="step5Form">
        <div class="form-group">
          <label for="carPhotos">Upload Car Photos:</label>
          <input type="file" class="form-control-file" id="carPhotos" accept="image/*" multiple required>
        </div>
        <p><strong>Tips for High-Quality Pictures:</strong></p>
        <ul>
          <li>Take photos of the exterior from all angles (front, back, sides).</li>
          <li>Include close-up shots of any special features or unique details.</li>
          <li>Ensure good lighting for clear and vibrant images.</li>
          <li>Take photos during the day for natural light, or use bright indoor lighting.</li>
          <li>Keep the background clutter-free to focus on the car.</li>
          <li>Consider taking photos in scenic locations for added appeal.</li>
        </ul>
        <button type="button" class="btn btn-primary" onclick="previousStep()">Previous</button>
        <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
      </form>
    </div>
    
    
    <!-- Step 6: Pricing -->
    <!-- Step 6: Pricing -->
<div id="step6" class="step">
  <h3>Step 6: Pricing</h3>
  <form id="step6Form">
    <div class="form-group">
      <label for="pricePerDay">Price per Day (MAD):</label>
      <input type="number" class="form-control" id="pricePerDay" min="0" max="1000" step="1" required>
    </div>
    <div class="form-group">
      <label for="pricePerWeek">Price for a Week (MAD):</label>
      <input type="number" class="form-control" id="pricePerWeek" min="0" max="7000" step="1" required>
    </div>
    <div class="form-group">
      <label for="pricePerMonth">Price for a Month (MAD):</label>
      <input type="number" class="form-control" id="pricePerMonth" min="0" max="30000" step="1" required>
    </div>
    <div class="form-group">
      <label for="pricingTips">Pricing Tips:</label>
      <textarea class="form-control" id="pricingTips" rows="3" placeholder="Enter pricing tips and discounts here..."></textarea>
    </div>
    <button type="button" class="btn btn-primary" onclick="previousStep()">Previous</button>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>

  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Populate car year dropdown
      const carYearDropdown = document.getElementById('carYear');
      const currentYear = new Date().getFullYear();
      for (let year = currentYear; year >= 1900; year--) {
        const option = document.createElement('option');
        option.text = year;
        option.value = year;
        carYearDropdown.appendChild(option);
      }

      // Populate odometer dropdown
      const odometerDropdown = document.getElementById('odometers');
      const odometerOptions = ['Less than 10,000 km', '10,000 - 50,000 km', '50,000 - 100,000 km', 'More than 100,000 km'];
      odometerOptions.forEach(option => {
        const optionElement = document.createElement('option');
        optionElement.text = option;
        optionElement.value = option;
        odometerDropdown.appendChild(optionElement);
      });
    });


    function updateButtonVisibility() {
  const currentStep = document.querySelector('.step.active');
  const previousStepButton = currentStep.querySelector('.previous-button');

  if (previousStepButton) {
    const previousStep = currentStep.previousElementSibling;
    if (previousStep) {
      previousStepButton.style.display = 'block';
    } else {
      previousStepButton.style.display = 'none';
    }
  }
}

document.addEventListener('DOMContentLoaded', function () {
  const fileInput = document.getElementById('carPhotos');

  fileInput.addEventListener('change', function () {
    const files = fileInput.files;
    const numberOfFiles = files.length;

    if (numberOfFiles < 6) {
      alert('Please upload at least 6 photos.');
      fileInput.value = ''; // Clear the input field
    } else if (numberOfFiles > 20) {
      alert('You can upload a maximum of 20 photos.');
      fileInput.value = ''; // Clear the input field
    }
  });
});


function nextStep() {
  const currentStep = document.querySelector('.step.active');
  const nextStep = currentStep.nextElementSibling;
  
  // Check if all fields are filled before proceeding to the next step
  const inputs = currentStep.querySelectorAll('input, select');
  let allFieldsFilled = true;
  inputs.forEach(input => {
    if (!input.value) {
      allFieldsFilled = false;
    }
  });

  if (allFieldsFilled && nextStep) {
    currentStep.classList.remove('active');
    nextStep.classList.add('active');
    updateButtonVisibility();
  } else {
    alert('Please fill in all fields before proceeding.');
  }

  
}

function previousStep() {
  const currentStep = document.querySelector('.step.active');
  const previousStep = currentStep.previousElementSibling;

  if (previousStep) {
    currentStep.classList.remove('active');
    previousStep.classList.add('active');
    updateButtonVisibility();
  } else {
    alert('No previous step available.');
  }
}

// Initial call to update button visibility
updateButtonVisibility();


    document.addEventListener('DOMContentLoaded', function() {
  const insuranceExpirationInput = document.getElementById('insuranceExpiration');

  insuranceExpirationInput.addEventListener('change', function() {
    const expirationDate = new Date(this.value);
    const today = new Date();
    const threeMonthsFromNow = new Date();
    threeMonthsFromNow.setMonth(today.getMonth() + 3);

    // Check if expiration date is less than three months away or has passed
    if (expirationDate < threeMonthsFromNow || expirationDate < today) {
      alert('Your insurance is about to expire or has already expired. Please update your insurance information.');
      insuranceExpirationInput.value = ''; // Clear the date input
    }
  });
});

  </script>
</body>
</html>