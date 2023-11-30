
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tondo's Shoe Mates</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  <body>
  <nav class="navbar navbar-expand-md mb-30">
    <a class="navbar-brand" href="index.html">
        <img src="TSM_LG-removebg-preview.png" />
    </a>
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <h1>Welcome Guest</h1>
    <div class="collapse navbar-collapse" id="main-navigation">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Login</a>
            </li>
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

    <div class="page-header header container-fluid mb-30">
     <div class="overlay"></div>
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Men Fashion</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    <a href="index.php" class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" onclick="showAlert()">Shop Now</a>
                                     <script>
                                      function showAlert() {
                                      alert("You need to Log in to Purchase.");
                                      // Add additional logic or redirect to the shop page as needed
                                      }
                                      </script>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/carousel-2.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Women Fashion</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/carousel-3.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Kids Fashion</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/offer-1.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/offer-2.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
      <!-- <h1 class="section-title position-relative text-uppercase mx-xl-5 mb-4" style="color: #F5F5F5;"><span class=>Featured Products</span></h1>
        <div class="row px-xl-5">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100 mx-auto" src="img/product-1.jpg" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
         </div>
      </div>
  </div> -->

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
      <a href="index.php" class="btn btn-lg btn-primary" onclick="showAlert()">Shop Now</a>
      <script>
    function showAlert() {
        alert("You need to Log in to Purchase.");
        // Add additional logic or redirect to the shop page as needed
    }
      </script>
    </div>
   </div>
    </div>
    <div class="carousel-item"
    style="background-image:url('Adidas bg.jpg')">
    <div class="overlay">
      <div class="container">
      <h1>Adidas</h1>
      <p>Adidas is a multinational corporation, founded and headquartered in Herzogenaurach, Germany, which designs and manufactures footwear, apparel, and accessories. The Adidas group is made up of Reebok, TaylorMade, and Runtastic. The company also owns a share of the German football club Bayern Munich.</p>
      <a href="index.php" class="btn btn-lg btn-primary" onclick="showAlert()">Shop Now</a>
      <script>
    function showAlert() {
        alert("You need to Log in to Purchase.");
        // Add additional logic or redirect to the shop page as needed
    }
      </script>
    </div>
    </div>
    </div>
    <div class="carousel-item"
    style="background-image:url('Reebok bg.jpg')">
    <div class="overlay">
      <div class="container">
      <h1>Reebok</h1>
      <p>Reebok International Ltd. is one of the world's leading athletic footwear and apparel makers. The company first gained prominence by opening up a new market for athletic shoes&mdashærobic exercise shoes for women interested in fashion as well as function--and subsequently built upon that success by expanding into other sports and products and by seeking business around the world. Reebok currently sells footwear and apparel in the sports, fitness, and casual sectors, under such brands as Reebok, Weebok, Greg Norman, Rockport, Ralph Lauren, and Polo Sport. The company also operates about 150 factory direct stores, including Reebok, Rockport, and Greg Norman stores.</p>
      <a href="index.php" class="btn btn-lg btn-primary" onclick="showAlert()">Shop Now</a>
      <script>
    function showAlert() {
        alert("You need to Log in to Purchase.");
        // Add additional logic or redirect to the shop page as needed
    }
      </script>
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
