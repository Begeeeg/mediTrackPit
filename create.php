<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Record</title>
    <link rel="stylesheet" href="create.css" />
  </head>
  <body>
    <div class="header">
      <a href="home.php">
        <button class="back">
          <img src="image/back.png" alt="back" style="width: 150px; height: 50px;" />
        </button>
      </a>
    </div>
    <div class="containerCreate">
      <form id="userInputForm" method="POST" action="create.php" enctype="multipart/form-data">
        <label for="productName">Product Name:</label>
        <br>
        <input
          type="text"
          id="productName"
          name="productName"
          required
        />
        <br>

        <label for="productRfid">RFID Number:</label>
        <br />
        <input
          type="text"
          id="productRfid"
          name="productRfid"
          required
        />
        <br />

        <label for="productQuantity">Quantity:</label>
        <br />
        <input
          type="text"
          id="productQuantity"
          name="productQuantity"
          required
          pattern="\d{1,1000000000}"
          maxlength="10"
          title="Please enter a valid quantity"
        />
        <br />

        <label for="productDateStored">Date Stored:</label>
        <br />
        <input type="date" id="productDateStored" name="productDateStored" required />
        <br />

        <label for="productDateExpired">Date Expired:</label>
        <br />
        <input type="date" id="productDateExpired" name="productDateExpired" required />
        <br />

        <div class="subButton">
          <button type="submit" id="submit">Submit</button>
        </div>
      </form>
    </div>
  </body>
</html>

<?php
function showNotificationAndRedirect($message, $redirectUrl = null) {
    echo "<script>alert('$message');";
    if ($redirectUrl) {
        echo "window.location.href = '$redirectUrl';";
    }
    echo "</script>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = filter_input(INPUT_POST, "productName", FILTER_SANITIZE_SPECIAL_CHARS);
    $productRfid = filter_input(INPUT_POST, "productRfid", FILTER_SANITIZE_SPECIAL_CHARS);
    $productQuantity = filter_input(INPUT_POST, "productQuantity", FILTER_SANITIZE_SPECIAL_CHARS);
    $productDateStored = filter_input(INPUT_POST, "productDateStored", FILTER_SANITIZE_SPECIAL_CHARS);
    $productDateExpired = filter_input(INPUT_POST, "productDateExpired", FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($productName)) {
        showNotificationAndRedirect('Enter Product Name'); // Added missing semicolon
    } elseif (empty($productRfid)) {
        showNotificationAndRedirect('Enter RFID Number');
    } elseif (empty($productQuantity)) { // Corrected variable name
        showNotificationAndRedirect('Enter Quantity');
    } elseif (empty($productDateStored)) {
        showNotificationAndRedirect('Enter Date Stored');
    } elseif (empty($productDateExpired)) {
        showNotificationAndRedirect('Enter Date Expired');
    } else {
        $sql = "INSERT INTO esp32_db (productName, productRfid, productQuantity, productDateStored, productDateExpired) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sssss", $productName, $productRfid, $productQuantity, $productDateStored, $productDateExpired);
            if (mysqli_stmt_execute($stmt)) {
                showNotificationAndRedirect('Register Successfully', 'home.php');
            } else {
                echo "Failed to insert record: " . mysqli_error($conn);
            }
            mysqli_stmt_close($stmt);
        } else {
            echo "Failed to prepare statement: " . mysqli_error($conn);
        }
    }
    
}
mysqli_close($conn);
?>