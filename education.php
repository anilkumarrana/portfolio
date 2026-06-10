<?php
    $pageTitle = "Education - Anil Rana"; // Set page title dynamically
    include 'components/header.php';
?>

    <!-- Education Hero Section -->
    <section class="about-hero">
        <div class="hero-mesh"></div>
        <div class="container">
            <div class="breadcrumb-pill reveal">
                <a href="index.php">Home</a>
                <i class="bi bi-chevron-right"></i>
                <span>Education</span>
            </div>
            <h1 class="hero-title reveal">My <span class="italic-accent">Academic</span> Journey</h1>
            <p class="hero-subtitle reveal">
                A glimpse into my educational background and the foundations that shaped my expertise in software engineering.
            </p>
            <div class="bg-watermark">Education</div>
            <div class="scroll-down-indicator reveal">
                <div class="mouse-icon"></div>
            </div>
        </div>
    </section>

    <!-- Education Roadmap/Timeline Section -->
    <section class="education-roadmap" id="education-details">
        <div class="container">
            <h2 class="section_title reveal">Education & Qualifications</h2>
            <div class="education-grid reveal">
                <!-- Education Wala Card -->
                <div class="edu-card">
                    <div class="edu-icon-glow"></div>
                    <div class="edu-badge">Certification</div>
                    <div class="edu-card-icon"><i class="bi bi-rocket-takeoff"></i></div>
                    <div class="edu-card-content">
                        <span class="edu-date">2024 - Present</span>
                        <h3>Full Stack Development</h3>
                        <span class="edu-inst">Academic @ Education Wala</span>
                        <p>Engaged in a specialized industry-ready curriculum focusing on modern architectures, scalable backend systems, and high-performance frontend engineering.</p>
                        <a href="#" class="edu-cta">View Credentials <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>

                <!-- B.Tech Card -->
                <div class="edu-card">
                    <div class="edu-card-icon"><i class="bi bi-mortarboard"></i></div>
                    <div class="edu-card-content">
                        <span class="edu-date">2020 - 2024</span>
                        <h3>Bachelor of Technology</h3>
                        <span class="edu-inst">Rajasthan University</span>
                        <p>Successfully completed B.Tech with a focus on engineering principles, software development, and technical problem-solving.</p>
                    </div>
                </div>

                <!-- 12th Card -->
                <div class="edu-card">
                    <div class="edu-card-icon"><i class="bi bi-book"></i></div>
                    <div class="edu-card-content">
                        <span class="edu-date">2018 - 2020</span>
                        <h3>Higher Secondary (12th)</h3>
                        <span class="edu-inst">Local School</span>
                        <p>Completed higher secondary education with a focus on Science and Mathematics, building a strong analytical foundation.</p>
                    </div>
                </div>

                <!-- 10th Card -->
                <div class="edu-card">
                    <div class="edu-card-icon"><i class="bi bi-pencil-square"></i></div>
                    <div class="edu-card-content">
                        <span class="edu-date">2016 - 2018</span>
                        <h3>Secondary Education (10th)</h3>
                        <span class="edu-inst">Local School</span>
                        <p>Completed foundational schooling with excellence in core subjects and initial exposure to computer science.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'components/footer.php'; ?>