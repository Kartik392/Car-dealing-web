
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferrari LaFerrari</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="media.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!--  Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

 <!-- Navbar -->

    <nav class="navbar">
    <ul>
        <li><a href="#" class="login-btn" onclick="openLoginModal()">Login</a></li>
        <li id="userEmail" style="display: none;"></li> <!-- Display user email -->
        
        <!-- Search Button and Input -->
        <li class="search-container">
            <button onclick="toggleSearchInput()" class="search-btn">Search</button>
            <input type="text" id="searchInput" class="search-input" placeholder="Search..." style="display:none;" onkeyup="submitSearch()">
        </li>
    </ul>
</nav>

<!-- Results Section -->
<div id="searchResults"></div>

    <!-- Login Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeLoginModal()">&times;</span>
            <h2>Login</h2>
            <form id="loginForm" method="POST">
    <input type="email" id="loginEmail" name="loginEmail" placeholder="Email" required><br>
    <input type="password" id="loginPassword" name="loginPassword" placeholder="Password" required><br>
    <button type="button" class="modal-btn" onclick="submitLoginForm()">Login</button>
</form>
<div id="loginMessage"></div>

            <p>Don't have an account? <button onclick="openSignupModal()">Sign Up</button></p>
        </div>
    </div>

    <!-- Signup Modal -->
    <div id="signupModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeSignupModal()">&times;</span>
            <h2>Sign Up</h2>
            <form id="signupForm" action="signup.php" method="POST">
    <input type="email" id="signupEmail" name="signupEmail" placeholder="Email" required><br>
    <input type="password" id="signupPassword" name="signupPassword" placeholder="Password" required><br>
    <button type="submit" class="modal-btn">Sign Up</button>
