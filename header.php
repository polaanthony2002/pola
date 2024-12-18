
<header style="background-color: #1c023d; border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;" id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
     
    
   
    <a href="ADmin/index.php" class="logo text-uppercase text-white" style="font-weight: bold; font-size: 1.1rem; text-decoration: none; color: black;">
            WEB<span style="color: #f39c12;">//</span>ADMINISTRACTOR
        </a>

        <nav id="navbar" class="navbar">
            <ul>
            

                <li><a class="nav-link scrollto" href="index.php">Home</a></li>          
                <li><a class="nav-link scrollto" href="register.php">User<span style="color: #f39c12;">//</span>Registration</a></li>
                <li><a class="nav-link scrollto" href="index.php#about">About us</a></li>
                <li><a class="nav-link scrollto" href="community.php">CDF<span style="color: #f39c12;">//</span>PROJECTS</a></li>
                <li><a class="nav-link scrollto" href="map.php">Location</a></li>
              
                
                <?php
                // Start the session
                session_start();

                
                if (isset($_SESSION['username'])) {
                    // If logged in, show logout link
                    echo '<li><a class="nav-link" href="dashboard.php">dashboard</a></li>';
                    echo '<li><a class="nav-link" href="logout.php">Logout</a></li>';
                }
                ?>
            </ul>
            <i  style="color: white;" class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>









