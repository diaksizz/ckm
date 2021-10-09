@extends('layouts.homepage.app')
@section('title'.'Home')
@section('content')
<!-- Header -->
<header id="header" class="header">
    <div class="container" style="color:#116CA8 important;">
        <div class="row">
            <div class="col-lg-6 col-xl-5">
                <div class="text-container">
                    <h1 class="h1-large">CIPTA KREASI MUDA KEDIRI</h1>
                    <p class="p-large">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dignissim, neque ut ultrices sollicitudin</p>
                    <a class="btn-solid-lg" href="#services">More Details</a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6 col-xl-7">
                <div class="image-container">
                    <img class="img-fluid" src="{{asset ('images/home.jpg')}}" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of header -->
<!-- end of header -->


<!-- Services -->
<div id="services" class="cards-1 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Services</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Card -->
                <div class="card-deck">
                  <div class="card">
                    <img class="card-img-top" src="{{asset ('images/wedding.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Wedding Organizer</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                      <a class="read-more no-line" href="">Learn more <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="{{asset ('images/event.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <a class="read-more no-line" href="">Learn more <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="{{asset ('images/salon.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="card-footer">
                      <a class="read-more no-line" href="">Learn more <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div>
                  </div>
                </div>

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of services -->


<!-- Details 1 -->
<div id="details" class="basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-7">
                <div class="image-container">
                    <img class="img-fluid" src="{{asset ('images/project.jpg')}}" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6 col-xl-5">
                <div class="text-container">
                    <div class="section-title">PROJECT</div>
                    <h2>Ten years Experiences in Services</h2>
                    <p>Etiam tempus condimentum congue. In sit amet nisi eget massa condimentum lobortis eget ac eros. In hac habitasse platea dictumst. Aenean molestie mauris eget sapien sagittis, a bibendum magna tincidunt</p>
                    <a class="btn-solid-reg" href="#contact">Details</a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-1 -->
<!-- end of details 1 -->

<!-- Invitation -->
<div class="basic-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-container">
                    <h2>Find the right choices for your necessity</h2>
                    <p class="p-large">Eu convallis arcu ultrices in. Mauris ornare libero et pharetra hendrerit. Curabitur elementum lectus quis vioc tellus</p>
                    <a class="btn-solid-lg" href="#contact">Details</a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-3 -->
<!-- end of invitation -->
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
