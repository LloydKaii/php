
@include('user/includes/header')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcrumb-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Danh sách bài học của bạn đã đăng ký</h2>
                        <div class="bt-option">
                            <a href="/">Trang chủ</a>
                            <span>Danh sách bài học của bạn đã đăng ký</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Team Section Begin -->
    <section class="team-section team-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-title">
                        <div class="section-title">
                            <span>Danh sách bài học của bạn đã đăng ký</span>
                            <h2>Đây là các Danh sách bài học của bạn đã đăng ký </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($exercises as $item)
                    <div class="col-lg-4 col-sm-6">
                        <div class="ts-item">
                            <!-- Nửa trên là ảnh -->
                            <div class="ts-img" style="height: 200px; background: url('{{$item->imageExercise}}') no-repeat center center; background-size: cover;">
                            </div>
                            <!-- Nửa dưới là thông tin với chữ trắng, nền đen, căn giữa -->
                            <div class="" style="background-color: rgba(0, 0, 0, 0.7); padding: 20px; text-align: center; color: white;">
                <a href="/exdetail/{{$item->id}}">
                                <h4 class="text-white ">{{$item->nameExercise}}</h4>
                </a>

                            </div>
                            <div class="" style="background-color: rgba(0, 0, 0, 0.7); padding: 0 20px; padding-bottom: 10px; text-align: left; color: white;">
                                <span class="">Mô tả: {{$item->descriptionExercise}}</span>
                                <br>
                                <span class="mt-1">Thời gian: {{$item->timeExercise}} phút</span>
                                <br>
                                <span class="mt-1">Số bài tập: {{$item->numberExercise}} bài</span>
                                <br>
                                <span class="mt-1">Ngày đăng: {{$item->dateExercise}}</span>
                                <br>
                                <span class="mt-1">Huấn luyện viên: <a href="/profile/{{$item->id_user}}">{{$item->name}}</a></span>
                                <br>
                                <span class="mt-1">Danh mục: <a href="/exlistbycate/{{$item->id_category}}">{{$item->name_exercise_categories}}</a></span>
                                <br>
                            </div>

                        </div>
                    </div>
                @endforeach
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
                        <p>333 Middle Winchendon Rd, Rindge,<br/> NH 03461</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-mobile"></i>
                        <ul>
                            <li>125-711-811</li>
                            <li>125-668-886</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text email">
                        <i class="fa fa-envelope"></i>
                        <p>Support.gymcenter@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->

    @include('user/includes/footer')