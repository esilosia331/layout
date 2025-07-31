<?php
include 'includes/header.php';  
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Our Projects</title>

    <!-- link to my stylesheet -->
    <link href="css/style.css" rel="stylesheet" />

    <!-- link to bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Home</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/layout/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="projects.html">Our Projects</a>
            </li>
            <li class="nav-item dropdown d-flex">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Auth
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="login.html">Login</a></li>
                <li>
                  <a class="dropdown-item" href="register.html">Register</a>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="add_goods_services.html">
                    Add Goods and Services
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- II: Banner -->
    <div class="banner">
      Kenje Enterprises Limited
      <hr />
      <span>Our Projects</span>
    </div>

    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/layout/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Our Projects</li>
        </ol>
      </nav>

    <p>
      <li>
        Construction of Musasa-Muoroto Road in Lower Savannah Ward, Nairobi
        County
      </li>
      <li>Construction of Salaita I Water Pan in Tsavo West National Park</li>
      <li>Drilling and Equipping of Chemutia Borehole in Nandi</li>
      <li>Proposed Infratsructural Items Development in LEA, Manyani</li>
      <li>Construction of Webuye Market</li>
      <li>Grading and Gravelling of KeRRA Roads in Bomet County</li>
    </p>
  <?php
    include 'includes/footer.php';  
    ?>
