<?php
use App\enumVar as enum;
use App\Helpers\Get_field;
?>
@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <h5 class="card-title text-uppercase">Terjemahkan Bahasa</h5>
            <hr />
            <form class="form-material" id="form_terjemahkan">
                <div class="form-group">
                    <div class="col-md-12">
                            <div class="col-md-5">
                                <label for="word_input" id="word_input_label" class="text-md-left">{{ __('Indonesia') }}</label>
                                <input id="word_input" type="text" class="col-md-12 form-control" name="word_input" maxlength="100" placeholder="Ketik kata dalam Bahasa Indonesia" required>
                                <input type="hidden" id="word_mode" name="word_mode" value="indonesia">
                            </div>
                            <div class="col-md-2 mt-5">
                                <button type="button" class="btn btn-success btn-block btn-outline" id="tukarbahasa">Tukar Bahasa <i class="fa fa-exchange" aria-hidden="true"></i></button>
                            </div>
                            <div class="col-md-5">
                                <label for="word_output" id="word_output_label" class="text-md-left">{{ __('Jawa') }}</label>
                                <input id="word_output" type="text" class="col-md-12 form-control" name="word_output" maxlength="100" placeholder="Terjemahan dalam Bahasa Jawa" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 recommendation">
                        
                    </div>
                    <button type="submit" class="btn btn-info btn-save mt-5" id="btn_terjemahkan">Terjemahkan</button>
       	 	        <button type="button" class="btn btn-outline btn-danger mt-5" id="btn_reset">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <h5 class="card-title text-uppercase">Kamus Bahasa Indonesia - Jawa</h5>
            <hr />
            <form class="form-material">
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="search" class="col-md-12 col-form-label text-md-left">{{ __('Filter') }}</label>
                            </div>
                            <div class="col-md-9">
                                <input id="search" type="text" class="col-md-12 form-control" name="search" value="{{ old('search') }}" maxlength="100" autocomplete="search" placeholder="-- Filter --">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row row-in">
                <div class="table-responsive">
                    <table class="table table-bordered yajra-datatable table-striped" id="kamus-table">
                        <thead>
                            <tr>
                                <th>Bahasa Indonesia</th>
                                <th>Bahasa Jawa</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var v_modedetail = "";
    function setLanguageMode() {
        // v_modedetail = mode;
        // $("#word_mode").val();

        if ($("#word_mode").val() == "indonesia") {
            $("#word_input").text('Jawa').attr('placeholder', 'Tulis tembung ing basa Jawa').val('');
            $("#word_mode").val('jawa');
            $("#word_input_label").text('Jawa');
            
            $("#word_output").text('Indonesia').attr('placeholder', 'Terjemahan dalam Bahasa Indonesia').val('');
            $("#word_output_label").text('Indonesia');

            $('.recommendation').html('');
        }
        else if ($("#word_mode").val() == "jawa") {
            $("#word_input").text('Indonesia').attr('placeholder', 'Ketik kata dalam Bahasa Indonesia').val('');
            $("#word_mode").val('indonesia');
            $("#word_input_label").text('Indonesia');

            $("#word_output").text('Jawa').attr('placeholder', 'Terjemahan dalam Bahasa Jawa').val('');
            $("#word_output_label").text('Jawa');

            $('.recommendation').html('');
        }
        else {
            $("#word_input").text('Indonesia').attr('placeholder', 'Ketik kata dalam Bahasa Indonesia').val('');
            $("#word_mode").val('indonesia');
            $("#word_input_label").text('Indonesia');

            $("#word_output").text('Indonesia').attr('placeholder', 'Terjemahan dalam Bahasa Indonesia').val('');
            $("#word_output_label").text('Indonesia');

            $('.recommendation').html('');
        }
    }

    $('#tukarbahasa').on('click', function(){
        setLanguageMode();
    });
    $('#btn_reset').on('click', function(){
        $("#word_input").val('');
        $("#word_output").val('');
        $('.recommendation').html('');
    });

     // form upload file 
     $('#btn_terjemahkan').click(function(e){
         var url = '';
         var id = '';
         
         e.preventDefault();
         
         // let formData = new FormData($('#form_terjemahkan')[0]);
         var wordInput = $('#word_input').val();

        if($("#word_mode").val() == "indonesia") {
            var url = "{{ route('kamus.jawa') }}"
            // id = kebutuhansarprastable.rows( { selected: true } ).data()[0]['sarpraskebutuhanid'];
            // url = url.replace(':id', id);   
            // console.log('Indonesia Mode');
        }else if($("#word_mode").val() == "jawa") {
            var url = "{{ route('kamus.indonesia') }}"
            // var rowData = realisasitable.rows( { selected: true } ).data()[0];
            // id = rowData.realisasiid;
            // url = url.replace(':id', id); 
            // console.log('Jawa Mode');
        }

        // url = "{{-- route('pengajuangajiberkala.uploadFile', ':id') --}}";
        // id = pegawaitable.rows( { selected: true } ).data()[0]['pegawaipengajuangajiid'];
        // url = url.replace(':id', id); 
        $.ajax({
            method: 'GET',
            url: url,
            data: {
                word_input: wordInput,
            },
            // contentType: false,
            // processData: false,
            success: (json) => {
                $('.recommendation').html('');
                let success = json.success;
                let message = json.message;
                let data = json.data;
                let errors = json.errors;
                let isExist = json.data.isExist;

                // console.log(isExist);

                if (isExist == true || isExist == 'true') {
                        // swal.fire("Berhasil!", "File berhasil diupload.", "success");
                        // // kebutuhansarprastable.draw();
                        // // formUploadtable.draw();
                        // var rowData = kebutuhansarprastable.rows({ selected: true }).data()[0]; // Get selected row data
                        // var pengajuangajiberkalaid = rowData.pengajuangajiberkalaid;
                        // loadPegawaiEdit(pengajuangajiberkalaid);

                        // $('#formUpload').trigger("reset");
                        // $('#modal_upload').modal('hide'); 
                        
                        // if($("#word_mode").val() == "indonesia") {
                        //     $('#word_output').val(data.data.jawa);
                        // }else if($("#word_mode").val() == "jawa") {
                        //     $('#word_output').val(data.data.indonesia);
                        // }
                        $('#word_output').val(data.data.terjemahan);
                }else{
                    swal.fire('Kata Tidak Ditemukan', 'Entri yang anda masukkan tidak ada', 'error')
                    $('#word_output').val(data.data.terjemahan);
                    var div = $('<div><h3 class="box-title">Terjemahan lainnya</h3></div>'); // Membuat elemen <div>
                    data.data.forEach(function(item) {
                        // div.append('<li>Indonesia: ' + item.indonesia + '</li>'); // Menambahkan <li> untuk Indonesia
                        // div.append('<li>Jawa: ' + item.jawa + '</li>'); // Menambahkan <li> untuk Jawa

                        div.append(`
                            <div class="message-center">
                                <a class="other_translate">
                                    <div class="mail-contnet">
                                        <span class="mail-desc">Indonesia - Jawa</span>
                                        <h5>${item.indonesia} - ${item.jawa}</h5>
                                    </div>
                                </a>
                            </div>
                        `)

                        // Menambahkan <div> ke dalam elemen dengan class "recommendation"
                        $('.recommendation').append(div);
                        // console.log(item.indonesia + ': ' + item.jawa);
                    });
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                    $('.recommendation').html('');
                    var data = jqXHR.responseJSON;
                    console.log(data.errors);// this will be the error bag.
                    if (data.errors.file != undefined || data.errors.file != null) {
                        swal.fire("Error", `<p>${data.errors.file}</p>`, "error");
                    }else{
                        swal.fire('Error', 'Error', 'error')
                }
            }
        })
    });

    $('.other_translate').click(function(event){
        event.preventDefault(); // Mencegah aksi default dari <a> (misalnya navigasi)

        // Mengambil nilai teks dari tag <h5> dan <span>
        var bahasaIndonesia = $(this).find('h5').text();
        var bahasaJawa = $(this).find('span.mail-desc').text();

        // Menampilkan nilai yang diambil di console (atau bisa diproses sesuai kebutuhan)
        console.log('Bahasa Indonesia:', bahasaIndonesia);
        console.log('Bahasa Jawa:', bahasaJawa);
    });
    let kamustable = $('#kamus-table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            pageLength: 50,
            dom: 'Bfrtip',
            select: true,
            ordering: false,
            searching: false,
            language: {
                lengthMenu: "Menampilkan _MENU_ data per halaman",
                zeroRecords: "Tidak ada data",
                info: "Halaman _PAGE_ dari _PAGES_ (Total: _TOTAL_ Data)",
                infoEmpty: "Tidak ada data",
                infoFiltered: "(difilter dari _MAX_ data)",
                search: "Pencarian :",
                paginate: {
                    previous: "Sebelumnya",
                    next: "Selanjutnya",
                }
            },
            ajax: {
                url: "{{ route('kamus.index') }}",
                dataSrc: function (response) {
                    response.recordsTotal = response.data.count;
                    response.recordsFiltered = response.data.count;
                    return response.data.data;
                },
                data: function (d) {
                    return $.extend({}, d, {
                        // "unit": $("#unit").val().toLowerCase(),
                        // "kotaid": $("#kotaid").val().toLowerCase(),
                        // "kecamatanid": $("#kecamatanid").val().toLowerCase(),
                        // "jenjang": $("#jenjang").val().toLowerCase(),
                        // "sekolahid": $("#sekolahid").val().toLowerCase(),
                        // "jenis": $("#jenis").val().toLowerCase(),
                        // "filter_status": $("#filter_status").val().toLowerCase(),
                        // "filter_jenispeg": $("#filter_jenispeg").val().toLowerCase(),
                        "search": $("#search").val().toLowerCase()
                    });
                }
            },
            buttons: {
                buttons: [
                    
                ]
            },
            columns: [
                {
                    'orderData': 1,
                    data: 'indonesia',
                    render: function (data, type, row) {
                        if (row.indonesia && row.indonesia != null) {
                            return row.indonesia;
                        }
                        else {
                            return '-'
                        }
                    },
                    name: 'indonesia'
                },
                {
                    'orderData': 2,
                    data: 'jawa',
                    render: function(data, type, row){
                        if (row.jawa && row.jawa != null) {
                            return row.jawa;
                        }
                        else {
                            return '-'
                        }
                    },
                    name: 'jawa'
                },
            ],
            initComplete: function (settings, json) {
                $(".btn-datatable").removeClass("dt-button");
            },
            //order: [[1, 'asc']]
        });

        $('#search').keydown(function (event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });

        $('#search').on('keyup', function (e) {
            if (e.key === 'Enter' || e.keyCode === 13) {
                kamustable.draw();
                //  $('#pegawai-table').hide();
            }
        });
</script>

@endsection