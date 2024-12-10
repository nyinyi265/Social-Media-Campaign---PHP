<!DOCTYPE html>
<?php
include("dbconnect.php");

if (isset($_POST['btnsave'])) {
  $des = $_POST['des'];

  if (isset($_FILES['img1']) && $_FILES['img1']['error'] == 0) {
    $filename1 = $_FILES["img1"]["name"];
    $filepath1 = $_FILES["img1"]["tmp_name"];
  }

  if (isset($_FILES['img2']) && $_FILES['img2']['error'] == 0) {
    $filename2 = $_FILES["img2"]["name"];
    $filepath2 = $_FILES["img2"]["tmp_name"];
  }

  $sql = "INSERT INTO howparentshelp (description, image1, image2) VALUES ('$des', '$filename1', '$filename2');";
  if ($conn->query($sql) == true) {
    header("location:howparenthelpSetup.php");
    move_uploaded_file($filepath1, "images/" . $filename1);
    move_uploaded_file($filepath2, "images/" . $filename2);
  }
}
$sql1 = "SELECT * from howparentshelp";
$result = $conn->query($sql1);
?>
<?php
if (isset($_GET['deleteid'])) {
  $del = $_GET['deleteid'];

  $sql = "DELETE FROM howparentshelp where id=$del";
  if ($conn->query($sql) == true) {
    header("location:howparenthelpSetup.php");
  }
}

if (isset($_GET['editid'])) {
  $edit = $_GET['editid'];

  $sql = "SELECT * from howparentshelp where id=$edit";
  $rel = $conn->query($sql);
  $row = $rel->fetch_assoc();
}

if (isset($_POST['btnupd'])) {
  $id = $_POST['id'];
  $des = $_POST['des'];

  if (isset($_FILES['img1']) && $_FILES['img1']['error'] == 0) {
    $filename1 = $_FILES["img1"]["name"];
    $filepath1 = $_FILES["img1"]["tmp_name"];
  }

  if (isset($_FILES['img2']) && $_FILES['img2']['error'] == 0) {
    $filename2 = $_FILES["img2"]["name"];
    $filepath2 = $_FILES["img2"]["tmp_name"];
  }

  $sql = "UPDATE howparentshelp SET description ='$des', image1='$filename1', image2='$filename2' WHERE id='$id'";

  if ($conn->query($sql) == true) {
    move_uploaded_file($filepath1, "images/" . $filename1);
    move_uploaded_file($filepath2, "images/" . $filename2);
    header("location:howparenthelpSetup.php");
  } else {
    echo "error updating" . $conn->error;
  }
}

if (isset($_POST['btnsearch'])) {
  $search = $_POST['search'];

  $sql = "SELECT * FROM howparentshelp where description LIKE '%" . $search . "%'";
  $result = $conn->query($sql);
} else {
  $sql = "SELECT * FROM howparentshelp";
  $result = $conn->query($sql);
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
    <h1>HowParentHelp Set up</h1>
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
      <form action="#" method="post" enctype="multipart/form-data" class="form-group">
        <input type="hidden" name="id" value="<?php echo isset($row['id']) ? $row['id'] : " "; ?>">
        <div class="form-field">
          <label for="description"><strong>Description:</strong></label>
          <textarea name="des" id="des" rows="2"><?php echo isset($row['description']) ? $row['description'] : " "; ?></textarea>
        </div>
        <div class="form-field">
          <label for="img1"><strong>Select first Image:</strong></label>
          <input type="file" id="img1" name="img1" />
        </div>
        <div class="form-field">
          <label for="img2"><strong>Select second Image:</strong></label>
          <input type="file" name="img2" id="img2">
        </div>
        <div class="button-container">
          <?php if (isset($_GET['editid'])) { ?>
            <button type="submit" name="btnupd">Update</button>
          <?php } else { ?>
            <button type="submit" name="btnsave">Save</button>
          <?php } ?>
        </div>
      </form>
      <hr>

    </section>
    <?php
    if ($result->num_rows > 0) {
    ?>
      <h2 class="heading"> List of How-Parent-Help</h2>
      <table class="parent-setup" border="all-border">
        <tr>
          <th>ID</th>
          <th>Description</th>
          <th>Image 1</th>
          <th>Image 2</th>
          <th>Action</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
          <tr class="table-data">
            <td class="id"><?php echo $row['id'] ?></td>
            <td><?php echo $row['description'] ?></td>
            <td class="image"><img src="<?php echo "images\\" . $row['image1']; ?>" width="100px" height="100px"></td>
            <td class="image"><img src="<?php echo "images\\" . $row['image2']; ?>" width="100px" height="100px"></td>
            <td class="action"><a href="howparenthelpSetup.php?editid=<?php echo $row['id'] ?>" class="edit">Edit</a> <a href="howparenthelpSetup.php?deleteid=<?php echo $row['id'] ?>" class="delete">Delete</a></td>
          </tr>
        <?php } ?>
      </table>
    <?php } ?>
  </main>

  <footer>
    <h4>You are here: How Parent Help Setup</h4>
    <div class="footer">
      <div class="footer-logo">
        <img src="images/logo.png" alt="">
      </div>
      <div class="copyright">
        <p class="footer-text"><a href="adminhome.php">Admin Home</a></p>
        <p class="footer-text"><a href="servicesSetup.php">Services Setup</a></p>
        <p class="footer-text"><a href="newsletterSetup.php">Newsletter Setup</a></p>
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