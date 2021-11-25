<!DOCTYPE html>
<html lang="en">
<meta name="csrf-token" content="{{ csrf_token() }}">
<head>
    <title>Document</title>
    @include('frontend.layouts.head')
    <style>
        .form_group {
            top: 100px;
            position: sticky;
            margin-top: 2.5rem;
            background-color: rgba(0, 120, 10, 0.2);
            padding: 40px 40px 40px 50px;
            border-radius: 8px;
            box-shadow: 0px 15px 30px rgba(62, 86, 238, 0.15);
        }

        .form-control {
            border-radius: 36px;
            padding: 25px;
        }

        .form-control:hover {
            border: 1px solid rgb(0, 255, 106);
        }

        .form-control.text:focus {
            background: rgb(217, 255, 0);
        }

        /* .form-control-select {
            padding: 25px;
         } */
        .form-label {
            color: #182135;
            font-weight: 400;
        }

        .submit-btn {
            width: 100%;
            background-color: orange;
            border-radius: 2rem;
            padding: 10px;
            color: white;
            font-weight: 600;
            border: none;
        }

        .submit-btn:hover {
            background-color: rgba(0, 255, 64, 0.5);
        }

        .nav-tabs .nav-link {
            margin-right: 16px;
            padding: 8px 0px;
            background-color: white;
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            border: none;
            border-bottom: 5px solid rgba(131, 64, 2, 0.979) !important;
        }

        .nav-link:hover {
            border: none;
        }
    </style>
</head>

