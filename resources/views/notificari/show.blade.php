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
                                        {{-- <th>Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (Auth::check() && Auth::user()->role_id == 2)
                                        @foreach ($notificariUser as $notificari)
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
                                                </tr>
                                            </div>
                                        @endforeach
                                    @elseif(Auth::check() && Auth::user()->role_id == 3)
                                        @foreach (get_medic_appointments(Auth::user()->id) as $programariMedic)
                                            @if ($programariMedic->pacient_id)
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
                                                                {{ $programariMedic->prenume }}
                                                            </div>
                                                            <p class="mb-0">{{ $programariMedic->telefon }}</p>
                                                        </td>
                                                        <td>{{ $programariMedic->email }}</td>
                                                        <td>
                                                            <div>{{ $programariMedic->data }}</div>
                                                        </td>
                                                        <td>{{ $programariMedic->nume_medic }}
                                                            {{ $programariMedic->prenume_medic }}</td>
                                                        <td>{{ $programariMedic->specialitate_medic }}</td>
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
                            {{-- <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li> --}}
                            {!! $notificariUser->links('pagination::bootstrap-4') !!}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
