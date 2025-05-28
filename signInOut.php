<?php
  include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container" id="signUp" style="display: none">
      <h1 class="formTitle">Sign Up</h1>
      <form action="register.php" method="post">
        <div class="inputGroup">
          <img src="image/user.png" alt="" />
          <input
            type="text"
            name="businessName"
            id="businessName"
            placeholder="Business Name"
            required
          />
          <label for="businessName">Business Name</label>
        </div>
        <div class="inputGroup">
          <img src="image/email.png" alt="" />
          <input
            type="email"
            name="email"
            id="email"
            placeholder="Email"
            required
          />
          <label for="email">Email</label>
        </div>
        <div class="inputGroup">
          <img src="image/user.png" alt="" />
          <input
            type="text"
            name="username"
            id="username"
            placeholder="Username"
            required
          />
          <label for="username">Username</label>
        </div>
        <div class="inputGroup">
          <img src="image/padlock.png" alt="" />
          <input
            type="password"
            name="password"
            id="password"
            placeholder="Password"
            required
          />
          <label for="password">Password</label>
        </div>
        <br />
        <input type="submit" name="submitSignUp" id="submitSignUp" value="Sign Up" />
      </form>
      <br>
      <div class="links">
        <p>Already have an account?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>


    
    <div class="container" id="signIn">
      <h1 class="formTitle">Sign In</h1> <!-- Fixed title -->
      <form action="register.php" method="post">
      <div class="inputGroup">
          <img src="image/user.png" alt="" />
          <input
            type="text"
            name="username"
            id="username"
            placeholder="Username"
            required
          />
          <label for="username">Username</label>
        </div>
        <div class="inputGroup">
          <img src="image/padlock.png" alt="" />
          <input
            type="password"
            name="password"
            id="password"
            placeholder="Password"
            required
          />
          <label for="password">Password</label>
        </div>
        <input type="submit" name="submitSignIn" id="submitSignIn" value="Sign In" />
      </form>
      <br>
      <div class="links">
        <p>Dont have an account?</p>
        <button id="signUpButton">Sign Up</button>
      </div>
    </div>

    <script src="script.js"></script>
  </body>
</html>
<?php
  mysqli_close($conn);
?>