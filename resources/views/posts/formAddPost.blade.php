@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Postingan</div>

                <div class="card-body">
                    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="kota" class="col-sm-4 col-form-label text-md-right">Kota</label>
                            <div class="col-md-6">
                                <select class="form-control" name="dropKota" id="dropKota" required></select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="wisata" class="col-sm-4 col-form-label text-md-right">Wisata</label>
                            <div class="col-md-6">
                            <select class="form-control" name="dropWisata" id="dropWisata" required></select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="caption" class="col-sm-4 col-form-label text-md-right">Caption</label>
                            <div class="col-md-6">
                                <textarea id="caption" type="text" class="form-control" name="caption" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="foto" class="col-sm-4 col-form-label text-md-right">Foto</label>
                            <div class="col-md-6">
                                <input type="file" name="file_foto" id="file_foto" require>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
    var dropdown = $('#dropKota');

    dropdown.append('<option value="" disabled>Pilih Kota</option>');
    dropdown.prop('selectedIndex', 0);

    var dropdown1 = $('#dropWisata');

    dropdown1.append('<option value="" disabled>Pilih Wisata</option>');
    dropdown1.prop('selectedIndex', 0);

    var url = "{{ route('api.kota') }}";

    $.getJSON(url, function (data) {

        for(var i = 0; i < data.kotas.length; i++){
            dropdown.append($('<option></option>').attr('value', data.kotas[i].id).text(data.kotas[i].nama));
        }

    });

    dropdown.change(function(){
        dropdown1.empty().append('<option selected="true" value="" disabled>Pilih Wisata</option>');

        url = "{{ url('api/wisata') . '/' }}" + $(this).val();

        $.getJSON(url, function (data) {

            for(var i = 0; i < data.wisatas.length; i++){
                dropdown1.append($('<option></option>').attr('value', data.wisatas[i].id).text(data.wisatas[i].nama));
            }

        });
    });
});


</script>
@endsection
