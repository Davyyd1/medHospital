@extends('layouts.app')

@section('content')
<section class='my-2'>
    <div class='container'>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-head">
                            <h2> nume utilizator bd</h2><hr>
                        </div>
                        <form action="" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">nume</label>
                                <input type="text" class='form-control' name='x' placeholder="x">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">prenume</label>
                                <input type="text" class='form-control'  name='x' placeholder="x">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">x</label>
                                <input type="text" class='form-control' name='x' placeholder="x">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">x</label>
                                <input type="text" class='form-control' name='x' placeholder="x">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">x</label>
                                <input type="text" class='form-control' name='x' placeholder="x">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">x</label>
                                <input type="text" class='form-control' name='x' placeholder="x">
                            </div>

                            <button type='submit' class='btn btn-primary' style="float: right;">Actualizeaza date</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection