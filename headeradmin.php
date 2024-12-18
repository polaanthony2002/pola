
<header style="background-color: #802f3b; border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;" id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

       
    <h1 style=" color: white; width: 30%;" class="logo"><a href="index.html">Butondo ward</a></h1>
        <nav id="navbar" class="navbar">
            <ul>


           
                 <?php
               
                session_start();

                
                if (isset($_SESSION['username'])) {
                    // If logged in, show logout link
                    echo '<li><a class="nav-link" href="admindashboard.php">dashboard</a></li>';
                   echo '<li><a class="nav-link scrollto" href="admeetings.php">Polls//MEETINGS</a></li>' ;
                    echo '<li><a class="nav-link" href="manageuser.php">Manage_Users acc</a></li>';
                    echo '<li><a class="nav-link" href="admin.php"> <span class="bell-icon">🔔</span></a></li>';
                    echo '<li><a class="nav-link" href="logout.php">Logout</a></li>';
                }
                ?>
            </ul>
            <i style="color: white;" class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
