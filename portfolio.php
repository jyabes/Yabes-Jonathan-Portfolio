<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <title>Portfolio</title>
    <script src="https://kit.fontawesome.com/2e48d723be.js" crossorigin="anonymous"></script>
</head>
    <body>
        <h1 class="hidden">Portfolio</h1>
      <!--  <section class="spacer mobile">
            <div class="grid-con-full"> -->
                <header id="main-header" class="col-span-full">
                    <nav id="main-nav">
                        <h2 class="hidden">Navigation</h2>
                        <a href="index.html">
                            <img src="images/svg/logo_ver2c.svg" id="logo" alt="logo_ver2">
                        </a>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </header>

                <!--  hero  -->
                <section class="grid-con-full">
                    <div class="col-span-full hero-video">
                        <video autoplay muted loop preload="auto">
                            <source src="videos/hero.mp4">
                        </video>
                        <div class="hero-title">
                            <h2>PORTFOLIO</h2>
                            <p>3D Motion Designer and Videography</p>
                        </div>
                    </div>
                </section>


            
<div class="container slide-in-bottom-2">
    <h2 class="hidden">Gallery</h2>
        <div class="gallery">
        <?php
            include 'db.php';

            $sql = "SELECT * FROM projects";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="column">';
                    echo '<div class="thumbnail">';
                    echo '<a href="project-details.php?id=' . $row['id'] . '">';
                    echo '<img src="' . $row['image_path'] . '" alt="' . $row['title'] . '">';
                    echo '</a>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
            

            
                <footer>
                    <h3 class="hidden">Footer</h3>
                    <div class="grid-con">
                        <div class="col-span-full m-span-full l-col-span-full xl-col-span-full">
                            <div class="call-to-action">
                                <h3>Let's Work Together!</h3>
                                <div class="contact-container">
                                    <form class="contact-form1">
                                      <div class="form-group">
                                        <input type="email" id="email" name="email" placeholder="Enter your email address">
                                      </div>
                                      <div>
                                        <button type="submit" class="contact-btn-footer">Contact Me</button></div>
                                    </form><br>
                                    <i class="fa-brands fa-square-facebook fa-fade" style="color: #5e5e5e;"></i>
                                    <i class="fa-brands fa-square-instagram fa-fade" style="color: #5e5e5e;"></i>
                                    <i class="fa-brands fa-vimeo fa-fade" style="color: #5e5e5e;"></i>
                                </div>
                              
                            </div>
                        </div>
                   
                        <div class="col-span-full">
                            <div class="copyright">
                            <p>&copy; 2023 Jonathan Yabes. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </footer>



<script src="js/main.js"></script>
</body>
</html>