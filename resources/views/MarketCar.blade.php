<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Market</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .fixed-bar {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            width: 96.9%;
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            border-radius: 0 0 30px 30px;
            z-index: 999;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .fixed-bar fieldset {
            padding: 10px 20px;
            border: none;
            margin-left: auto;
            margin-right: 20px;
            max-width: 50%;
        }

        .fixed-bar img {
            width: 50px;
            height: auto;
            margin-right: 10px;
        }

        .fixed-bar input[type="date"] {
            margin-right: 10px;
            padding: 10px 19px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .fixed-bar a {
            text-decoration: none;
            color: #333;
        }

        .fixed-bar a:hover {
            opacity: 0.7;
        }

        .search-container {
            display: flex;
            align-items: center;
        }

        .profil-container {
            display: flex;
            align-items: center;
        }

        .profil-button {
            background-color: transparent;
            border: none;
            color: #333;
            font-size: 16px;
            outline: none;
            display: flex;
            align-items: center;
        }

        .profil-button img {
            width: 40px;
            height: 40px;
            margin-right: 5px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
        }


        .sidebar {
    width: 200px;
    background-color: rgba(255, 255, 255, 0.8);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    border-radius: 0 30px 30px 0;
    padding: 20px;
    position: fixed;
    top: 15%;
    left: 0;
    height: 70%;
    overflow-y: auto; /* Enable vertical scrolling if content exceeds height */
}

        .sidebar h3 {
            margin-top: 0;
        }

        .sidebar label {
            display: block;
            margin-bottom: 10px;
        }

        .car-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 5fr));
            gap: 50px;
            margin-top: 10%;
        }

        .car {
            background-color: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .car:hover {
            transform: translateY(-5px);
        }

        .car img {
            width: 100%;
            border-radius: 10px 10px 0 0;
        }

        .car-info {
            padding: 20px;
        }

        .car h2 {
            margin: 0 0 10px;
            font-size: 20px;
        }

        .car p {
            margin: 0;
            color: #777;
        }

        .car button {
            display: block;
            margin: 10px auto 0;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .car button:hover {
            background-color: #2980b9;
        }

        /* Car Availability Bar */
        .car-availability-bar {
            background-color: #ddd;
            height: 20px;
            margin-top: 20px;
            border-radius: 10px;
            position: relative;
        }

        .car-availability-bar .booking {
            position: absolute;
            background-color: #f00;
            height: 100%;
            border-radius: 10px;
        }
    </style>
</head>

<div class="container">
    <div class="sidebar sidebar-container">
        <h3>Display Options</h3>
        <label>
            <input type="checkbox" id="showAvailable"> Show Available Only
        </label>
        <h3>Sort By</h3>
        <select id="sortOptions">
            <option value="priceLowToHigh">Price: Low to High</option>
            <option value="priceHighToLow">Price: High to Low</option>
            <!-- Add more sorting options if needed -->
        </select>
    </div>
    
    <fieldset class="fixed-bar" id="selectedDatesFieldset">
        <!-- Fieldset for search -->
        <div class="search-container">
            Date du départ:
            <input type="date" id="departure" name="departure" style="margin-right: 10px; padding: 10px 19px; border: 1px solid #ccc; border-radius: 3px;" placeholder="" >
            Date du Retour:
            <input type="date" id="return" name="return" style="margin-right: 20px; padding: 10px 19px; border: 1px solid #ccc; border-radius: 3px;" placeholder="" >
            <a href="#" id="SearchCar">
                <img src="recherche-de-voiture.png">
            </a>
        </div>

        <div class="profil-container">
            <a href="profile" class="profil-button">
                <img src="profil.png" alt="Profil Icon">Profil
            </a>
        </div>
    </fieldset>


    <div class="car-list">
        <div class="car" onclick="viewCarDetails(1)">
            <img src="car1.jpg" alt="Car 1">
            <div class="car-info">
                <h2>Car Model 1</h2>
                <p>Price: $100/day</p>
            </div>
        </div>        
    </div>
        <!-- Add more cars as needed -->
</div>




<script>
    // Function to get URL parameters
    function getUrlParameter(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        var results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    }

    // Get the departure and return dates from the URL
    var departureDate = getUrlParameter('departure');
    var returnDate = getUrlParameter('return');

    // Set the placeholders of the date input fields
    document.getElementById("departure").setAttribute("placeholder", departureDate);
    document.getElementById("return").setAttribute("placeholder", returnDate);

    function viewCarDetails(carId) {
    // Redirect to car details page with carId
    window.location.href = 'car_details.html?id=' + carId;
}

</script>
  
</body>
</html>

