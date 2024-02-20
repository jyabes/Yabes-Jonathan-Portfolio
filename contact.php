

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <title>Contact</title>
</head>
    <body>
        <h1 class="hidden">Contact</h1>
      <!--  <section class="spacer mobile">
            <div class="grid-con-full"> -->
                <header id="main-header" class="col-span-full">
                    <nav id="main-nav">
                        <h2 class="hidden">showreel</h2>
                        <img src="images/svg/logo_ver2c.svg" id="logo" alt="logo_ver2">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="case_study.html">Case Study</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </header>

                <!--  hero  -->
                <div class="grid-con-full">
                    <section class="col-span-full hero-video">
                        <video autoplay muted loop preload="auto">
                            <source src="videos/hero2.mp4">
                        </video>
                        <div class="hero-title">
                            <h2>Contact</h2>
                        </div>
                    </section>
                </div>
                </div>
                <br><br>
            </div>

            <!-- CONTACT FORM SECTION -->

            <div class="grid-con">
                <div class="col-span-full m-col-start-2 m-col-end-6 l-col-start-2 l-col-end-6 xl-col-start-2 xl-col-end-6">
                    <div class="contact-text">
                        <h2>Let's create something awesome.</h2><br><br>
                        <p class="contact-paragraph">I can't wait to learn more about how we can partner to bring your ideas to life through engaging motion design and filmmaking.<br><br>
                    </div>
                    <div class="contact-text2">
                        <p>London, Ontario, Canada<br>jonathanyabes@gmail.com</p>
                    </div>
                </div>
            
                <div class="col-span-full m-col-start-8 m-col-end-12 l-col-start-8 l-col-end-12 xl-col-start-8 xl-col-end-12">
                    <div class="contact-form2">
                        <form method="post" action="sendmail.php">

                            <label for="first_name" class="hidden">First Name: </label>
                            <input type="text" name="first_name" id="fname" placeholder="First name">
                        
                        <br><br>
                        
                            <label for="last_name" class="hidden">Last Name: </label>
                            <input type="text" name="last_name" id="lname" placeholder="Last name">
                        
                            <br><br>
                        
                            <label for="email" class="hidden">Email: </label>
                            <input type="text" name="email" id="youremail" placeholder="Email">
                        
                            <br><br>
                        
                            <label for="comments" class="hidden">Comments: </label>
                            <textarea name="comments" id="yourmessage">Message</textarea>
                        
                            <br><br>
                            <div class="button"> <button type="submit" class="contact-btn">Contact Me</button></div>
                          
                            <br><br>    <br><br>
                        </form>
                    </div> 
                </div>
            </div>

            <!-- FOOTER SECTION -->
            <footer class="footer2">
                <h3 class="hidden">footer</h3>
                <div class="grid-con-full">
                    <div class="copyright">
                        <p>&copy; 2023 Jonathan Yabes. All Rights Reserved.</p>
                    </div>
                </div>
            </footer>
        </section> 
<script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/ScrollTrigger.js"></script>
<script src="js/main.js"></script>
</body>
</html>







<html>
<head>
</head>

<body>
<section>
<form method="post" action="sendmail.php">

    <label for="first_name">First Name: </label>
    <input type="text" name="first_name" id="first_name">

<br><br>

    <label for="last_name">Last Name: </label>
    <input type="text" name="last_name" id="last_name">

    <br><br>

    <label for="email">Email: </label>
    <input type="text" name="email" id="email">

    <br><br>

    <label for="comments">Comments: </label>
    <textarea name="comments" id="comments">comment here</textarea>

    <br><br>

    <input type="submit" value="send">
    <br><br>    <br><br>
</form>
</section>
<footer>
<?php 
echo date("F j, Y, g:i a"); 
?>

</footer>
</body>
</html>