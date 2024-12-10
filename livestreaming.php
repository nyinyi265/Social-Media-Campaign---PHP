<!DOCTYPE html>
<?php
session_start();
$email = $_SESSION['email'];
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
  <div class="live-streaming-image">
        <img src="images/stream.jpeg" alt="">
      </div>
    <section id="live-stream">  
      <h2>Streaming in Real-Time</h2>
      <p>
        Explore an overview of livestreaming and learn how it can be done in a
        safe environment.
      </p>

      <p>
        Livestreaming is a popular way for individuals to share content in
        real-time. Here are some tips to ensure a safe livestreaming
        experience:
      </p>
      <div class="live-streaming-container">
        <div class="live-streaming-text">
            <h3>Safety Guidelines</h3>
            <ul>
                <li><strong>Be Respectful:</strong> Treat everyone with kindness and respect. Harassment or bullying will not be tolerated.</li>
                <li><strong>Report Issues:</strong> If you encounter inappropriate behavior or content, use the report feature immediately.</li>
                <li><strong>Stay Aware:</strong> Be cautious about sharing personal information during your stream.</li>
            </ul>
        </div>

        <div class="live-streaming-text">
            <h3>Privacy Controls</h3>
            <ul>
                <li><strong>Viewer Settings:</strong> Customize your privacy settings to limit who can view or comment on your stream.</li>
                <li><strong>Block and Restrict:</strong> Use our tools to block or restrict viewers who exhibit inappropriate behavior.</li>
            </ul>
        </div>

        <div class="live-streaming-text">
            <h3>Reporting System</h3>
            <ul>
                <li><strong>Easy Reporting:</strong> Use the reporting system to flag abusive content or behavior.</li>
                <li><strong>Prompt Review:</strong> Reports are reviewed promptly by our trained team to ensure swift action.</li>
            </ul>
        </div>

        <div class="live-streaming-text">
            <h3>Educational Resources</h3>
            <ul>
                <li><strong>Online Safety Tips:</strong> Access resources on online safety, handling bullying, and recognizing cyber threats.</li>
                <li><strong>Support Links:</strong> Find links to support organizations and mental health resources.</li>
            </ul>
        </div>

        <div class="live-streaming-text">
            <h3>Automated Moderation</h3>
            <ul>
                <li><strong>Content Filtering:</strong> Automated tools filter out offensive language and harmful content.</li>
                <li><strong>Behavior Detection:</strong> Algorithms detect and flag suspicious behavior in real-time.</li>
            </ul>
        </div>

        <div class="live-streaming-text">
            <h3>Emergency Support</h3>
            <ul>
                <li><strong>Support Resources:</strong> Find links to hotlines and counseling services for those affected by cyber bullying.</li>
                <li><strong>Visible Access:</strong> Emergency resources are prominently displayed for quick access.</li>
            </ul>
        </div>

        <div class="live-streaming-text">
            <h3>Stream Approval Process</h3>
            <ul>
                <li><strong>Content Review:</strong> Streams are reviewed to ensure they meet our safety guidelines before going live.</li>
            </ul>
        </div>

        <div class="live-streaming-text">
            <h3>Feedback Mechanism</h3>
            <ul>
                <li><strong>Provide Feedback:</strong> Share your experiences and suggest improvements for safety features.</li>
            </ul>
            <a href="contact.php" class="feedback-button">Give Feedback</a>
        </div>
    </div>
    </section>
  </main>

  <footer>
    <h4>You are here: Live Streaming Knowledge</h4>
    <div class="footer">
      <div class="footer-logo">
        <img src="images/logo.png" alt="">
      </div>
      <div class="copyright">
      <p class="footer-text"><a href="home.php">Home</a></p>
      <p class="footer-text"><a href="information.php">Information</a></p>
        <p class="footer-text"><a href="popular-apps.php">Popular Application</a></p>
        <p class="footer-text"><a href="parents-help.php">How Parents can Help</a></p>
        <p class="footer-text"><a href="contact.php">Contact Us</a></p>
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