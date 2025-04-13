@include('admin.includes.header')
<style>
    .team-list {
    max-height: 500px;
    overflow-y: auto;
}
.exercise-item{
    background-color: black;
    border: 1px white solid; 
}
.exercise-item:hover{
    background-color: red;
}

</style>
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcrumb-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>{{$exerciseById->nameExercise}}</h2>
                    <div class="bt-option">
                        <a href="/">Trang chủ</a>
                        <span>{{$exerciseById->nameExercise}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Main Content Begin -->
<section class="team-section spad">
    <div class="">
        <div class="row">
            <!-- Left Sidebar: List of Exercises -->
            <aside class="col-lg-3">
                <div class="team-list bg-dark p-3 rounded" style="max-height: 500px; overflow-y: auto;">
                    <h4 class="text-white mb-2">Danh sách bài tập</h4>
                    <ul class="list-group list-group-flush">
                        @foreach ($exercise_detail as $index => $item)
                            <li 
                                class="list-group-item exercise-item " 
                                data-video="{{ $item->link }}"
                                data-title="{{ $item->nameExerciseDetail}}"
                                onclick="changeVideo(this)">
                                <a href="javascript:void(0);" class="text-white">
                                   Bài {{++$index}}: {{ $item->nameExerciseDetail}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </aside>

            <!-- Center: Video Player -->
            <article class="col-lg-6">
                <div class="video-player bg-dark p-3 rounded">
                    <h4 class="text-white mb-4">Xem bài tập</h4>
                    <div id="video" class="video-container mb-4">
                        <iframe id="videoFrame"  width="100%" height="500" src="https://www.youtube.com/embed/{{ $exercise_detail[0]->link }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div id="videoDetails" class="text-white">
                        <h5 id="videoTitle">{{ $exercise_detail[0]->nameExerciseDetail }}</h5>
                    </div>
                </div>

                
            </article>

            <!-- Right Sidebar: Coach Info -->
            <aside class="col-lg-3">
                <div class="coach-info bg-dark p-3 rounded">
                    <h4 class="text-white">Huấn luyện viên</h4>
                    <div class="text-center mb-3 mt-3">
                        <img style="max-height:315px" src="{{ $coachById->avatar }}" alt="{{ $coachById->name }}" class="img-fluid rounded-circle shadow-lg">
                    </div>
                    <p><strong>Tên:</strong> {{ $coachById->name }}</p>
                    <p><strong>Tuổi:</strong> {{ $coachById->age }} tuổi</p>
                    <p><strong>Cân nặng:</strong> {{ $coachById->weight }} kg</p>
                    <p><strong>Chiều cao:</strong> {{ $coachById->height }} cm</p>
                    <p><strong>Email:</strong> {{ $coachById->email }}</p>
                    <div class="team-social mt-3">
                        <a href="#" class="btn btn-facebook btn-sm"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="btn btn-twitter btn-sm"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="btn btn-instagram btn-sm"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
<!-- Main Content End -->

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
<script>
    function changeVideo(element) {
    const videoId = element.getAttribute('data-video');
    const title = element.getAttribute('data-title');

    // Cập nhật iframe với video mới
    const videoFrame = document.getElementById('videoFrame');
    videoFrame.src = `https://www.youtube.com/embed/${videoId}`;

    // Cập nhật thông tin tiêu đề và mô tả
    document.getElementById('videoTitle').textContent = title;
}

</script>
@include('admin.includes.footer')
