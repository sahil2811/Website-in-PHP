<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <title>E Commerce Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet"  href="styles/style.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body>
        <div id="top"> <!--Top bar start -->
            <div class="container"><!--container start -->
                <div class="col-md-6 offer"><!--col-md-6 offer start -->
                    <a href="#" class="btn btn-success btn-sm">
                        Welcome guest
                    </a>
                    <a href="#">Shopping Cart Total Price:INR 100,Total Items: 2</a>
                </div><!--col-md-6 offer end -->

                <div class="col-md-6 "><!--col-md-6 start -->
                    <ul class="menu">
                        <li>
                            <a href="customer_registration.php">Register</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Goto Cart</a>
                        </li>
                        <li>
                            <a href="login.php">Login</a>
                        </li>
                    </ul>
                </div><!--col-md-6  end -->
            </div><!--container end -->
        </div><!--Top bar end -->


        <!--Navbar coding start -->
        <div class="navbar navbar-default" id="navbar"><!--navbar navbar-default start-->
            <div class="container">
                <div class="navbar-header"><!--navbar-header start--> 
                    <a class="navbar-brand" href="index.php" >
                        <img src="images/small-logo.png" alt="logo" class="hidden-xs" >
                        <img src="images/small-logo.png" alt="logo" class="visible-xs">
                    </a>

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle Navigation</span>
                        <i class="fa fa-align-justify"> </i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only"></span>
                        <i class="fa fa-search"></i>
                    </button>
                </div><!--navbar-header end--> 

                <div class="navbar-collapse collapse" id="navigation"><!--navbar-collapse collapse start-->
                    <div class="padding-nav"><!-- padding-nav start-->
                        <ul class="nav navbar-nav navbar-left">
                            <li class="active">
                                <a href="index.php">Home</a>
                            </li>
                            <li >
                                <a href="shop.php">Shop</a>
                            </li>
                            <li>
                                <a href="index.php">MY Account</a>
                            </li>
                            <li>
                                <a href="index.php">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="index.php">About Us</a>
                            </li>
                            <li>
                                <a href="index.php">Services</a>
                            </li>
                            <li>
                                <a href="index.php">Contact Us</a>
                            </li>
                        </ul>
                    </div><!-- padding-nav end-->

                    <a href="cart.php" class="btn btn-primary navbar-btn right">
                        <i class="fa fa-shopping-cart"></i>
                        <span>4 items In Cart</span>
                    </a>

                    <div class="navbar-collapse collapse right"><!--navbar-collapse collapse-right start-->
                        <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
                            <span class="sr-only"> Toggle Search </span>
                            <i class="fa fa-search"></i>
                        </button>
                    </div><!--navbar-collapse collapse-right end-->
                    <div class="collapse clearfix" id="search">
                        <form class="navbar-form" method="get" action="result.php">
                            <div class="input-group">
                                <input type="text" name="user_query" placeholder="Search" class="form-control">
                                <span class="input-group-btn">
                                    <button type="submit" value="Search" name="search" class="btn btn-primary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div><!--navbar-collapse collapse end-->
            </div>
        </div><!--navbar navbar-default end-->
        <!--Navbar coding end -->

        <div class="container" id="slider"><!--container start-->
            <div class="col-md-12"><!-- col-md-12 start -->
                <div class="carousel slide" id="myCarousel" data-ride="carousel"> <!-- carousel slide start -->
                    <ol class="carousel-indicators">
                        <li data-target="myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="myCarousel" data-slide-to="1" ></li>
                        <li data-target="myCarousel" data-slide-to="2" ></li>
                        <li data-target="myCarousel" data-slide-to="3" ></li>
                    </ol>
                    <div class="carousel-inner"><!-- carousel-inner start -->
                        <div class="item active">
                            <img src="admin_area/slider_images/slidder 2.jpg">
                        </div>
                        <div class="item">
                            <img src="admin_area/slider_images/slidder 2.jpg">
                        </div>
                        <div class="item">
                            <img src="admin_area/slider_images/slidder 2.jpg">
                        </div>
                        <div class="item">
                            <img src="admin_area/slider_images/slidder 2.jpg">
                        </div>
                    </div><!-- carousel-inner end -->
                    <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only ">Previous</span>
                    </a>

                    <a href="#myCarousel" class="right carousel-control" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only ">Next</span>
                    </a>
                </div><!-- carousel slide end -->
            </div><!-- col-md-12 end -->
        </div><!--container end-->

        <div id ="advantage"><!--advantage start-->
            <div class="container">
                <div class="same-height-row">
                    <div class="col-sm-4"><!--col-sm-4 start-->
                        <div class="box same-height">
                            <div class="icon">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <h3><a href="#">BEST PRICES</a></h3>
                            <p>You can check on all others sites about the prices and than compare with us.</p>
                        </div>
                    </div><!--col-sm-4 end-->

                    <div class="col-sm-4">
                        <div class="box same-height">
                            <div class="icon">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <h3><a href="#">WE LOVE CUSTOMERS</a></h3>
                            <p>We are known to provide best possible service ever.</p>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="box same-height">
                            <div class="icon">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <h3><a href="#">100% SATISFACTION </a></h3>
                            <p>Do not Worry ! Free returns on everything for 3 months.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div><!--advantage end -->

        <div id="hot"><!-- Hot box start-->
            <div class="box"> 
                <div class="container">
                    <div class="col-md-12">
                        <h2>Latest this week</h2>
                    </div>
                </div>
            </div>
        </div><!-- Hot box end-->

        <div id="content" class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-12 single"><!--col-sm-4 col-sm-6 single start-->
                    <div class="product">
                        <a href="details.php">
                            <img src="admin_area/product_images/buy-1.jpg" class="img-responsive">
                        </a>
                        <div class="text">
                            <h3>
                                <a href="details.php">PUMA Red T-shirt</a>
                            </h3>
                            <p class="price">INR 299</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default">View Detials</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to cart
                                </a>
                            </p>
                        </div>
                    </div>
                </div><!--col-sm-4 col-sm-6 single End-->

                <div class="col-sm-4 col-sm-12 single"><!--col-sm-4 col-sm-6 single start-->
                    <div class="product">
                        <a href="details.php">
                            <img src="admin_area/product_images/buy-1.jpg" class="img-responsive">
                        </a>
                        <div class="text">
                            <h3>
                                <a href="details.php">PUMA Red T-shirt</a>
                            </h3>
                            <p class="price">INR 299</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default">View Detials</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to cart
                                </a>
                            </p>
                        </div>
                    </div>
                </div><!--col-sm-4 col-sm-6 single End-->

                <div class="col-sm-4 col-sm-12 single"><!--col-sm-4 col-sm-6 single start-->
                    <div class="product">
                        <a href="details.php">
                            <img src="admin_area/product_images/buy-1.jpg" class="img-responsive">
                        </a>
                        <div class="text">
                            <h3>
                                <a href="details.php">PUMA Red T-shirt</a>
                            </h3>
                            <p class="price">INR 299</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default">View Detials</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to cart
                                </a>
                            </p>
                        </div>
                    </div>
                </div><!--col-sm-4 col-sm-6 single End-->

                <div class="col-sm-4 col-sm-12 single"><!--col-sm-4 col-sm-6 single start-->
                    <div class="product">
                        <a href="details.php">
                            <img src="admin_area/product_images/buy-1.jpg" class="img-responsive">
                        </a>
                        <div class="text">
                            <h3>
                                <a href="details.php">PUMA Red T-shirt</a>
                            </h3>
                            <p class="price">INR 299</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default">View Detials</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to cart
                                </a>
                            </p>
                        </div>
                    </div>
                </div><!--col-sm-4 col-sm-6 single End-->

                <!--second row for 4 more products -->
                <div class="col-sm-4 col-sm-12 single"><!--col-sm-4 col-sm-6 single start-->
                    <div class="product">
                        <a href="details.php">
                            <img src="admin_area/product_images/buy-1.jpg" class="img-responsive">
                        </a>
                        <div class="text">
                            <h3>
                                <a href="details.php">PUMA Red T-shirt</a>
                            </h3>
                            <p class="price">INR 299</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default">View Detials</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to cart
                                </a>
                            </p>
                        </div>
                    </div>
                </div><!--col-sm-4 col-sm-6 single End-->

                <div class="col-sm-4 col-sm-12 single"><!--col-sm-4 col-sm-6 single start-->
                    <div class="product">
                        <a href="details.php">
                            <img src="admin_area/product_images/buy-1.jpg" class="img-responsive">
                        </a>
                        <div class="text">
                            <h3>
                                <a href="details.php">PUMA Red T-shirt</a>
                            </h3>
                            <p class="price">INR 299</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default">View Detials</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to cart
                                </a>
                            </p>
                        </div>
                    </div>
                </div><!--col-sm-4 col-sm-6 single End-->

                <div class="col-sm-4 col-sm-12 single"><!--col-sm-4 col-sm-6 single start-->
                    <div class="product">
                        <a href="details.php">
                            <img src="admin_area/product_images/buy-1.jpg" class="img-responsive">
                        </a>
                        <div class="text">
                            <h3>
                                <a href="details.php">PUMA Red T-shirt</a>
                            </h3>
                            <p class="price">INR 299</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default">View Detials</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to cart
                                </a>
                            </p>
                        </div>
                    </div>
                </div><!--col-sm-4 col-sm-6 single End-->

                <div class="col-sm-4 col-sm-12 single"><!--col-sm-4 col-sm-6 single start-->
                    <div class="product">
                        <a href="details.php">
                            <img src="admin_area/product_images/buy-1.jpg" class="img-responsive">
                        </a>
                        <div class="text">
                            <h3>
                                <a href="details.php">PUMA Red T-shirt</a>
                            </h3>
                            <p class="price">INR 299</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default">View Detials</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to cart
                                </a>
                            </p>
                        </div>
                    </div>
                </div><!--col-sm-4 col-sm-6 single End-->
            </div>
        </div>

        <!--Footer coding start -->
        <?php
        include("includes/footer.php");
        ?>
        <!--Footer coding end -->

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html> 
