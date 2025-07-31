<?php
include 'includes/header.php';
?>

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
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="projects.html">Our Projects</a>
        </li>
        <li class="nav-item dropdown d-flex">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            Auth
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="login.html">Login</a></li>
            <li>
              <a class="dropdown-item" href="register.html">Register</a>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>
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
<div class="banner">Kenje Enterprises Limited</div>

<!-- III: Main container -->
<div class="main">
  <!-- IV: Content -->
  <div class="content">
    <h2>Our Services</h2>
    <div class="row">
      <div class="col-lg-4 col-sm-12">
        <img class="img-fluid" src="images/co.jpg" alt="" />
      </div>
      <div class="col-lg-8 col-sm-12">
        <table class="table table-striped table-hover table-bordered">
          <thead class="table-primary">
            <tr>
              <th scope="col">Service / Goods</th>
              <th scope="col">Description</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <td>Construction & Site Management</td>
              <td>
                We coordinate and supervise all construction workers,
                selecting the best tools and materials, make safety
                inspections and ensure construction and site safety. We
                check and prepare site reports, designs and drawings all
                while maintaining quality control procedures.
              </td>
            </tr>
            <tr>
              <td>Road & Civil Works</td>
              <td>
                We prode a wide range of groundworks and civil engineering
                services that have earned us a reputation for quality works
                and the ability consistently complete projects on schedule
                and within budget.
              </td>
            </tr>
            <tr>
              <td>Building & Structural Works</td>
              <td>
                We provide complete buildings and construction solutions. We
                also provide building maintenance and facility management
                solutions.
              </td>
            </tr>
            <tr>
              <td>Construction of Water Dams</td>
              <td>
                We set up water reservoirs for storage needs like water
                tanks constructed out of bricks or stones.
              </td>
            </tr>
            <tr>
              <td>Borehole Drilling & Equipping</td>
              <td>
                Our modern drilling equipment is capable of drilling in
                diverse geological formations.
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- V: Sidebar -->
  <div class="sidebar">
    <h3>Our Values</h3>
    <p>
      <li>Quality</li>
      <li>Safety</li>
      <li>Integrity</li>
      <li>Innovation</li>
      <li>Customer Satisfaction</li>
      <li>Sustainability</li>
      <li>Professionalism</li>
    </p>
  </div>
</div>


<?php
include 'includes/footer.php';
?>