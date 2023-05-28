@extends('layouts.app')

@section('content')
    <div id="body" class="theme-green">
        <div id="main-content">
            <div class="container-fluid">
                <!-- Page header section  -->
                <div class="block-header">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <h1>Adauga doctor</h1>
                            {{-- <span>JustDo Add Doctors,</span> --}}
                        </div>
                        <div class="col-lg-8 col-md-12 col-sm-12 text-lg-right">
                            <div class="d-flex align-items-center justify-content-lg-end mt-4 mt-lg-0 flex-wrap vivify pullUp delay-550">
                                <div class="mb-3 mb-xl-0">
                                    {{-- <a href="#" class="btn btn-dark">Submit</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <form id="call-back-form" class="call-back-form" name="call-back-form" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group c_form_group">
                                                <label>Nume medic<span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" value="" name="nume">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group c_form_group">
                                                <label>Prenume medic<span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" value="" name="prenume">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group c_form_group">
                                                <label>Adresa de email<span class="text-danger">*</span></label>
                                                <input class="form-control" type="email" value="" name="email">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group c_form_group">
                                                <label>Parola cont medic <span class="text-danger">*</span></label>
                                                <input type="password" class="form-control" placeholder="" name="parola">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group c_form_group">
                                                <label>Specialitate <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" value="" name="specialitate">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group c_form_group">
                                                <label>Studii <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" value="" name="studii">
                                                {{-- <textarea class="form-control no-resize" name="studii"></textarea> --}}
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group c_form_group">
                                                <label>Program<span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" value="" name="program">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group c_form_group">
                                                <label>Descriere<span class="text-danger">*</span></label>
                                                <textarea rows="4" class="form-control no-resize" name="descriere"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group c_form_group">
                                                <label>Poza medic<span class="text-danger">*</span></label>
                                                <input type="file" class="dropify" name="image">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <button type="button" class="btn btn-primary" id="adauga-medic">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="errors"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        // function submit_form()
        // {
        //     var data = $("#call-back-form").serialize();
        //     $.ajax({
        //         url: "/adauga-medic",
        //         method: "POST",
        //         data: data,
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         },
        //         success: function(data) {
        //                 if (data.status == 0) {
        //                     $("#errors").html(data.mesaj);
        //                     $("#errors").fadeTo(2000, 500).slideUp(500);
        //                     $("#errors").slideUp(500);
        //                 }
        //                 if (data.status == 1) {
        //                     $('#call-back-form')[0].reset();
        //                     $("#errors").html(data.mesaj);
        //                     $("#errors").fadeTo(2000, 500).slideUp(500);
        //                     $("#errors").slideUp(500);
        //                 }
        //             }
        //     })
        // }
        $("#adauga-medic").click(function() {
            var data = new FormData($('#call-back-form')[0]);
            $.ajax({
                url: "/adauga-medic",
                method: "POST",
                data: data,
                processData: false,
                contentType: false,
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
                        $('#call-back-form')[0].reset();
                        $("#errors").html(data.mesaj);
                        $("#errors").fadeTo(2000, 500).slideUp(500);
                        $("#errors").slideUp(500);
                    }
                }
            })

        });
    </script>
@endsection
