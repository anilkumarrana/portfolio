<?php 
    $pageTitle = "Case Studies - Anil Rana";
    include 'components/header.php'; 
?>

<section class="about-hero">
    <div class="hero-mesh"></div>
    <div class="container about-hero-content reveal">
        <div class="breadcrumb-pill">
            <a href="index.php">Home</a>
            <i class="bi bi-chevron-right"></i>
            <span>Case Studies</span>
        </div>
        <h1 class="hero-title">Proven <span class="italic-accent">Solutions</span></h1>
        <p class="hero-subtitle">A collection of projects where I've bridged the gap between complex problems and elegant digital solutions.</p>
    </div>
    <div class="bg-watermark">WORKS</div>
</section>

<section class="projects-section">
    <div class="container">
        <div class="project-grid">
            <!-- Case 1 -->
            <div class="edu-card">
                <div class="edu-icon-glow"></div>
                <div class="edu-badge">E-Commerce</div>
                <div class="edu-card-content">
                    <span class="edu-date">2024</span>
                    <h3>Global Retail Engine</h3>
                    <p>A high-performance scalable platform handling 10k+ concurrent users.</p>
                    <a href="case-study.php" class="edu-cta">View Case Study <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <!-- Case 2 -->
            <div class="edu-card">
                <div class="edu-icon-glow"></div>
                <div class="edu-badge">FinTech</div>
                <div class="edu-card-content">
                    <span class="edu-date">2023</span>
                    <h3>Secure Wallet API</h3>
                    <p>Architecture for encrypted transaction processing and real-time auditing.</p>
                    <a href="case-study.php" class="edu-cta">View Case Study <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'components/footer.php'; ?>