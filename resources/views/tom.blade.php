<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Quicksand:400,700" rel="stylesheet">
    <title>Three Column Layout</title>
</head>

<body>
    <div id="wrapper">
        <header>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#">THƯ VIỆN ẢNH</a>
                <a href="#">CỬA HÀNG THEO BỘ PHẬN</a>
                <a href="#">TÌM CHUYÊN GIA</a>
                <a href="#">CÂU CHUYỆN VÀ LỜI KHUYÊN</a>
                <a href="#"><span><img src="glyphicon/sale.png"></span>GIẢM GIÁ</a>
                <a href="#"> BÁN NGOÀI TRỜI</a>
            </div>

            <div class="main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 logo">
                            <img src="glyphicon/logo.png">
                        </div>
                        <div class="col-lg-5 search">
                            <form method="get" action="">
                                <input type="text" placeholder="Tìm kiếm sản phẩm, hình ảnh chuyên nghiệp">
                                <button type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                        <div class="search-button">
                            <button id="search-button" type="button">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="col-lg-3 badge">
                            <div class="badge-image">
                                <img src="glyphicon/topbadge.png">
                            </div>
                            <div class="badge-text">
                                <a>BÁN NGOÀI TRỜI</a>
                            </div>
                        </div>
                        <div class="col-lg-1 shopping-cart">
                            <img id="shopping-cart-icon" src="glyphicon/shopping-cart.png">
                            <img id="shopping-cart-number" src="glyphicon/shopping-cart-order.png">
                            <a id="order-number">0</a>
                        </div>
                        <div class="col-lg-1 login">
                            <img src="glyphicon/login.png">
                            <a>Đăng nhập</a>
                        </div>
                        <div onclick="openNav()" class="btn-mobile">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="row span-search">
                        <form method="get" action="">
                            <input type="text" placeholder="Tìm kiếm sản phẩm, hình ảnh chuyên nghiệp">
                            <button type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="header-nav">
                    <div class="row">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">THƯ VIỆN ẢNH</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">CỬA HÀNG THEO BỘ PHẬN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">TÌM CHUYÊN GIA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">CÂU CHUYỆN VÀ LỜI KHUYÊN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>
                                        <img src="glyphicon/sale.png">
                                    </span>GIẢM GIÁ</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </header>

        <section class="main-section">
       <div class="container main-nav-dropdown">
            <div class="dropdown">
                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Về Houzz
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <button class="dropdown-item" type="button">Về Houzz</button>
                      <button class="dropdown-item" type="button">Đội ngũ</button>
                      <button class="dropdown-item" type="button">Nghề nghiệp</button>
                      <button class="dropdown-item" type="button">Tin tức</button>
                      <button class="dropdown-item" type="button">Truyền thông</button>
                      <button class="dropdown-item" type="button">Đánh giá khách hàng</button>
                    </div>

    </div>
       </div>
         
            <div class="container-fluid">
                <div class="topbanner">
                    <div class="image">
                        <img class="img-fluid" src="images/topbanner.jpg">
                    </div>
                    <div class="text">
                        <span>VỀ HOUZZ</span>
                    </div>
                </div>
            </div>
            <div class="main-nav">
                <div class="container">
                    <ul class="nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Về Houzz</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Đội ngũ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nghề nghiệp</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tin tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Truyền thông</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Đánh giá khách hàng</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="about-section">
                    <h1>Chào mừng đến với Houzz</h1>
                    <p>Chúng tôi là nền tảng đầu tiên cho việc tân trang lại ngôi nhà và thiết kế - mang lại cho gia đình của
                        bạn
                    </p>
                    <p> những sản phẩm độc đáo cùng với những thiết kế mới nhất và tân tiến nhất.</p>
                    <a>
                        <span>
                            <i class="fa fa-angle-double-right"></i>
                        </span>Khám phá blog của chúng tôi</a>
                </div>

                <hr>

                <div class="story-section">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 story-image">
                            <img class="img-fluid" src="images/story-banner.jpg">
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <h2>Houzz bắt đầu với một ngôi nhà</h2>
                            <p>Khi những người sáng lập Adi và Alon cải tạo lại ngôi nhà của họ, họ bắt đầu theo những cách
                                mà các dự án này thường làm: với một đống tạp chí cao và giới thiệu cho các chuyên gia về
                                nhà từ những người họ biết. Nhưng sau khi những đống sách bị rách nát không làm cho ước mơ
                                của họ thành hiện thực, họ cảm thấy bị mắc kẹt. Phải có một cách tốt hơn.</p>
                            <p>Vì vậy, họ xây dựng Houzz. Một nơi để duyệt và lưu ảnh gia đình đẹp. Một nơi để tìm đúng chuyên
                                gia thiết kế và thiết kế. Một nơi để kết nối với những người khác đã ở đó. Houzz bắt đầu
                                như là một dự án phụ nhưng đã trở thành một cộng đồng của hơn 40 triệu chủ sở hữu nhà, những
                                người đam mê thiết kế nhà và chuyên gia về cải tiến nhà ở khắp cả nước và trên toàn thế giới.</p>
                            <p>Cho dù bạn đang bắt đầu một cuộc tân trang nhà bếp hoàn chỉnh hay chỉ cần tìm kiếm bảng giường
                                ngủ hoàn hảo, thì cộng đồng Houzz của chủ nhà và chuyên gia sẽ giúp bạn. Và khi bạn đã sẵn
                                sàng để bắt đầu dự án, Houzz là cách tốt nhất để lấy cảm hứng, khám phá các sản phẩm và tìm
                                kiếm và hợp tác với kiến ​​trúc sư, nhà thiết kế hoặc nhà thầu hoàn hảo.</p>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="video-section">
                    <h1>Câu chuyện từ Houzz</h1>
                    <img class="img-fluid" src="images/intro-video.jpg">
                </div>
            </div>
        </section>

        <footer>
            <div class="main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="glyphicon/logo.png">
                        </div>
                        <div class="col-md-3 company">
                            <h2>CÔNG TY</h2>
                            <ul>
                                <li>Về houzz</li>
                                <li>Trên bản tin tức</li>
                                <li>Thông tin báo chí</li>
                                <li>Nghề nghiệp</li>
                                <li>Liên hệ</li>
                                <li>Điều khoản &amp bảo mật</li>
                                <li>Bản quyền và thương hiệu</li>
                            </ul>
                        </div>
                        <div class="col-md-3 explore">
                            <h2>KHÁM PHÁ HOUZZ</h2>
                            <ul>
                                <li>Nút và thương hiệu</li>
                                <li>Mobile Apps</li>
                                <li>Quảng cáo</li>
                                <li>Dành cho các chuyên gia</li>
                                <li>Bán trên Houzz</li>
                                <li>Viết bài đánh giá</li>
                                <li>FAQs</li>
                            </ul>
                        </div>
                        <div class="col-md-3 connect">
                            <h2>KẾT NỐI VỚI CHÚNG TÔI</h2>
                            <ul>
                                <li>
                                    <i class="fa fa-comments" aria-hidden="true"></i>Houzz blog</li>
                                <li>
                                    <i class="fa fa-twitter-square" aria-hidden="true"></i>Twitter</li>
                                <li>
                                    <i class="fa fa-facebook-square" aria-hidden="true"></i>Facebook</li>
                                <li>
                                    <i class="fa fa-google-plus-square" aria-hidden="true"></i>Google+</li>
                                <li>
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>Youtube</li>
                                <li>
                                    <i class="fa fa-rss-square" aria-hidden="true"></i>RSS</li>
                            </ul>
                        </div>
                    </div>

                    <hr>

                    <div class="sub-footer">
                        <span class="copyright"><i class="fa fa-copyright" aria-hidden="true"></i>2017 Houzz Inc.</span>
                        <span class="sologan">Cách mới để thiết kế ngôi nhà của bạn</span>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/myjs.js"></script>
</body>

</html>