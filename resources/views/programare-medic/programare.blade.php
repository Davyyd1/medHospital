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
    
    $(function() {
       $('#datetimepicker').datetimepicker('show');
    //    $('#datetimepicker').datetimepicker()
    });
</script>
    

     
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script> 
<script src="/build/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script> --}}
    

@endsection
