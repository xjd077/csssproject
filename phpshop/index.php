<!DOCTYPE html>
<html lang="en">

<head>
    <title>Icewine-shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

</head>

<body>
    <?php
    // 引入头部
    include 'front-top.php';
    ?>
    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/bannerimg1.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Icewine</b> eCommerce</h1>
                                <h3 class="h2">因为稀少所以珍贵</h3>
                                <p></p>
                                <p>
                                    不同与一般葡萄成熟即采摘<br>
                                    晚收葡萄需在12月份-8度一下采摘<br>
                                    这个时候的葡萄已经风干，单宁含量少，葡萄更甜美，味道更醇厚<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/bannerimg02.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h2 class="h2">酿造冰酒的葡萄是跟上天豪赌的胜利果实</h2>
                                <br>
                                <p>
                                    9月成熟的葡萄继续留在葡萄藤上直到1月份，甜度和风土充分积累<br>
                                    需要抵御风霜冰雪、小动物和飞鸟的破坏需要寒冷的天气但不至于太冷而冻坏了葡萄<br>
                                    全世界仅有少数地方具备条件酿造冰酒<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categories of Icewine</h1>
                <p>
                    <br>
                    冰酒酿造技术由德国移民带入加拿大，经当地人进一步改良，酿出的酒更独特，更醇香。其品种主要有冰白葡萄酒和冰红葡萄酒。<br>
                    其中冰白葡萄酒颜色呈透明金黄色，素有“液体黄金”之美称；散发出蜂蜜和水果等香味；口感甘甜醇厚，清新可口。<br>
                    最佳的饮用温度为冷藏至4~8℃。<br>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-2 p-5 mt-3"></div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="shop.php"><img src="./assets/img/sample01.jpg" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">冰红葡萄酒</h5>
                <p class="text-center"><a href="shop.php" class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="shop.php"><img src="./assets/img/sample02.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">冰白葡萄酒</h2>
                <p class="text-center"><a href="shop.php" class="btn btn-success">Go Shop</a></p>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">热销产品</h1>
                    <p>
                        Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop.php">
                            <img src="./assets/img/product01.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">￥68.00</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">VQA晚收冰白葡萄酒</a>
                            <p class="card-text">
                                果香浓郁丨冰酒加拿大原装进口VQA晚收冰白葡萄酒375ml甜白葡萄酒
                            </p>
                            <p class="text-muted">Reviews (24)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop.php">
                            <img src="./assets/img/product02.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">￥163.00</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">甜白葡萄酒冰酒</a>
                            <p class="card-text">
                                零下8度奇迹 液体黄金德国进口西万尼甜白葡萄酒冰酒Eiswein
                            </p>
                            <p class="text-muted">Reviews (48)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop.php">
                            <img src="./assets/img/product03.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">￥118.00</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">进口维戴尔冰酒</a>
                            <p class="card-text">
                                加拿大晚收冰白葡萄酒甜白葡萄酒进口维戴尔冰酒赠香槟杯
                            </p>
                            <p class="text-muted">Reviews (74)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->
    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>