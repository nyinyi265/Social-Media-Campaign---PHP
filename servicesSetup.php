<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Online Safety Campaign</title>
  <link rel="stylesheet" href="home.css">
</head>
<?php
include('dbconnect.php');
if (isset($_GET['btnSubmit'])) {
  $title = $_GET['title'];
  $des = $_GET['des'];
  $info = $_GET['info'];

  $sql = "INSERT INTO service (title, description, info) VALUES ('$title', '$des', '$info');";
  if ($conn->query($sql) == TRUE) {
    echo " Insert service successfully ";
    header("location:servicesSetup.php");
  }
}

$sql1 = "SELECT * from service";
$result = $conn->query($sql1);

if (isset($_POST['btnsearch'])) {
  $search = $_POST['search'];

  $sql = "SELECT * FROM service where title LIKE '%" . $search . "%'";
  $result = $conn->query($sql);
} else {
  $sql = "SELECT * FROM service";
  $result = $conn->query($sql);
}

if (isset($_GET['deleteid'])) {
  $del = $_GET['deleteid'];

  $sql = "DELETE from service where id='$del'";
  if ($conn->query($sql) == true) {
    header("location:servicesSetup.php");
  }
}

if (isset($_GET['editid'])) {
  $edit = $_GET['editid'];

  $sql = "SELECT * from service where id=$edit";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
}

if (isset($_GET['btnupd'])) {
  $id = $_GET['id'];
  $title = $_GET['title'];
  $des = $_GET['des'];
  $info = $_GET['info'];

  $sql = "UPDATE service SET title='$title', description='$des', info='$info' where id=$id";

  if ($conn->query($sql) == true) {
    header("location:servicesSetup.php");
  }
}
?>

<body>
  <nav>
    <img src="images/logo.png" alt="">
    <h1>Cyber Guardians</h1>
    <ul>
      <li class="link"><a href="adminhome.php">Home</a></li>
      <li class="link"><a href="servicesSetup.php">Services</a></li>
      <li class="link"><a href="newsletterSetup.php">NewsLetter</a></li>
      <li class="link"><a href="howparenthelpSetup.php">HowParentHelp</a></li>
      <li class="link"><a href="socialmediaappSetup.php">SocialMediaApps</a></li>
      <li class="link"><a href="contactList.php">Help/Support</a></li>
      <li class="link"><a href="MemberList.php">MemberList</a></li>
      <li class="link"><a href="logout.php">Logout</a></li>
    </ul>

  </nav>
  <header>
    <h1>Services Set up</h1>
    <div class="searchBox-admin">
      <form method="POST">
        <input name="search" class="searchInput" type="text" placeholder="Search">
        <button type="submit" class="searchButton" name="btnsearch">
          <i class="material-icons">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
            </svg>
          </i>
        </button>
      </form>
    </div>
  </header>

  <main>
    <section class="setup">
      <form action="#" method="GET" class="form-group">
        <input type="hidden" name="id" value="<?php echo isset($row['id']) ? $row['id'] : " "; ?>">
        <div class="form-field">
          <label for="name"><strong>Title:</strong></label>
          <input type="text" id="name" name="title" value="<?php echo isset($row['title']) ? $row['title'] : " "; ?>" required />
        </div>
        <div class="form-field">
          <label for="message"><strong>Description:</strong></label>
          <textarea id="message" name="des" rows="1" required><?php echo isset($row['description']) ? $row['description'] : " "; ?></textarea>
        </div>
        <div class="form-field">
          <label for="message"><strong>Information:</strong></label>
          <textarea id="message" name="info" rows="1" required><?php echo isset($row['info']) ? $row['info'] : " "; ?></textarea>
        </div>
        <div class="button-container">
          <?php if (isset($_GET['editid'])) { ?>
            <button type="submit" name="btnupd" class="button">Update</button>
          <?php } else { ?>
            <button type="submit" name="btnSubmit" class="button">Save</button>
          <?php } ?>
        </div>
      </form>
      <?php
      if ($result->num_rows > 0) {
      ?>
        <h2 class="heading"> List of Services </h2>
        <table cellspacing="5" cellpadding="5px">
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Information</th>
            <th>Created At</th>
            <th>Action</th>
          </tr>
          <?php
          while ($row = $result->fetch_assoc()) {
          ?>
            <tr class="table-data">
              <td class="id"><?php echo $row['id']; ?></td>
              <td><?php echo $row['title']; ?></td>
              <td><?php echo $row['description']; ?></td>
              <td><?php echo $row['info']; ?></td>
              <td><?php echo $row['createdat']; ?></td>
              <td class="service-action"><a href="servicesSetup.php?editid=<?php echo $row['id'] ?>" class="service-edit"> Edit </a> <a href="servicesSetup.php?deleteid=<?php echo $row['id'] ?>" class="service-delete">Delete</a></td>
            </tr>
          <?php
          }
          ?>
        </table>
      <?php
      } else {
        echo " There is no data";
      }
      ?>
    </section>
  </main>

  <footer>
    <h4>You are here: Services Setup</h4>
    <div class="footer">
      <div class="footer-logo">
        <img src="images/logo.png" alt="">
      </div>
      <div class="copyright">
        <p class="footer-text"><a href="adminhome.php">Admin Home</a></p>
        <p class="footer-text"><a href="newsletterSetup.php">Newsletter Setup</a></p>
        <p class="footer-text"><a href="howparenthelpSetup.php">How Parents Help Setup</a></p>
        <p class="footer-text"><a href="socialmediaappSetup.php">Social Media Setup</a></p>
        <p class="footer-text"><a href="contactList.php">Help and Support</a></p>
        <p class="footer-text"><a href="memberList.php">Member List</a></p>
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