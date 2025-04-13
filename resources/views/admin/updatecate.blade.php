@include('coach/includes/header')
 <!-- Breadcrumb Section Begin -->
 <section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcrumb-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>Sửa danh mục</h2>
                    <div class="bt-option">
                        <a href="/">Trang chủ</a>
                        <span>Sửa danh mục</span>
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
                        <span>Sửa danh mục</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
<form class="col-lg-12" action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label class="text-white" for="name_exercise_categories">Tên danh mục</label>
        <input type="text" name="name_exercise_categories" id="name_exercise_categories" class="form-control" value="{{$exercise_category_by_id->name_exercise_categories}}" required>
    </div>

    <div class="form-group">
        <label class="text-white" for="description_exercise_categories">Mô tả danh mục</label>
        <input type="text" name="description_exercise_categories" id="description_exercise_categories" class="form-control" value="{{$exercise_category_by_id->description_exercise_categories}}" required>
    </div>

    <div class="form-group">
        <label class="text-white" for="image_exercise_categories">Ảnh danh mục</label>
        <br>
        <img class="mb-2" width="200px" src="{{$exercise_category_by_id->image_exercise_categories}}" alt="">
        <textarea name="image_exercise_categories" id="image_exercise_categories" class="form-control" required>{{$exercise_category_by_id->image_exercise_categories}}</textarea>
    </div>

    <button type="submit" class="btn" style="background-color: #f36100;color:white">Sửa danh mục</button>
</form>
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