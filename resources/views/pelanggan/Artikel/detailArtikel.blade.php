@extends('layouts.homepage.app')
@section('title'.'Artikel')
@section('content')
    <div class="container">

        {{--        <nav aria-label="breadcrumb" class="mt-4">--}}
        {{--            <ol class="breadcrumb">--}}
        {{--                <li class="breadcrumb-item"><a href="/"><i class="fa fa-home" aria-hidden="true"> </i> Home</a></li>--}}
        {{--                <li class="breadcrumb-item"><a href="/article">Article</a></li>--}}
        {{--                <li class="breadcrumb-item active" aria-current="page"></li>--}}
        {{--            </ol>--}}
        {{--        </nav>--}}
        <style>
            .overlay {
                /*background: rgba(0, 0, 0, 0.8);*/
                background-color: #2C73D2;
                opacity: 0.9;
                width: 100%;
                height: 100%;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                position: absolute;
            }

            #newpost {
                position: relative;
                color: white;
                font-weight: bold;
            }

            .judultengah {
                margin-top: 15%;
                text-align: center;
                font-size: 17px;
                padding-left: 10px;
                padding-right: 10px;
            }
        </style>
        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Title -->
                <h1 class="mt-2"></h1>
                <!-- Date/Time -->
                <p class="text-muted"> Oleh <strong>Admin</strong>
                    pada </p>
                <hr>
                <img title="" class="img-fluid rounded"
                     src=""
                     alt="">
                <!-- Post Content -->
                <hr>
                <p class="" style="font-size: 20px; font-weight: 350;"></p>
                <hr>

                {{--                komentar--}}

                    <h4 class="my-4 pl-2" style="border-left: solid black 5px;">Masukkan Komentar</h4>
                    <br>
                    <form method="POST" action="" enctype="multipart/form-data"
                          id="formtambah" class="mb-4">

                        <input type="text" class="form-control"
                               value="" hidden name="artikel_id" id="artikel_id">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email address</label>
                            <input type="email" class="form-control" id="email"
                                   placeholder="name@example.com" name="email">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama"
                                   placeholder="Okta Aditya Pratama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Masukkan Komentar</label>
                            <textarea class="form-control" id="komentar" rows="3" name="komentar" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    <div class="alert alert-primary" role="alert">
                       Login untuk memberikan komentar :)
                    </div>

                {{--                    <hr>--}}
                <section class="d-flex justify-content-end">
                    <strong> &nbsp;Komentar</strong>
                </section>
                <hr>

                    <div class="card mb-3" style="max-width: 100%;">
                        {{--                        <div class="card-header"></div>--}}
                        <div class="card-body text-dark">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h5 class="card-title"></h5>
                                </div>
                                <div class="col-lg-4">
                                    <p style="float: right;"></p>
                                </div>
                            </div>
                            <p class="card-text"></p>
                        </div>
                    </div>

            </div>

            <div class="col-lg-4">
                <div class="container" style="margin-top: 30%;">
                    <h2 class="my-4 pl-2" style="border-left: solid black 5px;">Artikel Terbaru</h2>
                    {{-- garis bawah                   <h2 class="mt-2" style="margin-bottom: 10%; border-bottom: solid black 4px">Artikel Terbaru</h2>--}}

                        <div class="card text-right" style="width: 18rem;margin-bottom: 2%">
                            <div class="container" id="newpost">
                                <img class="img-fluid rounded"
                                     src=""
                                     style="max-width: 100%;max-height: 100%; object-fit: cover;">
                                <div class="overlay">
                                    <div class="judultengah"><a href=""
                                                                style="color: white;text-decoration: none;"></a>
                                    </div>
                                </div>
                            </div>

                        </div>

                </div>
            </div>
        </div>
    </div>
@endsection
