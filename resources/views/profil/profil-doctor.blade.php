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
                        @if($doctor)
                        <form action="" id="call-back-form" class="call-back-form" name="call-back-form" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('PUT')
                            @if($doctor->id == Auth::check() && Auth::user()->id)
                            <div class="mb-3">
                                <label class="form-label">Poza medic</label>
                                <input type='file' class="form-control" name="image" />
                            </div>
                            @else
                            @endif
                            <div class="mb-3">
                                <label class="form-label">Nume</label>
                                <input type="text" class='form-control'  name='nume' placeholder="Nume*" value="{{ $doctor->nume_medic }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Prenume</label>
                                <input type="text" class='form-control' name='prenume' placeholder="Prenume*" value="{{ $doctor->prenume_medic }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Specialitate</label>
                                <input type="text" class='form-control' name='specialitate' placeholder="Specialitate*" value={{ $doctor->specialitate_medic }}>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Studii</label>
                                <input type="text" class='form-control' name='studii' placeholder="Studii*" value={{ $doctor->studii }}>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Program</label>
                                <input type="text" class='form-control' name='program' placeholder="Program*" value={{ $doctor->program }}>
                            </div>
                            <button type='button' class='btn btn-primary' style="float: right;" id="actualizeaza-date-medic" name="actualizeaza_date_medic" onclick="save_form()">Actualizeaza date</button>
                        </form>
                        @endif
                        <div id="errors"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<script>
    function save_form() {
        var data = new FormData($('#call-back-form')[0]);
        $.ajax({
            url: "/profil-doctor",
            method: "post",
            data: data,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            processData: false,
            contentType: false,
            success: function(data) {
                if (data.status == 0) {
                    $("#errors").html(data.mesaj);
                    $("#errors").fadeTo(2000, 500).slideUp(500);
                    $("#errors").slideUp(500);
                }
                if (data.status == 1) {
                    $('#call-back-form')[0].reset();
                    $("#errors").html(data.mesaj);
                    $("#errors").fadeTo(2000, 500).slideUp(500);
                    $("#errors").slideUp(500);
                }
            }
        })
    }
</script>