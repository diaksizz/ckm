@extends('layouts.admin.main')
@section('title', 'Tambah Produk')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md">
                    <h3 class="my-4 pl-2" style="border-left: solid black 5px">Tambah Produk</h3>
                    <div class="card card-body" id="show">
                        <form method="POST" action="{{route('storeProduk')}}" enctype="multipart/form-data" id="formEdit">
                            @csrf
                            <input type="hidden" name="id_user" id="id_user"  value="{{$id_user}}" required>
                            <div class="form-group">
                                <label for="nama_produk">Nama Produk</label>
                                <input type="text" name="nama_produk" id="nama_produk" class="form-control"
                                       autocomplete="off" placeholder="Masukkan Nama Agenda.." required>
                            </div> 
                            
                            <div class="form-group">
                                <label for="kategori_produk">Kategori Produk</label>
                                <select class="form-control " id="kategori_produk" name="kategori_produk" aria-label="Default select example">
                                    @foreach($kategoris as $t)
                                    <option value="{{$t->id}}">{{$t->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi_produk">Deskripsi Produk</label>
                                <textarea type="text" name="deskripsi_produk" id="deskripsi_produk" class="form-control"
                                          autocomplete="off" placeholder="Masukkan Deskripsi" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="foto_produk">Foto Produk</label>
                                <input type="file" name="foto_produk" id="foto_produk" class="form-control" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label for="harga_produk">Harga Produk</label>
                                <input type="number" name="harga_produk" id="harga_produk" class="form-control"
                                          autocomplete="off" placeholder="Masukkan Harga Produk" required>
                            </div>
                            <div class="form-group">
                                <label for="notelp_produk">Nomer Telp</label>
                                <input type="number" name="notelp_produk" id="notelp_produk" class="form-control"
                                          autocomplete="off" placeholder="Masukkan Nomer Telepon" required>
                            </div>
                            <div class="form-group">
                                <label for="lokasi_produk">Lokasi Produk</label>
                                <input type="text" name="lokasi_produk" id="lokasi_produk" class="form-control"
                                       autocomplete="off" placeholder="Masukkan Alamat lokasi" required>
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
            $('#deskripsi_produk').summernote();
        });
    </script>
@endsection
