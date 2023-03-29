@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <!--
                                                                                                            This is a starter template page. Use this page to start your new project from
                                                                                                            scratch. This page gets rid of all links and provides the needed markup only.
                                                                                                            -->
    <html lang="en">
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <div class="content" style="margin: 10vh; margin-left:25vh; width:110vh; margin-right:23vh">
                    <div class="card card-info card-outline" style="width:100%">
                        <div class="card-header">
                            <h3>Input Data Pengawasan</h3>

                        </div>

                        <div class="card-body">
                            <form action="{{ route('simpan-Pengawasan') }}" method="POST">
                                {{ csrf_field() }}
                                {{-- <div class="form-group mt-3">
                      <label>ID:</label>
                      <input type="text" id="id" name ="id" class="form-control">
                    </div> --}}
                                <div class="form-group mt-3">
                                    <label>Kabupaten:</label>
                                    <select name="kabupaten" id="kabupaten-input-form"
                                        class="form-select form-select-lg mb-3">
                                    </select>
                                    {{-- <input type="text" id="kabupaten" name="kabupaten" class="form-control" required> --}}
                                </div>
                                <div class="form-group mt-3">
                                    <label>Kapanewon:</label>
                                    <select name="kapanewon" id="kapanewon-input-form"
                                        class="form-select form-select-lg mb-3">

                                    </select>
                                    {{-- <input type="text" id="kapanewon" name="kapanewon" class="form-control" required> --}}
                                </div>
                                <div class="form-group mt-3">
                                    <label>Kelurahan:</label>
                                    <select name="kelurahan" id="kelurahan-input-form"
                                        class="form-select form-select-lg mb-3">

                                    </select>
                                    {{-- <input type="text" id="kelurahan" name="kelurahan" class="form-control" required> --}}
                                </div>
                                <div class="form-group mt-3">
                                    <label>Tahun Pengawasan:</label>
                                    <input type="text" id="tahun_pengawasan" name="tahun_pengawasan" class="form-control"
                                        required>
                                </div>

                                <div class="form-group mt-3">
                                    <label>Nomor SK :</label>
                                    <input type="text" id="nomor_sk" name="nomor_sk" class="form-control" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Tanggal SK:</label>
                                    <input type="date" id="tanggal_sk" name="tanggal_sk" class="form-control" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Bentuk Pemanfaatan :</label>
                                    <input type="text" id="bentuk_pemanfaatan" name="bentuk_pemanfaatan"
                                        class="form-control" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Pengelola:</label>
                                    <input type="text" id="pengelola" name="pengelola" class="form-control" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Persil Klas:</label>
                                    <input type="text" id="persil_klas" name="persil_klas" class="form-control" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Nomor Sertifikat:</label>
                                    <input type="text" id="nomor_sertifikat" name="nomor_sertifikat" class="form-control"
                                        required>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Luas Pemanfaatan:</label>
                                    <input type="text" id="luas_pemanfaatan" name="luas_pemanfaatan" class="form-control"
                                        required>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Luas Keseluruhan:</label>
                                    <input type="text" id="luas_keseluruhan" name="luas_keseluruhan" class="form-control"
                                        required>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Jumlah Bidang :</label>
                                    <input type="text" id="jumlah_bidang" name="jumlah_bidang" class="form-control"
                                        required>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Lokasi:</label>
                                    <input type="text" id="lokasi" name="lokasi" class="form-control" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Koordinat:</label>
                                    <input type="text" id="koordinat" name="koordinat" class="form-control" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Jangka Waktu:</label>
                                    <input type="text" id="jktwaktu" name="jktwaktu" class="form-control" required>
                                    <div>
                                        <div class="form-group mt-3">
                                            <label>Jenis Sk:</label>
                                            <input type="text" id="jenis_sk" name="jenis_sk" class="form-control"
                                                required>
                                            <div>
                                                <div class="form-group mt-3">
                                                    <label>Tindak Lanjut:</label>
                                                    <input type="text" id="tdklanjut" name="tdklanjut"
                                                        class="form-control" required>
                                                    <div>
                                                        <div class="form-group mt-3">
                                                            <label>Kesesuaian:</label>
                                                            <input type="text" id="kesesuaian" name="kesesuaian"
                                                                class="form-control" required>
                                                            <div class="mt-3">
                                                                <button type="submit" class="btn btn-success"
                                                                    style="background-color: brown">Simpan Data</button>
                                                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </body>

    </html>
    </div>
    </div>

    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
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
    </script>
    @include('tamplate.script')

    </body>

    </html>
@endsection
