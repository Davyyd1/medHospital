@extends('layouts.app')

@section('content')

    <body>
        <div id="main-content">
            <div class="container-fluid">
                <!-- Page header section  -->
                <div class="block-header">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <h1>Buna, @if(Auth::check()){{ Auth::user()->name }}!@endif</h1>
                            <span>Bine ai revenit!</span>
                        </div>

                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-lg page_menu">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <i class="fa fa-bars text-muted"></i>
                            </button>
                        </nav>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="row clearfix">
                            @foreach ($result as $medic)
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="body text-center">
                                        <div class="circle">
                                            <img class="rounded-circle" src="/storage/images/{{ $medic->user_id }}/{{ get_medic_img($medic->user_id) }}" alt="" width="150" height="150">
                                        </div>
                                        <h6 class="mt-3 mb-0">{{ $medic->nume_medic }} {{ $medic->prenume_medic }}</h6>
                                        <span>{{ $medic->specialitate_medic }}</span><br>
                                        <a href="/programare/{{ $medic->id }}" style="padding:.3rem; background-color:orange; color:white; text-decoration:none; border-radius: .5rem;">Programeaza-te!</a>
                                        @if (Auth::check() && Auth::user()->role_id == 2)
                                        <a href="{{ url('profil-medic/' . $medic->id) }}" style="padding:.3rem; background-color:green; color:white; text-decoration:none; border-radius: .5rem; ">Vezi medicul</a>
                                        @endif
                                        {{-- <button class="btn btn-default btn-sm">Profile</button>
                                        <button class="btn btn-default btn-sm">Message</button> --}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <a href="/medici" style="background-color:rgb(0, 174, 255); color:white; padding:.3rem; border-radius:.5rem; text-decoration:none;">Vezi toti medicii</a>
                        </div>
                       
                        <div class="wrapper-story">
                        <div class="story">
                            <p>Povestea noastra</p>
                            <h3><span style="color:white">med</span><span style="color:#e41274;">Hospital</span></h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis officiis iste a, corrupti
                                eaque dolorem distinctio, cupiditate hic exercitationem numquam sequi ea voluptatum
                                excepturi aspernatur officia ex unde dolor consequuntur! Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Impedit quas est odit rem pariatur ducimus. Rem nulla porro,
                                sint consequatur facilis, architecto suscipit iste ratione debitis doloribus dolorum
                                consectetur fugit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem
                                deserunt voluptas consequuntur eos, provident delectus quas quis, sed sapiente laboriosam
                                necessitatibus ex rem facilis dicta error aspernatur reiciendis officiis harum! lorem</p>
                        </div>
                        <div class="image">
                            <img src="/images/hospital.jpg" alt="" width="500" height="300">
                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
