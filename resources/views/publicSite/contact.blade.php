<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Code Bunker | Contact Us</title>
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/all.min.css" />
    <link rel="stylesheet" href="../css/contact.css" />
  </head>
  <body>
    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <!--NavBar-->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container border-bottom border-warning border-1">
        <img
          class="navbar-brand"
          src="../imgs/logoH.svg"
          width="100"
          alt="logo"
        />
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
          <ul class="navbar-nav">
           <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('show_categories') }}">
                Categories
              </a>
            </li>
             </ul>
            <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/">
                Home
              </a>
            </li>
            <li class="nav-item home-btn-login">
              <a class="nav-link loginBtn" href="signup.html">Log in</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container contact">
      <div class="row">
        <div class="col-md-3">
          <div class="contact-info d-flex flex-column align-items-center">
            <img
              src="https://image.ibb.co/kUASdV/contact-image.png"
              width="70px"
              alt="image"
            />
            <h2 class="mb-5">Contact Us</h2>
            <h4 class="text-center">We would love to hear from you !</h4>
          </div>
        </div>
        <div class="col-md-9">
          <div class="contact-form">
            <div class="form-group">
              <label class="control-label col-sm-2" for="fname">
                First Name:
              </label>
              <div class="col-sm-10">
                <input
                  type="text"
                  class="form-control"
                  id="fname"
                  placeholder="Enter First Name"
                  name="fname"
                />
                <div class="nameReq text-danger"></div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="lname">
                Last Name:
              </label>
              <div class="col-sm-10">
                <input
                  type="text"
                  class="form-control"
                  id="lname"
                  placeholder="Enter Last Name"
                  name="lname"
                />
                <div class="lnameReq text-danger"></div>
              </div>
            </div>
            <div class="form-group">
              <label id="Email" class="control-label col-sm-2" for="email">
                Email:
              </label>
              <div class="col-sm-10">
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="Enter email"
                  name="email"
                />
                <div class="emailReq text-danger"></div>
              </div>
            </div>
            <div class="form-group">
              <label id="Comment" class="control-label col-sm-2" for="comment">
                Comment:
              </label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="5" id="comment"></textarea>
                <div class="commentReq text-danger"></div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="sub-button btn btn-default">
                  Submit
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

 <footer>
      <div class="container">
        <div class="logo">
          <img src="../imgs/logoH.png" width="70px" alt="" />
        </div>
        <div class="social-icon">
          <a
            href="mailto:hazem.alrfati@gmail.com"
            rel="noopener"
            target="_blank"
            class="icon"
          >
            <i class="fas fa-envelope"></i>
          </a>
          <a href="https://Youtube.com" target="_blank" class="icon">
            <i class="fab fa-youtube"></i>
          </a>
          <a href="https://www.apple.com/store" target="_blank" class="icon">
            <i class="fab fa-app-store"></i>
          </a>
        </div>
      </div>
    </footer>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/contact.js"></script>
  </body>
</html>