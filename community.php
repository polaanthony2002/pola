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
    <link href="assets/css/mee.css" rel="stylesheet" /> 
    
    

    
</head>



<body>
    <?php
    include('header.php')
    ?>


   
<div class="hero">
  
  <div class="cdf">
      <h1>FINISHED & ONGOING CDF Project</h1>

      <p>The Community Development Fund in the year 2024 has been utilized in various sectors of the Community at large.
          lets dig deep and explore , how much the local government has and still doing within the community </p>


  </div>

        
  
        


<div class="Completed">
    <img src="pro images/yooo.jpg">
    <img src="pro images/images.jpg">
    <h1>Hospital Infrastructures</h1>
    <p>the Community Development Fund (CDF) has played a pivotal role by constructing much-needed hospital infrastructure.
           This initiative has not only improved access to quality healthcare but also enhanced the overall well-being of
            the community's residents. The new hospital facilities stand as a testament to the positive impact of 
            community-driven development, 
          providing essential medical services to the people and promoting a healthier, more vibrant community....</p>
    <button  class="comment-btn" onclick="openPopup()">Add a Comment</button>
</div><br><br>

<!-- Popup for Comments -->
<div class="popup-overlay" id="popupOverlay">
    <div class="popup-content">
        <span style=" background-color: blue; padding: 6px 6px;" class="close-popup" onclick="closePopup()">×</span>
        <h2 style=" text-align: left;">Leave a Comment</h2>
        <form id="commentForm" action="save_comment.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="comment">Comment:</label>
            <textarea id="comment" name="comment" rows="4" required></textarea>
            
            
            <button type="submit">Submit</button>
            <button type="button" class="cancel-btn" onclick="closeCommentPopup()">Cancel</button>
        </form>
        
        <!-- Display Submitted Comments -->
        <div style=" text-align: left; " class="comments-list" id="commentsList">
            <!-- Comments will be loaded here via JavaScript -->
        </div>
    </div>
</div>

<script>
    function openPopup() {
        document.getElementById("popupOverlay").style.display = "flex";
        loadComments(); // Load comments when opening the popup
    }

    function closePopup() {
        document.getElementById("popupOverlay").style.display = "none";
    }

    // Load comments from fetch_comments.php
    function loadComments() {
        fetch('fetch_comment.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById("commentsList").innerHTML = data;
            });
    }
</script>





  <div class="roads">
      <img src="pro images/download (7).jpg">
      <img src="pro images/road.jpg">
      <h1>Roads</h1>
      <p>Our community has been seeing positive transformation thanks to the Community Development Fund (CDF).
           Through their efforts, new roads are been constructed, and some projects have already been successfully 
           completed. These newly constructed roads are not only enhancing connectivity but also improving the overall
            quality of life in our community, making it a better place to live, work, and thrive. 
          The CDF's commitment to infrastructure development is paving the way for a brighter future for all residents.</p>
          <button  class="comment-btn" onclick="openPopup()">Add a Comment</button>
   </div>
  <br><br>

<!-- Popup for Comments -->
<div class="popup-overlay" id="popupOverlay">
    <div class="popup-content">
        <span style=" background-color: blue; padding: 6px 6px;" class="close-popup" onclick="closePopup()">×</span>
        <h2 style=" text-align: left;">Leave a Comment</h2>
        <form id="commentForm" action="save_comment.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="comment">Comment:</label>
            <textarea id="comment" name="comment" rows="4" required></textarea>
            
            
            <button type="submit">Submit</button>
            <button type="button" class="cancel-btn" onclick="closeCommentPopup()">Cancel</button>
        </form>
        
        <!-- Display Submitted Comments -->
        <div style=" text-align: left; " class="comments-list" id="commentsList">
            <!-- Comments will be loaded here via JavaScript -->
        </div>
    </div>
</div>

