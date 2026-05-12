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
                <li><a href="about.php#education">Education</a></li>
                <li><a href="studies.php">Case Studies</a></li>
                <li><a href="work.php">Recent Work</a></li>
            </ul>
        </div>
        <div class="menu_icon">
             <i class="bi bi-list" onclick="togglemenu()" style="cursor:pointer"></i>
        </div>
        <div class="right_side">
            <button><a href="#" onclick="toggleLogin()">Get In Touch</a></button>
        </div>
      </nav>

      <div class="info_box" id="info">
            <h3>Hey, Guys</h3>
            <div class="info_img">
               <img src="assect/logo.png" alt="">
            </div>
        <div class="info_imfo" id="imfo">
          <form action="" method="POST">
            <input type="text" name="name" placeholder="Name" required>
            <div class="mb-3">
                <input type="text" name="phone" placeholder="Phone No" required maxlength="10">
            </div>
            <div>
                <textarea name="message" placeholder="Message" required maxlength="100"></textarea>
             </div>
             <div class="mt-3">
                <button type="submit" onclick="showMessage()">Send me</button>
             </div>
          </form>
        </div>
      </div>
    </header>