<?php 
    $pageTitle = "Project Detail - Anil Rana";
    include 'components/header.php'; 
?>

<section class="case-detail">
    <div class="container">
        <div class="case-header reveal">
            <span class="edu-date">Featured Project</span>
            <h1 class="section_title">Global Retail Engine</h1>
            <div class="tech-stack-pills">
                <span>React</span>
                <span>Node.js</span>
                <span>AWS</span>
                <span>PostgreSQL</span>
            </div>
        </div>

        <div class="case-content-grid">
            <div class="case-main-info reveal">
                <div class="case-image-placeholder">
                    <!-- Replace with project image -->
                    <img src="assect/anil01.jpeg" alt="Project Screenshot">
                </div>
                
                <h2 class="sub_heading">The Challenge</h2>
                <p>The client required a system capable of managing inventory across 50+ global locations with millisecond latency for stock updates during high-traffic sales events.</p>
                
                <h2 class="sub_heading">The Solution</h2>
                <p>I implemented a microservices architecture using Redis for caching and a message queue system to handle asynchronous inventory updates, ensuring data consistency across all nodes.</p>
            </div>

            <div class="case-sidebar reveal">
                <div class="sidebar-box">
                    <h4>Role</h4>
                    <p>Lead Backend Engineer</p>
                </div>
                <div class="sidebar-box">
                    <h4>Timeline</h4>
                    <p>6 Months (Jan - June 2024)</p>
                </div>
                <div class="sidebar-box">
                    <h4>Deliverables</h4>
                    <ul>
                        <li>Admin Dashboard</li>
                        <li>Public API</li>
                        <li>Mobile App Sync</li>
                    </ul>
                </div>
                <a href="#" class="form_submit_btn">
                    <i class="bi bi-globe"></i> Live Preview
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'components/footer.php'; ?>