@extends('layouts.app')

@section('content')
   <div id="main-content">
      <div class="container-fluid">
         <div class="row clearfix">
            <div class="col-12">
               <div class="card">
                  <div class="table-responsive" id="tabel-programari">
                     <table class="table table-hover mb-0">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Date &amp; Time</th>
                              <th>Consulting</th>
                              <th>Specialitate</th>
                              @if (Auth::check() && Auth::user()->role_id == 3)
                                 <th>Status programare</th>
                              @endif
                              @if (Auth::check() && Auth::user()->role_id == 2)
                                 <th>Action</th>
                              @endif
                           </tr>
                        </thead>
                        <tbody>
                           @if (Auth::check() && Auth::user()->role_id == 2)
                              @foreach ($notificariUser as $notificari)
                                 <div class="mb-3">
                                    <tr>
                                       <td class="w60">
                                          <img src="../build/assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar"
                                             class="avatar rounded-circle" data-original-title="Avatar Name">
                                       </td>
                                       <td>
                                          <div>{{ Auth::user()->name }}
                                          </div>
                                       </td>
                                       <td>
                                          <div>{{ $notificari->user_email }}
                                          </div>
                                       </td>
                                       <td>
                                          <div>{{ $notificari->data }} {{ $notificari->ora }}</div>

                                       </td>
                                       <td>{{ $notificari->nume_medic }} {{ $notificari->prenume_medic }}</td>
                                       <td>{{ $notificari->specialitate }}</td>
                                       <form method="POST" id="cancel-appointment-form" name="cancel-appointment-form" action="{{ route('cancel-appointment') }}">
                                          @method('put')
                                          <td><button type="button" class="btn btn-danger" id="cancel-appointment-btn" data-id="{{ $notificari->id }}"
                                                data-userid="{{ Auth::user()->id }}" onclick="save_form1(this)">Anuleaza programarea</button>
                                          </td>
                                       </form>
                                    </tr>
                                 </div>
                              @endforeach
                              <div id="errors"></div>
                           @elseif(Auth::check() && Auth::user()->role_id == 3)
                              @foreach (get_medic_appointments(Auth::user()->id) as $programariMedic)
                                 @if ($programariMedic->pacient_id)
                                    <div class="mb-3">
                                       <tr>
                                          <td class="w60">
                                             <img src="../build/assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar"
                                                class="avatar rounded-circle" data-original-title="Avatar Name">
                                          </td>
                                          <td>
                                             <div>{{ $programariMedic->nume }}
                                                {{ $programariMedic->prenume }}
                                             </div>
                                             <p class="mb-0">{{ $programariMedic->telefon }}</p>
                                          </td>
                                          <td>{{ $programariMedic->email }}</td>
                                          <td>
                                             <div>{{ $programariMedic->data }} {{ $programariMedic->ora }}</div>
                                          </td>
                                          <td>{{ $programariMedic->nume_medic }}
                                             {{ $programariMedic->prenume_medic }}</td>
                                          <td>{{ $programariMedic->specialitate_medic }}</td>
                                          <td>@if( $programariMedic->status == 1 ) {{ 'aprobat' }} @elseif($programariMedic->status == 0) {{ 'anulat' }} @endif</td>
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

   @push('js')
      <script>
         function save_form1(elem) {
            // var data = new FormData($('#cancel-appointment-form')[0]);
            $.ajax({
               url: "/cancel-appointment",
               method: "put",
               data: {
                  id: $(elem).attr('data-id'),
                  userid: $(elem).attr('data-userid'),
               },
               headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               beforeSend: function() {
                  if (confirm("Esti sigur/a ca vrei sa anulezi programarea?")) {} else {
                     return false;
                  }
               },
               success: function(data) {
                  if (data.status == 0) {
                     $("#errors").html(data.mesaj);
                     $("#errors").fadeTo(1200, 500).slideUp(500);
                     $("#errors").slideUp(500);
                     setTimeout(() => {
                        location.reload()
                     }, "1500");
                  }
                  if (data.status == 1) {
                     setTimeout(() => {
                        location.reload()
                     }, "1500");
                     $("#errors").html(data.mesaj);
                     $("#errors").fadeTo(1200, 500).slideUp(500);
                     $("#errors").slideUp(500);
                  }
               }
            })
         }
      </script>
   @endpush
@endsection
