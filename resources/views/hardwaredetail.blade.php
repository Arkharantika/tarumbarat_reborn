@extends('layouts.layouthardwaredetail')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body text-center">
            <h3>DATA POS HARDWARE</h3>
        </div>
    </div>
    <div class="card">
        <div class="card-body" style="display:flex;">
            <!-- <img src="{{asset('images/telemetry_copy.jpg')}}" alt=""> -->

            <div class="card shadow mt-4" style="width: 18rem;">
                <div class="card-header" style="background:silver;">
                    <p class="card-text"></p>
                </div>
                <img src="{{asset('images/telemetry_copy.jpg')}}" class="card-img-top" alt="..."
                    style="max-width: 100%;height: auto;">
            </div>

            <div class="container mt-1 " style="">
                <div>
                    <hr>HARDWARE POS DETAIL
                </div>
                <div style="">
                    <div>
                        <h1>{{$recorddetail->pos_name}}</h1>
                        <h3>ID: {{$chance}}</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab"
                        aria-controls="tab1" aria-selected="true">Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="" data-toggle="" href="{{url('/hardwaretable/'.$chance)}}" role="tab"
                        aria-controls="tab2" aria-selected="false">Data Telemetry</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="" data-toggle="" href="{{url('/hardwaregraph/'.$chance)}}" role="tab"
                        aria-controls="tab3" aria-selected="false">Grafik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="" data-toggle="" href="{{url('/hardwarecctv/'.$chance)}}" role="tab"
                        aria-controls="tab4" aria-selected="false">CCTV</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                    <div class="container mt-3">
                        <hr>
                        <div>
                            Nama Pos &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <span>{{$recorddetail->pos_name}}</span><br>
                            Lokasi &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :
                            <span>{{$recorddetail->location}}</span><br>
                            Koordinat LS &nbsp : <span>{{$recorddetail->latitude}}</span><br>
                            Koordinat LU &nbsp : <span>{{$recorddetail->longitude}}</span><br>
                            Provinsi &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:
                            <span>{{$recorddetail->kd_provinsi}}</span><br>
                            Kabupaten &nbsp&nbsp&nbsp&nbsp: <span>{{$recorddetail->kd_kabupaten}}</span><br>
                            Kecamatan &nbsp&nbsp&nbsp: <span>{{$recorddetail->kd_kecamatan}}</span><br>
                            Desa &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:
                            <span>{{$recorddetail->kd_desa}}</span><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('CustomScripts')
<script>
    n = new Date();
    y = n.getFullYear();
    m = n.getMonth() + 1;
    d = n.getDate();
    document.getElementById("nowdate").innerHTML = m + "/" + d + "/" + y;

    window.onload = function () {
        // Calculate the vertical position that is 75% lower than the top
        const position = (document.documentElement.scrollHeight - window.innerHeight) * 0.55;

        // Scroll to the calculated position
        window.scrollTo(0, position);
    };
</script>
@endsection