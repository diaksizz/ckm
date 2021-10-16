@extends('layouts.admin.main')
@section('title', 'Tambah Artikel')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md">
                    <h3 class="my-4 pl-2" style="border-left: solid black 5px">Tambah Artikel</h3>
                    <div class="card card-body" id="show">
                        <form method="POST" action="{{route('storeArtikel')}}" enctype="multipart/form-data" id="formEdit">
                            @csrf
                            <input type="hidden" name="id_user" id="id_user"  value="{{$id_user}}" required>
                            <div class="form-group">
                                <label for="nama_produk">Judul</label>
                                <input type="text" name="judul" id="judul" class="form-control"
                                       autocomplete="off" placeholder="Masukkan Judul Artikel.." required>
                            </div>

                            <div class="form-group">
                                <label for="kategori_produk">Kategori Produk</label>
                                <select class="form-control " id="kategori_produk" name="kategori_produk" aria-label="Default select example">
                                    @foreach($produks as $t)
                                    <option value="{{$t->id}}">{{$t->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="isi">Isi Artikel</label>
                                <textarea type="text" name="isi" id="isi" class="form-control"
                                          autocomplete="off" placeholder="Masukkan Isi" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto Artikel</label>
                                <input type="file" name="foto" id="foto" class="form-control" autocomplete="off" required>
                            </div>
                            <br>
                            <button class="btn btn-sm btn-primary" type="submit"
                                    style="margin-bottom: 2%; width: 7%; float:right;">Kirim &nbsp;<i
                                    class="fa fa-check" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#isi').summernote();
        });
    </script>
@endsection
