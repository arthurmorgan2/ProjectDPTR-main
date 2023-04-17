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
                  placeholder: 'Pilih Kapanewon',
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
          console.log(kabupaten, kapanewon, kelurahan)
      })
  </script>
