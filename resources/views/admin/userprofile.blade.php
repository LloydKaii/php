@include('admin.includes.header')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcrumb-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>Hồ sơ khách hàng</h2>
                    <div class="bt-option">
                        <a href="/">Trang chủ</a>
                        <span>Hồ sơ khách hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- team Section Begin -->
<section class="team-section spad">
    <div class="container">
        <div class="row">
            <!-- Left Column (Avatar) -->
            <div class="col-lg-4">
                <div class="team-pic">
                    <img src="{{ $userById->avatar }}" alt="{{ $userById->name }}"  class="img-fluid rounded-circle shadow-lg">
                </div>
            </div>
            
            <!-- Right Column (userById Info) -->
            <div class="col-lg-8">
                <div class="team-info">
                    <h2 class="text-white">Khách hàng: {{ $userById->name }}</h2>
                    <p class="mt-5"><strong>Tuổi:</strong> {{ $userById->age }} tuổi</p>
                    <p><strong>Cân nặng:</strong> {{ $userById->weight }} kg</p>
                    <p><strong>Chiều cao:</strong> {{ $userById->height }} cm</p>
                    <p><strong>Mô tả:</strong> {{ $userById->description_user }}</p>
                    <p><strong>Email:</strong> {{ $userById->email }}</p>
                    
                    <!-- Social Media Links -->
                    <div class="team-social mt-3 text-white">
                        <a href="#" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
                        <a href="#" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
                        <a href="#" class="btn btn-instagram"><i class="fa fa-instagram"></i> Instagram</a>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="text-white mb-5 mt-5">Danh sách bài tập khách hàng đã đăng ký</h2>
        <div class="row">
            @if (isset($exercises))
            @foreach ($exercises as $item)
            <div class="col-lg-4 col-sm-6">
                <div class="ts-item">
                    <!-- Nửa trên là ảnh -->
                    <div class="ts-img" style="height: 200px; background: url('{{$item->imageExercise}}') no-repeat center center; background-size: cover;">
                    </div>
                    <!-- Nửa dưới là thông tin với chữ trắng, nền đen, căn giữa -->
                    <div class="" style="background-color: rgba(0, 0, 0, 0.7); padding: 20px; text-align: center; color: white;">
        <a href="/admin/exdetail/{{$item->id}}">
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
                        <span class="mt-1">Danh mục: {{$item->name}}</span>
                        <br>
                    </div>

                </div>
            </div>
        @endforeach
            @endif
        </div>
    </div>
</section>
<!-- team Section End -->

<!-- Contact Section Begin -->
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
<!-- Contact Section End -->

@include('admin.includes.footer')
