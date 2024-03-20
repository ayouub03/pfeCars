<!DOCTYPE html>
<html lang="fr"> <!-- Changed "en" to "fr" for French -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Additional styling */
        .profile-picture {
            max-width: 200px;
            margin-bottom: 20px;
        }
        .location-map {
            height: 300px; /* Adjust height as needed */
            margin-bottom: 20px;
        }

        /* Style for the file input button */
        .custom-file-button {
            display: inline-block;
            background-color: #28a745;;
            color: #fff;
            padding: 8px 16px;
            border: none;
            border-radius: 40px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .custom-file-button:hover {
            background-color: #218838;
        }
        .profile-picture {
    max-width: 160px;
    margin-bottom: 20px;
    border-radius: 60%; /* Make the image circular */
}

    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <h2>Edit Profile</h2>
    <img src="/images/MrGlasses.jpg" class="profile-picture" alt="Photo de profil">
                <div class="form-group">
                    <label for="new-profile-picture">Choisir une nouvelle photo :</label>
                    <label for="new-profile-picture" class="custom-file-button">Choisir une image</label>
                    <input type="file" class="form-control-file" id="new-profile-picture" name="new-profile-picture" style="display: none;">
                </div>
            </div>
            <div class="col-md-8">
    <form action="#" method="post">
        <div class="form-group">
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" class="form-control" id="username" name="username" value="Mr glass" required>
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="form-control" id="email" name="email" value="mr.glass@example.com" required>
        </div>
        <div class="form-group">
            <label for="phone">Numéro de téléphone :</label>
            <input type="tel" class="form-control" id="phone" name="phone_number" value="+1234567890" required>
        </div>
        <div class="form-group">
            <label for="address">Adresse :</label>
            <input type="text" class="form-control" id="address" name="address" value="123 Main Street, City, Country" required>
        </div>
        <div class="form-group">
            <label for="driving-license">Permis de conduire :</label>
            <input type="text" class="form-control" id="driving-license" name="driving-license" value="Numéro de permis" required>
        </div>
        <div class="col-md-8">
    <form action="#" method="post">
        <!-- Other form fields -->

        <!-- Facebook -->
        <div class="form-group">
            <label for="facebook">Facebook :</label><br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
                </div>
                <input type="text" class="form-control" id="facebook" name="facebook_link" value="https://www.facebook.com/yourprofile" required>
            </div>
        </div>
      
        <!-- WhatsApp -->
        <div class="form-group">
            <label for="whatsapp">WhatsApp :</label><br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fab fa-whatsapp"></i></span>
                </div>
                <input type="text" class="form-control" id="whatsapp" name="whatsapp_link" value="+1234567890" required>
            </div>
        </div>

        <!-- Instagram -->
        <div class="form-group">
            <label for="instagram">Instagram :</label><br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                </div>
                <input type="text" class="form-control" id="instagram" name="instagram_link" value="https://www.instagram.com/yourprofile" required>
            </div>
        </div>


        <div class="form-group">
            <label for="about">À propos :</label>
            <textarea class="form-control" id="about" name="about" rows="5">un propriétaire qui aime la collection de voitures et qui aime partager cet amour avec ses clients</textarea>
        </div> 
                   
                    <button type="submit" class="btn btn-primary " style="margin-bottom:20px">Enregistrer les modifications</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
