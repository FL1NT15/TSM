
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tondo's Shoe Mates</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <nav class="navbar navbar-expand-md">
      <a class="navbar-brand" href="index.html">
    <img src="TSM_LG-removebg-preview.png"/>
      </a>
      <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <h1>Tondo's Shoe Mates</h1>
      <div class="collapse navbar-collapse" id="main-navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
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
<header class="page-header header container-fluid">
  <div class="overlay"></div>
</header>

<div class="description">
<h1><strong>Tondo's Shoe Mates</strong></h1>
<br>
<button class="headBtn">See More</button>
<h5 id="headDisc">Tondo Shoe Mates began at a modest factory in Manila, Philippines, in 2021. Since then, we've developed a lot and earned a reputation for being on the cutting edge of new trends while maintaining faithful to our heritage of classic style and high quality workmanship. We pay attention to the slightest things, from material selection to stitching, since we know you care just as much as we do.</h5>
<form action="login.php" method="post">
 <h2>LOGIN</h2>
 <?php if (isset($_GET['error'])) { ?>
   <p class="error"><?php echo $_GET['error']; ?></p>
 <?php } ?>
 <label>User Name</label>
 <input type="text" name="uname" placeholder="User Name"><br>

 <label>Password</label>
 <input type="password" name="password" placeholder="Password"><br>

 <button class="login" type="submit">Sign In</button>
 <br>
 <br>
 <a href="signup.php"><button class="signup" type="button" name="signup">Sign Up</button> </a>
 <br>
 <br>
 <a href="guest.php"><button class="signup" type="button" name="signup">Login as a Guest</button> </a>
</form>
</div>

<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
<ol class="carousel-indicators">
  <li data-target="#myCarousel"
    data-slide-to="0"
  ></li>
  <li data-target="#myCarousel"
    data-slide-to=1
  ></li>
  <li data-target="#myCarousel"
    data-slide-to=2
  ></li>
</ol>
  <div class="carousel-inner">
    <div class="carousel-item active"
    style="background-image: url('Nike bg.jpg')">
    <div class="overlay">
      <div class="container">
      <h1>Nike</h1>
      <p>NIKE, Inc. engages in the design, development, marketing, and sale of athletic footwear, apparel, accessories, equipment, and services. It operates through the following segments: North America; Europe, Middle East & Africa; Greater China; Asia Pacific & Latin America; Global Brand Divisions; Converse; and Corporate. The North America; Europe, Middle East & Africa; Greater China; and Asia Pacific & Latin America segments refers to the design, development, marketing, and selling of athletic footwear, apparel, and equipment. The Global Brand Divisions represents NIKE Brand licensing businesses. The Converse segment designs, markets, licenses, and sells casual sneakers, apparel, and accessories. The Corporate segment consists of unallocated general and administrative expenses. The company was founded by William Jay Bowerman and Philip H. Knight on January 25, 1964 and is headquartered in Beaverton</p>
      <a href="#headDisc" class="btn btn-lg btn-primary">Shop Now</a>
    </div>
   </div>
    </div>
    <div class="carousel-item"
    style="background-image:url('Adidas bg.jpg')">
    <div class="overlay">
      <div class="container">
      <h1>Adidas</h1>
      <p>Adidas is a multinational corporation, founded and headquartered in Herzogenaurach, Germany, which designs and manufactures footwear, apparel, and accessories. The Adidas group is made up of Reebok, TaylorMade, and Runtastic. The company also owns a share of the German football club Bayern Munich.</p>
      <a href="#headDisc" class="btn btn-lg btn-primary">Shop Now</a>
    </div>
    </div>
    </div>
    <div class="carousel-item"
    style="background-image:url('Reebok bg.jpg')">
    <div class="overlay">
      <div class="container">
      <h1>Reebok</h1>
      <p>Reebok International Ltd. is one of the world's leading athletic footwear and apparel makers. The company first gained prominence by opening up a new market for athletic shoes&mdashærobic exercise shoes for women interested in fashion as well as function--and subsequently built upon that success by expanding into other sports and products and by seeking business around the world. Reebok currently sells footwear and apparel in the sports, fitness, and casual sectors, under such brands as Reebok, Weebok, Greg Norman, Rockport, Ralph Lauren, and Polo Sport. The company also operates about 150 factory direct stores, including Reebok, Rockport, and Greg Norman stores.</p>
      <a href="#headDisc" class="btn btn-lg btn-primary">Shop Now</a>
    </div>
    </div>
    </div>
  </div>
  <a href="#myCarousel" class="carousel-control-prev" role="button" data-slide="prev">
    <span class="sr-only"></span>
    <span class="carousel-control-prev-icon"
      aria-hidden="true"
    ></span>
  </a>
  <a href="#myCarousel" class="carousel-control-next" role="button" data-slide="next">
    <span class="sr-only"></span>
    <span class="carousel-control-next-icon"
      aria-hidden="true"
    ></span>
  </a>
</div>

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

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="main.js"></script>
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $('#headDisc').hide();
  $('.headBtn').on('click', function(){
    $('#headDisc').slideToggle(300);
  });
  $('.container').hover(function(){
    $('.container').css("backdrop-filter", "blur(10px)");
  },
  function () {
    $('.container').css("backdrop-filter", "blur(0)");
  });
  });
</script>
</body>
</html>
