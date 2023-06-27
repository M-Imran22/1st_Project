<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
    <style>
        .profile-picture {
            left: 150px;
            /* margin-bottom: 0px; */
            /* bottom: 1px; */
            position: absolute;
            top: 185px;
            z-index: 2;
        }

        .profile-picture img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            width: 220px;
            height: 220px;
        }

        .cover-photo {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            max-height: 300px;
            overflow: hidden;
            z-index: 1;
        }

        .cover-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.7);
        }

        .introduction {
            left: 420px;
            top: 300px;
            position: absolute;
        }
    </style>


</head>

<body>
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="profile-picture">
                        <img src="./Pic/Cinque-Terre-Italy.jpg" alt="Profile Picture" class="img-fluid rounded-circle">
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="cover-photo">
                        <img src="./Pic//Ha-Long-Bay-Vietnam.jpg" alt="Cover Photo" class="img-fluid">
                    </div>
                    <div class="introduction mt-3">
                        <h1 class="display-4">John Doe</h1>
                        <p class="lead">Travel Blogger | Adventure Enthusiast</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> -->
    </header>




    <section class="profile-info">
        <!-- Personal Information -->
        <!-- Display user's name, location, website, social media links, and bio -->
    </section>

    <section class="blog-posts">
        <!-- Blog Posts -->
        <!-- Display user's blog posts in a grid or list format -->
        <!-- Include blog post title, featured image, publication date, and excerpt -->
    </section>

    <section class="travel-map">
        <!-- Travel Map -->
        <!-- Show an interactive map with visited locations -->
        <!-- Make the locations clickable to view related blog posts -->
    </section>

    <section class="categories-tags">
        <!-- Categories and Tags -->
        <!-- Display the categories or topics the user writes about -->
    </section>

    <section class="social-engagement">
        <!-- Social Engagement -->
        <!-- Add social sharing buttons, like and comment features -->
    </section>

    <section class="followers-following">
        <!-- Followers and Following -->
        <!-- Show the number of followers and users the blogger is following -->
    </section>

    <section class="contact">
        <!-- Contact Information -->
        <!-- Provide a contact form or email address for inquiries -->
    </section>

    <section class="recent-activity">
        <!-- Recent Activity -->
        <!-- Highlight the user's recent activity, such as latest blog post, comments received, etc. -->
    </section>

    <footer>
        <!-- Footer section -->
        <!-- Include links to other pages, copyright information, etc. -->
    </footer>

    <script src="script.js"></script>
</body>