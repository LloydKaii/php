
@include('admin/includes/header')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcrumb-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Quản lý danh mục</h2>
                        <div class="bt-option">
                            <a href="/admin">Trang chủ</a>
                            <span>Quản lý danh mục</span>
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
                            <span>Quản lý danh mục</span>
                            <h2>Đây là các danh mục admin quản lý</h2>
                            <a href="/admin/addcate" class="mt-5 btn" style="background-color: #f36100;color:white;border:none;border-radius:10px;padding:10px">Thêm danh mục mới</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($exercise_categories as $item)
                <div class="col-lg-4 col-sm-6">
                    <div class="ts-item">
                        <!-- Nửa trên là ảnh -->
                        <div class="ts-img" style="height: 300px; background: url('{{$item->image_exercise_categories}}') no-repeat center center; background-size: cover;">
                        </div>
                        <!-- Nửa dưới là thông tin với chữ trắng, nền đen, căn giữa -->
                        <div class="" style="background-color: rgba(0, 0, 0, 0.7); padding: 20px; text-align: center; color: white;">
                            <h4 class="text-white">{{$item->name_exercise_categories}}</h4>
                            <span class="">{{$item->description_exercise_categories}}</span>
                            <br>
                            <a href="/admin/updatecate/{{$item->id}}" class="btn btn-primary mt-3 ">Sửa</a>
                                @if ($item->delExerciseCategories==1)
                                <a href="/admin/restore/{{$item->id}}" class="btn btn-success mt-3">Khôi phục</a>
                                @else
                                <a href="/admin/delete/{{$item->id}}" class="btn btn-danger mt-3">Xóa</a>
                                @endif
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

    @include('admin/includes/footer')