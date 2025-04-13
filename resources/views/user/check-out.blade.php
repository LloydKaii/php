@include('user/includes/header')
  <style>
    body {
      background-color: #111;
      color: #fff;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container-checkout {
      max-width: 600px;
      margin: 200px auto;
      background-color: #1a1a1a;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(255, 102, 0, 0.4);
    }

    h2 {
      color: #ff6600;
      text-align: center;
      margin-bottom: 30px;
    }

    .plan-summary {
      background-color: #222;
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 30px;
      border-left: 5px solid #ff6600;
    }

    .plan-summary h3 {
      color: #ff6600;
      margin-bottom: 10px;
    }

    .plan-summary p {
      margin: 0;
      color: #ccc;
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
      color: #ccc;
    }

    input {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 6px;
      background-color: #333;
      color: #fff;
      margin-top: 5px;
    }

    .btn {
      background-color: #ff6600;
      color: #fff;
      padding: 14px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      margin-top: 25px;
      width: 100%;
      cursor: pointer;
      transition: 0.3s;
    }

    .btn:hover {
      background-color: #e65c00;
    }
    .container-checkout img{
        margin-top: 50px;
    }
    .image-qr{
        display:flex;
        justify-content: center
    }
  </style>
  <div class="container-checkout">
    <h2>Xác nhận thanh toán</h2>

    <div class="plan-summary">
      <h3>Gói: {{$package->namePackage}}</h3>
      <p>Giá: <strong style="color: #ff6600;">{{number_format($package->price, 0, ',', '.')}} VNĐ</strong></p>
      <p>Quyền lợi: {{$package->description}}</p>
      <div class="image-qr">
        <img width="50%" height="50%" src="https://zentech.vn/media/blog/2021/07/ma-vietqr-mau-vib.jpg" alt="" srcset="">
      </div>
    </div>
    @if (session('error'))
    <div style="padding: 15px; background-color: #ffcccc; color: #b30000; border-left: 4px solid red; margin-bottom: 20px;">
        {{ session('error') }}
    </div>
@endif
    <form action="" method="POST">
        @csrf
      <button type="submit" class="btn">Hoàn tất</button>
    </form>
  </div>
  @include('user/includes/footer')
