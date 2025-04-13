


    <!-- Header Section Begin -->
    @include('user/includes/header')
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span>THÁCH THỨC BẢN THÂN</span>
                                <h1>CHINH <strong>PHỤC</strong> MỌI GIỚI HẠN</h1>
                                <a href="#" class="primary-btn">THAM GIA</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span>THÁCH THỨC BẢN THÂN</span>
                                <h1>CHINH  <strong>PHỤC</strong> MỌI GIỚI HẠN</h1>
                                <a href="#" class="primary-btn">THAM GIA</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- ChoseUs Section Begin -->
    <section class="choseus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Tại sao chọn chúng tôi?</span>
                        <h2>ĐẨY GIỚI HẠN CỦA BẠN VƯỢT TRỘI</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-034-stationary-bike"></span>
                        <h4>Thiết bị hiện đại</h4>
                        <p>Tăng hiệu quả tập luyện,đa dạng bài tập,độ an toàn tăng cao, tiết kiệm thời gian và sức lực.<!--  -->.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-033-juice"></span>
                        <h4>Kế hoạch dinh dưỡng </h4>
                        <p>Cải thiện sức khỏe tổng thể, quản lý calo, tăng cường sức khoẻ tim mạch, cải thiện giấc ngủ, hỗ trợ phục hồi cơ bắp..</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-002-dumbell"></span>
                        <h4>Tập luyện chuyên nghiệp</h4>
                        <p>Tối ưu hoá quá trình, đảm bảo an toàn, cá nhân hoá theo nhu cầu, theo dõi và điều chỉnh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-014-heart-beat"></span>
                        <h4>Không Gian</h4>
                        <p>Sạch sẽ, ngăn nắp, rộng rãi, môi trường thân thiện.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- Classes Section Begin -->
    <section class="classes-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Khoá Huấn Luyện</span>
                        <h2>Bạn Quan Tâm Đến Khoá Nào?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($exercise_categories as $index => $item)
                    @if ($index==3 || $index==4)
                    <div class="col-lg-6 col-md-6">
                        <div class="class-item">
                            <div class="ci-pic">
                                <img src="{{$item->image_exercise_categories}}" alt="">
                            </div>
                            <div class="ci-text">
                                <span>{{$item->name_exercise_categories}}</span>
                                <h4>{{$item->description_exercise_categories}}</h4>
                                <a href="/exlistbycate/{{$item->id}}"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-lg-4 col-md-6">
                        <div class="class-item">
                            <div class="ci-pic">
                                <img src="{{$item->image_exercise_categories}}" alt="">
                            </div>
                            <div class="ci-text">
                                <span>{{$item->name_exercise_categories}}</span>
                                <h4>{{$item->description_exercise_categories}}</h4>
                                <a href="/exlistbycate/{{$item->id}}"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- Banner Section Begin -->
    <section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text">
                        <h2>ĐĂNG KÝ NGAY ĐỂ NHẬN THÊM NHIỀU ƯU ĐÃI</h2>
                        <div class="bt-tips">NƠI SỨC KHOẺ, SẮC ĐẸP VÀ THỂ HÌNH HỘI TỤ.</div>
                        <a href="#" class="primary-btn  btn-normal">Đăng Ký</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Pricing Section Begin -->
    <section class="pricing-section spad" id="pricing-section-id">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Các Gói Tập</span>
                        <h2>Chọn Gói Mà Bạn Muốn Đăng Ký</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ( $listPackage as $index => $item )
                @php
                $array = explode(',', $item->description);
                @endphp
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>{{$item->namePackage}}</h3>
                        <div class="pi-price">
                            <h2>{{number_format($item->price, 0, ',', '.')}}vnd</h2>
                            <span>SINGLE CLASS</span>
                        </div>
                        <ul>
                            @foreach ( $array as $index1 => $item1)
                                <li>{{$item1}}</li>
                            @endforeach
                        </ul>
                        <a href="/check-out-package/{{$item->id}}" class="primary-btn pricing-btn">Đăng ký ngay</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- Gallery Section Begin -->
    <div class="gallery-section">
        <div class="gallery">
            <div class="grid-sizer"></div>
            <div class="gs-item grid-wide set-bg" data-setbg="img/gallery/gallery-1.jpg">
                <a href="img/gallery/gallery-1.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gallery-2.jpg">
                <a href="img/gallery/gallery-2.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gallery-3.jpg">
                <a href="img/gallery/gallery-3.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gallery-4.jpg">
                <a href="img/gallery/gallery-4.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gallery-5.jpg">
                <a href="img/gallery/gallery-5.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item grid-wide set-bg" data-setbg="img/gallery/gallery-6.jpg">
                <a href="img/gallery/gallery-6.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
        </div>
    </div>
    <!-- Gallery Section End -->

    <!-- Team Section Begin -->
    <section class="team-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-title">
                        <div class="section-title">
                            <span>ĐỘI NGŨ HLV</span>
                            <h2>ĐÀO TẠO VỚI CÁC HLV CHUYÊN NGHIỆP</h2>
                        </div>
                        <a href="#" class="primary-btn btn-normal appoinment-btn">QUAN TÂM</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ts-slider owl-carousel">
                    @foreach ($coach_top5 as $item)
                    <a href="/profile/{{$item->id}}">
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="{{$item->avatar}}">
                            <div class="ts_text">
                                <h4>{{$item->name}}</h4>
                                <span>{{$item->description_user}}</span>
                            </div>
                        </div>
                    </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Get In Touch Section Begin -->
    <div class="gettouch-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-map-marker"></i>
                        <p>475 Điện Biên Phủ,Q Bịnh Thành, Tp HCM.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-mobile"></i>
                        <ul>
                            <li>0563545845 </li>
                            <li>0878493104</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text email">
                        <i class="fa fa-envelope"></i>
                        <p>lloydkaii2101@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->
    @include('user/includes/footer')
    