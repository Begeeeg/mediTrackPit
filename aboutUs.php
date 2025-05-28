<?php
    include("database.php"); // Adjusted the path to point to the correct location
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
    <link rel="stylesheet" href="aboutus.css" />
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
      <h1>About Us</h1>
      <div class="logo1">
        <div id="ustp-logo">
          <img src="image/ustp-logo.png" alt="logo" />
        </div>
        <div id="icpep-logo">
          <img src="image/icpep.jpg" alt="logo" />
        </div>
      </div>
      <br />
      <div class="info">
        <p>
          We are third-year Bachelor of Science in Computer Engineering students
          at the University of Science and Technology of Southern Philippines
          (USTP-CDO).
        </p>
        <br />
        <p>
          Our team proposes a project called 'MediTrack,' a Medical Inventory
          System that utilizes RFID technology and the ESP32 microprocessor to
          help medical staff monitor medical supplies in real time.
        </p>
        <br />
        <p>
          This system eliminates the need for manual tracking by providing
          real-time monitoring of medical supplies, ensuring that essential
          resources are always available when needed. By automating inventory
          management, MediTrack reduces human error, streamlines hospital
          workflows, and allows healthcare professionals to focus more on
          patient care rather than administrative tasks. Additionally, it
          enhances hospital efficiency, prevents supply wastage, and alleviates
          the burden of manual inventory management.
        </p>
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