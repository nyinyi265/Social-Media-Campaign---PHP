<!DOCTYPE html>
<?php

include("dbconnect.php");
if (isset($_POST['btnReg'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $city = $_POST['city'];
  $sub = $_POST['sub'];

  $sql = "INSERT INTO member (name,email,password,city,subscription,usertype) VALUES ('$name','$email','$password','$city','$sub',0) ";

  if ($conn->query($sql)) {
    session_start();
    $_SESSION['email'] = $email;
    header("location:home.php");
  }
}

?>

<html lang="en">

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
    <section>
      <div class="registration">
        <div class="registration-image">
          <img src="images/registration.jpg" alt="">
        </div>
        <div class="registration-container">
          <h2>Registration</h2>
          <div class="registration-inner-form">
            <form action="#" method="POST" class="registration-form-group">
              <div class="registration-form-field">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required />
              </div>
              <div class="registration-form-field">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required />
              </div>
              <div class="registration-form-field">
                <label for="name">Password:</label>
                <input type="password" id="name" name="password" required />
              </div>
              <div class="registration-form-field">
                <label for="name">City:</label>
                <input type="text" id="name" name="city" required />
              </div>
              <label for="name">Newsletter Subscription:</label>
              <div class="registration-radio">
                <div class="registration-radio-button">
                  <input type="radio" id="name" name="sub" value="1" required />Yes
                </div>
                <div class="registration-radio-button">
                  <input type="radio" id="name" name="sub" value="0" required />No
                </div>
              </div>
              <div class="registration-button-container">
                <button type="submit" name="btnReg">Register</button>
              </div>
              <p>Already Have an Account? <a href="login.php">Login Here</a></p>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>

</html>