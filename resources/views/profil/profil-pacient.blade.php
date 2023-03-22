@extends('layouts.app')

@section('content')
<section class='my-2'>
    <div class='container'>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-head">
                            <h2>Profil pacient</h2><hr>
                        </div>
                        <form action="{{ route('profil-pacient') }}" id="call-back-form" class="call-back-form" name="call-back-form"  method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Nume</label>
                                <input type="text" class='form-control' name='nume' placeholder="Nume*" value="{{ $pacient->nume }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Prenume</label>
                                <input type="text" class='form-control'  name='prenume' placeholder="Prenume*" value="{{ $pacient->prenume }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Varsta</label>
                                <input type="text" class='form-control' name='varsta' placeholder="Varsta*" value="{{ $pacient->varsta }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Sex</label>
                                <input type="text" class='form-control' name='sex' placeholder="Sex*" value="{{ $pacient->sex }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">CNP</label>
                                <input type="text" class='form-control' name='cnp' placeholder="CNP*" value="{{ $pacient->cnp }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Telefon</label>
                                <input type="text" class='form-control' name='telefon' placeholder="Telefon*" value="{{ $pacient->telefon }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Cod pacient</label>
                                <input type="text" id="cod_pacient" class='form-control' name='cod_pacient' placeholder="Cod pacient*" value="{{ $pacient->cod_pacient }}" >
                            </div>

                            <button type='button' class='btn btn-primary' style="float: right;" onclick="save_form()">Actualizeaza date</button>
                        </form>
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
    var data = $("#call-back-form").serialize();
    $.ajax({
        url: "/profil-pacient",
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