<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (isset($_SESSION['fail_attempt'])) {
  $time = time();
  if ($time >= $_SESSION['fail_attempt']) {
    unset($_SESSION['attempt']);
    unset($_SESSION['fail_attempt']);
    unset($_SESSION['message']);
    unset($_SESSION['check']);
  }
}
?>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Online Safety Campaign</title>
  <link rel="stylesheet" href="home.css">
</head>
<body>
  <nav>
    <img src="images/logo.png" alt="">
    <h1>Cyber Guardians</h1>
    <ul>
      <li class="link"><a href="index.php">Home</a></li>
      <li class="link"><a href="before-info.php">Information</a></li>
      <li class="link"><a href="before-legi.php">Legislation</a></li>
      <li class="link"><a href="login.php">Login</a></li>
    </ul>
    <div class="searchBox">
      <input class="searchInput" type="text" name="" placeholder="Search">
      <button class="searchButton" href="#">
        <i class="material-icons">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
          </svg>
        </i>
      </button>
    </div>
  </nav>

  <main>
    <section id="login-form-section">
      <div class="login">
        <div class="login-image">
          <img src="images/login.jpeg" alt="">
        </div>
        <div class="login-form">
          <h2>Login</h2>
          <?php
          if (isset($_SESSION['message'])) {
          ?>
            <div class="alert">
              <?php
              echo $_SESSION['message'];
              ?>
            </div>
          <?php } ?>
          <?php if (isset($_SESSION['check']) != 1) { ?>
            <div class="login-inner-form">

              <form action="login-success.php" method="POST">

                <div class="login-form-field">
                  <label for="email">Email:</label>
                  <input type="email" id="email" name="email" required />
                </div>
                <div class="login-form-field">
                  <label for="message">Password:</label>
                  <input type="password" id="email" name="password" required />
                </div>
                <div class="login-button-container">
                  <button type="submit">Login</button>
                </div>
              </form>
            <?php } ?>
            <div class="regi">
              Don't Have an Account? <a href="registration.php"> Reigster Here </a>
            </div>
            </div>
        </div>
      </div>
      <br>
    </section>
  </main>
</body>
</html>