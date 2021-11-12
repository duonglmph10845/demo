<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    @include('frontend.layouts.head')
</head>

<body>
    @include('frontend.layouts.header')
    <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <p>An Vui Lodge Villa 20</p>
                <h2>View Bể bơi</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/beboi1.jpg" alt="Image">
                            <div class="meta-date">
                                <span>01</span>
                                <strong>Jan</strong>
                                <span>2045</span>
                            </div>
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Madam Diệu Hảo</a></h3>
                            <p>
                                Đây cũng là một địa chỉ rất thú vị, có khoảng trời trong lành, là nơi lý tưởng để bạn tổ
                                chức tiệc BBQ, cắm trại.
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/beboi2.jpg" alt="Image">
                            <div class="meta-date">
                                <span>01</span>
                                <strong>Jan</strong>
                                <span>2045</span>
                            </div>
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Homestay Đào Anh Khánh</a></h3>
                            <p>
                                Các phòng và không gian ở đây được thiết kế nhiều màu sắc, thoáng mát, gần gũi với thiên
                                nhiên. Các phòng có cấu trúc tương đối lạ mắt, nhưng rất tiện nghi được trang bị nhiều
                                thiết bị và đồ dùng cá nhân cần thiết.
                            </p>
                        </div>
                      
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/beboi3.jpg" alt="Image">
                            <div class="meta-date">
                                <span>01</span>
                                <strong>Jan</strong>
                                <span>2045</span>
                            </div>
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Peace Green Chic Flat</a></h3>
                            <p>
                                Hòa Bình Green Chic Flat rất thích hợp cho những chuyến du lịch ngắn ngày, những bạn trẻ
                                yêu Hà Nội, muốn nghỉ dưỡng tại những địa điểm lý tưởng, tránh xa ồn ào nhưng không muốn
                                di chuyển quá xa.
                            </p>
                        </div>
                     
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/beboi4.jpg" alt="Image">
                            <div class="meta-date">
                                <span>01</span>
                                <strong>Jan</strong>
                                <span>2045</span>
                            </div>
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Phorri’s House Mê Linh Homestay</a></h3>
                            <p>
                                Các phòng ở đây đều có kiến ​​trúc hiện đại và nội thất vô cùng sang trọng, tất cả các
                                phòng đều có hướng vườn rất đẹp. Và đặc biệt điều này cũng vậy Homestay ngoại thành Hà
                                Nội có hồ bơi Tiêu chuẩn 5 sao.
                            </p>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/beboi5.jpg" alt="Image">
                            <div class="meta-date">
                                <span>01</span>
                                <strong>Jan</strong>
                                <span>2045</span>
                            </div>
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Mayfair Homestay</a></h3>
                            <p>
                                Mayfair Homestay có hồ bơi ngoài trời thoáng mát và rộng rãi là không gian tuyệt vời để
                                bạn thư giãn. Giá phòng ở đây cũng được đánh giá ở mức phù hợp với túi tiền của nhiều du
                                khách.
                            </p>
                        </div>
                     
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/beboi4.jpg" alt="Image">
                            <div class="meta-date">
                                <span>01</span>
                                <strong>Jan</strong>
                                <span>2045</span>
                            </div>
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Thung Mây Homestay ở ngoại thành 
                                </a></h3>
                            <p>
                                Thung Mây Homestay Hà Nội là một trong những homestay ngoại thành Hà Nội có giá rẻ. Các
                                phòng ở đây hầu hết được thiết kế rất đơn giản, có phòng tập thể, phòng cho gia đình và
                                cho các cặp đôi.
                            </p>
                        </div>
                     
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    @include('frontend.layouts.footer')
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend_assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/lib/counterup/counterup.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('frontend_assets/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontend_assets/js/main.js') }}"></script>
    <!--jquery CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--slick slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $('.slider-team').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                },

                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

    </script>
    <!--michelsnik-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>