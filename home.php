<?php
    include("database.php");
    session_start(); // Start session for logout functionality
?>

<!DOCTYPE html>
<!-- Declares the document type as HTML -->
<html lang="en">
  <!-- Sets the language of the document to English -->
  <head>
    <meta charset="UTF-8" />
    <!-- Specifies the character encoding for the document -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Ensures proper rendering on mobile devices -->
    <title>Document</title>
    <!-- Sets the title of the page -->
    <link rel="stylesheet" href="home.css" />
    <!-- Links the external CSS file -->
  </head>
  <body>
    <!-- Home page for MediTrack -->
    <div class="header" id="header1">
      <!-- Header section -->
      <div id="logo">
        <!-- Logo container -->
        <a href="home.php">
          <!-- Link to navigate back to the login page -->
          <img src="image/1.jpg" alt="logo" style="width: 150px; height: 50px;" />
          <!-- Logo image -->
        </a>
      </div>

      <div id="title">MediTrack</div>
      <!-- Title of the application -->

      <div class="actions">
        <!-- Actions dropdown -->
        <div class="dropdown">
          <button class="actionButton dropdownButton">
            <img src="image/profile.png" />
          </button>
          <!-- Dropdown button -->
          <div class="dropdownContent">
            <!-- Dropdown content -->
            <button id="logoutButton" class="actionButton">Logout</button>
            <!-- Logout button -->
            <button id="resetStorageButton" class="actionButton">
              Reset Storage
            </button>
            <!-- Reset storage button -->
          </div>
        </div>
      </div>
    </div>

    <div class="container1">
      <!-- Main container -->
      <div id="medRec">Medicine Supply Record</div>
      <!-- Section title -->

      <!-- Search bar -->
      <div class="search-bar">
        <form method="GET" action="home.php">
          <input type="text" id="searchInput" name="search" placeholder="Search by Name or RFID Number" />
          <button type="submit" id="searchButton">Search</button>
        </form>
      </div>

      <div id="recordsContainer">
        <?php
          $search = isset($_GET['search']) ? "%" . $_GET['search'] . "%" : "%";
          $sql = "SELECT * FROM esp32_db WHERE productName LIKE ? OR productRfid LIKE ?";
          $stmt = mysqli_prepare($conn, $sql);
          mysqli_stmt_bind_param($stmt, "ss", $search, $search);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);

          if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                  echo "<a href='review.php?productRfid=" . $row['productRfid'] . "' style='text-decoration: none; color: inherit;'>";
                  echo "<div class='record' style='border: 2px solid #000; padding: 10px; margin: 0; border-radius: 10px;'>";
                  echo "<p>Product Name: " . $row['productName'] . "</p>";
                  echo "<p>RFID Number: " . $row['productRfid'] . "</p>";
                  echo "<p>Quantity: " . $row['productQuantity'] . "</p>";
                  echo "<p>Date Stored: " . $row['productDateStored'] . "</p>";
                  echo "<p>Date Expired: " . $row['productDateExpired'] . "</p>";
                  echo "</div>";
                  echo "</a>";
              }
          } else {
              echo "<p>No records found.</p>";
          }
        ?>
      </div>

      <div class="inventory">
        <!-- Add new record button -->
        <a href="create.php">
          <button class="addButton">+</button>
          <!-- Button to add a new record -->
        </a>
      </div>
    </div>

    <script src="home.js"></script>
  </body>
</html>

<?php
mysqli_close($conn);
?>