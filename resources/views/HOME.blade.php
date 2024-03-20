<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Location de voiture</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="styles.css">
<style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    overflow-x: hidden;
    background-color: #61A3FF;
}

.content1 {
    position: relative;
    height: 100vh;
    display: grid;
    align-items: center;
    justify-content: center;
}

.content1:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('/images/background_home.png');
    background-size: cover;
    background-repeat: no-repeat;
    z-index: -1;
}

.content2 {
    background-image: url('/images/cap.png');
    background-size: cover;
    background-repeat: no-repeat;
    padding: 50px 0;
    padding-top: 100vh;
}


.navbar {
    background-color: transparent;
    color: #ccc;
    padding: 10px 0;
    text-align: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 999;
    display: flex;
    justify-content: center;
    align-items: center;
}

.navbar a {
    color: #ccc;
    font-weight: bold;
    text-decoration: none;
    padding: 10px 20px;
    transition: background-color 0.3s;
    display: flex;
    align-items: center;
}

.navbar a img {
    width: 33px;
    height: 32px;
    margin-right: 5px;
}

.navbar a:hover {
    background-color: #686666;
    border-radius: 50px;
}
.navbar.scrolled {
    background-image: url('/images/BackgroundBar.jpg'); 
    background-size: cover;
    background-repeat: no-repeat; 
}


fieldset {
    position: relative;
    background-color: rgba(255, 255, 255, 0.8);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    border-radius: 30px;
    margin: 0 auto;
    max-width: 55%;
    padding: 40px;
    border: none;
    margin-top: -30%;
    margin-bottom: 15%;
}

.content2 a img {
    width: 50px;
    height: auto;
}
.content2 a img:hover {
    transform: scale(1.8);
    transform: rotate(12deg);
    opacity: 0.5; 
}

.flip-box {
    width: 40%;
    height: 380px;
    perspective: 600px;
    display: inline-block;
    margin: 2%;
    padding: 5%;
    border-radius: 30px;
}
.flip-box-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 1s;
    transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
    transform: rotateY(180deg);
}

.flip-box-front,
.flip-box-back {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    backface-visibility: hidden;
}

.flip-box-front {
    background-image: url('/images/BackFlip.jpg'); 
    background-size: cover;
    background-repeat: no-repeat; 
    color: #fff;
    border-radius: 30px;
}

.flip-box-back {
    background-color: #f9f9f9;
    color: #000;
    transform: rotateY(180deg);
    border-radius: 30px;
}

.contact-about {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10%;
}

#contact-heading {
    text-align: center;
}


.contact {
    padding: 50px;
    text-align: left;
    flex-grow: 1;
}

.contact input[type="text"],
.contact input[type="email"],
.contact textarea {
    width: 65%;
    padding: 10px;
    margin-bottom: 20px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.contact textarea {
    resize: vertical;
}

.contact input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
}

