document.getElementById("logoutButton").addEventListener("click", function () {
  // Logout functionality
  fetch("logout.php").then(() => {
    window.location.href = "index.php"; // Redirect to login page
  });
});

document
  .getElementById("resetStorageButton")
  .addEventListener("click", function () {
    // Reset storage functionality
    if (confirm("Are you sure you want to reset the storage?")) {
      fetch("resetStorage.php").then(() => {
        alert("Storage reset successfully.");
        window.location.reload(); // Reload the page
      });
    }
  });
