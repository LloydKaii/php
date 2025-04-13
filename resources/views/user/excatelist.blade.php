
@include('user/includes/header')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Danh mục khóa học</h2>
                        <div class="bt-option">
                            <a href="/">Trang chủ</a>
                            <span>Danh mục khóa học</span>
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
                            <span>Danh mục khóa học</span>
                            <h2>Đây là các danh mục khóa học chúng tôi đang có</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($exercise_categories_all as $item)
                <div class="col-lg-4 col-sm-6">
                    <div class="ts-item">
                        <!-- Nửa trên là ảnh -->
                        <div class="ts-img" style="height: 300px; background: url('{{$item->image_exercise_categories}}') no-repeat center center; background-size: cover;">
                        </div>
                        <a href="/exlistbycate/{{$item->id}}">
                
                        <!-- Nửa dưới là thông tin với chữ trắng, nền đen, căn giữa -->
                        <div class="" style="background-color: rgba(0, 0, 0, 0.7); padding: 20px; text-align: center; color: white;">
                            <h4 class="text-white">{{$item->name_exercise_categories}}</h4>
                            <span>{{$item->description_exercise_categories}}</span>
                        </div>
            </a>

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