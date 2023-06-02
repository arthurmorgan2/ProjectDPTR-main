@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="content-fluid">
                <div class="row">
                    <!-- middle column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Data Pemanfaatan</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            @foreach ($dpemanfaatan as $item)
                                <form action="{{ url('/updatepemanfaatan/' . $item->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="form-group mt-3">
                                            <input type="hidden" id="kabupaten" name="kabupaten" class="form-control"
                                                required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <input type="hidden" id="kapanewon" name="kapanewon" class="form-control"
                                                required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <input type="hidden" id="kelurahan" name="kelurahan" class="form-control"
                                                required>
                                        </div>
                                        <div class="pform-group mb-3">
                                            <label>Kode Perizinan</label>
                                            <input type="text" id="kode_perizinan" name="kode_perizinan"
                                                class="form-control" placeholder="kode perizinan"
                                                value="{{ $item->kode_perizinan }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Kabupaten:</label>
                                            <input type="text" id="kabupaten" name="kabupaten" class="form-control"
                                                value="{{ $item->kabupaten }}" disabled />
                                            <select id="kabupaten-input-form" class="form-select form-select-lg mb-3"
                                                value="{{ $item->kabupaten }}">
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kapanewon:</label>
                                            <input type="text" id="kapanewon" name="kapanewon" class="form-control"
                                                value="{{ $item->kapanewon }}" disabled />
                                            <select id="kapanewon-input-form" class="form-select form-select-lg mb-3"
                                                value="{{ $item->kapanewon }}">
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kalurahan:</label>
                                            <input type="text" id="kelurahan" name="kelurahan" class="form-control"
                                                value="{{ $item->kelurahan }}" disabled />
                                            <select id="kelurahan-input-form" class="form-select form-select-lg mb-3"
                                                value="{{ $item->kelurahan }}">
                                            </select>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Desa</label>
                                            <input type="text" id="desa" name="desa" class="form-control"
                                                placeholder="Desa" value="{{ $item->desa }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Persil</label>
                                            <input type="text" id="persil" name="persil" class="form-control"
                                                placeholder="sertifikat/persil" value="{{ $item->persil }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Luas</label>
                                            <input type="text" id="luas" name="luas" class="form-control"
                                                placeholder="luas" value="{{ $item->luas }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Uraian</label>
                                            <input type="text" id="uraian" name="uraian" class="form-control"
                                                placeholder="uraian" value="{{ $item->uraian }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Tanggal Mulai</label>
                                            <input type="date" id="tanggal_mulai" name="tanggal_mulai"
                                                class="form-control" placeholder="tanggal-mulai"
                                                value="{{ $item->tanggal_mulai }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Tahun Akhir</label>
                                            <input type="date" id="tanggal_akhir" name="tanggal_akhir"
                                                class="form-control" placeholder="tanggal-akhir"
                                                value="{{ $item->tanggal_akhir }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>File SK</label>
                                            <input type="file" id="file_SK" name="file_SK" class="form-control"
                                                placeholder="File SK" value="{{ $item->file_SK }}">
                                        </div>
                                        <p>File SK Saat Ini</p>
                                        <img src="{{ asset('uploads/file_SK/' . $item->file_SK) }}" width="200"
                                            alt="file kosong">
                                        <div class="form-group mb-3">
                                            <label>File SK 2</label>
                                            <input type="file" id="file_SK" name="file_SK_2" class="form-control"
                                                placeholder="File SK" value="{{ $item->file_SK_2 }}">
                                        </div>
                                        <p>File SK Saat Ini</p>
                                        <img src="{{ asset('uploads/file_SK_2/' . $item->file_SK_2) }}" width="200"
                                            alt="file kosong">
                                        <div class="form-group mb-3">
                                            <label>File SK 3</label>
                                            <input type="file" id="file_SK" name="file_SK_3" class="form-control"
                                                placeholder="File SK" value="{{ $item->file_SK_3 }}">
                                        </div>
                                        <p>File SK Saat Ini</p>
                                        <img src="{{ asset('uploads/file_SK_3/' . $item->file_SK_3) }}" width="200"
                                            alt="file kosong">
                                        <div class="form-group mb-3">
                                            <label>File SK 4</label>
                                            <input type="file" id="file_SK" name="file_SK_4" class="form-control"
                                                placeholder="File SK" value="{{ $item->file_SK_4 }}">
                                        </div>
                                        <p>File SK Saat Ini</p>
                                        <img src="{{ asset('uploads/file_SK_4/' . $item->file_SK_4) }}" width="200"
                                            alt="file kosong">
                                        <div class="form-group mb-3">
                                            <label>File SK 5</label>
                                            <input type="file" id="file_SK_5" name="file_SK_5" class="form-control"
                                                placeholder="File SK" value="{{ $item->file_SK_5 }}">
                                        </div>
                                        <p>File SK Saat Ini</p>
                                        <img src="{{ asset('uploads/file_SK_5/' . $item->file_SK_5) }}" width="200"
                                            alt="file kosong">
                                        <br>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-warning">Ubah Data</button>
                                    </div>
                                </form>
                            @endforeach
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.select2')
@endsection



