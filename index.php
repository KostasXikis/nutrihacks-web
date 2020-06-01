<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>NutriHacks | Home</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="./img/profile.png">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/6218de5707.js" crossorigin="anonymous"></script>
</head>

<body id="page-top">

<!-- Navigation (with navbar toggler for mobile phones)  -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
  <!-- Bootstrap flex container: 2 flex items -->
  <div class="container">
    <!-- 1st flex item: Logo -->
    <a class="navbar-brand d-flex d-sm-block" href="index.php">
      <img id="logo" src="img/cover-crop.png" alt="">
    </a>
    <!-- Navbar toggler that appears only for small screens -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- 2nd flex item: Nav Links -->
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="./views/bmi.html"><strong>BMI</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./views/our-team.html"><strong>Our Team</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./views/faqs.html"><strong>FAQs</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./views/blog.html"><strong>Blog</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./views/contact.html"><strong>Contact</strong></a>
        </li>
        <li class="nav-item align-self-center">
          <form class="form-inline">
            <button type="button" class="btn btn-light color-green" data-toggle="modal" data-target="#modalRegisterForm">Register</button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Register Bootstrap Modal -->
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- Bootstrap Modal Header -->
      <div class="modal-header">
          <h4 class="mt-3 text-center">Sign Up</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <!-- Bootstrap Modal Body - Register Form -->
      <div class="modal-body">
        <form id="registerForm">
          <!-- Name form group -->
          <div class="form-group">
            <label class="font-weight-bold" for="name">Name</label>
            <div class="input-group pb-modalreglog-input-group">
                <input type="text" class="form-control" name="name" id="inputName" placeholder="Your Name">
            </div>
          </div>
          <!-- Username form group -->
          <div class="form-group">
            <label class="font-weight-bold" for="username">Username</label>
            <div class="input-group pb-modalreglog-input-group">
                <input type="text" class="form-control" name="username" id="inputUsername" placeholder="Username">
            </div>
          </div>
          <!-- Email form group -->
          <div class="form-group">
            <label class="font-weight-bold" for="email">Email address</label>
            <div class="input-group pb-modalreglog-input-group">
                <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
            </div>
          </div>
          <!-- Password form group -->
          <div class="form-group">
            <label class="font-weight-bold" for="password">Password</label>
            <div class="input-group pb-modalreglog-input-group">
                <input type="password" class="form-control" name="password" id="inputPws" placeholder="Password">
            </div>
          </div>
          <!-- Terms & Conditions form group -->
          <div class="form-group d-flex align-items-center mb-2 ">
            <input class="mr-2" type="checkbox" id="ch" name="chs">
            <span>
              I agree with <a href="#"> terms and conditions.</a>
            </span>
          </div>
        </div>
        <!-- Bootstrap Modal Footer -->
        <div class="modal-footer justify-content-center">
          <button type="submit" class="btn color-green">Sign up</button>
        </div>
      </form>
    </div>
  </div>
</div>
  
<!-- Section: Who We Are Carousel -->
<header id="whoweare" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#whoweare" data-slide-to="0" class="active"></li>
    <li data-target="#whoweare" data-slide-to="1"></li>
    <li data-target="#whoweare" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-fluid d-block w-100" src="img/nutri1.webp" alt="Los Angeles">
      <div class="carousel-caption">
        <h3>Fitness starts with what you eat</h3>
        <p class="display-4">🍴 We give you the diet you need 🥗</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class=" img-fluid d-block w-100 " src="img/nutri3.jpg" alt="New York">
      <div class="carousel-caption">
        <h3 class="display-4">Track your BMI with our app</h3>
        <!-- note: .color green is a custom class -->
        <a class="btn btn-light btn-lg color-green" href="./views/bmi.html">Calculate your BMI</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="img-fluid d-block w-100" src="img/nutri2.webp" alt="Chicago">
      <div class="carousel-caption">
        <h3>Nutrition Diets</h3>
        <p class="display-4">The key for a healthy diet</p>
        <a class="btn btn-light btn-lg color-green" href="./views/blog.html">Visit our blog</a>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#whoweare" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#whoweare" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</header>

<!-- Section: About Us -->
<section id="about">
  <!-- Bootstrap container fluid for full width -->
  <div class="container-fluid py-3">
    <!-- About Us Text: Flex container: 1 flex item -->
    <div class="row text-center">
      <!-- Flex item with auto width  -->
      <div class="col">
        <h2>About Us</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, odio suscipit similique magnam perferendis sunt. Laborum tenetur deleniti libero sequi.</p>
      </div>
    </div>
    <hr>
    <!-- Responsive Video: Flex container: 2 flex items -->
    <!-- For medium screens an up -> align the 2 flex items horizontaly-->
    <!-- For small screens -> align the 2 flex items vertically -->
    <div class="row text-center justify-content-center">
      <!-- 1st Flex item: Video -->
      <div class="col-md-6  px-6 mb-3">
        <h3>Take Control of Your Body</h3>
        <div class="container video">
          <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Gmh_xMMJ2Pw"></iframe>
          </div>    
        </div>
      </div>
      <!-- 2nd Flex item: Text & Call To Action -->
      <div class="col-md-6 px-6 mb-3 d-flex flex-column">
        <h3 class="text-center">Some Health Tips From Our Team</h3>
        <ul class="align-items-flex-start text-left">
          <li>Get active each day</li>
          <li>Choose water as a drink</li>
          <li>Eat more fruit and vegetables</li>
          <li>Turn Off the TV or Computer and Get Active</li>
        </ul>
        <p class="text-left px-4">
          ↪ For good health, we need more than 40 different nutrients, and no single food can supply them all. It is not about a single meal, it is about a balanced food choice over time that will make a difference!
        </p>
        <p class="text-left px-4">
          ↪ About half the calories in our diet should come from foods rich in carbohydrates, such as cereals, rice, pasta, potatoes, and bread. It is a good idea to include at least one of these at every meal. Wholegrain foods, like wholegrain bread, pasta, and cereals, will increase our fibre intake.
        </p>
        <!-- Meet the team button: button primary -->
        <a class="btn btn-primary btn-lg align-self-center shadow" href="views/our-team.html">Meet The Team</a>
      </div>
    </div>
  </div>
