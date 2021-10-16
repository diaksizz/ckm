@extends('layouts.admin.main')
@section('title', 'Edit Artikel')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md">
                        <h3 class="my-4 pl-2" style="border-left: solid black 5px">Edit Artikel</h3>
                        <div class="card card-body" id="show">
                            <form method="POST" action="/admin/artikel/update/{{$id}}" enctype="multipart/form-data" id="formEdit">
                                @csrf
                                @method('patch')
                                <div class="form-group">
                                    <label for="article_title">Judul Artikel</label>
                                    <input type="text" name="judul" id="judul" class="form-control"
                                           autocomplete="off" value="{{$data->judul}}" required>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="article_slug">Slug Artikel</label>
                                    <input readonly type="text" name="artikel_slug" id="artikel_slug"
                                           class="form-control" autocomplete="off" required value="{{$data->artikel_slug}}">
                                </div> -->
                                <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <p><img src="{{asset('storage/images/artikel/'.$data->foto)}}" alt="" style="max-width: 500px;"></p>
                                    <input type="file" name="foto" id="foto"
                                           class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="isi">Isi</label>
                                    <textarea type="text" name="isi" id="isi"
                                              class="form-control" autocomplete="off"
                                              required>{{$data->isi}}</textarea>
                                </div>
                                <hr>
                                <button class="btn btn-sm btn-primary" type="submit"> Update</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- /.container-fluid -->
    </div>

    <script>
        $(document).ready(function() {
            $('#isi').summernote();
        });
        $("#judul").keyup(function() {
            var judul = $("#judul").val();
            judul = judul.toLowerCase();
            judul = judul.replace(/[^a-zA-Z0-9]+/g, '-');
            // $("#artikel_slug").val(judul_artikel);
        });
        var select_fields = document.getElementsByTagName('select')
        var input_fields = document.getElementsByTagName('input')

        for (var field in select_fields) {
            select_fields[field].className += ' form-control'
        }
        for (var field in input_fields) {
            input_fields[field].className += ' form-control'
        }
    </script>

@endsection
