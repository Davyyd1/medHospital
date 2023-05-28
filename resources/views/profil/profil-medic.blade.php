@extends('layouts.app')


@section('content')
    <div id="body" class="theme-green">
        <div id="main-content">
            <div class="container-fluid">
                <!-- Page header section  -->
                <div class="block-header">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <h1>Bine ai venit!</h1>
                            <span>Profilul: {{ $doctor->name }} ,</span>
                        </div>
                        {{-- <div class="col-lg-8 col-md-12 col-sm-12 text-lg-right">
                            <div class="d-flex align-items-center justify-content-lg-end mt-4 mt-lg-0 flex-wrap vivify pullUp delay-550">
                                <div class="mb-3 mb-xl-0">
                                    <a href="#" class="btn btn-dark">Edit Profile</a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12">
                        <div class="card profile-header">
                            <div class="body text-center">
                                @if(get_medic_img($doctor->user_id))
                                <img class="rounded-circle" src="../storage/images/{{ get_medic_img($doctor->user_id) }}" alt="" width="200" height="200">
                                @else
                                <img class="rounded-circle" src="../build/assets/images/user.png" width="150" height="150" alt="Mooli">
                                @endif
                                {{-- <img src="/storage/images/{{ get_medic_img($doctor->user_id) }}" class="rounded-circle"
                                    alt="imagine" width="150" height="150"> --}}
                                <div class="mt-3">
                                    <h5 class="mb-0"><strong>{{ $doctor->nume_medic }}
                                            {{ $doctor->prenume_medic }}</strong></h5>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2>Despre <strong>{{ $doctor->nume_medic }} {{ $doctor->prenume_medic }}</strong></h2>
                            </div>
                            <div class="body">
                                <small class="text-muted">Studii: </small>
                                <p>{{ $doctor->studii }}</p>
                                <small class="text-muted">Specialitate: </small>
                                <p>{{ $doctor->specialitate_medic }}</p>
                                <small class="text-muted">Email address: </small>
                                <p>{{ $doctor->email }}</p>
                                <small class="text-muted">Program: </small>
                                <p>{{ $doctor->program }}</p>
                                <hr>
                                <small class="text-muted">Social: </small>
                                <p><i class="fa fa-twitter m-r-5"></i> twitter.com/</p>
                                <p><i class="fa fa-facebook  m-r-5"></i> facebook.com/</p>
                                <p><i class="fa fa-github m-r-5"></i> github.com/</p>
                                <p class="mb-0"><i class="fa fa-instagram m-r-5"></i> instagram.com/</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="card">

                            <ul class="nav nav-tabs3">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Basic">Basic</a>
                                </li>
                                {{-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Account">Account</a></li> --}}
                            </ul>
                        </div>

                        <div class="tab-content padding-0">
                            <div class="tab-pane active" id="Basic">
                                <div class="card">
                                    <div class="header">
                                        <h2>Informatii</h2>
                                        <ul class="header-dropdown dropdown">
                                            <li><a href="javascript:void(0);" class="full-screen"><i
                                                        class="fa fa-expand"></i></a></li>
                                            {{-- <li class="dropdown">
                                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                                <ul class="dropdown-menu theme-bg gradient">
                                                    <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-eye"></i> View Details</a></li>
                                                    <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-share-alt"></i> Share</a></li>
                                                    <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-copy"></i> Copy to</a></li>
                                                    <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-folder"></i> Move to</a></li>
                                                    <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-edit"></i> Rename</a></li>
                                                    <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-trash"></i> Delete</a></li>
                                                </ul>
                                            </li> --}}
                                        </ul>
                                    </div>
                                    <div class="body">
                                        <p>{{ $doctor->descriere }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
