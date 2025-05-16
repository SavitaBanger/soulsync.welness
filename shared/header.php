<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title></title> -->
  <link rel="stylesheet" href="src/style/main.min.css">
  <link rel="stylesheet" href="src/style/bootstrap.min.css">
  <link rel="stylesheet" href="src/style/owl.carousel.min.css">
  <link rel="stylesheet" href="src/style/owl.theme.default.min.css">
   <link href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css" rel="stylesheet" />
</head>

<body>

  <!-- Start Header Section -->
  <header class="main-header shadow-sm py-2">
    <nav class="navbar navbar-expand-md navbar-light bg-white">
      <div class="container">

        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="src/img/common/logo.png" alt="Logo" height="40" class="me-2">
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
          aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible Menu -->
        <div class="collapse navbar-collapse justify-content-between" id="navbarContent">
          <!-- Nav Links -->
          <ul class="navbar-nav mx-auto text-uppercase fw-light small">
            <li class="nav-item"><a class="nav-link text-blue" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link text-blue" href="about.php">About</a></li>
            <!-- <li class="nav-item"><a class="nav-link text-blue" href="#">Services</a></li> -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-blue" href="service.php" id="servicesDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu custom-dropdown shadow-sm border-0 mt-2" aria-labelledby="servicesDropdown">
                <li><a class="dropdown-item py-2 px-4" href="#">Knee Pain</a></li>
                <li><a class="dropdown-item py-2 px-4" href="#">Neck Pain</a></li>
                <li><a class="dropdown-item py-2 px-4" href="#">Back Pain</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link text-blue" href="contact.php">Contact</a></li>
          </ul>

          <!-- Login Button -->
          <!-- <button type="button" class="rounded-pill ms-md-3 mt-3 mt-md-0 bg-blue text-white px-3 py-2 align-items-center" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button> -->
          <div class="buttons mt-0">
            <a href="javascriptvoid:(0);" class="btn-blue" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
          </div>
        </div>

      </div>
    </nav>
  </header>
  <!-- End Header Section -->
