@extends('layouts.app')

@section('content')

    <body>
        <div id="main-content">
            <div class="container-fluid">
                <!-- Page header section  -->
                <div class="block-header" >
                    <div class="row clearfix" style=" display:flex;">
                        <div class="col-lg-4 col-md-12 col-sm-12" style="width:50%;">
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12" style="width: 50%;">
                            @if (Request::is('login') && !Auth::user())
                            @else
                                <a class="login d-none" href="{{ route('login') }}" style="text-align:right">Login</a>
                            @endif
                        </div>
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
                                                @if (get_medic_img($medic->user_id))
                                                    <img class="rounded-circle" src="../storage/images/{{ get_medic_img($medic->user_id) }}" alt="" width="200" height="200">
                                                @else
                                                    <img class="rounded-circle" src="../build/assets/images/user.png" width="150" height="150" alt="Mooli">
                                                @endif
                                            </div>
                                            <h6 class="mt-3 mb-0">{{ $medic->nume_medic }} {{ $medic->prenume_medic }}</h6>
                                            <span>{{ $medic->specialitate_medic }}</span><br><br>
                                            @if (Auth::check() && Auth::user()->role_id == 2)
                                                <a href="/programare/{{ $medic->id }}" style="padding:.3rem; background-color:orange; color:white; text-decoration:none; border-radius: .5rem;">Programeaza-te!</a>
                                                <a href="{{ url('profil-medic/' . $medic->id) }}" style="padding:.3rem; background-color:green; color:white; text-decoration:none; border-radius: .5rem; ">Vezi
                                                    medicul</a>
                                            @elseif (Auth::check() && Auth::user()->role_id == 3)
                                                <a href="{{ url('profil-medic/' . $medic->id) }}" style="padding:.3rem; background-color:green; color:white; text-decoration:none; border-radius: .5rem; ">Vezi
                                                    medicul</a>
                                            @elseif (Auth::check() && Auth::user()->role_id == 1)
                                                <a href="{{ url('profil-medic/' . $medic->id) }}" style="padding:.3rem; background-color:green; color:white; text-decoration:none; border-radius: .5rem; ">Vezi
                                                    medicul</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a href="/medici" style="background-color:rgb(0, 174, 255); color:white; padding:.5rem; border-radius:.5rem; text-decoration:none;">Vezi toti medicii</a>

                        <div class="wrapper-story container">
                            <div class="story row">
                                <div class="col-sm info-hospital">
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
                                <div class="image col-sm">
                                    <img src="../storage/images/medhospital.jpg" alt="" width="400" height="300">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
