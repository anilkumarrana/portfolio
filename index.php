<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "info"; 

// $conn = mysqli_connect($servername, $username, $password, $database);
 
// if (!$conn) {
//     die("Database connection failed: " . mysqli_connect_error());
// }

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

<?php 
    $pageTitle = "Portfolio - Anil Rana";
    include 'components/header.php'; 
?>

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
                <button class="btn-secondary" onclick="window.open('assect/resume.pdf', '_blank')">Download CV</button>
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
                Hello! I'm Anil Rana, a Software Engineer based in Bengaluru with a passion for building robust and scalable web applications. 
                My journey in development is driven by a desire to solve real-world problems through technology. I specialize in creating 
                seamless user experiences and efficient architectures.
            </p>
            <p>
                Beyond coding, I am a problem solver at heart who enjoys collaborating with teams to deliver high-quality products. 
                I thrive on continuous learning and staying updated with the latest industry standards to ensure precision in every project I undertake.
            </p>
        </div>
    </section>

    <!-- experience section start -->
    <section class="work-experience reveal" id="experience">
        <div class="container">
            <h2 class="section_title">Work Experience</h2>
            <div class="job-grid">
                <div class="job-entry">
                    <div class="card-content">
                        <h3 class="job-title">Junior Developer <br><span class="company">@ Echo 11</span></h3>
                        <p class="job-dates">May 2026 - Present</p>
                        <p class="short-desc">Building scalable apps and optimizing system performance with modern tech.</p>
                    </div>
                </div>

                <div class="job-entry">
                    <div class="card-content">
                        <h3 class="job-title">Frontend Dev <br><span class="company">@ Techies Gateway</span></h3>
                        <p class="job-dates">Sept 2025 - April 2026</p>
                        <p class="short-desc">Creating responsive UIs and interactive web components for client projects.</p>
                    </div>
                </div>

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

<?php include 'components/footer.php'; ?>