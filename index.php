<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "info"; 

$conn = mysqli_connect($servername, $username, $password, $database);
 
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // Sanitize inputs to prevent SQL injection and fix "index" errors
    $name = mysqli_real_escape_string($conn, $_POST['name'] ?? '');
    $phone = mysqli_real_escape_string($conn, $_POST['phone'] ?? '');
    $message = mysqli_real_escape_string($conn, $_POST['message'] ?? '');

    $sql = "INSERT INTO `information` (`name`, `phone`, `message`) VALUES ('$name', '$phone', '$message');";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "data save";
    }else{
        echo "data not save";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
           integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
           integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
   </script>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Merriweather:wght@700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

   <link rel="icon" href="assect/anil-logo.png" type="image/png">
   <link rel="stylesheet" href="assect/style.css">
   <script src="assect/script.js"></script>

    <title>Portfolio - Anil</title>

</head>
<body>
   <!-- header start -->
    <header>
      <nav class="navabr">
        <div class="left_side">
            <a href="#"><img src="assect/logo.png" alt=""></a>
        </div>
        <div class="medle_side" id = "menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us </a></li>
                <li><a href="studies.php">Case Studies</a></li>
                <li><a href="work.php">Recent Work</a></li>
            </ul>
        </div>
        <div class="menu_icon">
             <i class="bi bi-list" onclick="togglemenu()" style="cursor:pointer"></i>
        </div>
        <div class="right_side">
            <button><a href="#" onclick="toggleLogin()">Get In Touch</a></button>
            <span onclick="closeLogin()"></span>
        </div>
      </nav>

      <!-- Get in Touch -->
      <div class="info_box" id = "info">
            <h3>Hey, Guys</h3>
            <div class="info_img">
               <img src="assect/logo.png" alt="">
            </div>
        <div class="info_imfo" id = "imfo">
          <form action="" method="POST">
            <input type="text"  name ="name" placeholder="Name" required>
            <div class="mb-3">
                <input type="text" name="phone" id="" placeholder="Phone No" required maxlength="10" >
            </div>
            <div>
                <textarea name="message" id="" placeholder="Message" required maxlength="100" ></textarea>
             </div>
             <div class="mt-3">
                <button type="submit" onclick="showMessage()">Send me</button>
             </div>
          </form>
        </div>
        <!-- Get in Touch end  -->
      </div>
    </header>

    <!-- hero -->

    <section class="hero">
        <div class="bg_animation">
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
        </div>
        <div class="details">
            <span class="intro_text">Hi, my name is</span>
            <h1>Anil Rana</h1>
            <div class="paragraph_wrapper">
                <p>Expertise in <span id="typewriter" class="highlight"></span></p>
            </div>
            <div class="button">
                <button class="btn-primary" onclick="playvideo()">View Work</button>
                <button class="btn-secondary">Download CV</button>
            </div>
        </div>
         <!-- self video  -->
          <div class="self_video" id="video">
            <video controls muted loop>
                <source src="assect/video03.mp4" type="video/mp4">
            </video>
            <i class="bi bi-x-square-fill" onclick="pausevideo()"></i>
          </div>
    </section>


    <!-- about section -->
    <section class="about" id="about">
        <div class="about_img_container reveal">
            <div class="about_img">
                <img src="assect/anil01.jpeg" alt="About Anil">
            </div>
        </div>
        <div class="about_details reveal">
            <h2 class="section_title">About Me</h2>
            <h3>Building digital solutions with precision</h3>
            <p>
                I am a dedicated developer focused on building high-performance, scalable, and user-friendly web applications. 
                My process involves transforming complex challenges into seamless digital realities through clean code 
                and a deep understanding of modern UI/UX principles.
            </p>
            <p>I thrive on continuous learning and implementing the latest industry standards to deliver precision in every project.</p>
        </div>
    </section>

    <!-- experience section start -->
    <section class="work-experience reveal" id="experience">
        <div class="container">
            <h2 class="section_title">Work Experience</h2>
            <div class="job-grid">
                <!-- Current Role -->
                <div class="job-entry">
                    <div class="card-content">
                        <h3 class="job-title">Junior Developer <br><span class="company">@ Echo 11</span></h3>
                        <p class="job-dates">May 2026 - Present</p>
                        <p class="short-desc">Building scalable apps and optimizing system performance with modern tech.</p>
                    </div>
                </div>

                <!-- Previous Role: Techies Gateway -->
                <div class="job-entry">
                    <div class="card-content">
                        <h3 class="job-title">Frontend Dev <br><span class="company">@ Techies Gateway</span></h3>
                        <p class="job-dates">Sept 2025 - April 2026</p>
                        <p class="short-desc">Creating responsive UIs and interactive web components for client projects.</p>
                    </div>
                </div>

                <!-- Previous Role: Infinity Learn -->
                <div class="job-entry">
                    <div class="card-content">
                        <h3 class="job-title">B2B Sales <br><span class="company">@ Infinity Learn</span></h3>
                        <p class="job-dates">July 2025 - Sep 2025</p>
                        <p class="short-desc">Managed corporate relations and client acquisition within the ed-tech sector.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials" id="testimonials">
        <div class="container">
            <h2 class="section_title reveal">Voices of Trust</h2>
            <div class="testimonial-slider-wrapper reveal">
                <div class="testimonial-slider" id="testimonialSlider">
                    <!-- Testimonial 1 -->
                    <div class="testimonial-card">
                        <div class="testimonial-img">
                            <img src="assect/logo.png" alt="Sarah Johnson">
                        </div>
                        <i class="bi bi-quote"></i>
                        <p>"Anil is an exceptional developer who consistently delivers high-quality, maintainable code. His contributions have significantly improved our frontend performance at Echo 11."</p>
                        <h4>Sarah Johnson</h4>
                        <span>Team Lead @ Echo 11</span>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="testimonial-card">
                        <div class="testimonial-img">
                            <img src="assect/logo.png" alt="Rajesh Gupta">
                        </div>
                        <i class="bi bi-quote"></i>
                        <p>"His eye for design and detail is incredible. Anil transformed our complex wireframes into a stunning, responsive reality during his time at Techies Gateway."</p>
                        <h4>Rajesh Gupta</h4>
                        <span>Frontend Lead @ Techies Gateway</span>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="testimonial-card">
                        <div class="testimonial-img">
                            <img src="assect/logo.png" alt="Michael Smith">
                        </div>
                        <i class="bi bi-quote"></i>
                        <p>"Anil’s dedication and problem-solving mindset are truly inspiring. He bridges the gap between technical requirements and business goals perfectly."</p>
                        <h4>Michael Smith</h4>
                        <span>Manager @ Infinity Learn</span>
                    </div>
                </div>
                <!-- Slider Controls -->
                <div class="slider-controls">
                    <button class="slider-btn" onclick="moveSlider(-1)"><i class="bi bi-chevron-left"></i></button>
                    <button class="slider-btn" onclick="moveSlider(1)"><i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="assect/logo.png" alt="Logo">
                    <p class="footer-tagline">Building digital solutions with precision, scalability, and modern UI/UX principles. Let's turn your vision into reality.</p>
                </div>
                <div class="footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#about"><i class="bi bi-chevron-right"></i> About Me</a></li>
                        <li><a href="#experience"><i class="bi bi-chevron-right"></i> Experience</a></li>
                        <li><a href="#testimonials"><i class="bi bi-chevron-right"></i> Testimonials</a></li>
                        <li><a href="#" onclick="toggleLogin()">Get In Touch</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h4>Let's Talk</h4>
                    <p>Email: anilrana@example.com</p>
                    <p>Location: Bengaluru, India</p>
                    <div class="footer-social">
                        <a href="https://wa.me/918294236223" target="_blank" title="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                        <a href="https://www.linkedin.com/in/anil-kumar-8492/" target="_blank" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="https://github.com/anilkumararna/" target="_blank" title="GitHub"><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Anil Rana. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Floating Social Media Icons -->
    <div class="socil_media">
        <div class="whats_app">
            <a href="https://wa.me/918294236223" target="_blank" title="Contact on WhatsApp">
                <img src="assect/whatsaap_logo.png" alt="WhatsApp">
            </a>
        </div>
        <div class="Linked_in">
            <a href="https://www.linkedin.com/in/anil-kumar-8492/" target="_blank" title="LinkedIn Profile">
                <img src="assect/linked_in.png" alt="LinkedIn">
            </a>
        </div>
        <div class="github">
            <a href="https://github.com/anilkumararna/" target="_blank" title="GitHub Profile">
                <img src="assect/github.png" alt="GitHub">
            </a>
        </div>
    </div>

</body>
</html>