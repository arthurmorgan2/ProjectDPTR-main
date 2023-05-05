@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                {{-- Datatables --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="card-title">Tabel Pengawasan</h3>
                            </div>
                            <div class="row mt-4" style="margin-left: 5px;margin-right:2px">

                                <div class="col">
                                    <div class="card-tools">
                                        <a href="{{ route('Create-Pengawasan') }}" class="btn btn-dark">Tambah Data <i
                                                class="fa fa-plus-square"></i></a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div style="display: flex; justify-content:end">
                                        <select id="tahun">
                                            <option value="">Pilih Tahun Akhir</option>
                                        </select>
                                        <select id="kabupaten">
                                            <option value="">Pilih Kabupaten</option>
                                        </select>
                                        <select id='kapanewon'>
                                            <option value="">Pilih Kecamatan</option>
                                        </select>
                                        <select id='kelurahan'>
                                            <option value="">Pilih Kalurahan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            @if (session('flash_message_success'))
                                <div class="alert alert-success">
                                    {{ session('flash_message_success') }}
                                </div>"
                            @endif
                            @if (session('flash_message_warning'))
                                <div class="alert alert-warning">
                                    {{ session('flash_message_warning') }}
                                </div>
                            @endif
                            @if (session('flash_message_danger'))
                                <div class="alert alert-danger">
                                    {{ session('flash_message_danger') }}
                                </div>
                            @endif
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
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
                                                            class="fas fa-eye"></i></a> |
                                                    <a href="{{ url('edit-pengawasan', $item->id) }}"><i
                                                            class="fas fa-edit"></i></a> |
                                                    <a href="{{ url('delete-pengawasan', $item->id) }}"
                                                        onclick="return confirm('Apakah Anda Yakin Menghapus Data?');"><i
                                                            class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.select')
@endsection


<!-- Content Wrapper. Contains page content -->
{{-- <div class="content-wrapper">
                <div class="content" style="margin: 9vh;">
                    <div class="card card-info card-outline" style="width: 100%;">
                        <div class="card-header" style="background-color: #c47b59">
                            <h2 class="m-0">Arsip Pengawasan</h2>
                        </div>

                        <div class="row mt-4" style="margin-left: 5px;margin-right:2px">
                            <div class="col">
                                <div class="card-tools">
                                    <a href="{{ route('Create-Pengawasan') }}" class="btn btn-dark">Tambah Data <i
                                            class="fa fa-plus-square"></i></a>
                                    Tahun
                                    <select id="tahun">
                                        <option value="">Pilih Tahun</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div style="display: flex; justify-content:end">
                                    <select id="kabupaten">
                                        <option value="">Pilih Kabupaten</option>
                                    </select>
                                    <select id='kapanewon'>
                                        <option value=''>Pilih Kapanewon</option>
                                    </select>
                                    <select id='kelurahan'>
                                        <option value=''>Pilih Kalurahan</option>
                                    </select>
                                </div>
                            </div>
                        </div> --}}

<!--main content paling utama-->
{{-- <div class="card-body" style="font-size:12px;">
                            <table id="myTable" class="table table-striped" style="width:100%">
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

                                <tbody id="table">
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
                                                        class="fas fa-eye"></i></a> |
                                                <a href="{{ url('edit-pengawasan', $item->id) }}"><i
                                                        class="fas fa-edit"></i></a> |
                                                <a href="{{ url('delete-pengawasan', $item->id) }}"
                                                    onclick="return confirm('Apakah Anda Yakin Menghapus Data?');"><i
                                                        class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> --}}
<!-- /.content -->

{{-- </div> --}}

<!-- /.content-wrapper -->
<!-- jQuery -->
<!-- Main Footer -->
