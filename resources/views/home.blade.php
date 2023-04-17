@extends('layouts.app')
@section('content')
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}"> --}}

    <!-- Content Header (Page header) -->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <script type="text/javascript">
                            google.charts.load('current', {
                                'packages': ['corechart']
                            });
                            google.charts.setOnLoadCallback(drawChart);

                            function drawChart() {
                                const charData = {!! json_encode($chartData, JSON_HEX_TAG) !!};
                                console.log(charData, 'here')
                                var data = google.visualization.arrayToDataTable([
                                    ['Task', 'Hours per Day'],
                                    ...charData.map(it => [it.kabupaten, it.total_kabupaten])
                                ]);

                                var options = {
                                    title: 'Kabupaten Chart Pemanfaatan'
                                };

                                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                                chart.draw(data, options);
                            }
                        </script>

                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script type="text/javascript">
                            google.charts.load('current', {
                                'packages': ['corechart']
                            });
                            google.charts.setOnLoadCallback(drawChart);

                            function drawChart() {
                                const charData = {!! json_encode($charData, JSON_HEX_TAG) !!};
                                console.log(charData, 'here')
                                var data = google.visualization.arrayToDataTable([
                                    ['Task', 'Hours per Day'],
                                    ...charData.map(it => [it.kabupaten, it.total_kabupaten])
                                ]);

                                var options = {
                                    title: 'Kabupaten Chart Pengawasan'
                                };

                                var chart = new google.visualization.PieChart(document.getElementById('donutchart'));

                                chart.draw(data, options);
                            }
                        </script>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $administrasi }}</h3>

                                <p>Permohonan Izin</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-edit"></i>
                            </div>
                            <a href="{{ route('tabel_izin') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-4 col-12">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $pengawasan }}</h3>

                                <p>Pengawasan</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{ route('Data-Pengawasan') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-4 col-12">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $pemanfaatan }}</h3>

                                <p>Pemanfaatan</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="{{ route('tabel') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                {{-- Grafik Pemanfaatan --}}
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div id="piechart"></div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div id="donutchart"></div>
                    </div>
                </div>
                {{-- Datatables --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="card-title">Tabel Pemanfaatan</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="table2" class="table table-bordered table-striped">
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
                                            <th>File SK Preview</th>
                                        </tr>
                                    </thead>
                                    <tbody>
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
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>

                    {{-- Datatables 2 --}}

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tabel Pengawasan</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Kabupaten</th>
                                            <th>Kapanewon</th>
                                            <th>Kalurahan</th>
                                            <th>Tahun Pengawasan</th>
                                            <th>Nomor SK</th>
                                            <th class="d-none">Tanggal SK</th>
                                            <th>Bentuk Pemanfaatan</th>
                                            <th class="d-none">Pengelola</th>
                                            <th>Persil Klas</th>
                                            <th class="d-none">Nomor Sertifikat</th>
                                            <th class="d-none">Luas Pemanfaatan</th>
                                            <th class="d-none">Luas Keseluruhan</th>
                                            <th class="d-none">Jumlah Bidang</th>
                                            <th class="d-none">Lokasi</th>
                                            <th class="d-none">Koordinat</th>
                                            <th class="d-none">Jangka Waktu</th>
                                            <th>Jenis Sk</th>
                                            <th>Tindak Lanjut</th>
                                            <th>Kesesuaian</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dtpengawasan as $item)
                                            <tr>
                                                <td>{{ $item->kabupaten }}</td>
                                                <td>{{ $item->kapanewon }}</td>
                                                <td>{{ $item->kelurahan }}</td>
                                                <td>{{ $item->tahun_pengawasan }}</td>
                                                <td>{{ $item->nomor_sk }}</td>
                                                <td class="d-none">{{ $item->tanggal_sk }}</td>
                                                <td>{{ $item->bentuk_pemanfaatan }}</td>
                                                <td class="d-none">{{ $item->pengelola }}</td>
                                                <td>{{ $item->persil_klas }}</td>
                                                <td class="d-none">{{ $item->nomor_sertifikat }}</td>
                                                <td class="d-none">{{ $item->luas_pemanfaatan }}</td>
                                                <td class="d-none">{{ $item->luas_keseluruhan }}</td>
                                                <td class="d-none">{{ $item->jumlah_bidang }}</td>
                                                <td class="d-none">{{ $item->lokasi }}</td>
                                                <td class="d-none">{{ $item->koordinat }}</td>
                                                <td class="d-none">{{ $item->jktwaktu }}</td>
                                                <td>{{ $item->jenis_sk }}</td>
                                                <td>{{ $item->tdklanjut }}</td>
                                                <td>{{ $item->kesesuaian }}</td>
                                                <td>
                                                    <a href="{{ url('view-pengawasan', $item->id) }}"><i
                                                            class="fas fa-eye"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection



















{{-- <div class="flex-container">
    <div class="small-box" style="width: 30%; background-color:rgba(255, 179, 143, 1)">
      <div class="inner">
        <h1>{{ $administrasi }}</h1>
        <p>Permohonan Izin</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
        <a href="{{ route('tabel_izin') }}" class="btn" style="background-color:rgb(255, 223, 207)">More Info > </a>
    </div>
    <div class="small-box" style="width: 30%; background-color:rgba(255, 179, 143, 1)">
      <div class="inner">
        <h1>{{ $pengawasan }}</h1>
        <p>Pengawasan</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
        <a href="{{ route('Data-Pengawasan') }}" class="btn" style="background-color:rgb(255, 223, 207)">More Info > </a>
    </div>
    <div class="small-box" style="width: 30%; background-color:rgba(255, 179, 143, 1)">
      <div class="inner">
        <h1>{{ $pemanfaatan }}</h1>
        <p>Pemanfaatan</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
        <a href="{{ route('tabel') }}" class="btn" style="background-color:rgb(255, 223, 207)">More Info > </a>
    </div>
  </div> --}}
{{-- <div class="content-wrapper" style="margin-right: 22vh"> --}}

{{-- Grafik Pemanfaatan --}}
{{-- <div class="row">
            <div class="col-6">
                <div id="piechart"></div>
            </div>
            <div class="col-6">
                <div id="donutchart"></div>
            </div>
        </div>

        <div class="container">
            <div class="card-body" style="margin: 5%; background-color:rgb(249, 249, 249); padding:2%;width:130%">
                <h4 id="manfaat">Pemanfaatan</h4>
                <table id="myTables" class="table table-striped" style="width:100%">
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
                                <td>{{ $item->tanggal_mulai }}</td> --}}
{{-- <td>{{ $item->tanggal_akhir }}</td> --}}
{{-- <td><img width="150px" src="{{ url('') }}" alt=""></td> --}}
{{-- <td>{{ $item->file_SK }}</td> --}}
{{-- <td>
                                    @foreach ($item->files as $file)
                                        <a href="{{ asset('files/' . $file->filename) }}">File
                                            {{ $loop->index + 1 }}</a>
                                    @endforeach
                                </td> --}}

{{-- <a href="{{ asset('img/'. $item->gambar) }}" target="_blank" rel="noopener noreferrer">lihat gambar</a> --}}
{{-- <img src="cover/{{ $item->file_SK }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""> --}}
{{-- <img src="{{ asset('img/'.$item->file_SK) }}" class="img-responsive" height="10%" width="50%" alt="" srcset=""> --}}
{{-- </tr>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card-body" style="margin: 5%; background-color:rgb(249, 249, 249);padding:4%;width:130%">
            <h4 id="awasi">Pengawasan</h4> --}}
{{-- <div class="table-responsive"> --}}
{{-- <table id="myTable" class="table table-striped" style="width:100%;font-size:12px">
                <thead>
                    <tr>
                        <th>Kapanewon</th>
                        <th>Kalurahan</th>
                        <th>Kabupaten</th>
                        <th>Tahun Pengawasan</th>
                        <th>Nomor SK</th>
                        <th>Bentuk Pemanfaatan</th>
                        <th>Persil Klas</th>
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
                            <td>{{ $item->tdklanjut }}</td>
                            <td>{{ $item->kesesuaian }}</td>
                        </tr>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



    </div>
    </div> --}}
