<form id="call-back-form" class="call-back-form" name="call-back-form" method="POST">
    @csrf
    <input type="hidden" name="medic_id" value="{{ $medic->id }}">
    <div class="mb-3">
        <label class="form-label">Nume</label>
        <input type="text" class='form-control' name='nume' placeholder="Nume*" value="{{ $pacient->nume }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Prenume</label>
        <input type="text" class='form-control' name='prenume' placeholder="Prenume*" value="{{ $pacient->prenume }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Varsta</label>
        <input type="text" class='form-control' name='varsta' placeholder="Varsta*" value="{{ $pacient->varsta }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Sex</label>
        <select id="sex" class="form-control @error('sex') is-invalid @enderror" name="sex" required autofocus>
            <option value="">Alege genul</option>
            <option value="masculin" {{ $pacient->sex == 'masculin' ? 'selected' : '' }}>Masculin</option>
            <option value="feminin" {{ $pacient->sex == 'feminin' ? 'selected' : '' }}>Feminin</option>
        </select>
        {{-- <input type="text" class='form-control' name='sex' placeholder="Sex*" value="{{ $pacient->sex }}"> --}}
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
        <div class="form-group">
            <p>Data</p>
            <div class='input-group date' id='datetimepicker1'>
                <input type='text' class="form-control" id='datetimepicker2' name="data" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <div class="form-group">
            <p>Ora</p>
            <div class='input-group date' id='datetimepicker1'>
                <input type='text' class="form-control" id='datetimepicker3' name="ora" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <button type='button' class='btn btn-primary' style="float: right;" onclick="save_form()">Programeaza-te</button>
</form>
