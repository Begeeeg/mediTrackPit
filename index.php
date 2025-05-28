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
    <title>MediTrack</title>
    <!-- Sets the title of the page -->
    <link rel="stylesheet" href="index.css" />
    <!-- Links the external CSS file -->
  </head>
  <body>
    <!-- Main landing page for MediTrack -->
    <div class="header" id="header0">
      <!-- Header section with an ID for styling -->
      <div id="logo">
        <!-- Logo container -->
        <a href="index.php">
          <!-- Link to the homepage -->
          <img src="image/1.jpg" alt="logo" />
          <!-- Displays the logo image -->
        </a>
      </div>
      <div class="Team">
        <div id="aboutUsContainer">
          <!-- Container for the "About Us" button -->
          <a href="aboutUs.php">
            <!-- Updated link to point to the correct relative path -->
            <button id="aboutUs">About Us</button>
            <!-- Button for navigating to About Us -->
          </a>
        </div>

        <div id="ourTeamContainer">
          <!-- Container for the "About Us" button -->
          <a href="ourTeam.php">
            <!-- Updated link to point to the correct relative path -->
            <button id="aboutUs">Our Team</button>
            <!-- Button for navigating to About Us -->
          </a>
        </div>
      </div>
    </div>

    <div class="container0">
      <!-- Main content container -->
      <div class="circle-container">
        <!-- Circular container for the logo -->
        <a href="index.php">
          <!-- Link to the homepage -->
          <img src="image/1.jpg" alt="Logo" />
          <!-- Displays the logo image -->
        </a>
      </div>
      <h1 id="MediTrack">MediTrack</h1>
      <!-- Main heading of the page -->
      <div>
        <p>
          <!-- Description of the MediTrack system -->
          Medical Inventory System that will be automated using RFID technology
          and the ESP32 microprocessor. This system eliminates the need for
          manual tracking by providing real-time monitoring of medical supplies,
          ensuring that essential resources are always available when needed. By
          automating inventory management, MediTrack helps reduce human error,
          streamline hospital workflows, and allow healthcare professionals to
          focus more on patient care rather than administrative tasks. By
          automating inventory workflows, MediTrack enhances hospital
          efficiency, it also helps to prevent supply wastage, and alleviates
          the administrative burden on healthcare professionals, enabling them
          to focus more on patient care. This improved efficiency not only
          reduces hassle but also contributes to better patient outcomes, making
          MediTrack a scalable and reliable solution for modern healthcare
          facilities.
          <br /><br />
          By leveraging modern technology, the system aims to enhance stock
          tracking, prevent supply shortages, and ultimately contribute to
          better patient outcomes. Moreover, through real-time analysis and
          reporting, MediTrack allows for hospital managers to make informed
          decisions, forecast supply needs, and increase inventory management.
          By using these technologies, this system makes healthcare facilities
          more efficient and dependable while enhancing patients’ healthcare
          results, optimizing available resources, and enabling a more agile
          medical supply chain. And also, through RFID technology and automated
          data processing, MediTrack ensures that hospitals maintain optimal
          stock levels, reducing the risks associated with manual tracking
          errors. The system continuously updates inventory records, allowing
          hospital staff to instantly access supply information, locate
          essential medical items, and prevent delays in patient care. By
          streamlining inventory processes and improving supply chain agility,
          MediTrack ensures that hospitals operate efficiently,
          cost-effectively, and with a stronger focus on patient care,
          ultimately contributing to improved healthcare outcomes.
        </p>

        <a href="signInOut.php">
          <!-- Link to the login page -->
          <button id="logIn">Sign In</button>
          <!-- Button to navigate to the login page -->
        </a>
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