<body>
@include('frontend.layouts.header')
<!-- Nav Bar End -->
<div class="container">
    <div class="detail">
        <div class="row">
            <div class="col-8">
                <a href="">Home ></a> <a href="{{ $Room_detail->room_type }}">{{ $Room_detail->room_type }} ></a> <a
                    href="">{{ $Room_detail->name }}</a>
                <h2 class="price-detail">600.000 VND</h2>
                <div class="container">
                    <div class="slide-detail">
                    <!-- <div class="mySlides">
                <div class="numbertext">1 / 6</div>
                <img src="{{ config('app.base_url') . $Room_detail->feature_image_path	 }}" style="width: 100%" />
              </div> -->
                        @foreach ($Image_room as $key => $item)
                            <div class="mySlides">
                                <div class="numbertext">{{ $key + 1 }} / 6</div>
                                <img src="{{ config('app.base_url') . $item->image	 }}" style="width: 100%"/>
                            </div>
                        @endforeach
                        <div class="mySlides">
                            <div class="numbertext">6 / 6</div>
                            <img src="{{ config('app.base_url') . $Room_detail->feature_image_path	 }}"
                                 style="width: 100%; height: ;"/>
                        </div>
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>

                        <div class="row ml-0 mr-0 mt-3">
                        <!-- <div class="col-2">
                  <img class="demo cursor" src="{{ config('app.base_url') . $Room_detail->feature_image_path	 }}" style="width: 110px; height: 80px;" onclick=" currentSlide(1)" alt="Cinque Terre" />
                </div> -->
                            @foreach ($Image_room as $key => $item)
                                <div class="col-2">
                                    <img class="demo cursor" src="{{ config('app.base_url') . $item->image	 }}"
                                         style="width: 110px; height: 80px;" onclick="currentSlide( {{ $key + 1 }} )"
                                         alt="Cinque Terre"/>
                                </div>

                            @endforeach
                            <div class="col-2">
                                <img class="demo cursor"
                                     src="{{ config('app.base_url') . $Room_detail->feature_image_path	 }}"
                                     style="width: 110px; height: 80px;" onclick=" currentSlide(6)" alt="Cinque Terre"/>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <div class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                     data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                     aria-selected="true">
                                    Home
                                </div>
                                <div class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                     data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                     aria-selected="false">
                                    Profile
                                </div>
                                <div class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                     data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                     aria-selected="false">
                                    Contact
                                </div>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                 aria-labelledby="nav-home-tab">
                                <div class="wattage">
                                    <p>Công suất 3 người lớn</p>
                                    <p>Nhà vệ sinh chung (gồm 2 tắm + 2 wc)</p>
                                    <p>Nhà vệ sinh chung (gồm 2 tắm + 2 wc)</p>
                                    <p>Nhà vệ sinh chung (gồm 2 tắm + 2 wc)</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                 aria-labelledby="nav-profile-tab">
                                <div class="wattage">
                                    <form action="{{ route('add_comment', [ 'id' => $Room_detail->id ]) }}"
                                          method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Example textarea</label>
                                            <textarea class="form-control" name="content"
                                                      id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                 aria-labelledby="nav-contact-tab">
                                <div class="wattage">
                                    <p>Công suất 3 người lớn</p>
                                    <p>Nhà vệ sinh chung (gồm 2 tắm + 2 wc)</p>
                                    <p>Nhà vệ sinh chung (gồm 2 tắm + 2 wc)</p>
                                    <p>Nhà vệ sinh chung (gồm 2 tắm + 2 wc)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="form_group">
                    <div class="form">
                        <h3>Thông tin đặt Homestay</h3>
                        <div id="booking" class="section">
                            <div class="section-center">
                                <div class="">
                                    <div class="row mr-0">
                                        <div class="booking-form">
                                            <form method="POST" action="">
                                                @csrf
                                                <input type="hidden" id="user_id" value="{{ Auth::id() }}">
                                                <input type="hidden" id="post_id" value="{{ $Room_detail->id }}">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Email
                                                        address</label>
                                                    <input placeholder="Email address" type="email"
                                                           class="form-control text" id="exampleInputEmail1"
                                                           aria-describedby="emailHelp"/>
                                                    <span class="text-danger" id="emailError"></span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleName" class="form-label">Name</label>
                                                    <input placeholder="Name" type="text" class="form-control text"
                                                           id="exampleName" aria-describedby="textHelp"/>
                                                    <span class="text-danger" id="nameError"></span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="examplePhone" class="form-label">Phone</label>
                                                    <input placeholder="Phone" type="text" class="form-control text"
                                                           id="examplePhone" aria-describedby="textHelp"/>
                                                    <span class="text-danger" id="phoneError"></span>
                                                </div>
                                                <div class="row mr-0">
                                                    <div class="col-md-12 pr-0">
                                                        <div class="form-group">
                                                            <span class="form-label">Check In</span>
                                                            <input class="form-control" type="date" id="checkIn"
                                                                   placeholder=""/>
                                                        </div>
                                                        <span class="text-danger" id="check_inError"></span>
                                                    </div>
                                                    <div class="col-md-12 pr-0">
                                                        <div class="form-group">
                                                            <span class="form-label">Check Out</span>
                                                            <input class="form-control" type="date" id="checkOut"
                                                                   placeholder=""/>
                                                            <span class="text-danger" id="check_outError"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mr-0">
                                                    <div class="col-md-12 pr-0">
                                                        <div class="form-group">
                                                            <span class="form-label">Adults</span>
                                                            <select class="form-control" id="amount_of_people">
                                                                <option value = "1">1</option>
                                                                <option value = "2" >2</option>
                                                                <option value = "3">3</option>
                                                                <option value = "4">4</option>
                                                                <option value = "5">5</option>


                                                            </select>
                                                            <span class="select-arrow"></span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <span class="form-label">Services</span>
                                                    <select class="form-control" id="services" name="services" required
                                                            multiple="multiple">

                                                        @foreach($service as $service)
                                                            <option value="{{$service->id}}">{{$service->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    <span class="select-arrow"></span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="examplePhone" class="form-label">Discount</label>
                                                    <input placeholder="Discount" type="text" class="form-control text"
                                                           id="exampleDiscount" aria-describedby="textHelp"/>
                                                </div>

                                            </form>
                                            <div class="form-btn">
                                                <button id="bookings" class="submit-btn">
                                                    Đặt ngay
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('frontend.layouts.footer')
@include('frontend.layouts.js')

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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
        responsive: [{
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
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('css/lib/easing/easing.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
<script src="{{ asset('css/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('css/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('css/lib/counterup/counterup.min.js') }}"></script>

<!-- Contact Javascript File -->
<script src="{{ asset('css/mail/jqBootstrapValidation.min.js') }}"></script>
<script src="{{ asset('css/mail/contact.js') }}"></script>
<!-- Template Javascript -->
<script src="{{ asset('css/js/main.js') }}"></script>
<script src="{{ asset('css/js/detail.js') }}"></script>
</body>

</html>
