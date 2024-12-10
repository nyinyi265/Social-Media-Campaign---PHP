<!DOCTYPE html>
<?php 
  session_start();
  $email=$_SESSION['email'];
  include("dbconnect.php");
  if(isset($_POST['btnMsg']))
  {
     $msg=$_POST['msg'];
     $sql=" INSERT INTO contactus (message,email) VALUES ('$msg','$email') ";
     if($conn->query($sql))
     {
      header("location:contact.php");
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
        <li class="link"><a href="home.php">Home</a></li>
        <li class="link"><a href="information.php">Information</a></li>
        <li>
          Campaigns
          <ul class="dropdown">
            <li class="link">
              <a href="popular-apps.php">Popular Apps</a>
            </li>
            <li class="link">
              <a href="parents-help.php">Parents Help</a>
            </li>
            <li class="link">
              <a href="livestreaming.php">Livestreaming</a>
            </li>
          </ul>
        </li>

        <li class="link"><a href="contact.php">Contact</a></li>
        <li class="link"><a href="legislation.php">Legislation</a></li>
        <li class="link"><a href="logout.php">Logout</a></li>
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
      <section id="msg">
        <h2>Contact Us</h2>
        <p>
          Feel free to reach out to us using the contact form below. We
          appreciate your feedback and inquiries.
        </p>

        <!-- Contact Form -->
        <form action="#" method="post" class="contact-form">
          <label for="message">Message:</label>
          <textarea id="message" rows="4" name="msg" required></textarea>
          <div class="contact-button">
          <button type="submit" name="btnMsg">Send Message</button>
          </div>
        </form>
        <div class="clear"></div>
        <p>
        Kindly review our  <a href="privacy-policy.html" target="_blank">Privacy Policy</a> before sending a message.
         
        </p>
      </section>
    </main>

    <footer>
    <h4>You are here: Contact Us</h4>
    <div class="footer">
      <div class="footer-logo">
        <img src="images/logo.png" alt="">
      </div>
      <div class="copyright">
      <p class="footer-text"><a href="home.php">Home</a></p>
      <p class="footer-text"><a href="information.php">Information</a></p>
        <p class="footer-text"><a href="popular-apps.php">Popular Application</a></p>
        <p class="footer-text"><a href="parents-help.php">How Parents can Help</a></p>
        <p class="footer-text"><a href="livestreaming.php">Live Streaming Knowledge</a></p>
        <p class="footer-text"><a href="legislation.php">Legislation</a></p>
        <div class="clear"></div>
      </div>
      <div class="footer-content">
        <a href="https://www.facebook.com" style="color: white"><img src="images/facebook1.png" alt="" width="30px" height="25px"></a>
        <a href="https://www.twitter.com" style="color: white; margin-left: 5px"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
          </svg></a>
        <a href="https://www.instagram.com" style="color: white; margin-left: 10px"><img src="images/instagram.png" alt="" width="25px" height="25px"></a>
        <a href="https://www.youtube.com" style="color: white; margin-left: 10px"><img src="images/youtube.png" alt="" width="30px" height="25px"></a>
        <p class="mid-footer">&copy; 2024 Online Safety Campaign. All rights reserved</p>
      </div>
    </div>
  </footer>
  </body>
</html>