.Nos {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.contact-info {
    display: flex;
    flex-direction: column;
    background-color: #f9f9f9;
    padding: 15px;
    border-radius: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}


.admin-info {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

.admin-info h3,
.admin-info h4 {
    margin: 0;
    font-size: 18px;
}

.admin-info img {
    width: 30px;
    height: auto;
    margin-right: 10px;
}

.admin-info h4 {
    color: #555;
}

@media (max-width: 768px) {
    .content2,
    .flip-box {
        padding-top: 50px;
    }

    .content2 fieldset {
        max-width: 80%;
    }

    .contact-about {
        flex-direction: column;
    }

    .contact {
        padding: 20px;
    }

    .contact input[type="text"],
    .contact input[type="email"],
    .contact textarea {
        width: 90%;
    }
}

</style>
</style>
</head>
<body>
<div class="navbar">
    <div>
        <a href="#home"><img src="/images/home.png" alt="Home">Home</a>
    </div>
    <div>
        <a href="#services"><img src="/images/voiture-de-location.png" alt="Services">Services</a>
    </div>
    <div>
        <a href="#contact"><img src="/images/courriel-de-contact.png" alt="Contact">Contact</a>
    </div>
    <div>
        <a href="Login" id="loginLink"><img src="/images/login.png" alt="Login">Login</a>
    </div>
</div>

<div class="content1" id="home">
  <!-- Background Image 1 -->
</div>

<div class="content2">
  <fieldset>
    Date du départ:
    <input type="date" id="departure" name="departure"  style="margin-right: 10px; padding: 10px 19px; border: 1px solid #ccc; border-radius: 3px;">
    Date du Retour:
    <input type="date" id="return" name="return" style="margin-right: 20px; padding: 10px 19px; border: 1px solid #ccc; border-radius: 3px;">
    <a href="MarketCar.html" id="SearchCar"><img src="/images/recherche-de-voiture.png"></a>
  </fieldset>

  <div id="services" style="height: 100px;"></div>

  <!-- service 1 -->
  <div class="flip-box">
    <div class="flip-box-inner">
      <div class="flip-box-front">
        <img src="\images\3593196.png" style="width:100px;margin-top: 25px;">
        <h3 class="h2" style="font-size: x-large; color: #000;">Réservation Facile et Rapide</h3>
      </div>
      <div class="flip-box-back">
        <p class="p1" style="text-align: center;margin-top: 50px; ">
          Notre processus de réservation en ligne simple et intuitif vous permet de réserver votre voiture en quelques clics seulement. Choisissez votre véhicule, sélectionnez vos dates de location et effectuez votre paiement en toute sécurité, le tout depuis le confort de votre domicile. C'est rapide, facile et pratique !
        </p>
      </div>
    </div>
  </div>

  <!-- service 2 -->
  <div class="flip-box">
    <div class="flip-box-inner">
      <div class="flip-box-front">
        <img src="\images\car_3130576.png" style=" width: 60px; margin-top: 45px; margin-bottom: 10px; ">
        <h2 style="font-size: x-large; color: #000;">Location Auto Particuliers : Tarifs Imbattables</h2>
      </div>
      <div class="flip-box-back">
        <img src="\images\20945913.png" style=" width: 90px; margin-bottom: -10px;">
        <p class="p2" style="text-align: center;">
        Découvrez notre sélection de locations entre particuliers à des prix imbattables ! Profitez de tarifs avantageux pour louer la voiture parfaite, que ce soit pour une courte escapade en ville ou un voyage plus long. Avec des offres compétitives et une plateforme sécurisée, la location entre particuliers devient simple et abordable.         </p>
      </div>
    </div>
  </div>

  <div class="contact-about">
  <div class="contact" id="contact">
  <h2 id="contact-heading">Contact Us</h2>

    <div>
      <input type="text" id="yourName" placeholder="Votre Nom:"><br>
      <input type="email" id="yourEmail" placeholder="Votre Email:"><br>
      <textarea id="message" name="message" placeholder="Votre Message:" rows="4" cols="50"></textarea><br>
      <input type="submit" value="Envoyer">
    </div>
  </div>

  <div class="Nos">
    <div class="contact-info">
        <div class="admin-info">
            <h3>Ayoub ELORF&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp</h3>
            <img src="\images\Gmail_Logo.png" alt="Email Icon">
            <h4>ayoubelorf2003@gmail.com</h4>
        </div>
        <div class="admin-info">
            <h3>Ayoub Bazzi&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp</h3>
            <img src="\images\Gmail_Logo.png" alt="Email Icon">
            <h4>bazziayoub63@gmail.com</h4>
        </div>
    </div>
</div>





</div>



</div>
<script>
  // JavaScript to add scrolled class to navbar on scroll
  $(window).scroll(function() {
      if ($(this).scrollTop() > 50) {
          $('.navbar').addClass('scrolled');
      } else {
          $('.navbar').removeClass('scrolled');
      }
  });


    $(document).ready(function(){
        // Smooth scrolling when clicking on service links
        $('.navbar a[href^="#"]').on('click', function(event) {
            var target = $(this.getAttribute('href'));
            if( target.length ) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top
                }, 700); // Change this value to adjust scrolling speed (in milliseconds)
            }
        });
    });


  // JavaScript to add scrolled class to navbar on scroll
  $(window).scroll(function() {
      if ($(this).scrollTop() > 50) {
          $('.navbar').addClass('scrolled');
          $('.content2').css('top', '0'); // Move content2 to the front
      } else {
          $('.navbar').removeClass('scrolled');
          $('.content2').css('top', '100%'); // Move content2 to its original position
      }
  });

  // Other JavaScript code remains unchanged


</script>
</body>
</html>