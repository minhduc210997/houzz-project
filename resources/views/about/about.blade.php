@extends('master')

@section('font')
<link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Quicksand:400,700" rel="stylesheet">
@endsection

@section('templatecss')
<link rel="stylesheet" href="css/about/about.css">
@endsection

@section('title')
<title>Three Column Layout</title>
@endsection


@section('content')
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
                        <img class="img-fluid" src="images/about/topbanner.jpg">
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
                            <img class="img-fluid" src="images/about/story-banner.jpg">
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
                    <img class="img-fluid" src="images/about/intro-video.jpg">
                </div>
            </div>
        </section>
@endsection

@section('script')
<script src="js/about/about.js"></script>
@endsection