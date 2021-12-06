<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    @include('frontend.layouts.head')
</head>

<body>
    @include('frontend.layouts.header')
    
    <!-- Blog Start -->
    <div class="blog" style="margin: center;">
        <div class="container">
            <div class="section-header text-center">
                <p>HOMESTAY Lodge Villa 20</p>
                <h2>{{ $Romm_types->name }}</h2>
            </div>
            <div class="row">
                @foreach ($ListRooms as $item)
                <div class="col-lg-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ config('app.base_url') . $item->feature_image_path	 }}" alt="Image">

                        </div>
                        <div class="blog-text">
                            <h3><a href="{{ route('room_detail', [ 'id' => $item->id ])}}">{{ $item->name_room }}</a></h3>
                            <p>
                                Những homestay được xây dựng tập trung tất cả những hoạt động vui
                                chơi, nghỉ dưỡng cho mọi thành viên trong gia đình như thảm cỏ , hồ bơi, khu cắm trại,khu vui chơi trẻ em,
                                khu tổ chức tiệc nướng BBQ,…
                            </p>
                            <h3 class="price-detail" style="color: #cf9d6c">{{ number_format($item->price) }}VND</h3>
                        </div>
                        <div class="form-btn">
                            <button class="submit-btn">
                                <a href="">
                                Xem chi tiết homestay
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
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