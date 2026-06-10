<?php 
    $pageTitle = "About Me - Anil Rana";
    include 'components/header.php'; 
?>

    <!-- About Hero Section -->
    <section class="about-hero">
        <div class="hero-mesh"></div>
        <div class="container">
            <div class="about-hero-content reveal">
                <h1 class="hero-title">About Us</h1>
                <div class="hero-link-wrapper">
                    <a href="index.php" class="hero-nav-link">Home</a> <span class="separator">/</span> <span class="current">About Us</span>
                </div>
            </div>
        </div>
        <div class="bg-watermark">ABOUT</div>
    </section>

    <!-- Detailed About / History Section -->
    <section class="journey-v2" id="about">
        <div class="container">
            <div class="journey-wrapper">
                <div class="journey-text reveal">
                    <h2 class="section_title">My Story</h2>
                    <h3>Software Engineer & Problem Solver</h3>
                    <p>
                        Hello! I'm Anil Rana. My journey into technology began with a curiosity for how digital experiences are crafted. I pursue a path in Computer Science to build high-performance web applications.
                    </p>
                    <p>
                        With experience spanning sales strategy at Infinity Learn to technical roles at Echo 11, I believe great software bridges the gap between technical requirements and human needs.
                    </p>
                    <div class="journey-stats">
                        <div class="stat-item"><h4>2+</h4><p>Years Experience</p></div>
                        <div class="stat-item"><h4>10+</h4><p>Projects Done</p></div>
                    </div>
                </div>
                <div class="journey-image-box reveal">
                    <div class="image-frame">
                        <img src="assect/anil01.jpeg" alt="Anil Rana">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="skills-section reveal">
        <div class="container">
            <h2 class="section_title">My Skills</h2>
            <div class="skills-grid reveal">
                <div class="edu-card">
                    <div class="edu-icon-glow"></div>
                    <div class="edu-card-icon"><i class="bi bi-code-slash"></i></div>
                    <div class="edu-card-content">
                        <h3>Frontend Development</h3>
                        <p>HTML, CSS, JavaScript, React, Vue.js, Bootstrap</p>
                    </div>
                </div>
                <div class="edu-card">
                    <div class="edu-icon-glow"></div>
                    <div class="edu-card-icon"><i class="bi bi-server"></i></div>
                    <div class="edu-card-content">
                        <h3>Backend Development</h3>
                        <p>Node.js, Express, PHP, Python, SQL, MongoDB</p>
                    </div>
                </div>
                <div class="edu-card">
                    <div class="edu-icon-glow"></div>
                    <div class="edu-card-icon"><i class="bi bi-cloud"></i></div>
                    <div class="edu-card-content">
                        <h3>Cloud & DevOps</h3>
                        <p>AWS (EC2, S3), Docker, Git, CI/CD</p>
                    </div>
                </div>
                <div class="edu-card">
                    <div class="edu-icon-glow"></div>
                    <div class="edu-card-icon"><i class="bi bi-tools"></i></div>
                    <div class="edu-card-content">
                        <h3>Tools & Workflow</h3>
                        <p>VS Code, Figma, Agile, RESTful APIs, Git Workflow</p>
                    </div>
                </div>
                <div class="edu-card">
                    <div class="edu-icon-glow"></div>
                    <div class="edu-card-icon"><i class="bi bi-database"></i></div>
                    <div class="edu-card-content">
                        <h3>Databases</h3>
                        <p>MySQL, PostgreSQL, MongoDB</p>
                    </div>
                </div>
                <div class="edu-card">
                    <div class="edu-icon-glow"></div>
                    <div class="edu-card-icon"><i class="bi bi-gear"></i></div>
                    <div class="edu-card-content">
                        <h3>Other Tech</h3>
                        <p>Problem Solving, Data Structures, Algorithms, UI/UX Principles</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'components/footer.php'; ?>