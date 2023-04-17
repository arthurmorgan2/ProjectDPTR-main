 <script>
        // fetch omset, keuntungan, omset, dan total penjualan
        $(document).ready(function() {
            let kabupaten = $("#kabupaten");
            let kapanewon = $('#kapanewon')
            let kelurahan = $('#kelurahan')
            let tahun = $('#tahun')
            tahun.select2();
            kelurahan.select2();
            kapanewon.select2();
            kabupaten.select2();

            tahun.on('select2:select', e => {
                $.ajax({
                    url: "{{ route('api.pemanfaatan.search') }}",
                    type: "GET",
                    data: {
                        kabupaten: $('#kabupaten').val(),
                        kapanewon: $("#kapanewon").val(),
                        kelurahan: $("#kelurahan").val(),
                        tahun: e.target.value
                    },
                    success: function(data) {
                        $('#table').empty()
                        data.forEach(item => {
                            $('#table').append(`
                <tr>
                  <td>${item.id}</td>
                  <td>${item.kode_perizinan}</td>
                  <td>${item.kabupaten }</td>
                  <td>${item.kapanewon }</td>
                  <td>${item.kelurahan }</td>
                  <td>${item.desa }</td>
                  <td>${item.persil}</td>
                  <td>${item.luas}</td>
                  <td>${item.uraian}</td>
                  <td>${item.tanggal_mulai}</td>
                  <td>${item.tanggal_akhir}</td>
                  <td>${item.file_sk}</td>
                  <td>
                              <a href="edit-pemanfaatan/${item.id}"><i class="fas fa-edit"></i></a> |
                              <a href="hapus-pemanfaatan/${item.id}"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" ><i class="fas fa-trash-alt bg-dancer"></i></a>
                              @csrf
                            </td>
                </tr>`)
                        })

                    },
                })
            })

            kabupaten.on('select2:select', (e) => {

                // fetch selected kabupaten
                $.ajax({
                    url: "{{ route('api.pemanfaatan.search') }}",
                    type: "GET",
                    data: {
                        kabupaten: e.target.value,
                        tahun: $("#tahun").val()
                    },
                    success: function(data) {
                        $('#table').empty()
                        data.forEach(item => {
                            $('#table').append(`
                <tr>
                  <td>${item.id}</td>
                  <td>${item.kode_perizinan}</td>
                  <td>${item.kabupaten }</td>
                  <td>${item.kapanewon }</td>
                  <td>${item.kelurahan }</td>
                  <td>${item.desa }</td>
                  <td>${item.persil}</td>
                  <td>${item.luas}</td>
                  <td>${item.uraian}</td>
                  <td>${item.tanggal_mulai}</td>
                  <td>${item.tanggal_akhir}</td>
                  <td>${item.file_sk}</td>
                  <td>
                              <a href="edit-pemanfaatan/${item.id}"><i class="fas fa-edit"></i></a> |
                              <a href="hapus-pemanfaatan/${item.id}"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" ><i class="fas fa-trash-alt bg-dancer"></i></a>
                              @csrf
                            </td>
                </tr>`)
                        })

                    },
                })

                // fetch list kapanewon
                $.ajax({
                    url: "{{ route('api.pemanfaatan.kapanewon') }}",
                    type: "GET",
                    data: {
                        kabupaten: e.target.value,
                        tahun: $("#tahun").val()
                    },
                    success: function(data) {
                        // console.log("memanggil kecamatan")
                        // console.log("e", e.target.value)
                        // console.log('data', data)
                        data.map(it => {
                            var newOption = new Option(it.kapanewon, it.kapanewon,
                                false, false);
                            $('#kapanewon').append(newOption);
                        })

                    },
                })
            })

            kapanewon.on('select2:select', (e) => {
                $.ajax({
                    url: "{{ route('api.pemanfaatan.kelurahan') }}",
                    type: "GET",
                    data: {
                        kapanewon: e.target.value,
                        kabupaten: $("#kabupaten").val(),
                        tahun: $("#tahun").val()
                    },
                    success: function(data) {
                        console.log("dataaa", data)
                        data.map(it => {
                            var newOption = new Option(it.kelurahan, it.kelurahan,
                                false, false);
                            $('#kelurahan').append(newOption);
                        })

                    },
                })
                $.ajax({
                    url: "{{ route('api.pemanfaatan.search') }}",
                    type: "GET",
                    data: {
                        kapanewon: e.target.value,
                        kabupaten: $("#kabupaten").val(),
                        tahun: $("#tahun").val()
                    },
                    success: function(data) {
                        $('#table').empty()
                        kapanewon.empty()
                        // console.log("e", e.target.value)
                        // console.log('data', data)
                        data.forEach(item => {
                            $('#table').append(`
                <tr>
                  <td>${item.id}</td>
                  <td>${item.kode_perizinan}</td>
                  <td>${item.kabupaten }</td>
                  <td>${item.kapanewon }</td>
                  <td>${item.kelurahan }</td>
                  <td>${item.desa }</td>
                  <td>${item.persil}</td>
                  <td>${item.luas}</td>
                  <td>${item.uraian}</td>
                  <td>${item.tanggal_mulai}</td>
                  <td>${item.tanggal_akhir}</td>
                  <td>${item.file_sk}</td>
                  <td>
                              <a href="edit-pemanfaatan/${item.id}"><i class="fas fa-edit"></i></a> |
                              <a href="hapus-pemanfaatan/${item.id}"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" ><i class="fas fa-trash-alt bg-dancer"></i></a>
                              @csrf
                            </td>
                </tr>`)
                        })

                    },
                    error: function(data) {
                        let alert = $('div[role="alert"]')
                        alert.addClass('alert alert-danger alert-dismissible')
                        alert.html(JSON.stringify(data.responseJSON.message))
                        alert.show()
                    }
                })
            })

            // fetch list kelurahan
            kelurahan.on('select2:select', (e) => {
                // console.log('hereeeeeee', $("#kabupaten").val(), e.target.value)
                $.ajax({
                    url: "{{ route('api.pemanfaatan.search') }}",
                    type: "GET",
                    data: {
                        kelurahan: e.target.value,
                        kabupaten: $("#kabupaten").val(),
                        tahun: $("#tahun").val()
                    },
                    success: function(data) {
                        $('#table').empty()
                        kelurahan.empty()
                        // console.log("e", e.target.value)
                        // console.log('data', data)
                        data.forEach(item => {
                            $('#table').append(`
                <tr>
                  <td>${item.id}</td>
                  <td>${item.kode_perizinan}</td>
                  <td>${item.desa_kecamatan}</td>
                  <td>${item.kabupaten}</td>
                  <td>${item.kelurahan}</td>
                  <td>${item.persil}</td>
                  <td>${item.luas}</td>
                  <td>${item.uraian}</td>
                  <td>${item.tanggal_mulai}</td>
                  <td>${item.tanggal_akhir}</td>
                  <td>${item.file_sk}</td>
                  <td>
                              <a href="edit-pemanfaatan/${item.id}"><i class="fas fa-edit"></i></a> |
                              <a href="hapus-pemanfaatan/${item.id}"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" ><i class="fas fa-trash-alt bg-dancer"></i></a>
                              @csrf
                            </td>
                </tr>`)
                        })
                    },
                    error: function(data) {
                        let alert = $('div[role="alert"]')
                        alert.addClass('alert alert-danger alert-dismissible')
                        alert.html(JSON.stringify(data.responseJSON.message))
                        alert.show()
                    }
                })
            })

            $.ajax({
                url: "{{ route('api.tahunA') }}",
                type: "GET",
                success: function(data) {
                    console.log(data)
                    data.map(it => {
                        var newOption = new Option(it.tanggal_akhir, it.tanggal_akhir, false,
                            false);
                        $('#tahun').append(newOption).trigger('change');
                    })
                }
            })

            $.ajax({
                url: "{{ route('api.pemanfaatan.kabupaten') }}",
                type: "GET",
                success: function(data) {
                    // console.log('data', data)
                    data.map(it => {
                        var newOption = new Option(it.kabupaten, it.kabupaten, false, false);
                        $('#kabupaten').append(newOption).trigger('change');
                    })

                },
                error: function(data) {
                    let alert = $('div[role="alert"]')
                    alert.addClass('alert alert-danger alert-dismissible')
                    alert.html(JSON.stringify(data.responseJSON.message))
                    alert.show()
                }
            })
        })
    </script>