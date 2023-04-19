@extends('layouts.app')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <section class="search">
                <div class="container-fluid" id="container-search"><br>
                    <form action="{{ route('cauta-medici') }}" id="call-back-form" class="call-back-form" name="call-back-form" method="POST">
                        @csrf
                        <div class="row" id="search-div">
                            <h3>Cautare medic</h3>
                            <div class="col-lg-3">
                                <div class="form-box mb-20">
                                    <input type="text" name="nume" class="form-control" value="" placeholder="Nume*">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-box mb-20">
                                    <input type="text" name="prenume" class="form-control" value="" placeholder="Prenume*">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-box mb-20">
                                    <input type="text" name="specialitate" class="form-control" value="" placeholder="Specialitate*">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <button style="vertical-align: bottom; height:85%;" type="submit">Cauta</button>
                                {{-- <a href="/medici">Reseteaza</a> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <!-- Page header section  -->
            <div class="block-header">
                <div class="row clearfix">
                    @if(Auth::check())
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <h1>Buna, {{ Auth::user()->name }}! </h1>
                        <span>Bine ai revenit!</span>
                    </div>
                    @endif
                </div>
            </div>
            
            <div class="section-second">
                <div class="">
                    <div  id="nav-links">
                        <ul class="nav-list">
                            <a href="/medici" style="width:10%;">
                                <li style="list-style:none; text-decoration:none;"><i class="fa-solid fa-left-long"></i>&nbsp;&nbsp;Inapoi</li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- <div class="row clearfix">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg page_menu">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars text-muted"></i>
                        </button>
                    </nav>
                </div>
            </div> --}}

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
                                            {{-- <img class="rounded-circle" src="/storage/images/{{ get_medic_img($medic->user_id) }}" alt="" width="150" height="150"> --}}
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
                                        {{-- <button class="btn btn-default btn-sm">Profile</button>
                                    <button class="btn btn-default btn-sm">Message</button> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {!! $result->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
