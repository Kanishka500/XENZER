<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>XENZER</title>
  <?php require('./Inc/links.php') ?>
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
</head>

<body>
  <?php require('./Inc/header.php') ?>

  <!------------Swipper--------->
  <div class="container-fluid">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="./Images/slider2.jpg" alt=""></div>
        <div class="swiper-slide"><img src="./Images/slider1.jpg" alt=""></div>
        <div class="swiper-slide"><img src="./Images/slider3.jpg" alt=""></div>
      </div>

      <div class="swiper-pagination"></div>
    </div>
  </div>
  <!------------Swipper-End--------->

  <!------------carousel--------->
  <div class="container-fluid px-lg-4 mt-4">

  </div>
  <!------------check booking availability form--------->
  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4">
        <h5 class="mb-4">Check Booking Availability</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight:500 ;">Check-in</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight:500 ;">Check-out</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight:500;">Adult</label>
              <select class="form-select shadow-none">

                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-2 mb-3">
              <label class="form-label" style="font-weight:500;">Children</label>
              <select class="form-select shadow-none">

                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-1 mb-3">
              <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!------------check booking availability form - end--------->


  <!-----------------Rooms---------------->
  <h2 class="mt-5 pt-5 mb-4 text-center fw-light">OUR ROOMS</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4">
        <div class="card border-0" style="width: 18rem;">
          <img src="./Images/room4.jpg " class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Simple Room</h5>
            <h6 class="mb-4 fw-normal">Rs.20000.00 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Balcony
              </span>
            </div>

            <div class="facilities mb-4">
              <h6 class="mb-1">Facilites</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Room heater
              </span>
            </div>

            <div class="guest mb-4">
              <h6 class="mb-1">Guest</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                4 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                4 Children
              </span>

            </div>

            <div class="Rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>

            </div>
            <div class="d-flex justify-content-evenly">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">Read More</a>
            </div>
          </div>
        </div>

      </div>


      <div class="col-lg-4 col-md-4">
        <div class="card border-0" style="width: 18rem;">
          <img src="./Images/room2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Simple Room</h5>
            <h6 class="mb-4 fw-normal">Rs.20000.00 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Balcony
              </span>
            </div>

            <div class="facilities mb-4">
              <h6 class="mb-1">Facilites</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Room heater
              </span>
            </div>

            <div class="guest mb-4">
              <h6 class="mb-1">Guest</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                4 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                4 Children
              </span>

            </div>

            <div class="Rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>

            </div>
            <div class="d-flex justify-content-evenly">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">Read More</a>
            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-4 col-md-4">
        <div class="card border-0" style="width: 18rem;">
          <img src="./Images/room3.jpg " class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Simple Room</h5>
            <h6 class="mb-4 fw-normal">Rs.20000.00 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Balcony
              </span>
            </div>

            <div class="facilities mb-4">
              <h6 class="mb-1">Facilites</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Room heater
              </span>
            </div>

            <div class="guest mb-4">
              <h6 class="mb-1">Guest</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                4 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                4 Children
              </span>

            </div>
            <div class="Rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>

            </div>
            <div class="d-flex justify-content-evenly">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">Read More</a>
            </div>
          </div>
        </div>

      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms..</a>
      </div>
    </div>
  </div>


  <!----------------------OUR-FACILITIES--------------------->
  <h2 class="mt-5 pt-5 mb-4 text-center fw-light">OUR FACILITIES</h2>
  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="box col-lg-2 col-md-2 text-center bg-white shadow py-4 my-3">
        <img src="./Images/caffe.jpg" alt="" width="80px">
        <h5 class="mt-3">Caffe</h5>
      </div>
      <div class="box col-lg-2 col-md-2 text-center bg-white shadow py-4 my-3">
        <img src="./Images/pool.png" alt="" width="80px">
        <h5 class="mt-3">Swimming Pool</h5>
      </div>
      <div class="box col-lg-2 col-md-2 text-center bg-white shadow py-4 my-3">
        <img src="./Images/gym.png" alt="" width="80px">
        <h5 class="mt-3">Gym</h5>
      </div>
      <div class="box col-lg-2 col-md-2 text-center bg-white shadow py-4 my-3">
        <img src="./Images/spa.svg" alt="" width="80px">
        <h5 class="mt-3">Spa</h5>
      </div>
      <div class="box col-lg-2 col-md-2 text-center bg-white shadow py-4 my-3">
        <img src="./Images/Bar.png" alt="" width="80px">
        <h5 class="mt-3">Bar</h5>
      </div>
    </div>
    <div class="col-lg-12 text-center  m-auto mt-5">
      <a href="facilities.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities..</a>
    </div>
  </div>

  <!-------------Testimonials-------------->
  <h2 class="mt-5 pt-5 mb-4 text-center fw-light">" What People Say "</h2>
  <div class="container">
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="profile d-flex align-items-center mb-3">
            <img src="./Images/Team/hasitha.png" width="30px">
            <h6 class="m-0 ms-2">Random User1</h6>
          </div>

          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore aut molestiae eveniet. Qui assumenda cum eaque rem laudantium ipsum ex!</p>
        </div>
        <div class="swiper-slide">
          <div class="profile d-flex align-items-center mb-3">
            <img src="./Images/Team/hasitha.png" width="30px m-auto">
            <h6 class="m-lg-3 ms-2">Random User1</h6>
          </div>

          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore aut molestiae eveniet. Qui assumenda cum eaque rem laudantium ipsum ex!</p>
        </div>
        <div class="swiper-slide">
          <div class="profile d-flex align-items-center mb-3">
            <img src="./Images/Team/hasitha.png" width="30px">
            <h6 class="m-0 ms-2">Random User1</h6>
          </div>

          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore aut molestiae eveniet. Qui assumenda cum eaque rem laudantium ipsum ex!</p>
        </div>
        <div class="swiper-slide">
          <div class="profile d-flex align-items-center mb-3">
            <img src="Images\Team\picture1.png" width="30px">
            <h6 class="m-0 ms-2">Random User1</h6>
          </div>

          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore aut molestiae eveniet. Qui assumenda cum eaque rem laudantium ipsum ex!</p>
        </div>



      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>



  <!------------Reach Us---------------->
  <h2 class="mt-5 pt-5 mb-4 text-center fw-light"> Reach Us</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 ">
        <iframe class="w-100" height="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126762.45837533647!2d80.14577239492183!3d6.851370918698644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253c87cd30f47%3A0x962a24d3843035e1!2sHotel%20Grand%20Mondo%20-%20Luxury%20Banquets!5e0!3m2!1sen!2slk!4v1654782628627!5m2!1sen!2slk"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">

        <div class="bg-white p-4 mb-4 mt-4">
          <h5>Call us</h5>
          <a href="tel:0771875764" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> 0362249181
            <br>
            <i class="bi bi-telephone-fill"></i> +94771875764
          </a>


        </div>
        <div class="bg-white p-4 mb-4 mt-4">
          <h5>Follow us</h5>
          <a href="tel:0771875764" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-facebook"></i> Facebook
          </a>
          <br>
          <br>
          <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark"></a>
          <i class="bi bi-instagram"></i> Instagram
          </a>
          <br>
          <br>
          <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark"></a>
          <i class="bi bi-twitter"></i> Twitter
          </a>
          <br>
          <br>
          <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark"></a>
          <i class="bi bi-instagram"></i> Instagram
          </a>


        </div>

      </div>
    </div>
  </div>


  <!-------footer----->
  <?php require('./Inc/footer.php') ?>





  <!-------------------------------------------------Script Files------------------------------------------------->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="./Js/main.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });


    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>

</body>

</html>