<?php
    include("database.php");
?>

<!DOCTYPE html>
<!-- Specifies the document type as HTML5 -->
<html lang="en">
  <!-- Sets the language of the document to English -->
  <head>
    <meta charset="UTF-8" />
    <!-- Sets the character encoding to UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Makes the page responsive -->
    <title>Document</title>
    <!-- Sets the title of the page -->
    <link rel="stylesheet" href="ourteam.css" />
    <!-- Links the external CSS file -->
  </head>
  <body>
    <div class="header">
      <!-- Header section with an ID for styling -->
      <div id="logo">
        <!-- Logo container -->
        <a href="index.php">
          <!-- Link to the homepage -->
          <img src="image/1.jpg" alt="logo" />
          <!-- Displays the logo image -->
        </a>
      </div>
    </div>

    <div class="container0">
      <h1>Our Team</h1>

      <div class="profiles">
        <div class="profile">
          <img src="image/torrentira.jpg" alt="Rafael Torrentira" />
          <h2>Rafael Torrentira</h2>
          <p>Position: Team Leader</p>
          <p>Contact: +1234567890</p>
          <p>Email: rafael@example.com</p>
          <p>
            <a href="https://www.facebook.com/fiddle0" target="_blank"
              >Facebook Profile</a
            >
          </p>
        </div>

        <div class="profile">
          <img src="image/bacol.jpg" alt="John Fidel Bacol" />
          <h2>John Fidel Bacol</h2>
          <p>Position: Developer</p>
          <p>Contact: +0987654321</p>
          <p>Email: john@example.com</p>
          <p>
            <a href="https://www.facebook.com/fiddle0" target="_blank"
              >Facebook Profile</a
            >
          </p>
        </div>

        <div class="profile">
          <img src="image/caiban.jpg" alt="Rose Mae Caiban" />
          <h2>Rose Mae Caiban</h2>
          <p>Position: Designer</p>
          <p>Contact: +1122334455</p>
          <p>Email: rose@example.com</p>
          <p>
            <a href="https://www.facebook.com/rosemae.caiban" target="_blank"
              >Facebook Profile</a
            >
          </p>
        </div>

        <div class="profile">
          <img src="image/yecyec.jpg" alt="Victor Manuel R. Yecyec" />
          <h2>Victor Manuel R. Yecyec</h2>
          <p>Position: QA Engineer</p>
          <p>Contact: +5566778899</p>
          <p>Email: victor@example.com</p>
          <p>
            <a
              href="https://www.facebook.com/victormanuel.yecyec"
              target="_blank"
              >Facebook Profile</a
            >
          </p>
        </div>
      </div>
    </div>

    <div class="footer">
      <!-- Footer section -->
      <p>&copy; 2025 MediTrack. All rights reserved.</p>
      <!-- Copyright notice -->
    </div>
    <!-- Links the external JavaScript file -->
  </body>
</html>


<?php

mysqli_close($conn);
?>