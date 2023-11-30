<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tondo's Shoe Mates</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-md">
      <a class="navbar-brand" href="index.php">
    <img src="TSM_LG-removebg-preview.png"/>
      </a>
      <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <h1>Tondo's Shoe Mates</h1>
      <div class="collapse navbar-collapse" id="main-navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#myCarousel">Items</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#footer">About</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="overlay">

    <div class="container-sm">

    <h2>Sign-up</h2>
    <form action="" name="form1" method="post">
      <div class="form-group">
      <label for="user_name"><strong>User Name</strong></label>
      <input type="text" class="form-control" id="user_name" placeholder="Enter User Name" name="user_name">
      </div>
      <div class="form-group">
      <label for="password"><strong>Password</strong></label>
      <input type="password" class="form-control" id="password" placeholder="Enter new Password"
      name="password">
      </div>
    <div class="form-group">
    <label for="name"><strong>Name</strong></label>
    <input type="text" class="form-control" id="name" placeholder="Enter Name"
    name="name">
    </div>
    <button type="submit" name="signIn" class="btn btn-default">Sign Up</button>
    </form>
    </div>
    </div>

    <?php
if (isset($_POST["signIn"])) {
  mysqli_query($conn, "insert into users values(NULL, '$_POST[user_name]', '$_POST[password]', '$_POST[name]')")
 ?>
 <script type="text/javascript">
   window.location.href=window.location.href;
 </script>
<?php
}
?>
          <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </body>
</html>
