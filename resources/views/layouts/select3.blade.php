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
                url: "{{ route('api.pengawasan.search') }}",
                type: "GET",
                data: {
                    kabupaten: $('#kabupaten').val(),
                    kapanewon: $("#kapanewon").val(),
                    kelurahan: $("#kelurahan").val(),
                    tahun: e.target.value
                },
                success: function(data) {
                    $('#example1').empty()
                    data.forEach(item => {
                        $('#example1').append(`
                        <tr>
                                            <th>Kabupaten</th>
                                            <th>Kapanewon</th>
                                            <th>Kalurahan</th>
                                            <th>Tahun Pengawasan</th>
                                            <th>Nomor SK</th>
                                            <th>Tanggal SK</th>
                                            <th>Bentuk Pemanfaatan</th>
                                            <th>Pengelola</th>
                                            <th>Persil Klas</th>
                                            <th>Nomor Sertifikat</th>
                                            <th>Luas Pemanfaatan</th>
                                            <th>Luas Keseluruhan</th>
                                            <th>Jumlah Bidang</th>
                                            <th>Lokasi</th>
                                            <th>Koordinat</th>
                                            <th>Jangka Waktu</th>
                                            <th>Jenis Sk</th>
                                            <th>Tindak Lanjut</th>
                                            <th>Kesesuaian</th>
                                            <th>Aksi</th>
                        </tr>
               <tr>
                 <td>${item.kabupaten }</td>
                 <td>${item.kapanewon }</td>
                 <td>${item.kelurahan }</td>
                 <td>${item.tahun_pengawasan }</td>
                 <td>${item.nomor_sk }</td>
                 <td>${item.tanggal_sk }</td>
                 <td>${item.bentuk_pengawasan }</td>
                 <td>${item.pengelola }</td>
                 <td>${item.persil_klas}</td>
                 <td>${item.nomor_sertifikat}</td>
                 <td>${item.luas_pemanfaatan}</td>
                 <td>${item.luas_keseluruhan}</td>
                 <td>${item.jumlah_bidang}</td>
                 <td>${item.lokasi}</td>
                 <td>${item.koordinat}</td>
                 <td>${item.jktwaktu}</td>
                 <td>${item.jenis_sk}</td>
                 <td>${item.tdklanjut}</td>
                 <td>${item.kesesuaian}</td>
                 <td>
                             <a href="view-pengawasan/${item.id}"><i class="fas fa-eye"></i></a> |
                             <a href="edit-pengawasan/${item.id}"><i class="fas fa-edit"></i></a> |
                             <a href="delete-pengawasan/${item.id}"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" ><i class="fas fa-trash-alt bg-dancer"></i></a>
                </td>
               </tr>`)
                    })

                },
            })
        })

        kabupaten.on('select2:select', (e) => {

            // fetch selected kabupaten
            $.ajax({
                url: "{{ route('api.pengawasan.search') }}",
                type: "GET",
                data: {
                    kabupaten: e.target.value,
                    tahun: $("#tahun").val()
                },
                success: function(data) {
                    $('#example1').empty()
                    data.forEach((item, index) => {
                        const head = index === 0 ? `<tr>
                                            <th>Kabupaten</th>
                                            <th>Kapanewon</th>
                                            <th>Kalurahan</th>
                                            <th>Tahun Pengawasan</th>
                                            <th>Nomor SK</th>
                                            <th>Tanggal SK</th>
                                            <th>Bentuk Pemanfaatan</th>
                                            <th>Pengelola</th>
                                            <th>Persil Klas</th>
                                            <th>Nomor Sertifikat</th>
                                            <th>Luas Pemanfaatan</th>
                                            <th>Luas Keseluruhan</th>
                                            <th>Jumlah Bidang</th>
                                            <th>Lokasi</th>
                                            <th>Koordinat</th>
                                            <th>Jangka Waktu</th>
                                            <th>Jenis Sk</th>
                                            <th>Tindak Lanjut</th>
                                            <th>Kesesuaian</th>
                                            <th>Aksi</th>
                        </tr>` : undefined
                        $('#example1').append(`
                        ${head}
               <tr>
                 <td>${item.kabupaten }</td>
                 <td>${item.kapanewon }</td>
                 <td>${item.kelurahan }</td>
                 <td>${item.tahun_pengawasan }</td>
                 <td>${item.nomor_sk }</td>
                 <td>${item.tanggal_sk }</td>
                 <td>${item.bentuk_pengawasan }</td>
                 <td>${item.pengelola }</td>
                 <td>${item.persil_klas}</td>
                 <td>${item.nomor_sertifikat}</td>
                 <td>${item.luas_pemanfaatan}</td>
                 <td>${item.luas_keseluruhan}</td>
                 <td>${item.jumlah_bidang}</td>
                 <td>${item.lokasi}</td>
                 <td>${item.koordinat}</td>
                 <td>${item.jktwaktu}</td>
                 <td>${item.jenis_sk}</td>
                 <td>${item.tdklanjut}</td>
                 <td>${item.kesesuaian}</td>
                 <td>
                             <a href="view-pengawasan/${item.id}"><i class="fas fa-eye"></i></a> |
                             <a href="edit-pengawasan/${item.id}"><i class="fas fa-edit"></i></a> |
                             <a href="delete-pengawasan/${item.id}"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" ><i class="fas fa-trash-alt bg-dancer"></i></a>
                </td>
               </tr>`)
                    })

                },
            })

            // fetch list kapanewonnn
            $.ajax({
                url: "{{ route('api.pengawasan.kapanewon') }}",
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
                url: "{{ route('api.pengawasan.kelurahan') }}",
                type: "GET",
                data: {
                    kapanewon: e.target.value,
                    kabupaten: $("#kabupaten").val(),
                    tahun: $("#tahun").val()
                },
                success: function(data) {
                    //  console.log("dataaa", data)
                    data.map(it => {
                        var newOption = new Option(it.kelurahan, it.kelurahan,
                            false, false);
                        $('#kelurahan').append(newOption);
                    })

                },
            })
            $.ajax({
                url: "{{ route('api.pengawasan.search') }}",
                type: "GET",
                data: {
                    kapanewon: e.target.value,
                    kabupaten: $("#kabupaten").val(),
                    tahun: $("#tahun").val()
                },
                success: function(data) {
                    $('#example1').empty()
                    // kapanewon.empty()
                    // console.log("e", e.target.value)
                    // console.log('data', data)
                    data.forEach((item, index) => {
                        const head = index === 0 ? `<tr>
                                            <th>Kabupaten</th>
                                            <th>Kapanewon</th>
                                            <th>Kalurahan</th>
                                            <th>Tahun Pengawasan</th>
                                            <th>Nomor SK</th>
                                            <th>Tanggal SK</th>
                                            <th>Bentuk Pemanfaatan</th>
                                            <th>Pengelola</th>
                                            <th>Persil Klas</th>
                                            <th>Nomor Sertifikat</th>
                                            <th>Luas Pemanfaatan</th>
                                            <th>Luas Keseluruhan</th>
                                            <th>Jumlah Bidang</th>
                                            <th>Lokasi</th>
                                            <th>Koordinat</th>
                                            <th>Jangka Waktu</th>
                                            <th>Jenis Sk</th>
                                            <th>Tindak Lanjut</th>
                                            <th>Kesesuaian</th>
                                            <th>Aksi</th>
                        </tr>` : undefined
                        $('#example1').append(`
                        ${head}
               <tr>
                 <td>${item.kabupaten }</td>
                 <td>${item.kapanewon }</td>
                 <td>${item.kelurahan }</td>
                 <td>${item.tahun_pengawasan }</td>
                 <td>${item.nomor_sk }</td>
                 <td>${item.tanggal_sk }</td>
                 <td>${item.bentuk_pengawasan }</td>
                 <td>${item.pengelola }</td>
                 <td>${item.persil_klas}</td>
                 <td>${item.nomor_sertifikat}</td>
                 <td>${item.luas_pemanfaatan}</td>
                 <td>${item.luas_keseluruhan}</td>
                 <td>${item.jumlah_bidang}</td>
                 <td>${item.lokasi}</td>
                 <td>${item.koordinat}</td>
                 <td>${item.jktwaktu}</td>
                 <td>${item.jenis_sk}</td>
                 <td>${item.tdklanjut}</td>
                 <td>${item.kesesuaian}</td>
                 <td>
                             <a href="view-pengawasan/${item.id}"><i class="fas fa-eye"></i></a> |
                             <a href="edit-pengawasan/${item.id}"><i class="fas fa-edit"></i></a> |
                             <a href="delete-pengawasan/${item.id}"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" ><i class="fas fa-trash-alt bg-dancer"></i></a>
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
                url: "{{ route('api.pengawasan.search') }}",
                type: "GET",
                data: {
                    kelurahan: e.target.value,
                    kabupaten: $("#kabupaten").val(),
                    tahun: $("#tahun").val()
                },
                success: function(data) {
                    $('#example1').empty()
                    // kelurahan.empty()
                    // console.log("e", e.target.value)
                    // console.log('data', data)
                    data.forEach(item => {
                        $('#example1').append(`
                        <tr>
                                            <th>Kabupaten</th>
                                            <th>Kapanewon</th>
                                            <th>Kalurahan</th>
                                            <th>Tahun Pengawasan</th>
                                            <th>Nomor SK</th>
                                            <th>Tanggal SK</th>
                                            <th>Bentuk Pemanfaatan</th>
                                            <th>Pengelola</th>
                                            <th>Persil Klas</th>
                                            <th>Nomor Sertifikat</th>
                                            <th>Luas Pemanfaatan</th>
                                            <th>Luas Keseluruhan</th>
                                            <th>Jumlah Bidang</th>
                                            <th>Lokasi</th>
                                            <th>Koordinat</th>
                                            <th>Jangka Waktu</th>
                                            <th>Jenis Sk</th>
                                            <th>Tindak Lanjut</th>
                                            <th>Kesesuaian</th>
                                            <th>Aksi</th>
                        </tr>
               <tr>
                 <td>${item.kabupaten }</td>
                 <td>${item.kapanewon }</td>
                 <td>${item.kelurahan }</td>
                 <td>${item.tahun_pengawasan }</td>
                 <td>${item.nomor_sk }</td>
                 <td>${item.tanggal_sk }</td>
                 <td>${item.bentuk_pengawasan }</td>
                 <td>${item.pengelola }</td>
                 <td>${item.persil_klas}</td>
                 <td>${item.nomor_sertifikat}</td>
                 <td>${item.luas_pemanfaatan}</td>
                 <td>${item.luas_keseluruhan}</td>
                 <td>${item.jumlah_bidang}</td>
                 <td>${item.lokasi}</td>
                 <td>${item.koordinat}</td>
                 <td>${item.jktwaktu}</td>
                 <td>${item.jenis_sk}</td>
                 <td>${item.tdklanjut}</td>
                 <td>${item.kesesuaian}</td>
                 <td>
                             <a href="view-pengawasan/${item.id}"><i class="fas fa-eye"></i></a> |
                             <a href="edit-pengawasan/${item.id}"><i class="fas fa-edit"></i></a> |
                             <a href="delete-pengawasan/${item.id}"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" ><i class="fas fa-trash-alt bg-dancer"></i></a>
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
            url: "{{ route('api.tahun') }}",
            type: "GET",
            success: function(data) {
                console.log(data)
                data.map(it => {
                    var newOption = new Option(it.tahun_pengawasan, it.tahun_pengawasan,
                        false,
                        false);
                    $('#tahun').append(newOption).trigger('change');
                })
            }
        })

        $.ajax({
            url: "{{ route('api.pengawasan.kabupaten') }}",
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
