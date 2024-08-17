@extends('layout.main')
@section('page-heading', 'Dashboard')
@section('content')
    <section class="row">
        <div class="col-12 col-lg-10">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="fa-solid fa-users"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Mahasiswa Baru</h6>
                                    <h6 class="font-extrabold mb-0">150</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Tugas</h6>
                                    <h6 class="font-extrabold mb-0"></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Sub Tugas</h6>
                                    <h6 class="font-extrabold mb-0">80.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Berita & Pengumuman</h6>
                                    <h6 class="font-extrabold mb-0">112</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Latest Comments</h4>
                        </div>
                        <div class="card-body">
                            <div class="progress" id="progress" role="progressbar" aria-label="Basic example"
                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" id="progress-bar" style="width: 0%; display: none;"></div>
                            </div>
                            <form action="" method="post" class="mt-2" enctype="multipart/form-data">
                                <input type="file" id="content" class="form-control">
                                <div class="progress" id="progress" role="progressbar" aria-label="Basic example"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" id="progress-bar" style="width: 0%; display: none;"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-2">
            <div class="card">
                <div class="card-body py-4 px-4">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <i class="fa-solid fa-circle-user fa-2xl"></i>
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold">John Duck</h5>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <input type="submit" class="text-muted mb-0" value="Logout" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
