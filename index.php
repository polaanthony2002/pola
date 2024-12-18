<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Fix MyStreet</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

 
    <link href="assets/css/style.css" rel="stylesheet" />

    
</head>

<body>
    <?php
    include('header.php')
    ?>


   
      
 <br><br><br><br>
    <style>
        /* Basic Styling for Hero Section */
        #hero {
            position: relative;
            margin-top: 30px;
            height: 80%;
            width: 99%;
            border-radius: 120px;
            background-size: cover;
            background-position: center;
            overflow: hidden;
        }

        .container {
            position: relative;
            z-index: 2;
        }

        .overlay-content {
            background-color: rgba(28, 2, 61, 0.8);
            padding: 20px;
            border-radius: 80px;
            color: white;
            text-align: center;
        }

        .btn-get-started {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 15px 25px;
            border-radius: 30px;
            font-size: 1.2rem;
            margin-top: 20px;
            text-decoration: none;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .btn-get-started:hover {
            background-color: #0056b3;
            transform: scale(1.1);
        }

        /* Slideshow Styles */
        .slideshow-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 120px;
        }

        .slideshow-slide {
            display: none;
            width: 100%;
            height: 100%;
        }

        .slideshow-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 120px;
        }

        .active-slide {
            display: block;
        }

        /* Optional: Fade Animation */
        .fade {
            animation: fadeEffect 1.1s ease-in-out;
        }

        @keyframes fadeEffect {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>

    <section id="hero" class="d-flex align-items-center">
        <!-- Slideshow Container -->
        <div class="slideshow-container">
            <div class="slideshow-slide fade">
                <img src="pro images/children-2019.jpg" alt="Slide 1">
            </div>
            <div class="slideshow-slide fade">
                <img src="pro images/c.jpg" alt="Slide 2">
            </div>
            <div class="slideshow-slide fade">
                <img src="pro images/a.jpg" alt="Slide 3">
            </div>
            <div class="slideshow-slide fade">
                <img src="pro images/cil.jpg" alt="Slide 4">
            </div>
        </div>

        <div class="container">
    <div class="row">
        <div class="overlay-content col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 style=" font-size: 2.5rem; font-weight: bold; color: black; text-shadow: 2px 2px 4px rgba(0,0,0,0.5); 
                opacity: 0; animation: fadeInDown 1.5s ease-in-out forwards;">
                Join Us in Building a Brighter Future Together!
            </h1>
            <h2 style="font-size: 1.5rem; color: black; line-height: 1.6; text-shadow: 1px 1px 3px rgba(0,0,0,0.4); 
                opacity: 0; animation: fadeInLeft 2s ease-in-out forwards;">
                Contribute your ideas, collaborate on solutions, and take action to create a thriving, inclusive community.
            </h2>
            <a href="register.php" 
               style="display: inline-block; padding: 15px 30px; margin-top: 20px; background: #28a745; color: #fff; font-size: 1.2rem; font-weight: bold; text-decoration: none; border-radius: 30px; 
                opacity: 0; transform: scale(0.9); transition: background 0.3s ease, transform 0.3s ease; 
                animation: bounceIn 2.5s ease forwards;">
                Get Involved
            </a>
        </div>
    </div>
</div>

<style>
    /* Keyframes for animations */
    @keyframes fadeInDown {
        0% {
            opacity: 0;
            transform: translateY(-50px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInLeft {
        0% {
            opacity: 0;
            transform: translateX(-50px);
        }
        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes bounceIn {
        0% {
            opacity: 0;
            transform: scale(0.9);
        }
        50% {
            opacity: 0.5;
            transform: scale(1.1);
        }
        100% {
            opacity: 1;
            transform: scale(1);
        }
    }

    /* Hover effect for button */
    a:hover {
        background: #1e7e34;
        transform: scale(1.1);
    }
</style>

    </section>
    <script>
        // JavaScript for Slideshow
        let slideIndex = 0;

        const showSlides = () => {
            const slides = document.querySelectorAll(".slideshow-slide");
            slides.forEach((slide, index) => {
                slide.style.display = "none"; // Hide all slides
            });

            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1; // Loop back to the first slide
            }

            slides[slideIndex - 1].style.display = "block"; // Show the current slide
            slides[slideIndex - 1].classList.add("fade");

            setTimeout(showSlides, 5000); // Change slide every 5 seconds
        };

        // Initialize slideshow
        showSlides();
    </script>






<style>
    /* Background Styling */
    .background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: linear-gradient(120deg, #ff9a9e, #fad0c4, #fbc2eb, #a18cd1);
        background-size: 300% 300%;
        animation: gradientAnimation 10s ease infinite;
        z-index: -1;
    }

    @keyframes gradientAnimation {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    /* Zigzag Container */
    .zigzag-container {
        display: flex;
        flex-direction: column;
        gap: 50px;
        padding: 50px;
    }

    /* Zigzag Row */
    .zigzag-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .zigzag-row:nth-child(even) {
        flex-direction: row-reverse;
    }

    /* Image Container */
    .image-container {
        position: relative;
        width: 40%;
        height: 250px;
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
    }

    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 15px;
    }

    .image-container:hover {
        transform: scale(1.05);
    }

    /* Text Content */
    .text-content {
        width: 50%;
        padding: 20px;
        background: rgba(255, 255, 255, 0.8);
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        font-size: 1rem;
        color: #333;
    }

    .text-content h3 {
        margin-bottom: 10px;
        font-size: 1.5rem;
        color: #1c023d;
    }

    .text-content p {
        line-height: 1.6;
    }

    /* Button Styling */
    .btn-container {
        text-align: center;
        margin-top: 20px;
    }

    .btn-get-started {
        background-color: #007bff;
        color: white;
        padding: 15px 25px;
        border-radius: 50px;
        font-size: 1.2rem;
        font-weight: bold;
        text-decoration: none;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-get-started:hover {
        background-color: #0056b3;
        transform: scale(1.1);
    }
</style><br><br>

<div class="background"></div>

<div class="zigzag-container">
    <!-- Row 1 -->
    <div class="zigzag-row">
        <div class="image-container">
            <img src="pro images/01.jpg" alt="Image 1">
        </div>
        <div class="text-content">
            <h3>Education</h3>
            <p>Education is a powerful tool for shaping the future of children and their communities.
                 When children go to school, they gain knowledge, develop skills, and build character. 
                It provides them with opportunities for a better life, helping to break the cycle of
                 poverty and fostering independence. School also cultivates creativity, critical thinking, 
                 and social interaction, preparing them to contribute positively to society.</p>
        </div>
    </div>

    <!-- Row 2 -->
    <div class="zigzag-row">
        <div class="image-container">
            <img src="pro images/yo.jpg" alt="Image 2">
        </div>
        <div class="text-content">
            <h3>Hardworking Youths</h3>
            <p>Our youths exemplify dedication, innovation, and resilience. They actively contribute to community 
                development through volunteerism, advocacy for change, and leadership roles. Despite challenges, 
                they remain determined, using their creativity to drive progress and sustainability. As future leaders, 
                their energy and commitment to growth make them vital to our
                 community's success. Supporting and investing in them ensures a brighter, inclusive future for all.</p>
        </div>
    </div>

    <!-- Row 3 -->
    <div class="zigzag-row">
        <div class="image-container">
            <img src="pro images/cil.jpg" alt="Image 3">
        </div>
        <div class="text-content">
            <h3>Children's Joy</h3>
            <p>Children in our communities embody resilience, creativity, and a spirit of togetherness, reflecting the collective values of their upbringing.</p>
        </div>
    </div>
</div>

<div class="btn-container">
    <a href="community.php" class="btn-get-started">Learn More</a>
</div>

   







   
    <main id="main">     
        <section  id="services" class="services section-bg">
            <div style=" color: white; background-color: black; box-shadow: 0 20px 30px rgb(5, 7, 6);" class="container">
                <div class="section-title">
                    <h2 style=" border-radius: 20px; color: white; background-color: black; ">Services</h2>
                    <p>Explore the features and services offered by our platform to empower citizens and improve communities:</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div style=" color: white; background-color: black;  box-shadow: 0 20px 30px white;" class="icon-box">

                            <h4 class="title"><a href="register.php">Report Problems</a></h4>
                            <p class="description">Easily report local issues such as potholes, broken streetlights, and litter to authorities.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div style=" color: white; background-color: black; box-shadow: 0 20px 30px white;" class="icon-box">

                            <h4 class="title"><a href="#">Discuss Solutions</a></h4>
                            <p class="description">Engage in discussions with other citizens and policymakers to find solutions to community problems.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
                        <div style=" color: white; background-color: black;  box-shadow: 0 20px 30px white;" class="icon-box">

                            <h4 class="title"><a href="#">Track Progress</a></h4>
                            <p class="description">Stay updated on the progress of reported issues and see them resolved in your community.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        
      <br>
     <br>
   
        <section id="about" class="about">
            <div style=" color: white; background-color: #1c023d; box-shadow: 0 20px 30px white;  border-radius: 20px;"  class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <h3 style="text-align: center; border-radius: 20px; font-size: 40px; background-color: black;  box-shadow: 0 20px 30px white;">Empowering Citizens to Improve Their Communities</h3><br><br>
                        <p>
                            Our platform provides a space for citizens to report, view, and discuss local problems within their constituency. Here's how we make a difference:
                        </p>

                        <div class="icon-box">

                            <h4 class="title">Report Problems</h4>
                             <p class="description">
                                Easily report issues such as potholes, broken streetlights, and litter to your local government authorities.
                              </p>
                               </div>

                                 <div class="icon-box">

                               <h4 class="title">Discuss Solutions</h4>
                             <p class="description">
                                Engage in discussions with other citizens and policymakers to find solutions to community problems.
                            </p>
                        </div>

                       
                    </div>

                    <div class="col-xl-5 col-lg-6 d-flex justify-content-center video-box align-items-stretch position-relative">
                       
                    </div>
                </div>
            </div>
        </section>

       

    
        
        
        <section id="faq" class="faq">
            <div class="container">
                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                    <p>Here are some common questions about our platform:</p>
                </div>

                <div class="row faq-item">
                    <div class="col-lg-6">
                        <i class="bx bx-help-circle icon-help"></i>
                        <h4>How do I report a problem?</h4>
                        <p>
                            To report a problem, simply navigate to the "Report" section of our platform and fill out the form with the necessary details about the issue you encountered.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <i class="bx bx-help-circle icon-help"></i>
                        <h4>Can I edit my submitted report?</h4>
                        <p>
                            Yes, you can edit your submitted report by logging into your account and selecting the report you wish to edit. From there, you can make the necessary changes.
                        </p>
                    </div>
                    
                </div>
            </div>
        </section>


        </section>


    </main>

  
    </main>
   

    <?php
    include('footer.php')
    ?>

    

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    
    <script src="assets/js/main.js"></script>
</body>

</html>





