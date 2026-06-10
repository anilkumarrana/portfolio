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

    <title><?php echo isset($pageTitle) ? $pageTitle : "Portfolio - Anil"; ?></title>
</head>
<body>
    <header>
      <nav class="navabr">
        <div class="left_side">
            <a href="index.php"><img src="assect/logo.png" alt=""></a>
        </div>
        <div class="medle_side" id="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us </a></li>
                <li><a href="education.php">Education</a></li>
                <li><a href="cases.php">Case Studies</a></li>
            </ul>
        </div>
        <div class="menu_icon">
             <i class="bi bi-list" onclick="togglemenu()" style="cursor:pointer"></i>
        </div>
        <div class="right_side">
            <button onclick="toggleLogin(event)">Get In Touch</button>

            <div class="info_box" id="info">
                <div class="info_header">
                    <div class="header_content">
                        <h3>Let's Connect</h3>
                        <p>Have a project in mind? Drop a message!</p>
                    </div>
                    <i class="bi bi-x-lg close-btn" onclick="toggleLogin(event)"></i>
                </div>
                <div class="info_imfo" id="imfo">
                    <form action="index.php" method="POST">
                        <div class="custom_input_group">
                            <i class="bi bi-person"></i>
                            <input type="text" name="name" placeholder="Full Name" required>
                        </div>
                        <div class="custom_input_group">
                            <i class="bi bi-envelope-at"></i>
                            <input type="email" name="email" placeholder="Email Address" required maxlength="100">
                        </div>
                        <div class="custom_input_group">
                            <textarea name="message" placeholder="How can I help you?" required maxlength="100"></textarea>
                        </div>
                        <button type="submit" class="form_submit_btn">
                            Send Message <i class="bi bi-send-fill"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
      </nav>
    </header>

    <!-- Custom Namskar Alert -->
    <div id="customAlertBox" class="custom-alert-overlay">
        <div class="custom-alert-card">
            <span class="namskar-icon">🙏</span>
            <h2 style="color: var(--white); font-family: 'Merriweather', serif; margin-bottom: 5px;">Namskar!</h2>
            <p style="color: var(--slate); font-size: 15px; margin-bottom: 20px;">I'm Anil. Let's get in touch!</p>
            
            <form action="index.php" method="POST">
                <div class="custom_input_group">
                    <i class="bi bi-person"></i>
                    <input type="text" name="name" placeholder="Your Name" required>
                </div>
                <div class="custom_input_group">
                    <i class="bi bi-telephone"></i>
                    <input type="text" name="email" placeholder="Contact Details" required>
                </div>
                <input type="hidden" name="message" value="Automated greeting form submission.">
                <div style="display: flex; gap: 10px;">
                    <button type="submit" class="form_submit_btn" style="padding: 10px;">Submit</button>
                    <button type="button" class="form_submit_btn" style="padding: 10px; background: transparent; border: 1px solid var(--primary-glow); color: var(--primary-glow);" onclick="closeCustomGreeting()">Maybe Later</button>
                </div>
            </form>
        </div>
    </div>