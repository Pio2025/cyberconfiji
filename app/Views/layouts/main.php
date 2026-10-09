<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cyber Security Convention</title>
<meta name="description" content="Digital Fiji Forum 2026 brings together Pacific business, technology and policy leaders for two days of ideas, deals and direction.">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Bootstrap 5.3 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<!-- Site stylesheet -->
<link rel="icon" type="image/png" href="assets/img/favicon.png">
<link href="css/style.css" rel="stylesheet">
</head>
<body>

<!-- =========================================================
     Navbar — logo left, nav links right, sticky/transparent-to-solid
     ========================================================= -->
<nav class="navbar navbar-expand-lg main-navbar" id="mainNavbar">
  <div class="container">
    <a class="navbar-brand navbar-brand-wrap" href="index.html">
      <img src="assets/img/logo-white.png" alt="Digital Fiji Forum" class="brand-logo">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavContent" aria-controls="mainNavContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="bi bi-list fs-2"></i>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="mainNavContent">
      <ul class="navbar-nav align-items-lg-center">
        <li class="nav-item"><a class="nav-link <?php if($page == 'home'){echo 'active';} ?>" data-section="home" href="<?php echo base_url(); ?>">Home</a></li>
        <!--li class="nav-item"><a class="nav-link" data-section="about" href="about.html">About</a></li-->
        <li class="nav-item"><a class="nav-link <?php if($page == 'schedule'){echo 'active';} ?>" data-section="schedule" href="<?php echo base_url('schedule'); ?>">Schedules</a></li>
        <!--li class="nav-item"><a class="nav-link" data-section="speakers" href="speakers.html">Speakers</a></li-->
        <li class="nav-item"><a class="nav-link <?php if($page == 'contact'){echo 'active';} ?>" href="<?php echo base_url('contact'); ?>">Contact Us</a></li>
        <!--li class="nav-item"><a class="nav-link" href="resources.html">Event Resources</a></li-->
      </ul>
    </div>
  </div>
</nav>

<main>

    <!-- Begin: Load View -->

					

    <?php 

        if(isset($_view) && $_view){

            echo view($_view);

        }

    ?> 

    <!-- End: Load View -->

</main>

<!-- =========================================================
     Footer
     ========================================================= -->
<footer class="site-footer">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4 footer-brand">
        <div class="navbar-brand-wrap mb-3">
          <img src="assets/img/logo-white.png" alt="Digital Fiji Forum" class="brand-logo brand-logo--footer">
        </div>
        <p>A national convening for government, industry, academia and civil society to strengthen Fiji's cybersecurity and build a resilient digital environment.</p>
        <div class="social-row">
          <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
          <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
        </div>
      </div>

      <div class="col-6 col-lg-2">
        <h6>Navigate</h6>
        <a href="<?php echo base_url(); ?>">Home</a>
        <a href="<?php echo base_url('schedule'); ?>">Schedules</a>
      </div>

      <div class="col-6 col-lg-2">
        <h6>Attend</h6>
        <a href="<?php echo base_url('contact'); ?>">Contact Us</a>
      </div>

      <div class="col-lg-4">
        <h6>Venue</h6>
        <a href="#" class="mb-1">Grand Pacific Hotel</a>
        <a href="#" class="mb-1">Victoria Parade, Suva, Fiji</a>
        <a href="mailto:info@cyberconfiji.com">info@cyberconfiji.com</a>
        <!--a href="tel:+6796701234">+679 670 1234</a-->
      </div>
    </div>

    <div class="footer-bottom d-flex flex-column flex-md-row justify-content-between">
      <span>&copy; <span class="js-year">2026</span> Ministry of Policing and Communications.</span>
      <span>Suva, Fiji</span>
    </div>
  </div>
</footer>

<!-- Bootstrap JS bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
