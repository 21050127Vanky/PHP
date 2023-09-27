<?php
session_start();

include("php/connect.php");
include("php/conn.php");
if (!isset($_SESSION['valid'])) {
  header("Location: login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Document Manager: The Docu_Mate</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <?php
  $id = $_SESSION['id'];
  $query = mysqli_query($con, "SELECT*FROM users WHERE Id=$id");

  while ($result = mysqli_fetch_assoc($query)) {
    $res_Uname = $result['Username'];
    $res_Email = $result['Email'];
    $res_id = $result['Id'];
    $res_code = $result['code'];
  }

  ?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="main.html">Docu_Mate</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="#home">Home</a></li>
          <li><a class="nav-link scrollto " href="#browse">Browse</a></li>
          <li><a class="nav-link scrollto" href="#add">Add</a></li>
          <li><a class="nav-link scrollto " href="#download">Download</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="login.php"><button class="btn btn-dark btn-lg btn-block" type="submit">logout</button></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->


  <section class="home" class="portfolio-details">
    <div class="hero hero-single route bg-image" style="background-image: url(assets/img/overlay-bg.jpg)" id="home">
      <div class="overlay-mf"></div>
      <div class="hero-content display-table">
        <div class="table-cell">
          <div class="container">
            <h2 class="hero-title mb-4">Document Manager <label for=""><?php echo $res_code; ?></label> </h2>
            <h2>Welcome,<?php echo $res_Uname; ?></h2>
            <h3> Let's explore your documents throughly.</h3>
          </div>
        </div>
      </div>
    </div>
  </section>






  <!-- Browse of files section -->
  <section class="portfolio-details" style="background-color: #215253;">
    <div class="container" id="browse">
      <div class="row">
        <center>
          <h1>Browse</h1>
        </center>
      </div>
      <br>
      This is the watch through or surf through the documents.
      <div class="row">
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img src="images/adhaar.jpg" class="card-img-top" alt="..." name="adhaarid"/>
            <div class="card-body">
              <h5 class="card-title">Adhaar crad</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">ID:</li>
            </ul>
            <div class="card-body">
              <a href="#adding" class="card-link">Replace</a>
              <a href="#" class="card-link">Delete</a>
            </div>
          </div>
        </div>  


        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pan crad</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">ID:</li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link">Replace</a>
              <a href="#" class="card-link">Delete</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Driving Licence</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">ID:</li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link">Replace</a>
              <a href="#" class="card-link">Delete</a>
            </div>
          </div>
        </div>

      </div>
    </div>
    <br><br><br>
  </section>






  <!-- Add the document section -->
  <section class="portfolio-details" style="background-color: #565522;">
    <div class="container" id="add">
      <div class="row">
        <center>
          <h1 id="adding">Add</h1>
        </center>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Adhaar Card</h5>
              <div class="row">
                <div class="rows">
                  <h1>Select A File</h1>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form action="" method="post">
                <div class="row">
                  <img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" />
                  <input type="file" class="form-control" id="inputGroupFile02"></input>
                </div>
                <div class="row">

                  Enter ID: <input type="text" name="adhaarid"></input>
                </div>
                <div class="row">
                  <button type="submit" name="submit1">Upload</button>
                  <button type="submit" name="exit">Cancel</button>
                </div>
              </form>
            </div>
          </div>
        </div>


        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Pan Card</h5>
              <div class="row">
                <div class="rows">
                  <h1>Select A File</h1>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form action="" method="post">
                <div class="row">
                  <img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" />
                  <input type="file" class="form-control" id="inputGroupFile02"></input>
                </div>
                <div class="row">

                  Enter ID: <input type="text" name="adhaarid"></input>
                </div>
                <div class="row">
                <button type="submit" name="submit2">Upload</button>
                  <button type="submit" name="exit">Cancel</button>
                </div>
              </form>
            </div>
          </div>
        </div>


        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Driving Licence</h5>
              <div class="row">
                <div class="rows">
                  <h1>Select A File</h1>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form action="" method="post">
                <div class="row">
                  <img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" />
                  <input type="file" class="form-control" id="inputGroupFile02"></input>
                </div>
                <div class="row">

                  Enter ID: <input type="text" name="adhaarid"></input>
                </div>
                <div class="row">
                <button type="submit" name="submit3">Upload</button>
                  <button type="submit" name="exit">Cancel</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br><br>
  </section>






  <!-- download section for documents -->
  <section class="portfolio-details" style="background-color: #715263;">
    <div class="container" id="download">
      <div class="row">
        <center>
          <h1>Download the docs</h1>
        </center>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img src="assets/img/post-1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button>
            </div>
          </div>
        </div>


        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img src="assets/img/post-2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Open modal for @fat</button>
            </div>
          </div>
        </div>


        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img src="assets/img/post-3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br><br>
  </section>


  <!-- About section -->
  <section id="about" class="portfolio-details" style="background-color: #105060;">
    <div class="container">
      <div class="row">
        <center>
          <h1>About</h1>
        </center>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <p style="font-size: 30px; color: aliceblue; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
            This is the about section of what does it do.
            This website usually stores your adhaar card, pan card and Driving licence with your user authentication.
            <br>
            <strong> Be aware of fraud and scam.</strong>
          </p>
        </div>
        <div class="col-md-6">
          <img src="assets/img/docs.png" alt="">
        </div>
      </div>
    </div>
    <br><br><br>
  </section>



  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <div class="credits">
              Designed by Ramesh Vankdoth,reference from Bootstrap Made.
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>