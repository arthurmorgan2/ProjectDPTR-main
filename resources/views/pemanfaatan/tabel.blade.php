@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="content-fluid">
                {{-- Datatables --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="card-title">Tabel Pemanfaatan</h3>
                            </div>

                            <div class="row mt-4" style="margin-left: 5px;margin-right:2px">

                                <div class="col">
                                    <div class="card-tools">
                                        <a href="{{ route('form-dpemanfaatan') }}" class="btn btn-dark">Tambah Data <i
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
                                </div>
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
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
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
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dtpemanfaatan as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
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
                                                    {{-- @if ($item->file_SK != null)
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
                                                    @endif --}}
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#viewFiles-{{ $item->id }}"
                                                        class="btn btn-warning btn-xs"><i class="bx bx-edit"></i>View
                                                        Files</a>

                                                </td>
                                                <td>
                                                    <a href="{{ url('edit-pemanfaatan/' . $item->id) }}"><i
                                                            class="fas fa-edit"></i></a> |
                                                    {{-- <a href="{{ url('hapus-pemanfaatan/' . $item->id) }}"
                                                    data-id="{{ $item->id }}"><i
                                                        class="fas fa-trash-alt bg-dancer"></i></a> --}}
                                                    <a href="{{ url('hapus-pemanfaatan/' . $item->id) }}"
                                                        data-id="{{ $item->id }}"
                                                        onclick="return confirm('Apakah Anda Yakin Menghapus Data?');"><i
                                                            class="fas fa-trash-alt bg-dancer"></i></a>
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
    <!-- Modal -->
    @foreach ($dtpemanfaatan as $item)
        <div class="modal fade" id="viewFiles-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-8 ms-auto"><a href="{{ url('uploads/file_SK/' . $item->file_SK) }}">File
                                    1</a>
                                <br>
                                <img src="{{ URL::asset('uploads/file_SK/' . $item->file_SK) }}" width="200">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"><a href="{{ url('uploads/file_SK_2/' . $item->file_SK_2) }}">File
                                    2</a>
                                <br>
                                <img src="{{ URL::asset('uploads/file_SK_2/' . $item->file_SK_2) }}" width="200"
                                    alt="File Kosong">
                            </div>
                            <div class="col-md-3"><a href="{{ url('uploads/file_SK_3/' . $item->file_SK_3) }}">File
                                    3</a>
                                <br>
                                <img src="{{ URL::asset('uploads/file_SK_3/' . $item->file_SK_3) }}" width="200"
                                    alt="File Kosong">
                            </div>
                            <div class="col-md-3"><a href="{{ url('uploads/file_SK_4/' . $item->file_SK_4) }}">File
                                    4</a>
                                <br>
                                <img src="{{ URL::asset('uploads/file_SK_4/' . $item->file_SK_4) }}" width="200"
                                    alt="File Kosong">
                            </div>
                            <div class="col-md-3"><a href="{{ url('uploads/file_SK_5/' . $item->file_SK_5) }}">File
                                    5</a>
                                <br>
                                <img src="{{ URL::asset('uploads/file_SK_5/' . $item->file_SK_5) }}" width="200"
                                    alt="File Kosong">
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- <div class="content-wrapper">
        <div class="content" style="margin:3vh">
            <div class="card card-info card-outline" style="width: 100%;">
                <div class="card-header">
                    <h2 class="m-0">Arsip Pemanfaatan</h2>
                </div>

                @if (session('flash_message_success'))
                    <div class="alert alert-success">
                        {{ session('flash_message_success') }}
                    </div>
                @endif
                @if (session('flash_message_warning'))
                    <div class="alert alert-warning">
                        {{ session('flash_message_warning') }}
                    </div>
                @endif

                <div class="row mt-4" style="margin-left: 5px;margin-right:2px">
                    <div class="col">
                        <div class="card-tools">
                            <a href="{{ route('form-dpemanfaatan') }}" class="btn btn-dark">Tambah Data <i
                                    class="fa fa-plus-square"></i></a>
                        </div>
                    </div> --}}
    {{-- <div class="col">
                        <div style="display: flex; justify-content:end">
                            <select id="tahun">
                                <option value="">Pilih Tahun Akhir</option>
                            </select>
                            <select id="kabupaten">
                                <option value="">Pilih Kabupaten</option>
                            </select>
                            <select id='kapanewon'>
                                <option value=''>Pilih Kecamatan</option>
                            </select>
                            <select id='kelurahan'>
                                <option value=''>Pilih Kalurahan</option>
                            </select>
                        </div>
                    </div>
                </div> --}}
    {{-- <div class="card-body" style="font-size:12px;">
                    <table id="myTable" class="table table-striped" style="width:100%">
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
                                <th>Action</th>
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
                                    <td>
                                        <a href="{{ url('edit-pemanfaatan/' . $item->id) }}"><i
                                                class="fas fa-edit"></i></a> | --}}
    {{-- <a href="{{ url('hapus-pemanfaatan/' . $item->id) }}"
                                                    data-id="{{ $item->id }}"><i
                                                        class="fas fa-trash-alt bg-dancer"></i></a> --}}
    {{-- <a href="{{ url('hapus-pemanfaatan/' . $item->id) }}"
                                            data-id="{{ $item->id }}"
                                            onclick="return confirm('Apakah Anda Yakin Menghapus Data?');"><i
                                                class="fas fa-trash-alt bg-dancer"></i></a>
                                    </td>
                                </tr>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> --}}
    {{-- </div> --}}
    @include('layouts.select')

    </html>
@endsection
