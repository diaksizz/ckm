@extends('layouts.homepage.app')
@section('title'.'Artikel')
@section('content')
    <div class="container">
      <br>
        <h1 class="my-4 pl-2" style="border-left: solid black 5px">Artikel</h1>
        <div class="row">
          @foreach($artikel as $i)
                <div class="col-md-4 mt-3">
                    <div class="container">
                        <div class="card border-secondary" style="width: 100%; min-height: 400px;">
                            <div style="height: 150px; width: 100%">
                                <img class="card-img-top"
                                     src="{{ asset('storage/images/artikel/'.$i->foto) }}"
                                     alt="Card image cap" style="max-width: 100%; max-height: 100%; object-fit: cover;">
                            </div>
                            <div class="card-body" style="height: 100px;">
                                <div >
                                    <a href="" style="text-decoration: none; color: black;"><h5 class="card-title" >{{$i->judul}}</h5></a>
                                    <p class="card-text"></p>
                                    <p class="card-text"><small class="text-muted">Last updated {{$i->updated_at->diffForHumans()}}</small></p>
                                </div>
                            </div>
                            <div class="card-footer" style="background-color: #2C73D2;">
                                <a class="d-flex justify-content-end"
                                   href="{{route('detailArtikel', $i->id}}"  style="color: white"><strong>Read More</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
        <hr>
        {!! $artikel->links('pagination::bootstrap-4')!!}
    </div>
@endsection
