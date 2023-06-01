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
                     $('#example2').empty()
                     data.forEach(item => {
                         $('#example2').append(`
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
                  <td> <a href="#" data-toggle="modal"
                                                        data-target="#viewFiles-${item.id}"
                                                        class="btn btn-warning btn-xs"><i class="bx bx-edit"></i>View
                                                        Files</a></td>
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
                     $('#example2').empty()
                     data.forEach(item => {
                         $('#example2').append(`
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
                  <td> <a href="#" data-toggle="modal"
                                                        data-target="#viewFiles-${item.id}"
                                                        class="btn btn-warning btn-xs"><i class="bx bx-edit"></i>View
                                                        Files</a></td>
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
                     //  console.log("dataaa", data)
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
                     $('#example2').empty()
                     kapanewon.empty()
                     // console.log("e", e.target.value)
                     // console.log('data', data)
                     data.forEach(item => {
                         $('#example2').append(`  <tr>
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
                  <td> <a href="#" data-toggle="modal"
                                                        data-target="#viewFiles-${item.id}"
                                                        class="btn btn-warning btn-xs"><i class="bx bx-edit"></i>View
                                                        Files</a></td>
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
                     $('#example2').empty()
                     kelurahan.empty()
                     // console.log("e", e.target.value)
                     // console.log('data', data)
                     data.forEach(item => {
                         $('#example2').append(`
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
                <tr>
                  <td>${item.id}</td>
                  <td>${item.kode_perizinan}</td>
                  <td>${item.kabupaten}</td>
                  <td>${item.kapanewon}</td>
                  <td>${item.kelurahan}</td>
                  <td>${item.persil}</td>
                  <td>${item.luas}</td>
                  <td>${item.uraian}</td>
                  <td>${item.tanggal_mulai}</td>
                  <td>${item.tanggal_akhir}</td>
                  <td> <a href="#" data-toggle="modal"
                                                        data-target="#viewFiles-${item.id}"
                                                        class="btn btn-warning btn-xs"><i class="bx bx-edit"></i>View
                                                        Files</a></td>
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
 <!-- Modal -->
 {{-- @foreach ($dtpemanfaatan as $item)
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
 @endforeach --}}
