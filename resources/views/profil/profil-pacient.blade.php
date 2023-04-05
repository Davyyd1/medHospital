@extends('layouts.app')

@section('content')
    <div id="body" class="theme-green">
        <div id="main-content">
            <div class="container-fluid">
                <!-- Page header section  -->
                <div class="block-header">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <h1>Bine ai venit!</h1>
                            <span>Profilul: {{ $pacient->nume }} {{ $pacient->prenume }} ,</span>
                        </div>
                        {{-- <div class="col-lg-8 col-md-12 col-sm-12 text-lg-right">
                    <div class="d-flex align-items-center justify-content-lg-end mt-4 mt-lg-0 flex-wrap vivify pullUp delay-550">
                        <div class="mb-3 mb-xl-0">
                            <a href="#" class="btn btn-dark">Edit Profile</a>
                        </div>
                    </div>
                </div> --}}
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12">
                        <div class="card profile-header">
                            <div class="body text-center">
                                <img src="../build/assets/images/user.png" class="user-photo" alt="User Profile Picture" class="rounded-circle" alt="imagine" width="150" height="150">
                                <div class="mt-3">
                                    <h5 class="mb-0"><strong>{{ $pacient->nume }} {{ $pacient->prenume }}</strong></h5>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2>Despre <strong>{{ $pacient->nume }} {{ $pacient->prenume }}</strong></h2>
                            </div>
                            <div class="body">
                                <small class="text-muted">Cod pacient: </small>
                                <p>{{ $pacient->cod_pacient }}</p>
                                <small class="text-muted">Varsta: </small>
                                <p>{{ $pacient->varsta }}</p>
                                <small class="text-muted">Sex: </small>
                                <p>{{ $pacient->sex }}</p>
                                <small class="text-muted">CNP: </small>
                                <p>{{ $pacient->cnp }}</p>
                                <small class="text-muted">Telefon: </small>
                                <p>{{ $pacient->telefon }}</p>
                                <hr>
                                <small class="text-muted">Social: </small>
                                <p><i class="fa fa-twitter m-r-5"></i> twitter.com/</p>
                                <p><i class="fa fa-facebook  m-r-5"></i> facebook.com/</p>
                                <p><i class="fa fa-github m-r-5"></i> github.com/</p>
                                <p class="mb-0"><i class="fa fa-instagram m-r-5"></i> instagram.com/</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="card">

                            <ul class="nav nav-tabs3">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Basic">Basic</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Account">Cont</a></li>
                            </ul>
                        </div>

                        <div class="tab-content padding-0">
                            <div class="tab-pane active" id="Basic">
                                <div class="card">
                                    <div class="header">
                                        <h2>Informatii</h2>
                                        <ul class="header-dropdown dropdown">
                                            <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="Account">
                                <div class="card">
                                    <div class="header">
                                        <h2>Datele contului</h2>

                                        <ul class="header-dropdown dropdown">
                                            <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="body">
                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12">
                                                <form action="{{ route('profil-pacient') }}" id="call-back-form" class="call-back-form" name="call-back-form" method="POST">
                                                    @csrf
                                                    @method('PUT')
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
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">CNP</label>
                                                        <input type="text" class='form-control' name='cnp' placeholder="CNP*" value="{{ $pacient->cnp }}">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Telefon</label>
                                                        <input type="text" class='form-control' name='telefon' placeholder="Telefon*" value="{{ $pacient->telefon }}">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div id="errors"></div>
                                        <button type="button" class="btn btn-primary" onclick="save_form()">Actualizeaza date</button> &nbsp;&nbsp;
                                        {{-- <button class="btn btn-default">Cancel</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

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
    @endpush
@endsection