</section>

<!-- Section: Testimonials -->
<section class="container-fluid py-4" id="testimonials">
  <!-- Flex container to align just the h2 to the center -->
  <div class="row text-center justify-content-center text-light mb-3">
    <h2>Our Clients Said</h2>
  </div>
  <hr>
  <!-- Flex container with 1 flex item -->
  <div class="row text-light">
    <!-- The flex item: align all testimonial content to the center -->
    <div class="col-md-8 col-center m-auto">
      <div id="testimoCarousel" class="carousel slide" data-ride="carousel">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#testimoCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#testimoCarousel" data-slide-to="1"></li>
					<li data-target="#testimoCarousel" data-slide-to="2"></li>
				</ol>   
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
          <!-- Client 1 -->
					<div class="item carousel-item active">
						<div class="img-box text-center mb-3"><img src="./img/user.png" style="width: 100px;" alt=""></div>
						<p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
						<p class="overview"><b>Paula Wilson</b>, Yoga Instructor</p>
          </div>
          <!-- Client 2 -->
					<div class="item carousel-item">
						<div class="img-box text-center mb-3"><img src="./img/user.png" style="width: 100px;" alt=""></div>
						<p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
						<p class="overview"><b>Antonio Moreno</b>, Gym Instructor</p>
          </div>
          <!-- Client 3 -->
					<div class="item carousel-item">
						<div class="img-box text-center mb-3"><img src="./img/user.png" style="width: 100px;" alt=""></div>
						<p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
						<p class="overview"><b>Michael Holz</b>, Entrepreneur</p>
					</div>
				</div>
				<!-- Carousel controls -->
        <a class="carousel-control left carousel-control-prev" href="#testimoCarousel" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="carousel-control right carousel-control-next" href="#testimoCarousel" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
    </div>	
  </div>
</section>

<!-- Section: Contact Us -->
<div class="container-fluid py-4 bg-light" id="contact">
  <!-- Flex container to align just the h2 to the center -->
  <div class="row text-center justify-content-center text-light mb-3">
    <h2 class="text-dark">Contact Us</h2>
  </div>
  <hr>
  <!-- Maps & Info -->
  <!-- Flex container with 2 flex items -->
  <!-- For large screens align flex items horizontally -->
  <!-- For small screens align flex items vertically -->
  <div class="row justify-content-center px-5" id="info">
    <!-- 1st Flex item: Map -->
    <div class="col-lg m-2">
      <img src="./img/map.png" alt="" class="img img-fluid shadow-lg w-80 ">
    </div>
    <!-- 2nd Flex item: Contact Info -->
    <div class="col-lg d-flex flex-column justify-content-center text-center text-dark">
      <h4 class="p-2 mt-0">Contact Info <i class="fas fa-address-card"></i></h4>
      <p> <i class="fas fa-home"></i> NutriHacks Diet Center, Greece</p>
      <p> <i class="fas fa-phone"></i> Tel: +30-123456-78-9</p>
      <p> <i class="fas fa-envelope"></i> nutrihacks@info.com</p>
    </div>
  </div>
  <hr>
  <!-- Contact Button -->
  <div class="row justify-content-center mt-4">
    <!-- Button to toggle contact Modal -->
    <a class="btn btn-lg color-green shadow" data-toggle="modal" data-target="#contactmodal">  
      Contact Us
    </a>

    <!-- Bootstrap contact form Modal -->
    <div class="modal fade" id="contactmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Feel Free to Contact Us</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- Modal Body -->
          <div class="modal-body">
            <div class="form-group">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                </div>
                <input type="text" class="form-control" name="name" placeholder="First Name" required>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                </div>
                <input type="email" class="form-control" name="email" placeholder="you@example.com" required>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-comment"></i></div>
                </div>
                <textarea class="form-control" placeholder="Write your message here..." required></textarea>
              </div>
            </div>
            <!-- Submit -->
            <div class="text-center">
                <!-- Bootstrap primary button but with changed color -->
                <input type="submit" value="Submit" class="btn btn-primary btn-block rounded-0 py-2">
            </div>
          </div>
          <!-- Modal Footer -->
          <div class="modal-footer">
            <!-- Bootstrap secondary button -->
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <!-- Bootstrap primary button but with changed color -->
            <button type="button" class="btn btn-primary" id="save">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; NutriHacks 2020 | Kostas Chikimtzis@e16162</p>
  </div>
</footer>

<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Bootstrap core JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>

</body>

</html>
