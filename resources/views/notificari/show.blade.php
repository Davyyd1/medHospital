@extends('layouts.app')

@section('content')
    <section class='my-2'>
        <div class='container'>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-head">
                                <h2>Notificari</h2>
                                <hr>
                            </div>
                            @if (Auth::check() && Auth::user()->role_id == 2)
                                @foreach ($notificariUser as $notificari)
                                    <h5>Programare:</h5>
                                    <div class="mb-3">
                                        {{-- {{ $notificari->nume }}
                                        {{ $notificari->prenume }}
                                        {{ $notificari->varsta }}
                                        {{ $notificari->sex }}
                                        {{ $notificari->cnp }}
                                        {{ $notificari->telefon }} --}}
                                        {{-- @if ($notificari->cod_pacient)
                                            {{ $notificari->cod_pacient }}
                                        @endif --}}
                                        Medic: {{ $notificari->nume_medic }} {{ $notificari->prenume_medic }}
                                        Data: {{ $notificari->data }}
                                        Specialitatea: {{$notificari->specialitate_medic}}
                                    </div>
                                @endforeach
                            @elseif(Auth::check() && Auth::user()->role_id == 3)
                                @foreach (get_medic_appointments(Auth::user()->id) as $programariMedic)
                                    <h5>Programare:</h5>
                                    <div class="mb-3">
                                        {{-- {{ $programariMedic->medic_id}} --}}
                                        Nume pacient: {{ $programariMedic->nume}} {{$programariMedic->prenume}}
                                        Varsta: {{ $programariMedic->varsta }}
                                        Sex: {{ $programariMedic->sex }}
                                        CNP: {{ $programariMedic->cnp }}
                                        Telefon: {{ $programariMedic->telefon}}
                                        Cod pacient: {{ $programariMedic->cod_pacient }}
                                        Data: {{ $programariMedic->data }}
                                    </div>
                                @endforeach
                            @endif
                            <div id="errors"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
