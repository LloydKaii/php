
@include('coach/includes/header')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcrumb-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Quản lý bài học</h2>
                        <div class="bt-option">
                            <a href="/coach">Trang chủ</a>
                            <span>Quản lý bài học</span>
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
                            <span>Quản lý bài học</span>
                            <h2>Đây là các bài học của bạn quản lý</h2>
                            <a href="/coach/addex" class="mt-5 btn" style="background-color: #f36100;color:white;border:none;border-radius:10px;padding:10px">Thêm bài học mới</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($exercise_all as $item)
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
                                <span class="mt-1">Danh mục: {{$item->name_exercise_categories}}</span>
                                <br>
                                <a href="/coach/updateex/{{$item->id}}" class="btn btn-primary">Sửa</a>
                                @if ($item->delExercise==1)
                                <a href="/coach/restore/{{$item->id}}" class="btn btn-success">Khôi phục</a>
                                @else
                                <a href="/coach/delete/{{$item->id}}" class="btn btn-danger">Xóa</a>
                                @endif
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

    @include('coach/includes/footer')