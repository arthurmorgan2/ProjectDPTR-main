@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- middle column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Input Data Permohonan Izin</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('simpan_administrasi') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Desa</label>
                                        <input type="text" id="desa" name="desa" class="form-control"
                                            placeholder="Desa" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Masuk</label>
                                        <input type="date" id="tgl_masuk" name="tgl_masuk" class="form-control"
                                            placeholder="Tangal Masuk" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tindak Lanjut</label>
                                        <input type="text" id="tindak" name="tindak" class="form-control"
                                            placeholder="Tindak Lanjut" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Pengembalian</label>
                                        <input type="text" id="pengembalian" name="pengembalian" class="form-control"
                                            placeholder="Pengembalian" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Proses Kasultanan</label>
                                        <input type="text" id="proses_kasultanan" name="proses_kasultanan"
                                            class="form-control" placeholder="Proses Kasultanan" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Jawaban Kasultanan</label>
                                        <input type="text" id="jawaban_kasultanan" name="jawaban_kasultanan"
                                            class="form-control" placeholder="Jawaban Kasultanan" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Proses Biro Hukum</label>
                                        <input type="text" id="proses_biro" name="proses_biro" class="form-control"
                                            placeholder="Proses Biro Hukum" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Jawaban Biro Hukum</label>
                                        <input type="text" id="jawaban_biro" name="jawaban_biro" class="form-control"
                                            placeholder="Jawaban Biro Hukum" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="files" class="form-label">Upload SK:</label>
                                        <div class="input-group hdtuto control-group lst increment">
                                            <input type="file" class="form-control" name="file_SK" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="files" class="form-label">Upload SK: (opsional)</label>
                                        <div class="input-group hdtuto control-group lst increment">
                                            <input type="file" class="form-control" name="file_SK_2">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="files" class="form-label">Upload SK: (opsional)</label>
                                        <div class="input-group hdtuto control-group lst increment">
                                            <input type="file" class="form-control" name="file_SK_3">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="files" class="form-label">Upload SK: (opsional)</label>
                                        <div class="input-group hdtuto control-group lst increment">
                                            <input type="file" class="form-control" name="file_SK_4">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="files" class="form-label">Upload SK: (opsional)</label>
                                        <div class="input-group hdtuto control-group lst increment">
                                            <input type="file" class="form-control" name="file_SK_5">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    @endsection

    {{-- <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/filepond@4.30.4/dist/filepond.min.css">

    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper"> --}}

    {{-- <div class="content-wrapper">
              
                <div class="content" style="margin: 10vh; margin-left:20vh; width:110vh; margin-right:28vh">
                    <div class="card card-info card-outline ">
                        <div class="card-header">
                            <h3>Input Data Permohonan Izin</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('simpan_administrasi') }}" method="POST" enctype="multipart/form-data"
                                style="width: 100vh; margin-left:10px;">
                                @csrf --}}
    {{-- <div class="form-group mt-3">
                        <input type="text" id="id" name="id" class="form-control @error('id') is-invalid @enderror" placeholder="id">
                    </div> --}}
    {{-- <div class="form-group mt-3 mt-3">
                                    <label>Desa</label> <br>
                                    <input type="text" id="desa" name="desa" class="form-control"
                                        placeholder="Desa" required>
                                </div>
                                <div class="form-group mt-3 mt-3">
                                    <label>Tanggal Masuk</label>
                                    <input type="date" id="tgl_masuk" name="tgl_masuk" class="form-control"
                                        placeholder="Tangal Masuk" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Tindak Lanjut</label>
                                    <input type="text" id="tindak" name="tindak" class="form-control"
                                        placeholder="Tindak Lanjut" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Pengembalian</label>
                                    <input type="text" id="pengembalian" name="pengembalian" class="form-control"
                                        placeholder="Pengembalian" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Proses Kasultanan</label>
                                    <input type="text" id="proses_kasultanan" name="proses_kasultanan"
                                        class="form-control" placeholder="Proses Kasultanan" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Jawaban Kasultanan</label>
                                    <input type="text" id="jawaban_kasultanan" name="jawaban_kasultanan"
                                        class="form-control" placeholder="Jawaban Kasultanan" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Proses Biro Hukum</label>
                                    <input type="text" id="proses_biro" name="proses_biro" class="form-control"
                                        placeholder="Proses Biro Hukum" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Jawaban Biro Hukum</label>
                                    <input type="text" id="jawaban_biro" name="jawaban_biro" class="form-control"
                                        placeholder="Jawaban Biro Hukum" required>
                                </div> --}}
    {{-- <div class="form-group mt-3">
                                    <label>Surat rekomendasi permohonan</label>
                                    <textarea name="surat_kemonbu" id="surat_kemonbu" cols="30" rows="8"></textarea>
                                </div> --}}
    {{-- <div class="form-group mt-3">
                                    <label for="files" class="form-label">Upload SK:</label>
                                    <div class="input-group hdtuto control-group lst increment">
                                        <input type="file" class="form-control" name="file_SK" required>
                                    </div> --}}
    {{-- <div class="clone hide">
                                    <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                                        <input type="file" name="file_SK" class="myfrm form-control">
                                        <div class="input-group-btn">
                                            <button class="btn btn-danger" type="button"><i
                                                    class="fldemo glyphicon glyphicon-remove"></i>Remove</button>
                                        </div>
                                    </div>
                                </div> --}}
    {{-- </div>
                                <div class="form-group mt-3">
                                    <label for="files" class="form-label">Upload SK: (opsional)</label>
                                    <div class="input-group hdtuto control-group lst increment">
                                        <input type="file" class="form-control" name="file_SK_2">
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="files" class="form-label">Upload SK: (opsional)</label>
                                    <div class="input-group hdtuto control-group lst increment">
                                        <input type="file" class="form-control" name="file_SK_3">
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="files" class="form-label">Upload SK: (opsional)</label>
                                    <div class="input-group hdtuto control-group lst increment">
                                        <input type="file" class="form-control" name="file_SK_4">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="files" class="form-label">Upload SK: (opsional)</label>
                                        <div class="input-group hdtuto control-group lst increment">
                                            <input type="file" class="form-control" name="file_SK_5">
                                        </div>
                                    </div>
                                    <div class="form-group mt-4">
                                        <button type="submit" class="btn btn-secondary"
                                            style="background-color: brown">Simpan
                                            Data</button>
                                    </div>

                            </form>
                        </div>


                    </div>
                </div> --}}
    <!-- /.content -->
    {{-- </div> --}}
    <!-- /.content-wrapper -->
    <!--
              The classic file input element we'll enhance
              to a file pond, configured with attributes
              -->
    <!-- Main Footer -->
    {{-- </div> --}}
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    {{-- <sc>
        $('.desa-input-form').select2({
            placeholder: 'Select an option',
            ajax: {
                url: '{{route('desa.get-all-desa')}}',
                dataType: "json",
                processResults: function (data) {
                    return {
                        results: $.map(data.data.data, function (item) {
                            return {
                                text: item.name,
                                id: item.id
                            }
                        })
                    };
                },
                data: function (params) {
                    return {
                        term: params.term || '',
                    }
                },
            }
        }) --}}
