@extends('layouts.app')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Date &amp; Time</th>
                                        <th>Consulting</th>
                                        <th>Specialitate</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (Auth::check() && Auth::user()->role_id == 2)
                                        @foreach ($notificariUser as $notificari)
                                            <h5>Programare:</h5>
                                            <div class="mb-3">
                                                <tr>
                                                    <td class="w60">
                                                        <img src="../build/assets/images/xs/avatar1.jpg"
                                                            data-toggle="tooltip" data-placement="top" title=""
                                                            alt="Avatar" class="avatar rounded-circle"
                                                            data-original-title="Avatar Name">
                                                    </td>
                                                    <td>
                                                        <div>{{ Auth::user()->name }}
                                                        </div>
                                                        {{-- <div>{{ $notificari->nume_medic }} {{ $notificari->prenume_medic }}
                                                        </div> --}}
                                                    </td>
                                                    <td>
                                                        <div>{{ $notificari->email }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>{{ $notificari->data }}</div>

                                                    </td>
                                                    <td>{{ $notificari->name }}</td>
                                                    <td>{{ $notificari->specialitate_medic }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-default btn-sm"
                                                            title="Edit"><i class="fa fa-pencil"></i></button>
                                                        <button type="button" class="btn btn-default btn-sm"
                                                            title="Delete"><i class="fa fa-trash-o"></i></button>
                                                    </td>
                                                </tr>
                                            </div>
                                        @endforeach
                                    @elseif(Auth::check() && Auth::user()->role_id == 3)
                                        @foreach (get_medic_appointments(Auth::user()->id) as $programariMedic)
                                            @if ($programariMedic->pacient_id)
                                                <h5>Programare:</h5>
                                                <div class="mb-3">
                                                    <tr>
                                                        <td class="w60">
                                                            <img src="../build/assets/images/xs/avatar1.jpg"
                                                                data-toggle="tooltip" data-placement="top" title=""
                                                                alt="Avatar" class="avatar rounded-circle"
                                                                data-original-title="Avatar Name">
                                                        </td>
                                                        <td>
                                                            <div>{{ $programariMedic->nume }}
                                                                {{ $programariMedic->prenume }}</div>
                                                            <p class="mb-0">{{ $programariMedic->telefon }}</p>
                                                        </td>
                                                        <td>{{ $programariMedic->email }}</td>
                                                        <td>
                                                            <div>{{ $programariMedic->data }}</div>
                                                            {{-- <span class="text-muted font-12">7:12PM to 8:30PM</span> --}}
                                                        </td>
                                                        <td>{{ $programariMedic->nume_medic }}
                                                            {{ $programariMedic->prenume_medic }}</td>
                                                        <td>{{ $programariMedic->specialitate_medic }}</td>
                                                        <td>
                                                            <button type="button" class="btn btn-default btn-sm"
                                                                title="Edit"><i class="fa fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-default btn-sm"
                                                                title="Delete"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                </div>
                                            @else
                                                Nu exista programari
                                            @endif
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            {{-- <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li> --}}
                            {!! $notificariUser->links('pagination::bootstrap-4') !!}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
