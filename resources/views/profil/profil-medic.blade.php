@extends('layouts.app')
    

@section('content')
<section class='my-2'>
    <div class='container'>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-head">
                            <h2>Profil doctor</h2><hr>
                        </div>
                        <div class="mb-3">
                            <div class="imagine-medic">
                                <img src="/storage/images/{{ get_medic_img($doctor->user_id) }}" alt="imagine" width="250" height="150">
                            </div>
                        </div>
                        {{-- de facut cu divuri --}}
                        <div class="mb-3">
                            <div>{{ $doctor->nume_medic }}</div>
                        </div>

                        <div class="mb-3">
                            <div>{{ $doctor->prenume_medic }}</div>
                        </div>

                        <div class="mb-3">
                            <div>{{ $doctor->specialitate_medic }}</div>
                        </div>

                        <div class="mb-3">
                            <div>{{ $doctor->studii }}</div>
                        </div>

                        <div class="mb-3">
                            <div>{{ $doctor->program }}</div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
