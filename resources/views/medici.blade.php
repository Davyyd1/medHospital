@extends('layouts.app')
@section('content')
    
    <section class="search">
        <div class="container-fluid" id="container-search">
            
            <form action="{{ route('cauta-medici') }}" id="call-back-form" class="call-back-form" name="call-back-form" method="POST">
            @csrf
            <div class="row" id="search-div">
                <h3>Cautare medic</h3>
                <div class="col-lg-3">
                    <div class="form-box mb-20">
                        <h5>Nume medic</h5>
                        <input type="text" name="nume" class="form-control" value="" placeholder="Nume*">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-box mb-20">
                        <h5>Prenume medic</h5>
                        <input type="text" name="prenume" class="form-control" value="" placeholder="Prenume*">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-box mb-20">
                        <h5>Specialitate</h5>
                        <input type="text" name="specialitate" class="form-control" value="" placeholder="Specialitate*">
                    </div>
                </div>
                    <div class="form-box mb-10">
                        <button style="vertical-align: bottom; height:100%;" type="submit">Search</button>
                        <a href="/medici">Reseteaza</a>
                    </div>
            </div>
            </form>
        </div>
    </section>

    <div class="section-second">
        <div class="container-fluid">
            <div class="row" id="nav-links">
                <ul class="nav-list">
                    <a href="/medici"><li><i class="fa-solid fa-left-long"></i>&nbsp;&nbsp;Inapoi</li></a>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="section-1-medici">
        <div class="container-fluid">
            @foreach($result as $medic)
            <div class="row" id="medici">
                <div class="medic">
                    <div class="imagine-medic">
                        <img src="/storage/images/{{ get_medic_img($medic->user_id) }}" alt="imagine" width="250" height="150">
                    </div>
                    <div class="nume-medic">
                        <h5>{{ $medic->nume_medic }} {{ $medic->prenume_medic }}</h5>
                    </div>
                    <div class="specialitate-medic">
                        <p>{{ $medic->specialitate_medic }}</p>
                    </div>
                    <div class="actiuni">
                        <a href="/programare/{{ $medic->id }}">Programeaza-te!</a>
                        @if(Auth::check() && Auth::user()->role_id==2)
                        <a href="{{ url('profil-doctor/'.$medic->id) }}">Vezi medicul</a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
            {!! $result->links('pagination::bootstrap-4') !!}
        </div>
    </div>
@endsection

