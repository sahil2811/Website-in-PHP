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
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li class="active">
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

        <div id="content"><!--Content Start-->
            <div class="container">
                <div class="col-md-12"><!--col-md-12 Start-->
                    <ul class="breadcrumb">
                        <li><a href="home.php">Home</a></li>
                        <li>Shop</li>
                    </ul>
                </div><!--col-md-12 End-->

                <div class="col-md-3"><!--col-md-3 Start-->
                    <?php
                        include("includes/sidebar.php");
                    ?>
                </div><!--col-md-9 End--> 
                
                <div class="col-md-9"><!--col-md-3 Start-->
                    <div class="box"><!--Box Start-->
                        <h1>Shop</h1>
                        <p>Have a good day!</p>
                    </div><!--Box End-->
                    <div class="row"><!--Row 1 Start-->

                        <div class="col-md-4 col-sm-6 center-responsive"><!--col-md-4 col-sm-6 Start-->
                            <div class="product">
                                <a href="details.php">
                                    <img src="admin_area/product_images/buy-1.jpg" class="img-responsive">
                                </a>
                                <div class="text">
                                     <h3>
                                         <a href="details.php">PUMA Red T-shirt</a>
                                     </h3>
                                     <h3>
                                        <p class="price">INR 299</p>
                                        <p class="buttons">
                                            <a href="details.php" class="btn btn-default">View details</a>
                                            <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </p>
                                     </h3>
                                </div>
                            </div>
                        </div><!--col-md-4 col-sm-6 End-->
                        <div class="col-md-4 col-sm-6 center-responsive"><!--col-md-4 col-sm-6 Start-->
                            <div class="product">
                                <a href="details.php">
                                    <img src="admin_area/product_images/buy-1.jpg" class="img-responsive">
                                </a>
                                <div class="text">
                                     <h3>
                                         <a href="details.php">PUMA Red T-shirt</a>
                                     </h3>
                                     <h3>
                                        <p class="price">INR 299</p>
                                        <p class="buttons">
                                            <a href="details.php" class="btn btn-default">View details</a>
                                            <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </p>
                                     </h3>
                                </div>
                            </div>
                        </div><!--col-md-4 col-sm-6 End-->
                        <div class="col-md-4 col-sm-6 center-responsive"><!--col-md-4 col-sm-6 Start-->
                            <div class="product">
                                <a href="details.php">
                                    <img src="admin_area/product_images/buy-1.jpg" class="img-responsive">
                                </a>
                                <div class="text">
                                     <h3>
                                         <a href="details.php">PUMA Red T-shirt</a>
                                     </h3>
                                     <h3>
                                        <p class="price">INR 299</p>
                                        <p class="buttons">
                                            <a href="details.php" class="btn btn-default">View details</a>
                                            <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </p>
                                     </h3>
                                </div>
                            </div>
                        </div><!--col-md-4 col-sm-6 End-->

                    </div><!--Row 1 End-->

                    <div class="row"><!--Row 2 Start-->

                        <div class="col-md-4 col-sm-6 center-responsive"><!--col-md-4 col-sm-6 Start-->
                            <div class="product">
                                <a href="details.php">
                                    <img src="admin_area/product_images/buy-1.jpg" class="img-responsive">
                                </a>
                                <div class="text">
                                     <h3>
                                         <a href="details.php">PUMA Red T-shirt</a>
                                     </h3>
                                     <h3>
                                        <p class="price">INR 299</p>
                                        <p class="buttons">
                                            <a href="details.php" class="btn btn-default">View details</a>
                                            <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </p>
                                     </h3>
                                </div>
                            </div>
                        </div><!--col-md-4 col-sm-6 End-->

                        <div class="col-md-4 col-sm-6 center-responsive"><!--col-md-4 col-sm-6 Start-->
                            <div class="product">
                                <a href="details.php">
                                    <img src="admin_area/product_images/buy-1.jpg" class="img-responsive">
                                </a>
                                <div class="text">
                                     <h3>
                                         <a href="details.php">PUMA Red T-shirt</a>
                                     </h3>
                                     <h3>
                                        <p class="price">INR 299</p>
                                        <p class="buttons">
                                            <a href="details.php" class="btn btn-default">View details</a>
                                            <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </p>
                                     </h3>
                                </div>
                            </div>
                        </div><!--col-md-4 col-sm-6 End-->

                        <div class="col-md-4 col-sm-6 center-responsive"><!--col-md-4 col-sm-6 Start-->
                            <div class="product">
                                <a href="details.php">
                                    <img src="admin_area/product_images/buy-1.jpg" class="img-responsive">
                                </a>
                                <div class="text">
                                     <h3>
                                         <a href="details.php">PUMA Red T-shirt</a>
                                     </h3>
                                     <h3>
                                        <p class="price">INR 299</p>
                                        <p class="buttons">
                                            <a href="details.php" class="btn btn-default">View details</a>
                                            <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </p>
                                     </h3>
                                </div>
                            </div>
                        </div><!--col-md-4 col-sm-6 End-->

                    </div><!--Row 2 End-->

                    <div class="row"><!--Row 3 Start-->
                        <div class="col-md-4 col-sm-6 center-responsive"><!--col-md-4 col-sm-6 Start-->
                            <div class="product">
                                <a href="details.php">
                                    <img src="admin_area/product_images/buy-1.jpg" class="img-responsive">
                                </a>
                                <div class="text">
                                     <h3>
                                         <a href="details.php">PUMA Red T-shirt</a>
                                     </h3>
                                     <h3>
                                        <p class="price">INR 299</p>
                                        <p class="buttons">
                                            <a href="details.php" class="btn btn-default">View details</a>
                                            <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </p>
                                     </h3>
                                </div>
                            </div>
                        </div><!--col-md-4 col-sm-6 End-->

                        <div class="col-md-4 col-sm-6 center-responsive"><!--col-md-4 col-sm-6 Start-->
                            <div class="product">
                                <a href="details.php">
                                    <img src="admin_area/product_images/buy-1.jpg" class="img-responsive">
                                </a>
                                <div class="text">
                                     <h3>
                                         <a href="details.php">PUMA Red T-shirt</a>
                                     </h3>
                                     <h3>
                                        <p class="price">INR 299</p>
                                        <p class="buttons">
                                            <a href="details.php" class="btn btn-default">View details</a>
                                            <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </p>
                                     </h3>
                                </div>
                            </div>
                        </div><!--col-md-4 col-sm-6 End-->

                        <div class="col-md-4 col-sm-6 center-responsive"><!--col-md-4 col-sm-6 Start-->
                            <div class="product">
                                <a href="details.php">
                                    <img src="admin_area/product_images/buy-1.jpg" class="img-responsive">
                                </a>
                                <div class="text">
                                     <h3>
                                         <a href="details.php">PUMA Red T-shirt</a>
                                     </h3>
                                     <h3>
                                        <p class="price">INR 299</p>
                                        <p class="buttons">
                                            <a href="details.php" class="btn btn-default">View details</a>
                                            <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </p>
                                     </h3>
                                </div>
                            </div>
                        </div><!--col-md-4 col-sm-6 End-->
                    </div><!--Row 3 End-->
                    <center>
                        <ul class="pagination">
                            <li><a href="shop.php">First page</a></li>
                            <li><a href="shop.php">1</a></li>
                            <li><a href="shop.php">2</a></li>
                            <li><a href="shop.php">3</a></li>
                            <li><a href="shop.php">4</a></li>
                            <li><a href="shop.php">5</a></li>
                            <li><a href="shop.php">Last page</a></li>
                        </ul>
                    </center>
                </div><!--col-md-9 End--> 

            </div>  
        </div><!--Content End-->

        <!--Include footer in this file  Start-->
        <?php
            include("includes/footer.php");
        ?>
        <!--Footer End-->