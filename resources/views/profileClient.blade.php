<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Profile</title>
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/styles.css" />
  </head>
  <body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-4 text-center Profile-info">
          <!-- Profile Picture with circular cropping effect -->
          <div class="image_croper">
            <img
              src="{{asset('/images/profile_red.jpg') }}"
              class="picture"
              alt="Profile Picture"
            />
          </div>
          <h4>Red Queen</h4>
          <!-- Rating Stars -->
          <div class="rating">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </div>
          <!-- Additional Information -->
          <div class="additional-info">
            <p>Email: {{$user->email}}</p>
            <p>Phone Number: {{$user->phone_number}}</p>
            <p>Total Number of Car Reservation: {{$user->num_cars_rented}}</p>
            <p>Date Joined:{{$user->date_registered}}</p>
            <!-- Social Media Icons -->
            <div class="social-icons">
                <a href="{{$user->facebook_link}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="{{$user->instagram_link}}" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="{{$user->whatsapp_link}}" target="_blank"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
        
        </div>
        <div class="col-md-8 ">
          <!-- Details Information -->
          <h3>About</h3>
          <p>
          {{$user->about}} 
          </p>
         

          <!-- Comments -->
          <div class="mt-3">
            <h3>Comments and Ratings</h3>
            <div class="media">
              <!-- Profile Picture -->
              <img
                src="/images/MrGlasses.jpg"
                class="mr-3 profile-picture"
                alt="User 1"
              />
              <div class="media-body">
                <!-- Rating -->
                <div class="rating-container">
                  <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                </div>
                <!-- Username and Date -->
                <div class="username-date">
                  <span class="username">Mr Glasses</span>
                  <span class="rating-date">February 22, 2024</span>
                </div>
                <!-- Comment -->
                <p class="comment">A wonderful client , Glade that you choose one of my cars , i will be happy to work with you again.</p>
              </div>
            </div>
            <!-- Add more comments here -->
          </div>
          <!-- Comments and Ratings Section -->
          <h3>Add a comment</h3>
          <!-- Comment Form -->
          <form>
            <div class="form-group">
              <label for="comment">Leave a Comment:</label>
              <textarea class="form-control" id="comment" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="rating">Rating:</label>
              <select class="form-control" id="rating">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <!-- Comments -->
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
