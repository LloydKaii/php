@include('coach/includes/header')
 <!-- Breadcrumb Section Begin -->
 <section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcrumb-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>Thêm bài học</h2>
                    <div class="bt-option">
                        <a href="/">Trang chủ</a>
                        <span>Thêm bài học</span>
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
                        <span>Thêm bài học</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
<form class="col-lg-12" action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label class="text-white" for="nameExercise">Tên bài học</label>
        <input type="text" name="nameExercise" id="nameExercise" class="form-control" value="{{ old('nameExercise') }}" required>
    </div>

    <div class="form-group">
        <label class="text-white" for="imageExercise">Link ảnh bài học</label>
        <input type="text" name="imageExercise" id="imageExercise" class="form-control" value="{{ old('imageExercise') }}" required>
    </div>

    <div class="form-group">
        <label class="text-white" for="descriptionExercise">Mô tả bài học</label>
        <textarea name="descriptionExercise" id="descriptionExercise" class="form-control" required>{{ old('descriptionExercise') }}</textarea>
    </div>

    <div class="form-group">
        <label class="text-white" for="timeExercise">Thời gian bài học (phút)</label>
        <input type="number" min="1" step="1" name="timeExercise" id="timeExercise" class="form-control" value="{{ old('timeExercise') }}" required>
    </div>

    <div class="form-group">
        <label class="text-white" for="numberExercise">Số lượng bài học</label>
        <input type="number" min="1" step="1" name="numberExercise" id="numberExercise" class="form-control" value="{{ old('numberExercise') }}" required>
    </div>

    <div class="form-group">
        <label class="text-white" for="category_id">Danh mục bài học</label>
        <select name="category_id" id="category_id" class="form-control" required>
            @foreach($exercise_categories_all as $category)
                <option value="{{ $category->id }}">{{ $category->name_exercise_categories }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn" style="background-color: #f36100;color:white">Tạo bài học</button>
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