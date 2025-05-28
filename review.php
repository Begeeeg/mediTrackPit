<?php
include("database.php");

$productRfid = isset($_GET['productRfid']) ? $_GET['productRfid'] : '';
$sql = "SELECT * FROM esp32_db WHERE productRfid = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $productRfid);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$record = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Review Record</title>
    <link rel="stylesheet" href="review.css" />
  </head>
  <body>
    <div class="header">
      <a href="home.php">
        <button class="back">
          <img src="image/back.png" alt="back" />
        </button>
      </a>
    </div>
    <div class="containerReview">
      <h2>Review Record</h2>
      <!-- <img src="<?php echo $record['photoPath']; ?>" alt="Medicine Image" style="width: 150px; height: 150px;" /> -->
      <p><strong>Product Name:</strong> <?php echo $record['productName']; ?></p>
      <p><strong>RFID Number:</strong> <?php echo $record['productRfid']; ?></p>
      <p><strong>Quantity:</strong> <?php echo $record['productQuantity']; ?></p>
      <p><strong>Date Stored:</strong> <?php echo $record['productDateStored']; ?></p>
      <p><strong>Date Expired:</strong> <?php echo $record['productDateExpired']; ?></p>

      <div class="actions">
        <a href="update.php?productRfid=<?php echo $productRfid; ?>">
          <button class="actionButton">Update</button>
        </a>
        <form method="POST" action="review.php?productRfid=<?php echo $productRfid; ?>" style="display: inline;">
          <button type="submit" name="delete" class="actionButton deleteButton">Delete</button>
        </form>
      </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
        $deleteSql = "DELETE FROM esp32_db WHERE productRfid = ?";
        $deleteStmt = mysqli_prepare($conn, $deleteSql);
        mysqli_stmt_bind_param($deleteStmt, "s", $productRfid);
        if (mysqli_stmt_execute($deleteStmt)) {
            echo "<script>alert('Record deleted successfully'); window.location.href='home.php';</script>";
        } else {
            echo "Failed to delete record: " . mysqli_error($conn);
        }
        mysqli_stmt_close($deleteStmt);
    }
    mysqli_close($conn);
    ?>
  </body>
</html>
