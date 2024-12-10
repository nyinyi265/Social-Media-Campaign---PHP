<!DOCTYPE html>
<?php
session_start();
$email = $_SESSION['email'];
include("dbconnect.php");

$sql = "SELECT * from service";
$resService = $conn->query($sql);

$sql2 = "SELECT * from newsletter";
$resNews = $conn->query($sql2);

$sub = 0;
$sql1 = "SELECT * from member WHERE email='$email'";
$resSub = $conn->query($sql1);
if ($resSub->num_rows > 0) {
    $row1 = $resSub->fetch_assoc();
    $sub = $row1['subscription'];
}

if (isset($_POST['btnSub'])) {
    $sub = $_POST['sub'];
    $sql3 = "UPDATE member SET subscription = '$sub' WHERE email= '$email' ";
    if ($conn->query($sql3) == TRUE) {
        echo " Newsletter subscribed";
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
        <section id="home">
            <div class="slider">
                <img src="images/kid-social3.jpeg" alt="">
                <h1>Stay Safety Online</h1>
            </div>
            <h2 class="campaign head">Welcome to Our Campaign</h2>
            <p class="campaign">In today's interconnected world, navigating the digital landscape safely is more crucial
                than ever. Our mission is to empower you with the knowledge and tools needed to protect yourself and
                your loved ones from online threats. Whether you're a seasoned internet user or just starting your
                digital journey, we are here to support you every step of the way.</p>

            <h2 id="ser">Available Services</h2>
            <?php
            if ($resService->num_rows > 0) {
            ?>
                <div class="web-web">
                    <?php
                    while ($rowSer = $resService->fetch_assoc()) {
                    ?>
                        <!--  Service 1 -->
                        <div class="web-service">
                            <h3><?php echo $rowSer['title']; ?></h3>
                            <p>
                                <?php echo $rowSer['description']; ?>
                            </p>
                            <p><?php echo $rowSer['info']; ?></p>
                            <p><strong><?php echo $rowSer['createdat']; ?></strong></p>
                            <a href="contact.php">
                                Get Services
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>

            <?php

            }
            ?>

            <div class="video">
                <iframe width="100%" height="550" src="https://www.youtube.com/embed/JpfEBQn2CjM" title="Pause, think and act -  - Cyber security awareness video - Security Quotient" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            <section>
                <?php
                if ($sub == 1) {
                ?>
                    <h2 id="news">Our Newsletter</h2>
                    <?php
                    if ($resNews->num_rows > 0) {
                    ?>
                        <div class="newsletter-container">
                            <?php
                            while ($rowNews = $resNews->fetch_assoc()) {
                            ?>
                                <div class="newsletter">
                                    <div class="newsletter-img">
                                        <p><img src="<?php echo "images\\" . $rowNews['image']; ?>" width="200px"></p>
                                    </div>
                                    <div class="newsletter-content">
                                        <h3><?php echo $rowNews['title']; ?></h3>
                                        <p>
                                            <?php echo $rowNews['content']; ?>
                                        </p>
                                        <p><strong><?php echo $rowNews['publishdate']; ?></strong></p>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="newsletter-sub">
                        <div class="newsletter-icon">
                            <img src="images/mail.png" alt="">
                        </div>
                        <h2>Newsletter</h2>
                        <p>Stay up to date with our latest news</p>
                        <form action="#" method="POST" class="newsletter-form-group">
                            <div class="newsletter-radio-group">
                                <div class="newsletter-radio">
                                    <input type="radio" id="name" name="sub" value="1" required />Yes
                                </div>
                                <div class="newsletter-radio">
                                    <input type="radio" id="name" name="sub" value="0" required />No
                                </div>
                            </div>
                            <div class="newsletter-button">
                                <button type="submit" name="btnSub">Subscribe</button>
                            </div>
                        </form>
                    </div>
                <?php }
                ?>
            </section>
            <br><br>

            <h2>The ways to Stay Safe Online</h2>
            <div class="slider-container">
                <div class="slider-item">
                    <img src="images/pass.png" alt="">
                    <h3>Set strong passwords</h3>
                    <p>Create strong, unique passwords using a mix of letters, numbers, and special characters. Avoid reusing passwords across sites to minimize the risk if one is compromised. A password manager can help generate and store secure passwords, protecting your accounts from unauthorized access.</p>
                </div>
                <div class="slider-item">
                    <img src="images/authentication.png" alt="">
                    <h3>Two-factor authentication</h3>
                    <p>Two-factor authentication (2FA) enhances your online security by requiring two forms of verification to access your accounts. In addition to your password, 2FA often involves a second factor like a code sent to your mobile device, an authenticator app, or biometric data such as a fingerprint or facial recognition.</p>
                </div>
                <div class="slider-item">
                    <img src="images/personal.jpg" alt="">
                    <h3>Limit Disclosure</h3>
                    <p>Being cautious with personal information online is crucial for protecting yourself from identity theft, scams, and other cyber threats. Limit the amount of personal data you share on social media, forums, and other online platforms. Details like your name, phone number, and birthdate can be exploited by malicious actors.</p>
                </div>
                <div class="slider-item">
                    <img src="images/privacy.png" alt="">
                    <h3>Update privacy settings</h3>
                    <p>Regularly update privacy settings on social media and online accounts to manage who can see your personal information. Adjust these settings to minimize control visibility, and prevent unauthorized access to your profiles and posts. This proactive approach helps protect your privacy and enhances your online security.</p>
                </div>
                <div class="slider-item">
                    <img src="images/virus.png" alt="">
                    <h3>Use antivirus software</h3>
                    <p>Antivirus software protects your devices from malware, viruses, and other cyber threats. Keep it updated to ensure comprehensive protection against the latest threats. Regular scans and real-time monitoring can detect and remove harmful software, safeguarding your personal data, and overall digital security.</p>
                </div>
                <div class="slider-item">
                    <img src="images/authenticity.png" alt="">
                    <h3>Verify Authenticity</h3>
                    <p>Always verify the authenticity of apps and websites before providing personal information or making transactions. Only download apps from official app stores and check user reviews and ratings for credibility. Ensure websites are secure by looking for "https" in the URL and a padlock icon. </p>
                </div>
            </div>

            <br>
            <hr>

            <section id="teen">
                <h1>The Impact of Social Media on the Teen Brain</h1>
                <div class="teen-brain-section">
                    <div class="teen-brain-image">
                        <img src="images/teen brain.jpg">
                    </div>
                    <div class="teen-brain-text">
                        <h2>Reward System and Dopamine</h2>
                        <p>Social media platforms are designed to provide instant feedback through likes, comments, and shares. This activates the brain's reward system, releasing dopamine, a neurotransmitter associated with pleasure and reward. Teens may become conditioned to seek this instant gratification, leading to habitual checking and potentially addictive behaviors.</p>
                    </div>
                </div>
                <div class="teen-brain-section">
                    <div class="teen-brain-image">
                        <img src="images/teen and smartphone.jpg">
                    </div>
                    <div class="teen-brain-text">
                        <h2>Social Comparison and Self-Esteem</h2>
                        <p>Teens often compare themselves to peers and influencers on social media, which can impact their self-esteem. Seeing idealized images and lifestyles can lead to unrealistic expectations and negative self-perception, potentially causing anxiety and depression.</p>
                    </div>
                </div>
                <div class="teen-brain-section">
                    <div class="teen-brain-image">
                        <img src="images/teen sleep.jpeg">
                    </div>
                    <div class="teen-brain-text">
                        <h2>Sleep Disruption</h2>
                        <p>The use of screens, especially before bedtime, can disrupt sleep patterns. The blue light emitted by screens can interfere with the production of melatonin, a hormone that regulates sleep, leading to difficulties falling asleep and lower sleep quality.</p>
                    </div>
                </div>
            </section>

            <section class="popular-apps">
                <div class="app">
                    <h2>Most Popular Social Media Platforms</h2>

                    <div class="facebook">
                        <img src="images/facebook.png" alt="">
                        <h3>Facebook</h3>
                    </div>
                    <div class="instagram">
                        <img src="images/instagram1.png" alt="">
                        <h3>Instagram</h3>
                    </div>
                    <div class="twitter">
                        <img src="images/twitter1.png" alt="">
                        <h3>Twitter</h3>
                    </div>
                    <div class="youtube">
                        <img src="images/youtubebgremove.png" alt="">
                        <h3>Youtube</h3>
                    </div>
                    <div class="whatsapp">
                        <img src="images/whatsapp-icon.png" alt="">
                        <h3>What's App</h3>
                    </div>
                    <div class="tiktok">
                        <img src="images/tiktok.png" alt="">
                        <h3>tiktok</h3>
                    </div>
                </div>
                </div>
            </section>
            <br><br>
        </section>
    </main>

    <footer>
        <h4>You are here: Home</h4>
        <div class="footer">
            <div class="footer-logo">
                <img src="images/logo.png" alt="">
            </div>
            <div class="copyright">
                <p class="footer-text"><a href="information.php">Information</a></p>
                <p class="footer-text"><a href="popular-apps.php">Popular Application</a></p>
                <p class="footer-text"><a href="parents-help.php">How Parents can Help</a></p>
                <p class="footer-text"><a href="livestreaming.php">Live Streaming Knowledge</a></p>
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