</form>

        </div>
    </div>



    <!-- Hero Section -->
    <section class="hero">
        <div class="overlay"></div>
        <div class="hero-content text-center">
            <h1>2017 Ferrari LaFerrari</h1>
            <p>Price: $1,200,000</p>
            <a href="#" class="btn btn-warning">More Details</a>
        </div>
    </section>

    <section class="container my-5">
        <div class="row text-center">
            <div class="col-md-2 spec-box">
                <strong>Engine</strong><br>6.3L V12
            </div>
            <div class="col-md-2 spec-box">
                <strong>Power</strong><br>949 HP
            </div>
            <div class="col-md-2 spec-box">
                <strong>Torque</strong><br>664 lb-ft
            </div>
            <div class="col-md-2 spec-box">
                <strong>Acceleration</strong><br>0-60 in 3 Sec
            </div>
            <div class="col-md-2 spec-box">
                <strong>Top Speed</strong><br>+217 MPH
            </div>
            <div class="col-md-2 spec-box">
                <strong>Transmission</strong><br>7-Speed
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-md-6 p-0">
                <div class="video-wrapper">
                    <video id="video1" class="custom-video" poster="assets/images/video1.jpg">
                        <source src="assets/image/videoplayback.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="play-button" onclick="togglePlay('video1')">&#9658;</div>
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div class="video-wrapper">
                    <video id="video2" class="custom-video" poster="assets/images/vid1.jpg">
                        <source src="assets/videos/video2.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="play-button" onclick="togglePlay('video2')">&#9658;</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="overview-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Overview</h2>
                    <p class="overview-text">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero nesciunt dolorum reprehenderit
                        dolore culpa deleniti maxime quam inventore repudiandae necessitatibus fugiat doloremque
                        laboriosam sed iure vel ab corrupti tempora ratione reiciendis, modi exercitationem vero nemo
                        excepturi. Ipsum vitae beatae cupiditate pariatur, cumque adipisci velit, libero quibusdam
                        molestiae hic distinctio impedit ducimus animi ipsa minus. Rerum recusandae libero saepe.
                        Eveniet quod in doloribus similique laboriosam nulla veritatis facilis voluptatum enim harum,
                        recusandae saepe dicta odit dolor qui assumenda provident voluptatibus dignissimos incidunt?
                        Fugiat, veritatis. Suscipit odit consequatur impedit eaque possimus veniam aperiam. Illum,
                        ducimus id nobis similique ex expedita deleniti vel.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Gallery -->
    <div class="container-fluid my-5 p-0">
        <div class="row g-3 p-0 ">
            <!-- Left Side: Exterior (Top) -->
            <div class="col-lg-8">
                <a style="text-decoration: none;" href="gallery.php">
                <div class="image-box exterior rightBothRadius">
                    <div class="overlay-text">
                        <h3>INTERIOR</h3>
                        <p>8 PHOTOS</p>
                    </div>
                </div>
            </a>
                <div class="row p-0 mt-3">
                    <div class="col-lg-6 p-0 ">
                        <a style="text-decoration: none;" href="gallery.php">
                        <div class="image-box interior">
                            <div class="overlay-text">
                                <h3>EXTERIOR</h3>
                                <p>12 PHOTOS</p>
                            </div>
                        </div>
                        </a>
                    </div>

                    <!-- Left Side: Engine (Beside Interior) -->
                    <div class="col-lg-6 p-0">
                        <a style="text-decoration: none;" href="gallery.php">
                        <div class="image-box engine rightBothRadius">
                            <div class="overlay-text">
                                <h3>ENGINE</h3>
                                <p>4 PHOTOS</p>
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
            <!-- Right Side: Driving (Takes Full Height) -->
            <div class="col-lg-4">
                <a style="text-decoration: none;" href="gallery.php">
                <div style="height: 100%; margin-left: 13px;" class="image-box driving full-height leftBothRadius">
                    <div class="overlay-text">
                        <h3>DRIVING</h3>
                        <p>3 VIDEOS</p>
                    </div>
                </div>
            </a>
            </div>
            <!-- Left Side: Interior (Below Exterior) -->
        </div>
    </div>

    <!-- SHOWCASE SECTION -->
    <div style="height: 90vh;" class="container my-5 p-0 ">
        <div class="row">
            <div class="col-md-12 showCaseH">
                <p>SHOWCASE</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-6 showcaseDiv p-0 block">
                <img id="car1" class="img-fluid showcaseImg showcaseFilter" src="assets/images/carPNG.PNG" alt="Car 1">
                <img id="car2" class="img-fluid showcaseImg displayNone" src="assets/images/int.JPG" alt="Car Interior">
                <img id="car3" class="img-fluid showcaseImg displayNone" src="assets/images/light.JPG" alt="Car Lights">
            </div>

            <div class="col-md-3"></div>
        </div>

        <!-- FEATURE BUTTONS -->
        <div class="row my-5">
            <div class="col-md-6 col-12 featureDiv p-0 block">
                <button id="piston" class="featureBtn">
                    <div class="featureImgDiv">
                        <img class="featureImg" src="assets/images/icon/piston.png" alt="Piston">
                    </div>
                    <p class="featureText">PISTON</p>
                </button>

                <button id="seat" class="featureBtn">
                    <div class="featureImgDiv">
                        <img class="featureImg" src="assets/images/icon/car-seat.png" alt="Car Seat">
                    </div>
                    <p class="featureText">EXTERIOR & INTERIOR</p>
                </button>

                <button id="light" class="featureBtn">
                    <div class="featureImgDiv">
                        <img class="featureImg" src="assets/images/icon/light.png" alt="Lights">
                    </div>
                    <p class="featureText">LIGHTS</p>
                </button>

                <button class="featureBtn">
                    <div class="featureImgDiv">
                        <img class="featureImg" src="assets/images/icon/engine.png" alt="Engine">
                    </div>
                    <p class="featureText">POWER & SPEED</p>
                </button>

                <button id="brack" class="featureBtn">
                    <div class="featureImgDiv">
                        <img class="featureImg" src="assets/images/icon/brack.png" alt="Brake">
                    </div>
                    <p class="featureText">BRAKE</p>
                </button>
            </div>

            <div class="col-md-6 col-12 featureDiv p-0 block">
                <button class="featureBtn">
                    <div class="featureImgDiv">
                        <img class="featureImg" src="assets/images/icon/fuel.png" alt="Fuel">
                    </div>
                    <p class="featureText">FUEL</p>
                </button>

                <button class="featureBtn">
                    <div class="featureImgDiv">
                        <img class="featureImg" src="assets/images/icon/speaker.png" alt="Audio">
                    </div>
                    <p class="featureText">COMMUNICATION & AUDIO</p>
                </button>

                <button class="featureBtn">
                    <div class="featureImgDiv">
                        <img class="featureImg" src="assets/images/icon/steering-wheel.png" alt="Steering">
                    </div>
                    <p class="featureText">STEERING & HANDLING</p>
                </button>

                <button class="featureBtn">
                    <div class="featureImgDiv">
                        <img class="featureImg" src="assets/images/icon/transmission.png" alt="Transmission">
                    </div>
                    <p class="featureText">TRANSMISSION</p>
                </button>

                <button class="featureBtn">
                    <div class="featureImgDiv">
                        <img class="featureImg" src="assets/images/icon/wheel.png" alt="Wheel">
                    </div>
                    <p class="featureText">WHEEL & TYRES</p>
                </button>
            </div>
        </div>

        <!-- DESCRIPTION SECTION -->
        <div class="row loremRow textAni">
            <div id="lorem1Id" class="div lorem1Class">
                <p class="loremText">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae temporibus, recusandae dolorem
                    quisquam reprehenderit assumenda atque quod suscipit repellat fuga eligendi asperiores voluptas quis
                    magnam explicabo, corporis veritatis enim nihil voluptates nobis eius exercitationem amet. Soluta
                    est voluptatibus harum, ab, mollitia architecto, laboriosam assumenda quasi rem tempore rerum iste
                    saepe sapiente deserunt ullam incidunt porro nisi quae voluptates libero officiis accusamus eligendi
                    reiciendis? Odit, hic. Expedita sit reiciendis aliquam mollitia ut nemo, neque porro amet cupiditate
                    sapiente deleniti enim voluptate. Tempore tempora recusandae error rem ut ullam iusto vitae unde
                    molestiae aperiam! Ipsum eos officia explicabo laudantium, placeat minima quam?
                </p>
            </div>

            <div id="lorem2Id" class="div lorem2Class displayNone">
                <p class="loremText">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit provident adipisci possimus eveniet!
                    Obcaecati, necessitatibus vitae fuga sequi iusto modi suscipit et provident debitis!
                </p>
            </div>

            <div id="lorem3Id" class="div lorem3Class displayNone">
                <p class="loremText">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam odio vel ab laborum quibusdam
                    corporis repudiandae pariatur laudantium dolores voluptatem.
                </p>
            </div>
        </div>
    </div>


    <!-- Car Selection Section -->
    <section class="container my-5">
        <h2 class="text-center mb-4">Explore More Cars</h2>
        <div class="row justify-content-center">
          <div class="col-md-3 mb-3">
            <button onclick="location.href='lamborghini.html'" class="car-btn w-100">
              Lamborghini Aventador
            </button>
          </div>
          <div class="col-md-3 mb-3">
            <button onclick="location.href='bugatti.html'" class="car-btn w-100">
              Bugatti Chiron
            </button>
          </div>
          <div class="col-md-3 mb-3">
            <button onclick="location.href='mclaren.html'" class="car-btn w-100">
              McLaren P1
            </button>
          </div>
        </div>
      </section>
      
    

    <!-- MAP -->

    <div class="container-fluid">
        <div class="row m-0">
            <div class="col-md-6 map-section p-0">
                <a href="
                https://maps.app.goo.gl/wrRQYrAqwEeS1pu59

                ">
                <img src="assets/images/map3.png" alt="Map Image">
            </a>
            </div>
            <div class="col-md-3 info-section d-flex align-items-center justify-content-center">
                <div>
                    <h5>SELLER INFO</h5>
                    <p>Southampton Trade Ltd.</p>
                    <p>7 Bursledon Rd, Hedge End, Southampton</p>
                    <p>+44 1962 841534</p>
                </div>
            </div>
            <div class="col-md-3 price-section d-flex flex-column justify-content-center align-items-center">
                <h3>£1,200,000</h3>
                <a href="mailto:kartik030902@gmail.com">
                <button class="btn btn-dark mt-3">Email Seller</button>
            </a>
            </div>
        </div>
        <div class="row m-0">
            <div class="col-md-3 seller-garage d-flex flex-column justify-content-center align-items-center">
                <h5>CARS IN SELLER'S GARAGE</h5>
                <p>8 Cars</p>
            </div>
            <div class="col-md-4 car-card ferrari-f12"></div>
            <div class="col-md-5 car-card ferrari-gtc4"></div>
        </div>
    </div>

    <!-- Spartan Horse Section -->
