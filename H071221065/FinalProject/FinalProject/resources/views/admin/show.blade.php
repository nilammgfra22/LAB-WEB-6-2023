@extends('admin.main')

@section('content')
    <style>
        .card {
            max-width: 100%;
        }

        .card-body {
            padding: 20px;
        }

        .card-img-top {
            width: 100%;
            height: auto;
            border-bottom: 1px solid #dee2e6;
        }

        .card-title {
            text-align: center;
            font-size: 24px;
            margin-top: 20px;
            margin-bottom: 30px;
        }

        .card-body-custom {
            margin-top: 20px;
        }

        .list-style-group li {
            list-style: none;
            padding: 10px;
            border-bottom: 1px solid #dee2e6;
        }

        .list-style-group li:last-child {
            border-bottom: none;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
    <div class="text-center">
        <h1>Detail Job</h1>
    </div>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ Storage::url($jobpost->gambar) }}"
                            alt="{{ $jobpost->nama_perusahaan }}" />
                        <!-- Product details-->
                        <div class="card-body card-body-custom pt-4">
                            <div>
                                <!-- Product name-->
                                <h3 class="fw-bolder text-primary">Deskripsi</h3>
                                <p>
                                    {{ $jobpost->deskripsi }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card">
                        <!-- Product details-->
                        <div class="card-body card-body-custom pt-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="fw-bolder">{{ $jobpost->nama_perusahaan }}</h5>
                                    <div class="rent-price mb-3">
                                        <span style="font-size: 1rem" class="text-primary">Rp
                                            {{ number_format($jobpost->gaji, 0, ',', '.') }}/</span>Month
                                    </div>
                                </div>
                                <ul class="list-unstyled list-style-group">
                                    <li class="border-bottom p-2 d-flex justify-content-between">
                                        <span>Posisi</span>
                                        <span style="font-weight: 600">{{ $jobpost->posisi }}</span>
                                    </li>
                                    <li class="border-bottom p-2 d-flex justify-content-between">
                                        <span>Pendidikan Minimal</span>
                                        <span style="font-weight: 600">{{ $jobpost->pendidikan }}</span>
                                    </li>
                                    <li class="border-bottom p-2 d-flex justify-content-between">
                                        <span>Lokasi</span>
                                        <span style="font-weight: 600">{{ $jobpost->lokasi }}</span>
                                    </li>
                                    <li class="border-bottom p-2 d-flex justify-content-between">
                                        <span>Tipe</span>
                                        <span style="font-weight: 600">{{ $jobpost->tipe }}</span>
                                    </li>
                                    <li class="border-bottom p-2 d-flex justify-content-between">
                                        <span>Nomor Hp / Email</span>
                                        <span style="font-weight: 600">{{ $jobpost->hpemail }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer border-top-0 bg-transparent">
                            <div class="text-center">
                                @if ($jobpost)
                                    <a class="btn btn-primary mt-auto btn-sm" href="{{ route('admin') }}">Back</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
