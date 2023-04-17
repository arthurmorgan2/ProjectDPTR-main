@include('layouts.header');
@include('layouts.navbar');
@include('layouts.sidebar');
@yield('content');
@include('layouts.footer');
{{-- <div class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white">
        <div class="row">
            <div class="col-2">
                <img src="{{ asset('assets/img/logo.jpg') }}" alt="Logo Dinas" class="brand-image img-circle elevation-3">
            </div>
            <div class="col-10">
                <h2 class="fs-4 ml-2 mt-1">DISPERTARU</h2>
            </div>
        </div>

        </a>
        <hr>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item mb-3">
                <a href="{{ route('home') }}" class="nav-link text-white" aria-current="page"><i
                        class="fa-solid fa-house"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('tabel_izin') }}" class="nav-link text-white mb-3"><i class="fa-solid fa-eye"></i>
                    Permohonan Izin
                </a>
            </li>
            <li>
                <a href="{{ route('tabel') }}" class="nav-link text-white mb-3"><i class="fa-solid fa-landmark"></i>
                    Pemanfaatan
                </a>
            </li>
            <li>
                <a href="{{ route('Data-Pengawasan') }}" class="nav-link text-white mb-3"><i
                        class="fa-solid fa-eye"></i>
                    Pengawasan
                </a>
            </li>

            {{-- <li>
                <a href="{{ route('masteradmin') }}" class="nav-link text-white mb-3"><i class="fa-solid fa-user"></i>
                  Admin
                </a>
              </li> --}}
{{-- </ul>
        <hr>
    </div> --}}

{{-- <div class="content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <div class="d-flex ms-auto">
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="btn btn-custom d-flex"><i class="bi bi-box-arrow-right"></i>Logout</button>
                    </form>
                </div>
            </div>
        </nav>

        @yield('content')

    </div>
</div> --}}
{{-- <h4>Selamat Datang <b>{{ Auth::user()->username }}</b>, Anda Login sebagai <b>{{ Auth::user()->role}}</b></h4> --}}
{{-- 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>

</body>

</html> --}}
