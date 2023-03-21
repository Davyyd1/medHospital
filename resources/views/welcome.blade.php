@extends('layouts.app')

@section('content')
<body>
    @if(Auth::check() && Auth::user()->role_id==2 || Auth::check() && Auth::user()->role_id==3)
    <div class="section-second">
        <div class="container-fluid">
            <div class="row" id="nav-links">
                <ul class="nav-list">
                    <a href="medici"><li>Medici</li></a>
                    <a href=""><li>Pacienti</li></a>
                    <a href=""><li>Contact</li></a>
                </ul>
            </div>
        </div>
    </div>
    @elseif(Auth::check() && Auth::user()->role_id==1 )
    <div class="section-second">
        <div class="container-fluid">
            <div class="row" id="nav-links">
                <ul class="nav-list">
                    <a href="{{ url('adauga-medic') }}"><li>Adauga medic</li></a>
                    <a href="medici"><li>Medici</li></a>
                    <a href=""><li>Pacienti</li></a>
                    <a href=""><li>Contact</li></a>
                </ul>
            </div>
        </div>
    </div>
    @endif
    
    <div class="section-1-medici">
        <div class="container-fluid">
            <div class="row" id="medici">
                <div class="medic">
                    <div class="imagine-medic">
                        <img src="" alt="imagine">
                    </div>
                    <div class="nume-medic">
                        <h5>Medic Avram Iancu</h5>
                    </div>
                    <div class="descriere-medic">
                        <p>Descriere</p>
                    </div>
                    <div class="actiuni">
                        Fa o programare!
                    </div>
                </div>
            </div>
            <div class="row" id="medici">
                <div class="medic">
                    <div class="imagine-medic">
                        <img src="" alt="imagine">
                    </div>
                    <div class="nume-medic">
                        <h5>Medic Avram Iancu</h5>
                    </div>
                    <div class="descriere-medic">
                        <p>Descriere</p>
                    </div>
                    <div class="actiuni">
                        Fa o programare!
                    </div>
                </div>
            </div>
            <div class="row" id="medici">
                <div class="medic">
                    <div class="imagine-medic">
                        <img src="" alt="imagine">
                    </div>
                    <div class="nume-medic">
                        <h5>Medic Avram Iancu</h5>
                    </div>
                    <div class="descriere-medic">
                        <p>Descriere</p>
                    </div>
                    <div class="actiuni">
                        Fa o programare!
                    </div>
                </div>
            </div>
            <div class="row" id="medici">
                <div class="medic">
                    <a href="/medici">Vezi toti medicii</a>
                </div>
            </div>
        </div>
    </div>

    <div class="sectiune-2">
        <div class="container-fluid">
            <div class="row" id="section-details">
                <div class="story">
                    <p>Povestea noastra</p>
                    <h3><span style="color:white">med</span><span
                        style="color:#e41274;">Hospital</span></h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis officiis iste a, corrupti eaque dolorem distinctio, cupiditate hic exercitationem numquam sequi ea voluptatum excepturi aspernatur officia ex unde dolor consequuntur! Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit quas est odit rem pariatur ducimus. Rem nulla porro, sint consequatur facilis, architecto suscipit iste ratione debitis doloribus dolorum consectetur fugit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem deserunt voluptas consequuntur eos, provident delectus quas quis, sed sapiente laboriosam necessitatibus ex rem facilis dicta error aspernatur reiciendis officiis harum! lorem</p>
                </div>
                <div class="image">
                    <img src="/images/hospital.jpg" alt="" width="500" height="300">
                </div>
            </div>
        </div>
    </div>
    
</body>
@endsection

