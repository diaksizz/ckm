@extends('layouts.homepage.app')
@section('title'.'Produk')
@section('content')
    <div class="container">
      <br>
        <h1 class="my-4 pl-2" style="border-left: solid black 5px">Produk</h1>
        <div class="row">

                <div class="col-md-4 mt-3">
                    <div class="container">
                        <div class="card border-secondary" style="width: 100%; min-height: 400px;">
                            <div style="height: 150px; width: 100%">
                                <img class="card-img-top"
                                     src=""
                                     alt="Card image cap" style="max-width: 100%; max-height: 100%; object-fit: cover;">
                            </div>
                            <div class="card-body" style="height: 100px;">
                                <div >
                                    <a href="" style="text-decoration: none; color: black;"><h5 class="card-title" ></h5></a>
                                    <p class="card-text"></p>
                                    <p class="card-text"><small class="text-muted">Last updated </small></p>
                                </div>
                            </div>
                            <div class="card-footer" style="background-color: #2C73D2;">
                                <a class="d-flex justify-content-end"
                                   href=""  style="color: white"><strong>Details</strong></a>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
        <hr>

    </div>
@endsection
