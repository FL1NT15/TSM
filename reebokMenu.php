<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

include "connection.php";
 ?>
<?php
}else{
    header("Location: index.php");
    exit();
}

if (isset($_POST["add_to_cart"])) {
  if (isset($_SESSION["shopping_cart"])) {
    $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
    if(!in_array($_GET["id"], $item_array_id)){
      $count = count($_SESSION["shopping_cart"]);
      $item_array = array(
        'item_id'       => $_GET["id"],
        'item_name'     => $_POST["hidden_name"],
        'item_price'    => $_POST["hidden_price"],
        'item_quantity' => $_POST["quantity"]
      );
      $_SESSION["shopping_cart"][$count] = $item_array;
    }else {
      echo '<script>alert("Item Already Added")</script>';
      echo '<script>window.location="reebokMenu.php"</script>';
    }
  }else {
    $item_array = array(
      'item_id'       => $_GET["id"],
      'item_name'     => $_POST["hidden_name"],
      'item_price'    => $_POST["hidden_price"],
      'item_quantity' => $_POST["quantity"]
    );
    $_SESSION["shopping_cart"] [0] =$item_array;
  }
}

if (isset($_GET["action"])) {
  if($_GET["action"] == "delete"){
    foreach ($_SESSION["shopping_cart"] as $keys => $values) {
      if ($values["item_id"] == $_GET["id"]) {
        unset($_SESSION["shopping_cart"] [$keys]);
        echo '<script>alert("Item Removed")</script>';
        echo '<script>window.location="reebokMenu.php</script>"';
      }
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tondo Shoe Mates/Reebok</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="menu.css">
    <style>li.nav-item {list-style-type: none;}</style>
  </head>
  <body>
    <nav class="navbar navbar-expand-md">
    <img src="TSM_LG-removebg-preview.png"/>
      </a>
      <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
      <div class="collapse navbar-collapse" id="main-navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
          <li class="nav-item">
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li class="nav-item dropright">
              <a href="#" class="nav-link" data-toggle="dropdown" href="NikeMenu.php" style="font-size: 20px;">Men's Shoes<i class="fa fa-angle-right float-right mt-1"></i></a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!-- Example Subcategories -->
                <li><a class="dropdown-item" href="NikeMenu.php">Nike</a></li>
                <li><a class="dropdown-item" href="adidasMenu.php">Adidas</a></li>
                <li><a class="dropdown-item" href="reebokMenu.php">Rebook</a></li>
                <li><a class="dropdown-item" href="#">Fila</a></li>
                <li><a class="dropdown-item" href="#">New Balance</a></li>
            <!-- Add more subcategories as needed -->
              </ul>
            <li class="nav-item dropright">
              <a href="#" class="nav-link" data-toggle="dropdown" href="adidasMenu.php" style="font-size: 20px;">Women's Shoes<i class="fa fa-angle-right float-right mt-1"></i></a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!-- Example Subcategories -->
                <li><a class="dropdown-item" href="#">Nike</a></li>
                <li><a class="dropdown-item" href="#">Adidas</a></li>
                <li><a class="dropdown-item" href="#">Vans</a></li>
                <li><a class="dropdown-item" href="#">Fila</a></li>
                <li><a class="dropdown-item" href="#">New Balance</a></li>
            <!-- Add more subcategories as needed -->
              </ul>
            <li class="nav-item dropright">
              <a href="#" class="nav-link" data-toggle="dropdown" href="rebookMenu.php" style="font-size: 20px;">Kid's Shoes<i class="fa fa-angle-right float-right mt-1"></i></a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!-- Example Subcategories -->
                <li><a class="dropdown-item" href="#">Nike</a></li>
                <li><a class="dropdown-item" href="#">Adidas</a></li>
                <li><a class="dropdown-item" href="#">Vans</a></li>
                <li><a class="dropdown-item" href="#">Fila</a></li>
                <li><a class="dropdown-item" href="#">New Balance</a></li>
            <!-- Add more subcategories as needed -->
              </ul>
            <li class="nav-item dropright">
              <a href="#" class="nav-link" data-toggle="dropdown" href="rebookMenu.php" style="font-size: 20px;">New Released<i class="fa fa-angle-right float-right mt-1"></i></a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!-- Example Subcategories -->
                <li><a class="dropdown-item" href="#">Nike</a></li>
                <li><a class="dropdown-item" href="#">Adidas</a></li>
                <li><a class="dropdown-item" href="#">Vans</a></li>
                <li><a class="dropdown-item" href="#">Fila</a></li>
                <li><a class="dropdown-item" href="#">New Balance</a></li>
            <!-- Add more subcategories as needed -->
              </ul>
            <li class="nav-item dropright">
              <a href="#" class="nav-link" data-toggle="dropdown" href="rebookMenu.php" style="font-size: 20px;">Best Seller<i class="fa fa-angle-right float-right mt-1"></i></a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!-- Example Subcategories -->
                <li><a class="dropdown-item" href="#">Nike</a></li>
                <li><a class="dropdown-item" href="#">Adidas</a></li>
                <li><a class="dropdown-item" href="#">Vans</a></li>
                <li><a class="dropdown-item" href="#">Fila</a></li>
                <li><a class="dropdown-item" href="#">New Balance</a></li>
            <!-- Add more subcategories as needed -->
              </ul>

            </li>
          </ul>
        </li>
      </ul>
    </div>
  </li>
</ul>
          <li class="nav-item">
            <a class="nav-link" href="#table_display">Shopping Cart</a>
          </li>
        </ul>
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search"
          placeholder="Search" aria-label="Search">
          <button class="btn btn-light my-sm-0" type="submit">Search</button>
      </form>
      </div>
    </nav>
    <div class="overlay1">
      <div class="clearfix"> </div>
      <div class="column content">
        <br>
  <div class="container2">
    <h2>Reebok</h2> <br>
  <div class="row">
    <?php
    $query = "SELECT * FROM products2 ORDER BY id ASC";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_array($result)){
        ?>
        <div class="col-md-4">
          <form  class="prod_display" method="post" action="reebokMenu.php?action=add&id= <?php echo $row["id"]; ?> ">
            <div class="product_form">
            <img src="<?php echo $row["image"]; ?>" class="img-responsive"> <br><br>
            <h4 class="text-info"> <?php echo $row["name"]; ?> </h4>
            <h4 class="text-danger"> <?php echo $row["price"]; ?> </h4>
            <input type="text" name="quantity" class="form-control" value="1">
            <input type="hidden" name="hidden_name" value=" <?php echo $row["name"]; ?>">
            <input type="hidden" name="hidden_price" value=" <?php echo $row["price"]; ?>">
            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="add" value="Add to Cart">
          </div>
          </form>

        </div>
        <?php
      }
    }
     ?>
  </div>
  </div>
        </div>
  <div class="table_display" id="table_display">
    <br>
    <h3>Order Details</h3>
    <div class="table-responsive">
      <table class="table table-bordered table-dark">
        <tr>
          <th width="40%">Product Name</th>
          <th width="10%">Quantity</th>
          <th width="20%">Price</th>
          <th width="15%">Total</th>
          <th width="5%">Action</th>
        </tr>
        <?php
          if (!empty($_SESSION["shopping_cart"])) {
            $total = 0;
            foreach($_SESSION["shopping_cart"] as $keys => $values){
              ?>
              <tr>
                <td><?php echo $values["item_name"]; ?></td>
                <td><?php echo $values["item_quantity"]; ?></td>
                <td><?php echo $values["item_price"]; ?></td>
                <td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
                <td> <a href="reebokMenu.php?action=delete&id=<?php echo $values["item_id"]; ?>"> <span class="text-danger">Remove</span> </a> </td>
              </tr>
              <?php
              $total= $total + ($values["item_quantity"] * $values["item_price"]);
            }
            ?>
            <tr>
              <td colspan="3" align="right">Total</td>
              <td align="right"> <?php echo number_format($total, 2); ?> </td>
            <td> <button type="button" class="checkout" name="checkout" onclick="checkout()">Check Out</button> </td>
            </tr>
            <?php

          }
         ?>
      </table>
    </div>
  </div>
  </div>
<!--
    <footer id="footer"class="page-footer">
      <div class="container1">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12">
          <h6 class="text-uppercase font-weight-bold">Additional Information</h6>
          <p>Tondos shoe mates is a specialized retailer of brand-name footwear and gear. Men's, women's, and children's athletic footwear, gear, and accessories are available.</p>
          <p>Tondo's Shoe Mates is a multi-brand lifestyle online store that carries some of the world's most sought-after footwear brands. Tondo's Shoe Mates first opened its doors in 2021 and has since expanded to numerous malls around the country, bringing convenience to people looking for rubber-soled footwear.</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <h6 class="text-uppercase font-weight-bold">Contact</h6>
          <p>Tondo, Manila Philippines
          <br/>sample@website.gmail.com
          <br/>+ 63 12345 67890
          <br/>+ 63 09876 54210
          <br/><a href="https://twitter.com/?lang=en"><img src="icons8-twitter-50.png" alt="">   </a>&nbsp&nbsp&nbsp&nbsp<a href="https://www.facebook.com/"><img src="fb.png" alt=""></a>&nbsp&nbsp&nbsp&nbsp <a href="https://www.instagram.com/"><img src="insta.png" alt=""> </a>
        </p>
        </div>
      </div>
      <div class="footer-copyright text-center">© 2021 Copyright: TondoShoeMates.com</div>
    </footer>
-->
<script>
  document.getElementById("UName").innerHTML=localStorage.getItem("name");
</script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/e6b68ef548.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]');
  function checkout() {
    alert("Your Order is on its way. Thank you for Ordering!");
  }
</script>
  </body>
</html>