<div class="spartan-section">
    <div class="spartan-links">
        <a href="#">HYPERCARS</a>
        <a href="#">SUPERCARS</a>
        <a href="#">CLASSIC CARS</a>
        <a href="#">LUXURY CARS</a>
    </div>
    <div class="spartan-logo">SPARTAN <br> HORSE</div>
    <div class="icon-container">
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-twitter"></i>
    </div>
</div>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-item">© 2025 Spartan Horse</div>
            <div class="footer-item">Privacy Policy</div>
            <div class="footer-item">Contact: info@spartanhorse.com</div>
        </div>
    </footer>
 <!-- Bootstrap JS and Popper.js -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>



      
</body>

<!-- java -->
<script src="java.js"> </script>
  <!-- Bootstrap 5 JS & Popper.js for Modal -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

  <script>
function submitSignupForm() {
    const username = document.getElementById("username").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;

    if (password !== confirmPassword) {
        alert("Passwords do not match!");
        return;
    }

    fetch("signup.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            username: username,
            email: email,
            password: password
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === "success") {
            alert("Signup successful!");
            document.getElementById("signupForm").reset();
            var signupModal = bootstrap.Modal.getInstance(document.getElementById('signupModal'));
            signupModal.hide();
        } else {
            alert("Signup failed: " + data.message);
        }
    })
    .catch(error => {
        console.error("Error:", error);
    });
}
</script>



<!-- Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</html>