

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- font-awesome.min.css CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- style.css CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <title>Hacker | Drag</title>
  </head>

  <body>
    <header class="header-section">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img src="img/hd.png" alt="">
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Services
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#category">Medicine</a>
                <a class="dropdown-item" href="#non-category">Non Medicine</a>
                <!-- <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a> -->
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">How to Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="search.php">Contract Us</a>
            </li>
            <li class="nav-item">
              <a class="fa fa-cart-plus" href="cart.php"></a>
            </li>
            <li class="nav-item">
              <a class="btn btn-info" href="login.php">Log In</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- Slider Section -->
    <section class="slider">
      <div
      id="carouselExampleCaptions"
      class="carousel slide"
      data-ride="carousel"
    >
      <ol class="carousel-indicators">
        <li
          data-target="#carouselExampleCaptions"
          data-slide-to="0"
          class="active"
        ></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/cover.png" class="d-block w-100" alt="..." />
          <!-- <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>
              Nulla vitae elit libero, a pharetra augue mollis interdum.
            </p>
          </div> -->
        </div>
        <div class="carousel-item">
          <img src="img/m2.png" class="d-block w-100" alt="..." />
          <!-- <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div> -->
        </div>
        <div class="carousel-item">
          <img src="img/m3.jpeg" class="d-block w-100" alt="..." />
          <!-- <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>
              Praesent commodo cursus magna, vel scelerisque nisl
              consectetur.
            </p>
          </div> -->
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#carouselExampleCaptions"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleCaptions"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </section>

    <!-- Slider Section End -->

    <!-- Search Bar  -->
    <section class="search-bar">
      <div class="headline">
        <h2>Search Your Medichine</h2>
        <hr />
      </div>
      <div class="container">
        <div class="search">
          <form class="form-inline my-2 my-lg-0">
            <input
              class="form-control mr-sm-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </section>

    <!-- Search Bar End  -->

    <!-- Medicine Category -->
    <section class="category" id="category">
      <div class="headline">
        <h2>Medicine Category</h2>
        <hr />
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <button class="btn-1"><a href="drops.php">Drops</a></button>
          </div>
          <div class="col-md-3">
            <button class="btn-2"><a href="injection.php">injection</a></button>
          </div>
          <div class="col-md-3">
            <button class="btn-3"><a href="medicine.php">Medicine</a></button>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <button class="btn-4"><a href="#">Ointment</a></button>
          </div>
          <div class="col-md-3">
            <button class="btn-5"><a href="#">Lotion</a></button>
          </div>
          <div class="col-md-3">
            <button class="btn-6"><a href="#">Infusion</a></button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <button class="btn-7"><a href="#">Solution</a></button>
          </div>
          <div class="col-md-3">
            <button class="btn-8"><a href="#">Suspension</a></button>
          </div>
          <div class="col-md-3">
            <button class="btn-9"><a href="#">Others</a></button>
          </div>
        </div>
      </div>
    </section>
    <!-- Medicine Category  End-->

    <!-- Non Medicine Category -->
    <section class="n-category" id="non-category">
      <div class="headline">
        <h2>Non Medicine Category</h2>
        <hr />
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <button class="btn-10"><a href="#">Diaper</a></button>
          </div>
          <div class="col-md-3">
            <button class="btn-11"><a href="#">Skin Care</a></button>
          </div>
          <div class="col-md-3">
            <button class="btn-12"><a href="#">Baby Care</a></button>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <button class="btn-13"><a href="#">Oxygen</a></button>
          </div>
          <div class="col-md-3">
            <button class="btn-14"><a href="#">Diabetic Care</a></button>
          </div>
          <div class="col-md-3">
            <button class="btn-15"><a href="#">Nebulizer</a></button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <button class="btn-16"><a href="#">Physiotherapy</a></button>
          </div>
          <div class="col-md-3">
            <button class="btn-17"><a href="#">Weight Mechine</a></button>
          </div>
          <div class="col-md-3">
            <button class="btn-18"><a href="#">Pain Reliever</a></button>
          </div>
        </div>
      </div>
    </section>
    <!-- Non Medicine Category  End-->

    <!--Footer section start  -->
    <footer class="footer-section">
      <div class="top-widegt">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <div class="inner-widget">
                <h4>Contract Info</h4>
                <ul class="c-info">
                  <li >
                    <p>102/1, Shukrabad</p>
                  </li>
                  <li >
                    <p>Mirpur Road, Dhaka-1207</p>
                  </li>
                  <li >
                    <a href="#">hacker-drug@gmail.com</a>
                  </li>
                  <li ><p>0170000000</p>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="inner-widget">
                <h4>Important Links</h4>
                <ul class="i-links">
                  <li>
                    <a href="cart.php">Cart</a>
                  </li>
                  <li >
                    <a href="login.php">My Account</a>
                  </li>
                  <li >
                    <a href="#">Check Out</a>
                  </li>
                  <li ><a href="">Post Submission</a></li>
                </ul>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="inner-widget">
                <h4>Find First</h4>
                <ul class="f-first">
                  <li >
                    <a href="">Baby Care</a>
                  </li>
                  <li >
                    <a href="">Health Condition</a>
                  </li>
                  <li >
                    <a href="#">Personal Care</a>
                  </li>
                  <li>
                    <a href="">Diabetic Care</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="inner-widget">
                <h4>Check Out</h4>
                <ul class="c-out">
                  <li >
                    <a href="aboutus.php">About</a>
                  </li>
                  <li >
                    <a href="">Blog</a>
                  </li>
                  <li >
                    <a href="#">FAQ</a>
                  </li>
                  <li >
                    <a href="privacy.php">Privacy Policy</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="bottom-widegt">
        <div class="container">
          <p>Copyright &#169; 2021 All Rights are Reserved by <b>HACKER ENGINEERS</b> </p>
        </div>
      </div>
    </footer>
    <!--Footer section end -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
