@include('admin/includes/header')
 <!-- Breadcrumb Section Begin -->
 <section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcrumb-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>Danh sách người dùng</h2>
                    <div class="bt-option">
                        <a href="/">Trang chủ</a>
                        <span>Danh sách người dùng</span>
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
                        <span>Danh sách người dùng</span>
                    </div>
                </div>
            </div>
        </div>
<div class="row">
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th class="col-1">#</th>
                <th class="col-4">ID</th>
                <th class="col-4">Tên người dùng</th>
                <th class="col-3">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @if (isset($userlist))
            @foreach ($userlist as $index => $item)
            <tr>
                <td class="text-white">{{++$index}}</td>
                <td class="text-white">{{$item->id}}</td>
                <td class="text-white">{{$item->name}}</td>
                <td>
                    <a href="/admin/profile-user/{{$item->id}}" class="btn btn-primary btn-sm">Xem</a>
                    @if ($item->delUser==1)
                    <a href="/admin/reuser/{{$item->id}}" class="btn btn-success btn-sm">Mở khóa</a>
                    @else
                    <a href="/admin/deluser/{{$item->id}}" class="btn btn-danger btn-sm">Khóa</a>
                    @endif
                </td>
            </tr>
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

@include('admin/includes/footer')