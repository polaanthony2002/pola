
<style>
    /* Header Styling */
    #header {
        position: fixed;
        top: 0;
        left: 0;
        width: 270px;
        height: 100vh;
        background-color: #1c023d;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        padding: 10px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: space-between;
        z-index: 1000;
    }

    #header .logo {
        font-size: 1.5rem;
        font-weight: bold;
        color: white;
        margin-bottom: 20px;
        width: 80%;
    }

    #navbar {
        width: 100%;
    }

    #navbar ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    #navbar ul li {
        width: 100%;
    }

    #navbar ul li a {
        color: white;
        text-decoration: none;
        font-size: 1rem;
        padding: 10px;
        display: block;
        width: 100%;
        transition: background-color 0.3s;
        border-radius: 10px;
    }

    #navbar ul li a:hover {
        background-color: #9c4a56;
    }

    .bell-icon {
        font-size: 1.2rem;
    }

    .mobile-nav-toggle {
        display: none; /* Hidden for this layout */
    }

    /* Content Adjustment for Sidebar */
    body {
        margin-left: 320px; /* Adjust content position */
    }

    @media (max-width: 768px) {
        #header {
            width: 250px;
        }

        body {
            margin-left: 270px;
        }

        #navbar ul li a {
            font-size: 0.9rem;
        }
    }
</style>

<header id="header">
    <div class="container d-flex flex-column align-items-start">
        <!-- Logo Section -->
        <h1 class="logo"><a href="index.html">Butondo ward</a></h1>

        <!-- Navigation -->
        <nav id="navbar" class="navbar">
            <ul>
                <?php
                // Start the session
                session_start();

                if (isset($_SESSION['username'])) {
                    // If logged in, show navigation links
                    echo '<li><a class="nav-link" href="dashboard.php">Dashboard</a></li>';
                    echo '<li><a class="nav-link" href="home.php">Meetings</a></li>';
                    echo '<li><a class="nav-link" href="suggestion.php">Suggestion Box</a></li>';
                    echo '<li><a class="nav-link" href="testing12.php">🔔</a></li>';
                    echo '<li><a class="nav-link" href="logout.php">Logout</a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>
</header>
