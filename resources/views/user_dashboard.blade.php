<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengarsipan P5 DPTR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('AdminLTE') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE') }}/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ asset('AdminLTE') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <script src="https://kit.fontawesome.com/e6cac57b1a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.jpg') }}">
</head>
<style>
    .container-fluid h3 {
        color: azure;
        margin-top: 10px;
        font-family: serif;
    }

    .carousel-item {
        height: 585px;
    }

    .carousel-item img {
        margin-top: -20px;
        filter: brightness(50%);
    }

    #tombol {
        background-color: #333;
        color: #fff;
        padding-bottom: 10px;
        border: 0;
    }

    #tombol:hover {
        background-color: #ff8000;
        color: rgb(0, 0, 0);
    }

    .nav-link p {
        color: rgb(255, 255, 255);
        font-family: Helvetica, sans-serif;
    }

    .nav-link p:hover {
        color: rgb(65, 29, 0);
    }

    @media(max-width:767px) {
        .carousel-item img {
            height: 800px;
            width: 700px;
        }

        .carousel-item h1 {
            font-size: 25px;
        }

        .carousel-item p {
            font-size: 12px;
        }

    }
</style>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top shadow-sm" style="background-color: #A0522D">
        <div class="container">
            <a class="navbar-brand"><img src="{{ asset('assets/img/LOGO1.png') }}" width="160px" height="60px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:#fff; font-size:28px;"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-3 ms-auto">
                    <li class="nav-item" style="margin-right: 25px; margin-top:15px">
                        <a class="nav-link active text-white" aria-current="page" href="#">
                            <p>HOME</p>
                        </a>
                    </li>
                    <li class="nav-item" style="margin-right: 25px; margin-top:15px">
                        <a class="nav-link active text-white" aria-current="page" href="#manfaat" &raquo;>
                            <p>PEMANFAATAN</p>
                        </a>
                    </li>
                    <li class="nav-item" style="margin-right: 25px;margin-top:15px">
                        <a class="nav-link active text-white" aria-current="page" href="#awasi" &raquo;>
                            <p>PENGAWASAN</p>
                        </a>
                    </li>
                    <li class="nav-item" style="margin-right: 25px;margin-top:15px">
                        <a class="nav-link active text-white" aria-current="page" href="#izin" &raquo;>
                            <p>PERMOHONAN IZIN</p>
                        </a>
                    </li>
                    <li class="nav-item" style="margin-right: 5px;margin-top:15px">
                        <a class="nav-link active text-white btn" id="tombol"
                            style=" border-radius: 10px; padding-right:20px;
              padding-left:20px;font-family:serif"
                            aria-current="page" href="{{ route('login') }}">LOGIN</a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <Main>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/gambar1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="container">
                        <div class="carousel-caption text-center">
                            <h1 class="hidden-md">Dinas Pertanahan dan Tata Ruang DIY</h1>
                            <p>Dinas Pertanahan dan Tata Ruang (Kundha Niti Mandala Sarta Tata Sasana) Daerah Istimewa
                                Yogyakarta mempunyai tugas membantu Gubernur menyelenggarakan urusan pemerintahan dan
                                urusan keistimewaan bidang tata ruang serta urusan pemerintahan dan urusan keistimewaan
                                bidang pertanahan.</p>
                            <br>
                            <center><a id="#" class="btn btn-success btn-secondary btn-warning"
                                    href="#awasi">Cek Arsip
                                    &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/gambar2.jpg') }}" class="d-block w-100" alt="...">
                    <div class="container">
                        <div class="carousel-caption text-center">
                            <h1>Bidang P5</h1>
                            <p>“Bidang Pemanfaatan, Penanganan Permasalahan, dan Pengawasan Pertanahan mempunyai tugas
                                melaksanakan fasilitasi pemanfaatan, penanganan permasalahan dan pengawasan pertanahan
                                untuk meningkatkan persentase desa yang sudah mempunyai Peraturan Desa tentang
                                Pemanfaatan Tanah Desa.</p>
                            <br>
                            <center><a id="" class="btn btn-success btn-secondary btn-warning"
                                    href="#awasi">Cek Arsip
                                    &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/gambar3.jpeg') }}" class="d-block w-100" alt="...">
                    <div class="container">
                        <div class="carousel-caption text-center">
                            <h1>VISI</h1>
                            <p>"Terwujudnya Peningkatan Kemuliaan Martabat Manusia Jogja"</p>
                            <br>
                            <center><a id="" class="btn btn-success btn-secondary btn-warning"
                                    href="#awasi">Cek Arsip
                                    &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/gambar6.png') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <nav class="navbar navbar-expand-lg" style="background-color: #c06d47; height:30px;">
            <div class="container-fluid">
            </div>
        </nav>
        <!-- End Carousel -->

        <!-- Tabel Pemanfaatan -->
        <div id="manfaat">
        </div>
        <div class="card-body" style="margin: 5%; background-color:rgb(255, 251, 251)">
            <h2>Pemanfaatan</h2>
            <div class="table-responsive">
                <table id="example1" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Kode Perizinan</th>
                            <th>Kabupaten</th>
                            <th>Kapanewon</th>
                            <th>Kalurahan</th>
                            <th>Desa</th>
                            <th>Luas</th>
                            <th>Uraian</th>
                            <th>Sertifikat</th>
                            <th>Tanggal Mulai</th>
                            <th>Tahun Akhir</th>
                            <th>File SK</th>
                        </tr>
                    </thead>


                    <tbody id="table">
                        @foreach ($dtpemanfaatan as $item)
                            <tr>
                                <td>{{ $item->kode_perizinan }}</td>
                                <td>{{ $item->kabupaten }}</td>
                                <td>{{ $item->kapanewon }}</td>
                                <td>{{ $item->kelurahan }}</td>
                                <td>{{ $item->desa }}</td>
                                <td>{{ $item->persil }}</td>
                                <td>{{ $item->luas }}</td>
                                <td>{{ $item->uraian }}</td>
                                <td>{{ $item->tanggal_mulai }}</td>
                                <td>{{ $item->tanggal_akhir }}</td>
                                {{-- <td><img width="150px" src="{{ url('') }}" alt=""></td> --}}
                                {{-- <td>{{ $item->file_SK }}</td> --}}
                                {{-- <td>
                                    @foreach ($item->files as $file)
                                        <a href="{{ asset('files/' . $file->filename) }}">file
                                            {{ $loop->index + 1 }}</a>
                                    @endforeach
                                </td> --}}
                                {{-- <a href="{{ asset('img/'. $item->gambar) }}" target="_blank" rel="noopener noreferrer">lihat gambar</a> --}}
                                {{-- <img src="cover/{{ $item->file_SK }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""> --}}
                                {{-- <img src="{{ asset('img/'.$item->file_SK) }}" class="img-responsive" height="10%" width="50%" alt="" srcset=""> --}}
                                <td>
                                    @if ($item->file_SK != null)
                                        <a href="{{ url('uploads/file_SK/' . $item->file_SK) }}">File 1</a>
                                        <br>
                                    @elseif ($item->file_SK_2 != null)
                                        <a href="{{ url('uploads/file_SK_2/' . $item->file_SK_2) }}">File
                                            2</a>
                                        <br>
                                    @elseif ($item->file_SK_3 != null)
                                        <a href="{{ url('uploads/file_SK_3/' . $item->file_SK_3) }}">File
                                            3</a>
                                        <br>
                                    @elseif ($item->file_SK_4 != null)
                                        <a href="{{ url('uploads/file_SK_4/' . $item->file_SK_4) }}">File
                                            4</a>
                                    @elseif ($item->file_SK_4 != null)
                                        <a href="{{ url('uploads/file_SK_5/' . $item->file_SK_5) }}">File
                                            5</a>
                                    @else
                                        <a href="{{ url('uploads/file_SK/' . $item->file_SK) }}">File 1</a>
                                        <br>
                                        <a href="{{ url('uploads/file_SK_2/' . $item->file_SK_2) }}">File
                                            2</a>
                                        <br>
                                        <a href="{{ url('uploads/file_SK_3/' . $item->file_SK_3) }}">File
                                            3</a>
                                        <br>
                                        <a href="{{ url('uploads/file_SK_4/' . $item->file_SK_4) }}">File
                                            4</a>
                                        <br>
                                        <a href="{{ url('uploads/file_SK_5/' . $item->file_SK_5) }}">File
                                            5</a>
                                        <br>
                                    @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Tabel Pemanfaatan -->

        <!-- Tabel Pengawasan -->
        <div id="awasi">
        </div>
        <div class="card-body" style="margin: 5%; background-color:rgb(255, 251, 251)">
            <h2>Pengawasan</h2>
            <div class="table-responsive">
                <table id="table1" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Kapanewon</th>
                            <th>Kalurahan</th>
                            <th>Kabupaten</th>
                            <th>Tahun Pengawasan</th>
                            <th>Nomor SK</th>
                            <th>Bentuk Pemanfaatan</th>
                            <th>Persil Klas</th>
                            <th>Jenis Sk</th>
                            <th>Tindak Lanjut</th>
                            <th>Kesesuaian</th>
                        </tr>
                    </thead>

                    <tbody id="table">
                        @foreach ($dtpengawasan as $item)
                            <tr>
                                <td>{{ $item->kapanewon }}</td>
                                <td>{{ $item->kelurahan }}</td>
                                <td>{{ $item->kabupaten }}</td>
                                <td>{{ $item->tahun_pengawasan }}</td>
                                <td>{{ $item->nomor_sk }}</td>
                                <td>{{ $item->bentuk_pemanfaatan }}</td>
                                <td>{{ $item->persil_klas }}</td>
                                <td>{{ $item->jenis_sk }}</td>
                                <td>{{ $item->tdklanjut }}</td>
                                <td>{{ $item->kesesuaian }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div id="izin">
        </div>

        <div class="card-body" style="margin: 5%; background-color:rgb(255, 251, 251)">
            <h2>Permohonan Izin</h2>
            <div class="table-responsive">
                <table id="table2" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            {{-- <th rowspan="2">Surat Rekomendari Bupati</th> --}}
                            <th rowspan="2">Desa</th>
                            <th rowspan="2">Tanggal Masuk</th>
                            <th rowspan="2">Tindak Lanjut</th>
                            <th rowspan="2">Pengembalian</th>
                            <th colspan="2">Rekomendasi Kasultanan/Kadipaten</th>
                            <th colspan="2">Rekomendasi Biro Hukum</th>
                        </tr>
                        <tr>
                            <th>Proses</th>
                            <th>Jawaban Kasultanan/Kadipaten</th>
                            <th>Proses</th>
                            <th>SK GUB/JAWABAN</th>
                        </tr>
                    </thead>

                    <tbody id="table">
                        @foreach ($administrasi as $item)
                            <tr>
                                {{-- <td>{{ $item->id }}</td> --}}
                                {{-- <td>{{ $item->surat_kemonbu }}</td> --}}
                                <td>{{ $item->desa }}</td>
                                <td>{{ $item->tgl_masuk }}</td>
                                <td>{{ $item->tindak }}</td>
                                <td>{{ $item->pengembalian }}</td>
                                <td>{{ $item->proses_kasultanan }}</td>
                                <td>{{ $item->jawaban_kasultanan }}</td>
                                <td>{{ $item->proses_biro }}</td>
                                <td>{{ $item->jawaban_biro }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- <div class="card-body" style="font-size:12px;">
                    <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                          
                      </table>
                  </div> --}}

        <!-- Footer -->
        <footer>
            <div class="footer myfooter">
                <div class="w-100">
                    <div _ngcontent-wcl-c173="" class="row justify-content-center pb-3"
                        style="background-color: #a7735b; color: white;">
                        <div _ngcontent-wcl-c173="" class="logo-footer"
                            style="display: flex; justify-content: center;">
                            <img _ngcontent-wcl-c173="" src="{{ asset('assets/img/logo.jpg') }}"
                                alt="logo Pemda DIY" class="float-right mt-2" style="height: 90px;">
                        </div>
                        <div _ngcontent-wcl-c173="" class="col-md-0 text-center">
                            <p _ngcontent-wcl-c173="" class="mt-3 footer-address">
                                Hak Cipta Dispertaru DIY
                                <br _ngcontent-wcl-c173="">
                                Jalan Tentara Rakyat Mataram Nomor 4
                                <br _ngcontent-wcl-c173="">
                                Telp./Fax: (0274) 588219
                                <br _ngcontent-wcl-c173="">
                                Yogyakarta 55231
                            </p>
                        </div>
                        <div class="container d-flex" style="display: flex; justify-content: center;">
                            <div class="row">
                                <div class="col">
                                    <a href="https://twitter.com/dispertarudiy">
                                        <i class="fa-brands fa-twitter text-light"></i>
                                        {{-- <img src="{{ asset('assets/img/twitter.png') }}" alt="twitter" width="30" height="30"> --}}
                                    </a>

                                </div>
                                <div class="col">
                                    <a href="https://www.instagram.com/dispertarudiy">
                                        {{-- <img src="{{ asset('assets/img/ing.png') }}" alt="instagram" width="30" height="30"> --}}
                                        <i class="fa-brands fa-instagram text-light"></i>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="https://www.youtube.com/channel/UCFtGDK1-g4ZUb_tbhBNrkpw">
                                        {{-- <img src="{{ asset('assets/img/youtube.png') }}" alt="youtube" width="30" height="30"> --}}
                                        <i class="fa-brands fa-youtube text-light"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </app-cp-footer>
                </div>
                <div class="container-fluid last-content" style="background-color: #A0522D; color: white;">
                    <div class="row">
                        <p class="mt-3" style="text-align: center;">
                            © 2022 Copyright&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Dinas Pertanahan dan Tata Ruang Daerah
                            Istimewa Yogyakarta
                        </p>
                    </div>
                </div>
                {{-- <div class="bar-copyright" style="background-color: #A0522D; color: white;">
  <p class="mb-2 mt-2 mx-auto" style="text-align: center;">
    © 2022 Copyright&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Dinas Pertanahan dan Tata Ruang Daerah Istimewa Yogyakarta
  </p>
</div> --}}
        </footer>
        <!-- End Footer -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
        <!--<script src="script.js"></script>-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('AdminLTE') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('AdminLTE') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="{{ asset('AdminLTE') }}/plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="{{ asset('AdminLTE') }}/plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="{{ asset('AdminLTE') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="{{ asset('AdminLTE') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{ asset('AdminLTE') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="{{ asset('AdminLTE') }}/plugins/moment/moment.min.js"></script>
        <script src="{{ asset('AdminLTE') }}/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{ asset('AdminLTE') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="{{ asset('AdminLTE') }}/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="{{ asset('AdminLTE') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('AdminLTE') }}/dist/js/adminlte.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('AdminLTE') }}/dist/js/pages/dashboard.js"></script>

        <!-- DataTables  & Plugins -->
        <script src="{{ asset('AdminLTE') }}/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ asset('AdminLTE') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js" defer></script>
        <script src="{{ asset('AdminLTE') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="{{ asset('AdminLTE') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="{{ asset('AdminLTE') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="{{ asset('AdminLTE') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="{{ asset('AdminLTE') }}/plugins/jszip/jszip.min.js"></script>
        <script src="{{ asset('AdminLTE') }}/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="{{ asset('AdminLTE') }}/plugins/pdfmake/vfs_fonts.js"></script>
        <script src="{{ asset('AdminLTE') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="{{ asset('AdminLTE') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="{{ asset('AdminLTE') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <!-- Page specific script -->
        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,

                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
        <script>
            $(function() {
                $("#table1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,

                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
        <script>
            $(function() {
                $("#table2").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,

                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
</body>

</html>
