    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-2">
        <div class="container-fluid">
<!--            <div class="navbar-header">-->
            <a class="navbar-brand" href="index.php"><img src="./img/Surdo-Logo2-3.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <ul class="navbar-nav">
                  <li><a class="nav-item nav-link <?php echo $currentHome; ?>" href="index.php">Home</a></li>
                  <li><a class="nav-item nav-link <?php echo $currentAbout; ?>" href="about.php">About Us</a></li>
                  <li class="nav-item dropdown <?php echo $currentServices; ?>">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item <?php echo $currentServices; ?>" href="services.php">Services Overview</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Web Design</a>
                      <a class="dropdown-item" href="#">App Development</a>
                    </div>
                  </li>
                  <li><a class="nav-item nav-link <?php echo $currentProjects; ?>" href="projects.php">Projects</a></li>
                  <li><a class="nav-item nav-link <?php echo $currentContact; ?>" href="contact.php">Contact Us</a></li>
              </ul>
            </div>
<!--            </div>-->
        </div>
    </nav>
  </header>