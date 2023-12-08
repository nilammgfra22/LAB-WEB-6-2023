@extends('siswa.main')

@section('content')
<style>
    .card {
        background-color: #e8e1d8cc;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 500px;
        padding: 5%;
        margin-bottom: -30px;
    }

    .card-body {
        padding: 20px;
        margin: 10px 0;
    }

    .card2 {
        background-color: #e8e1d8cc;
        border-radius: 10px;
        width: 410px;
        padding: 20px;
        margin-bottom: 20px;
        height: 45%;
    }

    .card-footer {
        border-top: 0;
        background-color: transparent;
    }

    .card-footer .text-center {
        margin-top: -35px;
    }

    .card-footer .btn-success {
        background-color: #7D7C7C;
        color: #fff;
        border: none;
        width: 60%;
        height: 20%;
        border-radius: 10px;
    }

    .card-footer .btn-success:hover {
        background-color: #A8A196;
    }

</style>
    <div class="text-center" style="color: #492a01">
        <h2>Detail Course</h2>
    </div>
    <!-- Section-->
    <section class="py-5" style="margin-right: 120px">
        <div class="container px-4 px-lg-5 ">
            <div class="row justify-content-center">
                <div class="col-lg-8 mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top mx-auto d-block" src="{{ Storage::url($course->gambar) }}"
                            alt="{{ $course->nama }}" style="width: 50%; height: auto;" />
                        <!-- Product details-->
                        <div class="card-body card-body-custom pt-4">
                            <div>
                                <!-- Product name-->
                                <h3 class="fw-bolder">Deskripsi</h3>
                                <p>
                                    {{ $course->deskripsi }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card2">
                        <!-- Product details-->
                        <div class="card-body card-body-custom pt-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="fw-bolder">{{ $course->nama }}</h5>
                                </div>
                                <ul class="list-unstyled list-style-group">
                                    <li class="border-bottom p-2 d-flex justify-content-between">
                                        <span>Rentang Course  </span>
                                        <span style="font-weight: 600">{{ $course->mulai }} - {{ $course->selesai }}</span>
                                    </li>
                                    <li class="border-bottom p-2 d-flex justify-content-between">
                                        <span>Pengajar  </span>
                                        <span style="font-weight: 600">{{ $course->pengajar }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer border-top-0 bg-transparent">
                            <div class="text-center">
                                @if ($course)
                                    <a class="btn btn-success mt-auto btn-sm"
                                        href="https://api.whatsapp.com/send/?phone=6282291371770&text&type=phone_number&app_absent=0">Daftar</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
