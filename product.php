<!DOCTYPE html>
<html lang="en">

<head>
    <title>Machine | Mahadev Engineering Industries </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <link rel="stylesheet" href="css/bootstrap2.min.css">
    <link rel="stylesheet" href="css/templatemo.css">
    <link rel="stylesheet" href="css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="css/fontawesome.min.css">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>


<?php
include "header.php";

?>


    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="images/portfolio/full/item1.png" alt="Card image cap" id="product-detail">
                    </div>

                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2">Reactor</h1>
                            <p class="h3 py-2">₹ 123,456</p>

                            <h6>Description:</h6>
                            <p>We manufacture, export and supply a wide range of Reactor Vessels. These are designed and developed using supreme quality components and modern technology under the guidance of skilled professionals. Our offered range is highly appreciated in the market due to its smooth operation, sturdy construction, less maintenance, corrosion resistant nature and longer service life.
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>CAPACITY (LTR.) : </h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong id="cap"> 9000 L</strong></p>
                                </li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6 >WORKING : </h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong id="work"> 500</strong></p>
                                </li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>GROSS : </h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong id="gross"> 750</strong></p>
                                </li>
                            </ul>

                            <h6>Specification:</h6>
                            <ul class="list-unstyled pb-3">
                                <li>Lorem ipsum dolor sit</li>
                                <li>Amet, consectetur</li>
                                <li>Adipiscing elit,set</li>
                                <li>Duis aute irure</li>
                                <li>Ut enim ad minim</li>
                                <li>Dolore magna aliqua</li>
                                <li>Excepteur sint</li>
                            </ul>

                            <form action="" method="GET">
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item">Model Number :
                                                <input type="hidden" name="product-size" id="product-size" value="S">
                                            </li>
                                            <li class="list-inline-item"><h6 class="btn btn-success btn-size modelselect" data-working="500" data-cap="750" data-gross="1000" data-model="REACT 750" data-modelId="1">REACT 750</h6></li>
                                            <li class="list-inline-item"><h6 class="btn btn-success btn-size modelselect" data-working="750" data-cap="1000" data-gross="2000" data-model="REACT 1000" data-modelId="2">REACT 1000</h6></li>
                                            <li class="list-inline-item"><h6 class="btn btn-success btn-size modelselect" data-working="1500" data-cap="1500" data-gross="2000" data-model="REACT 2000" data-modelId="3">REACT 2000</h6></li>
                                            <li class="list-inline-item"><h6 class="btn btn-success btn-size modelselect" data-working="2000" data-cap="2500" data-gross="2500" data-model="REACT 2500" data-modelId="4">REACT 2500</h6></li>
                                            <li class="list-inline-item"><h6 class="btn btn-success btn-size modelselect" data-working="2500-7500" data-cap="3000-10000" data-gross="3000" data-model="REACT 3000-10000" data-modelId="5">REACT 3000-10000</h6></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <a class="btn btn-success btn-lg" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                                            Enquire Now
                                        </a>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->




    <script>

var buttons = document.getElementsByClassName("modelselect");

for (var i = 0; i < buttons.length; i++) {
  buttons[i].addEventListener("click", function() {
    var working = this.getAttribute("data-working");
    var capacity = this.getAttribute("data-cap");
    var gross = this.getAttribute("data-gross");
    var model = this.getAttribute("data-model");
    
    document.getElementById("cap").innerHTML=working
    document.getElementById("work").innerHTML=capacity
    document.getElementById("gross").innerHTML=gross
    document.getElementById("enquiremodel").innerHTML="Model : "+model
  });
}

    </script>






    <!-- Start Article -->
    <section class="py-5">
        <div class="container">
            <div class="row text-left p-2 pb-3">
                <h4>Related Products</h4>
            </div>

            <!--Start Carousel Wrapper-->
            <div id="carousel-related-product">

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-4">
                        <div class="card rounded-4">
                            <img class="card-img rounded-4 img-fluid" src="images/portfolio/full/item1.png">
                            <div class="card-img-overlay rounded-4 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none"><center><b>Reactor</b></center></a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">

                            </ul>

                            <p class="text-center mb-0">₹ 123,456</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-4">
                        <div class="card rounded-4">
                            <img class="card-img rounded-4 img-fluid" src="images/portfolio/full/item1.png">
                            <div class="card-img-overlay rounded-4 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none"><center><b>Reactor</b></center></a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">

                            </ul>

                            <p class="text-center mb-0">₹ 123,456</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-4">
                        <div class="card rounded-4">
                            <img class="card-img rounded-4 img-fluid" src="images/portfolio/full/item1.png">
                            <div class="card-img-overlay rounded-4 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none"><center><b>Reactor</b></center></a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">

                            </ul>

                            <p class="text-center mb-0">₹ 123,456</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-4">
                        <div class="card rounded-4">
                            <img class="card-img rounded-4 img-fluid" src="images/portfolio/full/item1.png">
                            <div class="card-img-overlay rounded-4 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none"><center><b>Reactor</b></center></a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">

                            </ul>

                            <p class="text-center mb-0">₹ 123,456</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-4">
                        <div class="card rounded-4">
                            <img class="card-img rounded-4 img-fluid" src="images/portfolio/full/item1.png">
                            <div class="card-img-overlay rounded-4 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none"><center><b>Reactor</b></center></a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">

                            </ul>

                            <p class="text-center mb-0">₹ 123,456</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-4">
                        <div class="card rounded-4">
                            <img class="card-img rounded-4 img-fluid" src="images/portfolio/full/item1.png">
                            <div class="card-img-overlay rounded-4 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none"><center><b>Reactor</b></center></a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">

                            </ul>

                            <p class="text-center mb-0">₹ 123,456</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-4">
                        <div class="card rounded-4">
                            <img class="card-img rounded-4 img-fluid" src="images/portfolio/full/item1.png">
                            <div class="card-img-overlay rounded-4 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none"><center><b>Reactor</b></center></a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">

                            </ul>

                            <p class="text-center mb-0">₹ 123,456</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-4">
                        <div class="card rounded-4">
                            <img class="card-img rounded-4 img-fluid" src="images/portfolio/full/item1.png">
                            <div class="card-img-overlay rounded-4 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none"><center><b>Reactor</b></center></a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">

                            </ul>

                            <p class="text-center mb-0">₹ 123,456</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-4">
                        <div class="card rounded-4">
                            <img class="card-img rounded-4 img-fluid" src="images/portfolio/full/item1.png">
                            <div class="card-img-overlay rounded-4 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none"><center><b>Reactor</b></center></a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">

                            </ul>

                            <p class="text-center mb-0">₹ 123,456</p>
                        </div>
                    </div>
                </div>


            </div>


        </div>
    </section>
    <!-- End Article -->




        <!-- Modal -->
        <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="w-100 pt-1 mb-5 text-right">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="get" class="modal-content modal-body border-0 p-0">
                    <div class="input-group mb-2">
                        <strong id="enquiremodel">Model Number : </strong>
                    </div>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Your Name">
                    </div>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Your Phone">
                    </div>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Your Email">
                    </div>
                    <div class="input-group mb-2">
                        <textarea name="" class="form-control" cols="30" rows="4" placeholder="Message"></textarea>
                    </div>
                    <div class="input-group mb-2">
                        <button class="form-control btn-success" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    



    <!-- Start Script -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/templatemo.js"></script>
    <script src="js/custom.js"></script>
    <!-- End Script -->

    <!-- Start Slider Script -->
    <script src="js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- End Slider Script -->

</body>

</html>