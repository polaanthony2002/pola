<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Suggestions</title>
    <style>
        /* General Body Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            padding-left: 250px; /* Adjust for the left header width */
        }

        h1 {
            color: #333;
        }

        .container {
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
        }

        .suggestion-form, .comment-form {
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .suggestion {
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 10px;
        }

        .comment {
            padding: 10px;
            border-top: 1px solid #ddd;
            margin-top: 10px;
        }

        
        .bell-icon {
            font-size: 1.2rem;
            margin-right: 5px;
        }

        .notification-count {
            background-color: red;
            color: white;
            font-size: 0.8rem;
            border-radius: 50%;
            padding: 2px 6px;
            vertical-align: middle;
            margin-left: 5px;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .header {
                width: 200px;
            }
            body {
                padding-left: 200px;
            }
        }

        @media (max-width: 480px) {
            .header {
                width: 150px;
            }
            body {
                padding-left: 150px;
            }
        }

        /* Footer Styling */
        .footer {
            margin-top: auto;
            color: white;
            text-align: center;
            padding: 20px 100px;
            display: flex;
            flex-direction: column;
            width: 85%;
            align-items: center;
            background-color: black;
            border-top-right-radius: 40px;
            border-top-left-radius: 40px;
        }

        .footer a {
            color: #ddd;
            text-decoration: none;
        }

        .footer a:hover {
            color: #fff;
        }
  /* Sidebar Styling */
  .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 170px;
            background-color: #1c023d;
            color: white;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);

            border-top-right-radius: 10px;
             border-bottom-right-radius: 10px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            font-size: 19px;
            padding: 10px 5px;
            margin: 5px 0;
            border-radius: 4px;
            text-align: center;
        }

        .sidebar a:hover {
            background-color: #444;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"], input[type="email"], input[type="tel"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        
    .logo {
        font-size: 1.5rem;
        font-weight: bold;
        color: green;
        margin-bottom: 20px;
        background-color: black;
        padding: 20px 20px;
        border-radius: 15px;
    }
    </style>
</head>
<body>
    <!-- Sidebar -->

     
    <div class="sidebar">
    <h1 style="color: green;" class="logo"><a href="index.html">Butondo Ward</a></h1><br>
        <a href="dashboard.php">Dashboard</a>
        <a href="home.php">Meetings</a>
        <a href="suggestion.php">Suggestion<span style="color: #f39c12;">//</span>Box</a>
        <a href="testing12.php">
            <span>🔔</span>
            
        </a><br>
        <a href="logout.php" style="background-color: #007BFF;">Logout</a>
    </div>
    <br>
    <!-- Content Area -->
    <h1 style="color: white; background-color: black; box-shadow: 0 20px 30px rgb(5, 7, 6); text-align: center; height: 60px;">Community Suggestions</h1>
    <div class="container">
        <div class="suggestion-form">
            <h2>Submit a Suggestion</h2>
            <label for="name">Name:</label>
            <input type="text" id="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" required>
            <label for="suggestion-title">Title:</label>
            <input type="text" id="suggestion-title" required>
            <label for="suggestion-content">Content:</label>
            <textarea id="suggestion-content" rows="4" required></textarea>
            <button onclick="submitSuggestion()">Submit Suggestion</button>
        </div>
        <h2>Previous Suggestions</h2>
        <div id="suggestions-container"></div>
    </div>

        
    <div class="footer">
        <div class="row">
            <div class="col-md-6">
               <p>&copy; FixMyStreet. All Rights Reserved.</p>
                <p>Designed and Maintained By Pola Anthony</p>
                <p>SIN: 2210391550</p>
            </div><br>
            <div class="col-md-6 text-md-right">
                <p>Email: <a href="mailto:info@fixmystreet.com" style="color: #ffffff; font-size: 14px; ">polaanthony3@gmail.com</a></p>
                <p>Phone: <a href="tel:+260123456789" style="color: #ffffff; font-size: 14px;">0772673470</a></p>
                <p>
                    Follow us: 
                    <a href="http://facebook.com/fixmystreet" style="color: #ffffff; margin-left: 5px;"><i class="fab fa-facebook-f"></i></a>
                    <a href="http://twitter.com/fixmystreet" style="color: #ffffff; margin-left: 5px;"><i class="fab fa-twitter"></i></a>
                    <a href="http://instagram.com/fixmystreet" style="color: #ffffff; margin-left: 5px;"><i class="fab fa-instagram"></i></a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="credits">
                    <strong><a href="http://icuzambia.net" style="color: #ffffff;">ICU Zambia</a> // <a href="http://zrdc.org" style="color: #ffffff;">ZRDC</a></strong>
                </div>
            </div>
        </div>
    </div>


<!-- Add Font Awesome for social media icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    </div>

    

    <script>
        async function fetchSuggestions() {
            const response = await fetch("fetch.php");
            const suggestions = await response.json();
            const container = document.getElementById("suggestions-container");
            container.innerHTML = "";

            suggestions.forEach(suggestion => {
                const suggestionElement = document.createElement("div");
                suggestionElement.classList.add("suggestion");
                suggestionElement.innerHTML = `
                    <h3>${suggestion.title}</h3>
                    <p>${suggestion.content}</p>
                    <small>Submitted on: ${suggestion.date}</small>
                    <div class="comments">
                        <h4>Comments</h4>
                        ${suggestion.comments.map(comment => `
                            <div class="comment">
                                <p>${comment.comment}</p>
                                <small>${comment.date}</small>
                            </div>
                        `).join('')}
                        <div class="comment-form">
                            <label>Add a comment:</label>
                            <input type="text" id="comment-${suggestion.id}">
                            <button onclick="submitComment(${suggestion.id})">Add Comment</button>
                        </div>
                    </div>
                `;
                container.appendChild(suggestionElement);
            });
        }

        async function submitSuggestion() {
            const name = document.getElementById("name").value;
            const email = document.getElementById("email").value;
            const title = document.getElementById("suggestion-title").value;
            const content = document.getElementById("suggestion-content").value;

            await fetch("submit.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({ name, email, title, content })
            });

            document.getElementById("name").value = "";
            document.getElementById("email").value = "";
            document.getElementById("suggestion-title").value = "";
            document.getElementById("suggestion-content").value = "";
            fetchSuggestions();
        }

        async function submitComment(suggestionId) {
            const commentInput = document.getElementById(`comment-${suggestionId}`);
            const comment = commentInput.value;

            await fetch("comment.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({ suggestionId, comment })
            });

            commentInput.value = "";
            fetchSuggestions();
        }

        document.addEventListener("DOMContentLoaded", fetchSuggestions);
    </script>

    
</body>
</html>
