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
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="/css/styles.css" />
  </head>
  <body>
    <div class="container mt-5">
      <!-- Add "d-flex justify-content-end" class to align items to the end -->
      <div class="row d-flex justify-content-end">
        <!-- Add a column to hold the "Edit Profile" button -->
        <div class="col-md-4 text-center">
          <a href="#" class="btn btn-primary">Edit Profile</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 text-center Profile-info">
          <!-- Profile Picture with circular cropping effect -->
          <div class="image_croper">
            <img
              src="/images/MrGlasses.jpg"
              class="picture"
              alt="Profile Picture"
            />
          </div>
          <h4>Mr glass</h4>
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
            <p>Email:{{$user->email}}</p>
            <p>Phone Number: {{$user->email}}</p>
            <p>Total Number of Car Rents: 50</p>
            <p>Date Joined: January 1, 2020</p>
            <!-- Social Media Icons -->
            <div class="social-icons">
              <a href="https://www.facebook.com" target="_blank"
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a href="https://www.twitter.com" target="_blank"
                ><i class="fab fa-twitter"></i
              ></a>
              <a href="https://www.instagram.com" target="_blank"
                ><i class="fab fa-instagram"></i
              ></a>
              <a href="https://wa.me/1234567890" target="_blank"
                ><i class="fab fa-whatsapp"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="col-md-8 ">
          <!-- Details Information -->
          <h3>About</h3>
          <p>
            an owner that loves the colection of cars , and loves more to share
            that love with his client
          </p>
          <div class="cars-section mt-5">
            <h3>Cars</h3>
            <div class="row">
              <div class="col-md-4 mb-3">
                <div class="car">
                  <img
                    src="/images/odiBlack.jpg"
                    class="img-fluid"
                    alt="Car 1"
                  />
                  <h4>Audi RingHors 2000</h4>
                  <p>Trips: 57</p>
                  <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <button class="btn btn-primary">View Details</button>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="car">
                  <img
                    src="/images/mercidess.jpg"
                    class="img-fluid"
                    alt="Car 1"
                  />
                  <h4>mercidess X20</h4>
                  <p>Trips: 78</p>
                  <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <button class="btn btn-primary">View Details</button>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="car">
                  <img
                    src="/images/whiteCatCat.jpg"
                    class="img-fluid"
                    alt="Car 1"
                  />
                  <h4>Ford fox700</h4>
                  <p>Trips: 115</p>
                  <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <button class="btn btn-primary">View Details</button>
                </div>
              </div>
              <!-- Repeat for other cars -->
            </div>
            <div class="text-center">
              <button
                class="btn btn-primary"
                style="background-color: transparent;color: black
                ; border: solid 1px black;border-radius: 0%;"
              >
                See More
              </button>
            </div>
          </div>
          <div class="location">
            <h3>location</h3>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.2509890299446!2d-9.602066485316119!3d30.427754712080234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdad71064efb5085%3A0x2356e9dc7c582005!2sAgadir!5e0!3m2!1sen!2sma!4v1645524565528!5m2!1sen!2sma"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
            ></iframe>
          </div>

          <!-- Comments -->
          <div class="mt-3">
            <h3>Comments and Ratings</h3>
            <div class="media">
              <!-- Profile Picture -->
              <img
                src="/images/class_man.jpg"
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
                  <span class="username">Mike</span>
                  <span class="rating-date">February 22, 2024</span>
                </div>
                <!-- Comment -->
                <p class="comment">great car , i enjoyed the trip</p>
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