<script>
    function openPopup() {
        document.getElementById("popupOverlay").style.display = "flex";
        loadComments(); // Load comments when opening the popup
    }

    function closePopup() {
        document.getElementById("popupOverlay").style.display = "none";
    }

    // Load comments from fetch_comments.php
    function loadComments() {
        fetch('fetch_comment.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById("commentsList").innerHTML = data;
            });
    }
</script>






   <div class="police">

      <img src="pro images/1.jpg">
      <img src="pro images/download (3).jpg">
      <h1>Police Camp</h1>
      <p>The Community Development Fund (CDF) has taken a proactive step 
          in enhancing our safety and security. They have undertaken the construction of new police camps,
           a significant initiative that is strengthening law enforcement presence and ensuring the
            well-being of our residents. These new police camps are a testament to our commitment
           to creating a safer environment for all, where law and order thrive, making our community 
           an even better place to live.</p>
           <button  class="comment-btn" onclick="openPopup()">Add a Comment</button>
</div>
<br><br>

<!-- Popup for Comments -->
<div class="popup-overlay" id="popupOverlay">
    <div class="popup-content">
        <span style=" background-color: blue; padding: 6px 6px;" class="close-popup" onclick="closePopup()">×</span>
        <h2 style=" text-align: left;">Leave a Comment</h2>
        <form id="commentForm" action="save_comment.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="comment">Comment:</label>
            <textarea id="comment" name="comment" rows="4" required></textarea>
            
            
            <button type="submit">Submit</button>
            <button type="button" class="cancel-btn" onclick="closeCommentPopup()">Cancel</button>
        </form>
        
        <!-- Display Submitted Comments -->
        <div style=" text-align: left; " class="comments-list" id="commentsList">
            <!-- Comments will be loaded here via JavaScript -->
        </div>
    </div>
</div>

<script>
    function openPopup() {
        document.getElementById("popupOverlay").style.display = "flex";
        loadComments(); // Load comments when opening the popup
    }

    function closePopup() {
        document.getElementById("popupOverlay").style.display = "none";
    }

    // Load comments from fetch_comments.php
    function loadComments() {
        fetch('fetch_comment.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById("commentsList").innerHTML = data;
            });
    }
</script>







   <div class="skills">
       <img src="pro images/yo.jpg">
      <img src="pro images/y.jpg">
        <h1>Skills Tranning</h1>
        <p>The community Development Foundation (CDF)
           has also introduced a valuable initiative - skills training. This program is empowering
            our residents with the knowledge and expertise needed to thrive in today's job market.
             With the CDF's support, our community
           is blossoming into a hub of skill development, creating new opportunities for personal and professional growth.</p>


           <button  class="comment-btn" onclick="openPopup()">Add a Comment</button>

   </div>
   <br><br>

<!-- Popup for Comments -->
<div class="popup-overlay" id="popupOverlay">
    <div class="popup-content">
        <span style=" background-color: blue; padding: 6px 6px;" class="close-popup" onclick="closePopup()">×</span>
        <h2 style=" text-align: left;">Leave a Comment</h2>
        <form id="commentForm" action="save_comment.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="comment">Comment:</label>
            <textarea id="comment" name="comment" rows="4" required></textarea>
            
            
            <button type="submit">Submit</button>
            <button type="button" class="cancel-btn" onclick="closeCommentPopup()">Cancel</button>
        </form>
        
        <!-- Display Submitted Comments -->
        <div style=" text-align: left; " class="comments-list" id="commentsList">
            <!-- Comments will be loaded here via JavaScript -->
        </div>
    </div>
</div>

<script>
    function openPopup() {
        document.getElementById("popupOverlay").style.display = "flex";
        loadComments(); // Load comments when opening the popup
    }

    function closePopup() {
        document.getElementById("popupOverlay").style.display = "none";
    }

    // Load comments from fetch_comments.php
    function loadComments() {
        fetch('fetch_comment.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById("commentsList").innerHTML = data;
            });
    }
</script>



   
   
<br>
<br><br>
   

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