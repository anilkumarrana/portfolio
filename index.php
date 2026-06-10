<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "info"; 

// Enable internal reporting for mysqli errors
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = mysqli_connect($servername, $username, $password, $database);
 
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Robust table initialization
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS `information` (`name` VARCHAR(255), `email` VARCHAR(255), `message` TEXT)");

// Ensure 'id' column exists and is Auto-Increment
$columnCheck = mysqli_query($conn, "SHOW COLUMNS FROM `information` LIKE 'id'");
$pkCheck = mysqli_query($conn, "SHOW KEYS FROM `information` WHERE Key_name = 'PRIMARY'");
$hasPrimaryKey = mysqli_num_rows($pkCheck) > 0;

if (mysqli_num_rows($columnCheck) == 0) {
    // Add id column if missing. Only set as PRIMARY KEY if the table doesn't have one yet.
    $query = "ALTER TABLE `information` ADD `id` INT NOT NULL AUTO_INCREMENT FIRST";
    if (!$hasPrimaryKey) {
        $query .= ", ADD PRIMARY KEY (id)";
    } else {
        $query .= ", ADD KEY (id)";
    }
    mysqli_query($conn, $query);
} else {
    // If it exists but triggered errors, ensure it is actually AUTO_INCREMENT
    $col = mysqli_fetch_assoc($columnCheck);
    if (strpos($col['Extra'], 'auto_increment') === false) {
        mysqli_query($conn, "ALTER TABLE `information` MODIFY `id` INT NOT NULL AUTO_INCREMENT");
    }
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Using Prepared Statements for better security and reliability
    $stmt = mysqli_prepare($conn, "INSERT INTO `information` (`name`, `email`, `message`) VALUES (?, ?, ?)");
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);
        try {
            if(mysqli_stmt_execute($stmt)){
                echo "<script>
                        alert('Data saved successfully!');
                        window.location.href='index.php';
                      </script>";
                exit();
            }
        } catch (mysqli_sql_exception $e) {
            // Auto-fix for the common Duplicate Entry '0' error
            if (str_contains($e->getMessage(), "Duplicate entry '0'")) {
                try {
                    // Re-run the fix logic safely
                    mysqli_query($conn, "ALTER TABLE `information` MODIFY `id` INT NOT NULL AUTO_INCREMENT");
                    echo "<script>alert('Database was out of sync. I have fixed it! Please try sending your message again.');</script>";
                } catch (Exception $innerEx) {
                    echo "<script>alert('Could not auto-fix database: " . addslashes($innerEx->getMessage()) . "');</script>";
                }
            } else {
                echo "<script>alert('Database Error: " . addslashes($e->getMessage()) . "');</script>";
            }
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "<script>alert('Failed to prepare statement: " . addslashes(mysqli_error($conn)) . "');</script>";
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
                <button class="btn-primary" onclick="window.location.href='cases.php'">View Work</button>
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
            <div class="job-grid reveal">
                <!-- Experience Card 1 -->
                <div class="edu-card">
                    <div class="edu-icon-glow"></div>
                    <div class="edu-card-icon"><i class="bi bi-laptop"></i></div>
                    <div class="edu-card-content">
                        <span class="edu-date">May 2026 - Present</span>
                        <h3>Junior Developer</h3>
                        <span class="edu-inst">@ Echo 11</span>
                        <p>Building scalable apps and optimizing system performance with modern tech.</p>
                    </div>
                </div>

                <!-- Experience Card 2 -->
                <div class="edu-card">
                    <div class="edu-icon-glow"></div>
                    <div class="edu-card-icon"><i class="bi bi-window-stack"></i></div>
                    <div class="edu-card-content">
                        <span class="edu-date">Sept 2025 - April 2026</span>
                        <h3>Frontend Dev</h3>
                        <span class="edu-inst">@ Techies Gateway</span>
                        <p>Creating responsive UIs and interactive web components for client projects.</p>
                    </div>
                </div>

                <!-- Experience Card 3 -->
                <div class="edu-card">
                    <div class="edu-icon-glow"></div>
                    <div class="edu-card-icon"><i class="bi bi-briefcase"></i></div>
                    <div class="edu-card-content">
                        <span class="edu-date">July 2025 - Sep 2025</span>
                        <h3>B2B Sales</h3>
                        <span class="edu-inst">@ Infinity Learn</span>
                        <p>Managed corporate relations and client acquisition within the ed-tech sector.</p>
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