{{-- <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <div class="content-wrapper">
                <div class="content" style="margin: 7vh; margin-left:25vh; width:110vh; margin-right:24vh">
                    <div class="card card-info card-outline ">
                        <div class="card-header">
                            <h3>Edit Data Pemanfaatan</h3>

                        </div>

                        <div class="card-body">
                            @foreach ($dpemanfaatan as $item)
                                <form action="{{ url('/updatepemanfaatan/' . $item->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group mt-3">
                                        <input type="hidden" id="kabupaten" name="kabupaten" class="form-control" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="hidden" id="kapanewon" name="kapanewon" class="form-control" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="hidden" id="kelurahan" name="kelurahan" class="form-control" required>
                                    </div>
                                    <div class="pform-group mb-3">
                                        <label>Kode Perizinan</label>
                                        <input type="text" id="kode_perizinan" name="kode_perizinan" class="form-control"
                                            placeholder="kode perizinan" value="{{ $item->kode_perizinan }}">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label>Kabupaten:</label>
                                        <select id="kabupaten-input-form" class="form-select form-select-lg mb-3">
                                        </select>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label>Kapanewon:</label>
                                        <select id="kapanewon-input-form" class="form-select form-select-lg mb-3">

                                        </select>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label>Kalurahan:</label>
                                        <select id="kelurahan-input-form" class="form-select form-select-lg mb-3">

                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Desa</label>
                                        <input type="text" id="desa" name="desa" class="form-control"
                                            placeholder="Desa" value="{{ $item->desa }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Persil</label>
                                        <input type="text" id="persil" name="persil" class="form-control"
                                            placeholder="sertifikat/persil" value="{{ $item->persil }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Luas</label>
                                        <input type="text" id="luas" name="luas" class="form-control"
                                            placeholder="luas" value="{{ $item->luas }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Uraian</label>
                                        <input type="text" id="uraian" name="uraian" class="form-control"
                                            placeholder="uraian" value="{{ $item->uraian }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Tanggal Mulai</label>
                                        <input type="date" id="tanggal_mulai" name="tanggal_mulai" class="form-control"
                                            placeholder="tanggal-mulai" value="{{ $item->tanggal_mulai }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Tahun Akhir</label>
                                        <input type="date" id="tanggal_akhir" name="tanggal_akhir" class="form-control"
                                            placeholder="tanggal-akhir" value="{{ $item->tanggal_akhir }}">
                                    </div> --}}
{{-- <div class="form-group">
                        <label>File SK</label>
                      <input type="text" id="file_SK" name="file_SK" class="form-control" placeholder="File SK" value="{{ $item->file_SK }}">
                  </div> --}}
{{-- <div class="form-group mb-3">
                                        <label>File SK</label>
                                        <input type="file" id="file_SK" name="file_SK" class="form-control"
                                            placeholder="File SK" value="{{ $item->file_SK }}">
                                    </div>
                                    <p>File SK Saat Ini</p>
                                    <img src="{{ asset('uploads/file_SK/' . $item->file_SK) }}" width="200"
                                        alt="file kosong">
                                    <div class="form-group mb-3">
                                        <label>File SK 2</label>
                                        <input type="file" id="file_SK" name="file_SK_2" class="form-control"
                                            placeholder="File SK" value="{{ $item->file_SK_2 }}">
                                    </div>
                                    <p>File SK Saat Ini</p>
                                    <img src="{{ asset('uploads/file_SK_2/' . $item->file_SK_2) }}" width="200"
                                        alt="file kosong">
                                    <div class="form-group mb-3">
                                        <label>File SK 3</label>
                                        <input type="file" id="file_SK" name="file_SK_3" class="form-control"
                                            placeholder="File SK" value="{{ $item->file_SK_3 }}">
                                    </div>
                                    <p>File SK Saat Ini</p>
                                    <img src="{{ asset('uploads/file_SK_3/' . $item->file_SK_3) }}" width="200"
                                        alt="file kosong">
                                    <div class="form-group mb-3">
                                        <label>File SK 4</label>
                                        <input type="file" id="file_SK" name="file_SK_4" class="form-control"
                                            placeholder="File SK" value="{{ $item->file_SK_4 }}">
                                    </div>
                                    <p>File SK Saat Ini</p>
                                    <img src="{{ asset('uploads/file_SK_4/' . $item->file_SK_4) }}" width="200"
                                        alt="file kosong">
                                    <div class="form-group mb-3">
                                        <label>File SK 5</label>
                                        <input type="file" id="file_SK_5" name="file_SK_5" class="form-control"
                                            placeholder="File SK" value="{{ $item->file_SK_5 }}">
                                    </div>
                                    <p>File SK Saat Ini</p>
                                    <img src="{{ asset('uploads/file_SK_5/' . $item->file_SK_5) }}" width="200"
                                        alt="file kosong">
                                    <br>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success"
                                            style="background-color: rgb(255, 102, 0)">Ubah Data</button>
                                    </div>
                                </form>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Main Footer -->
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->
        <!-- Select2 JS -->
        <script>
            $(document).ready(function() {

                let kabupaten = null;
                let kabupatenId = null;
                let kecamatan = null;
                let kecamatanId = null;

                $(".btn-success").click(function() {
                    var lsthmtl = $(".clone").html();
                    $(".increment").after(lsthmtl);
                });
                $("body").on("click", ".btn-danger", function() {
                    $(this).parents(".hdtuto").remove();
                });

                $('#kabupaten-input-form').select2({
                    placeholder: 'Pilih Kabupaten',
                    ajax: {
                        url: '{{ route('kabupaten.get-all-kabupaten') }}',
                        dataType: "json",
                        processResults: function(data) {
                            return {
                                results: $.map(data.data.data, function(item) {
                                    return {
                                        text: item.name,
                                        id: item.id
                                    }
                                })
                            };
                        },
                        data: function(params) {
                            return {
                                term: params.term || '',
                            }
                        },
                    }
                })

                $('#kabupaten-input-form').change(function() {
                    kabupatenId = $('#kabupaten-input-form :selected').val();

                    $("#kapanewon-input-form").select2({
                        placeholder: 'Pilih Kabupaten',
                        ajax: {
                            url: "{{ url('api/v1/kecamatan') }}/" + kabupatenId,
                            dataType: "json",
                            processResults: function(data) {
                                return {
                                    results: $.map(data.data.data, function(item) {
                                        return {
                                            text: item.name,
                                            id: item.id
                                        }
                                    })
                                };
                            },
                            data: function(params) {
                                return {
                                    term: params.term || '',
                                }
                            },
                        }
                    })
                })

                $('#kapanewon-input-form').on('select2:select', function() {
                    kecamatanId = $('#kapanewon-input-form :selected').val();

                    $("#kelurahan-input-form").select2({
                        placeholder: 'Pilih kelurahan',
                        ajax: {
                            url: "{{ url('api/v1/kelurahan') }}/" + kecamatanId,
                            dataType: "json",
                            processResults: function(data) {
                                return {
                                    results: $.map(data.data.data, function(item) {
                                        return {
                                            text: item.name,
                                            id: item.id
                                        }
                                    })
                                };
                            },
                            data: function(params) {
                                return {
                                    term: params.term || '',
                                }
                            },
                        }
                    })
                })

            });

            $('#kelurahan-input-form').on('select2:select', function() {
                kabupaten = $('#kabupaten-input-form :selected').text();
                kapanewon = $('#kapanewon-input-form :selected').text();
                kelurahan = $('#kelurahan-input-form :selected').text();
                $('#kabupaten').attr('value', kabupaten)
                $('#kapanewon').attr('value', kapanewon)
                $('#kelurahan').attr('value', kelurahan)
            })
        </script> --}}
