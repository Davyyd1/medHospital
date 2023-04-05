@extends('layouts.app')

@section('content')
        <div id="body" class="theme-green">
            <div id="main-content">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-head">
                                @if ($pacient)
                                    <h5>Programare pacient: {{ $pacient->nume }} {{ $pacient->prenume }}, la doctorul
                                        {{ $medic->nume_medic }} {{ $medic->prenume_medic }}, specialitatea:
                                        {{ $medic->specialitate_medic }}</h5>
                                    <hr>
                                @else
                                    <h5>Programare medic: {{ $doctor->nume_medic }} {{ $doctor->prenume_medic }}, la
                                        doctorul {{ $medic->nume_medic }} {{ $medic->prenume_medic }}, specialitatea:
                                        {{ $medic->specialitate_medic }}</h5>
                                    <hr>
                                @endif
                            </div>
                            @if ($pacient)
                                @include('formular-programare.formular-pacient')
                            @else
                                @include('formular-programare.formular-medic')
                            @endif
                            <div id="errors"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@push('js')
<script>
    function save_form() {
        var data = $("#call-back-form").serialize();
        $.ajax({
            url: "/programare_submit",
            method: "post",
            data: data,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                if (data.status == 0) {
                    $("#errors").html(data.mesaj);
                    $("#errors").fadeTo(2000, 500).slideUp(500);
                    $("#errors").slideUp(500);
                }
                if (data.status == 1) {
                    $("#errors").html(data.mesaj);
                    $("#errors").fadeTo(2000, 500).slideUp(500);
                    $("#errors").slideUp(500);
                }
            }
        })
    }
    
</script>
@endpush
@endsection
