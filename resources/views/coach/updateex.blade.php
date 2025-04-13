@include('coach/includes/header')
 <!-- Breadcrumb Section Begin -->
 <section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcrumb-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>Sửa bài học</h2>
                    <div class="bt-option">
                        <a href="/">Trang chủ</a>
                        <span>Sửa bài học</span>
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
                        <span>Sửa bài học</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
<form class="col-lg-12" action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label class="text-white" for="nameExercise">Tên bài học</label>
        <input value="{{$exerciseById->nameExercise}}" type="text" name="nameExercise" id="nameExercise" class="form-control" value="{{ old('nameExercise') }}" required>
    </div>

    <div class="form-group">
        <label class="text-white" for="imageExercise">Link ảnh bài học</label>
        <br>
        <img class="mb-2" width="200px" src="{{$exerciseById->imageExercise}}" alt="">
        <input value="{{$exerciseById->imageExercise}}" type="text" name="imageExercise" id="imageExercise" class="form-control" value="{{ old('imageExercise') }}" required>
    </div>

    <div class="form-group">
        <label class="text-white" for="descriptionExercise">Mô tả bài học</label>
        <textarea name="descriptionExercise" id="descriptionExercise" class="form-control" required>{{$exerciseById->descriptionExercise}}</textarea>
    </div>

    <div class="form-group">
        <label class="text-white" for="timeExercise">Thời gian bài học (phút)</label>
        <input value="{{$exerciseById->timeExercise}}" type="number" min="1" step="1" name="timeExercise" id="timeExercise" class="form-control" value="{{ old('timeExercise') }}" required>
    </div>

    <div class="form-group">
        <label class="text-white" for="numberExercise">Số lượng bài học</label>
        <input value="{{$exerciseById->numberExercise}}" type="number" min="1" step="1" name="numberExercise" id="numberExercise" class="form-control" value="{{ old('numberExercise') }}" required>
    </div>

    <div class="form-group">
        <label class="text-white" for="category_id">Danh mục bài học</label>
        <select name="category_id" id="category_id" class="form-control" required>
            @foreach($exercise_categories_all as $category)
            @if ( $category->id ==$exerciseById->category_id)
            <option value="{{ $category->id }}" selected>{{ $category->name_exercise_categories }}</option>
            @else
            <option value="{{ $category->id }}">{{ $category->name_exercise_categories }}</option>
            @endif
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn" style="background-color: #f36100;color:white">Sửa bài học</button>
</form>
</div>

<div class="row mt-5">
    <div class="col-lg-12">
        <div class="team-title">
            <div class="section-title">
                <span>Danh sách bài tập</span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <span class="text-white col-12 mb-3">Thêm bài tập</span class="text-white">
        <br>
        <form class="mb-3 col-12" action="/coach/addexdetail/{{$exerciseById->id}}" method="post">
            @csrf
            <input class="form-control mb-2 w-100" type="text" placeholder="Tên bài tập..." name="nameExerciseDetail" value="" required>
            <input class="form-control mb-2 w-100" type="text" placeholder="Link youtube bài tập(Chỉ nhập mã video ví dụ https://www.youtube.com/watch?v=stvWuowo1dU thì chỉ nhập stvWuowo1dU)" name="link" value="" required>
            <button class="btn btn-primary">Thêm</button>
        </form>
</div>
<div class="row">
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th class="col-1">#</th>
                <th class="col-4">Tên bài tập</th>
                <th class="col-4">Link youtube bài tập(Chỉ nhập mã video ví dụ https://www.youtube.com/watch?v=stvWuowo1dU thì chỉ nhập stvWuowo1dU)</th>
                <th class="col-3">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @if (isset($exercise_detail))
            @foreach ($exercise_detail as $index => $item)
            <form action="/coach/updatedetail/{{$item->id}}" method="POST">
                @csrf
            <tr>
                <td class="text-white">{{++$index}}</td>
                <td><input class="w-100" type="text" name="nameExerciseDetail"  value="{{$item->nameExerciseDetail}}" required></td>
                <td>
                    <input class="w-100" type="text" name="link" value="{{$item->link}}" required>
                </td>
                <td>
                    <button type="submit" class="btn btn-primary btn-sm">Lưu</button>
                    @if ($item->delExerciseDetail==1)
                    <a href="/coach/redetail/{{$item->id}}" class="btn btn-success btn-sm">Khôi phục</a>
                    @else
                    <a href="/coach/deldetail/{{$item->id}}" class="btn btn-danger btn-sm">Xóa</a>
                    @endif
                </td>
            </tr>
        </form>
            @endforeach
            @endif
        </tbody>
    </table>
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