@include('coach.includes.header')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcrumb-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>Hồ sơ của bạn</h2>
                    <div class="bt-option">
                        <a href="/">Trang chủ</a>
                        <span>Hồ sơ của bạn</span>
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
                    <img src="{{ $coachById->avatar }}" alt="{{ $coachById->name }}"  class="img-fluid rounded-circle shadow-lg">
                    
                </div>
            </div>
            
            <!-- Right Column (CoachById Info) -->
            <div class="col-lg-8">
                <div class="team-info">
                    <form action="/coach/profile" method="post">
                        @csrf
                    <h2 class="text-white">Huấn luyện viên:<input required type="text" value="{{ $coachById->name }}" name="name"> </h2>
                    <p class="mt-5"><strong>Tuổi:</strong> <input required type="number" value="{{ $coachById->age }}" name="age">  tuổi</p>
                    <p><strong>Cân nặng:</strong> <input required type="number" value="{{ $coachById->weight }}" name="weight">  kg</p>
                    <p><strong>Chiều cao:</strong> <input required type="number" value="{{ $coachById->height }}" name="height">  cm</p>
                    <p><strong>Mô tả:</strong> <input required type="text" value="{{ $coachById->description_user }}" name="description_user"></p>
                    <p><strong>Email:</strong> <input required type="email" value="{{ $coachById->email }}" name="email"></p></p>
                    <p><strong>Link avatar:</strong> <input required type="text" value="{{ $coachById->avatar }}" name="avatar"></p></p>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                    <!-- Social Media Links -->
                    <div class="team-social mt-3 text-white">
                        <a href="#" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
                        <a href="#" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
                        <a href="#" class="btn btn-instagram"><i class="fa fa-instagram"></i> Instagram</a>
                    </div>
                </form>
                </div>
            </div>
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

@include('coach.includes.footer')
