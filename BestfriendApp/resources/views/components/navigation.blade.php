<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-image: url('img/nav.png');">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ URL('img/Logo.png') }}" alt="" width="30" height="24" class="d-inline-block align-text-top">
        <b>Best Friend</b>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ url('/') }}"><b>หน้าแรก</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/advice') }}"><b>คำแนะนำ</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" ><b>ช่องทางติดต่อ</b></a>
        </li>
      </ul>
      <form class="d-flex">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @if (Route::has('login'))
            @auth
                <li class="nav-item"><a href="{{ url('/dashboard') }}" lass="form-control me-2" class="nav-link"><b>หน้าแรก</b></a></li>
            @else
                <li class="nav-item"><a href="{{ route('login') }}" lass="form-control me-2" class="nav-link"><b>เข้าสู่ระบบ</b></a></li>
                @if (Route::has('register'))
                    <li class="nav-item"><a href="{{ route('register') }}" lass="form-control me-2" class="nav-link"><b>ลงทะเบียน</b></a></li>
                @endif
            @endauth
        @endif
        </ul>
        
        
        
      </form>
    </div>
  </div>
</nav>
<div class="pt-3 mt-4 text-muted border-top"></div>