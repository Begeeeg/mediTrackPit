<?php
    include("database.php");

    $productRfid = isset($_GET['productRfid']) ? $_GET['productRfid'] : '';
    $sql = "SELECT * FROM esp32_db WHERE productRfid = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $productRfid); // Use "s" for string
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $record = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Record</title>
    <link rel="stylesheet" href="update.css" />
  </head>
  <body>
    <div class="header">
      <a href="home.php">
        <button class="back">
          <img src="image/back.png" alt="back"/>
        </button>
      </a>
    </div>
    <div class="containerCreate">
      <form id="updateForm" method="POST" action="update.php?productRfid=<?php echo $productRfid; ?>" enctype="multipart/form-data">
       <label for="name">Product Name:</label>
        <br />
        <input type="text" id="productName" name="productName" value="<?php echo $record['productName']; ?>" required />
        <br />

        <label for="productRfid">RFID Number:</label>
        <br />
        <input type="text" id="productRfid" name="productRfid" value="<?php echo $record['productRfid']; ?>" readonly />
        <br />

        <label for="productQuantity">Quantity:</label>
        <br />
        <input type="number" id="productQuantity" name="productQuantity" value="<?php echo $record['productQuantity']; ?>" required />
        <br />

        <label for="productDateStored">Date Stored:</label>
        <br />
        <input type="date" id="productDateStored" name="productDateStored" value="<?php echo $record['productDateStored']; ?>" required />
        <br />

        <label for="productDateExpired">Date Expired:</label>
        <br />
        <input type="date" id="productDateExpired" name="productDateExpired" value="<?php echo $record['productDateExpired']; ?>" required />
        <br />

        <div class="subButton">
          <button type="submit" id="save">Save</button>
        </div>
      </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $productName = filter_input(INPUT_POST, "productName", FILTER_SANITIZE_SPECIAL_CHARS);
        $productQuantity = filter_input(INPUT_POST, "productQuantity", FILTER_SANITIZE_SPECIAL_CHARS); // Corrected variable name
        $productDateStored = filter_input(INPUT_POST, "productDateStored", FILTER_SANITIZE_SPECIAL_CHARS);
        $productDateExpired = filter_input(INPUT_POST, "productDateExpired", FILTER_SANITIZE_SPECIAL_CHARS);

        $sql = "UPDATE esp32_db SET productName = ?, productQuantity = ?, productDateStored = ?, productDateExpired = ? WHERE productRfid = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sssss", $productName, $productQuantity, $productDateStored, $productDateExpired, $productRfid);
            if (mysqli_stmt_execute($stmt)) {
                echo "<script>alert('Record updated successfully'); window.location.href='home.php';</script>";
            } else {
                echo "Failed to update record: " . mysqli_error($conn);
            }
            mysqli_stmt_close($stmt);
        } else {
            echo "Failed to prepare statement: " . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
    ?>
  </body>
</html>