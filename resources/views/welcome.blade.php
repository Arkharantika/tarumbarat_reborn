<!-- Halaman Ini Sudah Sesuai Tata Penulisan -->

@extends('layouts.layoutdashboard')

@section('content')
<!--Container-->
<div class="container">

    @if(session()->get('message'))
    <div class="alert alert-info alert-dismissable mt-20" role="alert">
        <h4>{{ session()->get('message') }} </h4>
    </div>
    @endif

</div>

@section('CustomScripts')
<script src="{{asset('sungai.js')}}"></script>
<script src="{{asset('wilayah.js')}}"></script>
<script src="{{asset('tambahan_wilayah.js')}}"></script>
<script>
    // var redPin = L.icon({
    //     iconUrl: "{{asset('images/redpin.png')}}",
    //     iconSize: [40, 40], 
    // });

    // >>> TEST NEW VARIABLES
    function updateMax(){
        $.ajax({
            url: 'http://sisirumba.pusair-pu.go.id/test_sisirumba_2/public/nilaimax',
            method: 'GET',
            dataType: 'json',
            beforeSend: function () {
                console.log('Fetching data...');
                // alert("loading . . .")
            },
            success: function(data) {
                localStorage.setItem('fetchedData', JSON.stringify(data));
                document.getElementById('result').innerHTML = JSON.stringify(data, null, 2);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('There was a problem with the fetch operation:', errorThrown);
            },
            complete: function () {
                console.log('Fetch completed.');
            }
        });
    }

    function updateMin(){
        $.ajax({
            url: 'http://sisirumba.pusair-pu.go.id/test_sisirumba_2/public/nilaimin',
            method: 'GET',
            dataType: 'json',
            beforeSend: function () {
                console.log('Fetching data...');
                // alert("loading . . .")
            },
            success: function(data) {
                localStorage.setItem('minData', JSON.stringify(data));
                document.getElementById('result').innerHTML = JSON.stringify(data, null, 2);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('There was a problem with the fetch operation:', errorThrown);
            },
            complete: function () {
                console.log('Fetch completed.');
            }
        });
    }

    updateMax();
    updateMin();
    setInterval(updateMax, 30*1000);
    setInterval(updateMin, 30*1000);

    var suply = [];
    var suplyMin = [];

    // Call this function to use the data stored in localStorage
    function useStoredData() {
        const storedData = localStorage.getItem('fetchedData');
        suply = [];
        if (storedData) {
            const parsedData = JSON.parse(storedData);
            for (const key in parsedData) {
                if (parsedData.hasOwnProperty(key)) {
                    let value = parsedData[key];
                    if(value==null){
                        value = 0;
                    }
                    suply.push(value);
                }
            }
            console.log('Data max from localStorage:', parsedData);
        } else {
            console.log('No data found in localStorage');
        }
    }

    function minData() {
        const storedData = localStorage.getItem('minData');
        suplyMin = [];
        if (storedData) {
            const parsedData = JSON.parse(storedData);
            for (const key in parsedData) {
                if (parsedData.hasOwnProperty(key)) {
                    let value = parsedData[key];
                    if(value==null){
                        value = 0;
                    }
                    suplyMin.push(value);
                }
            }
            console.log('Data min from localStorage:', parsedData);
            console.log("isinya sekarang : ", suplyMin);
        } else {
            console.log('No data found in localStorage');
        }
    }
    // Example: Call the function to use the stored data
    useStoredData();
    minData();
    setInterval(useStoredData, 60*1000);
    setInterval(minData, 60*1000);
    // setInterval(console.log(suply), 10000);
    console.log("suply");
    console.log(suply);
    console.log("suplyMin");
    console.log(suplyMin);


    var redIcon = L.divIcon({className: 'leaflet-div-ser',iconSize:[20,20]});
    var iconmerah = L.icon({iconUrl: '{{asset('images/iconmerah.png')}}',iconSize: [10, 10] })
    var iconhijau = L.icon({iconUrl: '{{asset('images/iconhijau.png')}}',iconSize: [10, 10] })
    var iconbiru = L.icon({iconUrl: '{{asset('images/iconbiru.png')}}',iconSize: [10, 10] })
    var iconkuning = L.icon({iconUrl: '{{asset('images/iconkuning.png')}}',iconSize: [10, 10] })

    const cities = L.layerGroup();
    const mLittleton = L.marker([-6.483933471250634, 107.38204782273243],{icon: redIcon}).bindPopup('BM 1, Jembatan Merah').addTo(cities);
    const mDenver = L.marker([-6.354706, 107.304859],{icon: redIcon}).bindPopup('BM 3, BTB 12').addTo(cities);
    const mAurora = L.marker([-6.34177, 107.274299],{icon: redIcon}).bindPopup('BM 4, BTB 18').addTo(cities);
    const mGolden = L.marker([-6.345818, 107.214708],{icon: redIcon}).bindPopup('BM 8, BTB 23').addTo(cities);
    const osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 15,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    });

    const valmax = @json($ars_max);
    const valmin = @json($ars_min);
    const valmax2 = @json($non_ars_max);
    const valmin2 = @json($non_ars_min);

    var data_example = [
        // { lat: -10.2500114, lng: 123.9895103, name: 'Marker 1',vmax:20,vmin:20,daterecord:20, intivalue:30,kentang:4150,debit:10,debitmax:10,debitmin:10,k1:1,k2:2,k3:3 }
        // Add more data here...
    ];

    var data_example2 = [
        // { lat: -10.2500114, lng: 123.9895103, name: 'Marker 1',vmax:20,vmin:20,daterecord:20, intivalue:30,kentang:4150,debit:10,debitmax:10,debitmin:10,k1:1,k2:2,k3:3 }
        // Add more data here...
    ];

    var data_bagi_induk = [
        // { lat: -10.2500114, lng: 123.9895103, name: 'Marker 1' }
    ];

    var data_bagi_sekunder = [
        // { lat: -10.2500114, lng: 123.9895103, name: 'Marker 1' }
    ];

    var data_bendung = [
        // { lat: -10.2500114, lng: 123.9895103, name: 'Marker 1' }
    ];

    var data_titik_lokasi = [
        // { lat: -10.2500114, lng: 123.9895103, name: 'Marker 1' }
    ];

    @foreach($ars as $kentang => $record)
        var ref_id = "{{ $kentang }}"; 
        var jujukan_id = {{ $record->kd_hardware }}; 
        var lats = {{$record->latitude}}
        var longs = {{$record->longitude}}
        var valuenya = "{{$record->value}}"
        var valuemax = valmax[ref_id];
        var valuemin = valmin[ref_id];
        var k1 = {{$record->k1}};
        var k2 = {{$record->k2}};
        var k3 = {{$record->k3}};
        var k_tma = {{$record->k_tma}};
        // console.log("bojoku=>"+bojonegoro);
        var newData = { lat: lats, lng: longs, name: '{{$record->pos_name}}',vmax:valuemax,vmin:valuemin,daterecord:'{{$record->tlocal}}', intivalue:valuenya, kentang:jujukan_id,debit:10,debitmax:10,debitmin:10,k1:k1,k2:k2,k3:k3,k_tma:k_tma }
        // var newData = { lat: lats, lng: longs, name: '{{$record->pos_name}}',vmax:valuemax,vmin:valuemin,daterecord:'{{$record->tlocal}}', intivalue:valuenya, kentang:jujukan_id }
        console.log(newData)
        data_example.push(newData);
    @endforeach

    @foreach($non_ars as $kentang2 => $record2)
        var ref_id2 = "{{ $kentang2 }}"; 
        var jujukan_id2 = {{ $record2->kd_hardware }}; 
        var lats2 = {{$record2->latitude}}
        var longs2 = {{$record2->longitude}}
        var valuenya2 = "{{$record2->value}}"
        var valuemax2 = valmax2[ref_id2];
        var valuemin2 = valmin2[ref_id2];
        var k12 = {{$record->k1}};
        var k22 = {{$record->k2}};
        var k32 = {{$record->k3}};
        // console.log(lats);
        var newData2 = { lat: lats2, lng: longs2, name: '{{$record2->pos_name}}',vmax:valuemax2,vmin:valuemin2,daterecord:'{{$record2->tlocal}}', intivalue:valuenya2, kentang:jujukan_id2,debit:10,debitmax:10,debitmin:10,k1:k12,k2:k22,k3:k32 }
        console.log("newdata is here>>"+newData2)
        console.log(newData2)
        data_example2.push(newData2);
    @endforeach

    @foreach($bagiInduk as $peng => $rugat)
        var nama_bangunan = "{{ $rugat->nama_bangunan }}";
        var kode = "{{ $rugat->kode }}";
        var luas = "{{ $rugat->luas_area }}";
        var debit = "{{ $rugat->debit }}";
        var jumlah_pintu = "{{ $rugat->jumlah_pintu }}";
        var main_intake = "{{ $rugat->main_intake }}";
        var lat = {{$rugat->y}};
        var lng = {{$rugat->x}};
        var dataBaru = { lat: lat, lng: lng, name: nama_bangunan, luas:luas, debit:debit, jumlah_pintu:jumlah_pintu, main_intake:main_intake, kode:kode }
        data_bagi_induk.push(dataBaru)
    @endforeach

    @foreach($bagiSekunder as $peng2 => $rugat2)
        var nama_bangunan2 = "{{ $rugat2->nama_ss }}";
        var kode2 = "{{ $rugat2->kode_bangunan }}";
        var lat2 = {{$rugat2->y}};
        var lng2 = {{$rugat2->x}};
        var saluran_induk = "{{$rugat2->saluran_induk}}";
        var type = "{{$rugat2->type}}";
        var jumlah_pintu2 = "{{ $rugat->jumlah_pintu }}";
        var pengamat = "{{ $rugat->pengamat }}";
        var dataBaru2 = { lat: lat2, lng: lng2, name: nama_bangunan2, jumlah_pintu:jumlah_pintu, saluran_induk:saluran_induk, kode:kode2, type:type, pengamat:pengamat }
        data_bagi_sekunder.push(dataBaru2)
    @endforeach

    @foreach($bendung as $peng3 => $rugat3)
        var nama_bangunan3 = "{{ $rugat3->nama_bendung }}";
        var lat3 = {{$rugat3->y}};
        var lng3 = {{$rugat3->x}};
        var lokasi = "{{$rugat3->lokasi}}";
        var elevasi = "{{$rugat3->elevation}}";
        var dataBaru3 = { lat: lat3, lng: lng3, name: nama_bangunan3, lokasi:lokasi, elevasi:elevasi }
        data_bendung.push(dataBaru3)
    @endforeach

    @foreach($titikLokasi as $peng4 => $rugat4)
        var nama_bangunan4 = "{{ $rugat4->name }}";
        var lat4 = {{$rugat4->y}};
        var lng4 = {{$rugat4->x}};
        var lokasi4 = "{{$rugat4->lokasi}}";
        var divisi = "{{$rugat4->divisi}}";
        var intake_max = "{{$rugat4->intake_max}}";
        var dataBaru4 = { lat: lat4, lng: lng4, name: nama_bangunan4, lokasi:lokasi4, divisi:divisi, intake_max:intake_max }
        data_titik_lokasi.push(dataBaru4)
    @endforeach

    
    console.log("kampret >>>")
    console.log(data_example2)
    //console.log(data_example[0]["name"]);
    
    const contoh = L.layerGroup();
    for (var i = 0; i < data_example.length; i++) {
        var marker = L.marker([data_example[i]["lat"], data_example[i]["lng"]],{icon:redIcon}).bindPopup("<hr style='margin-bottom:5px;margin-top:5px;color:black;'><div class='text-primary' style='margin-bottom:5px;font-style:italic;font-size:12px;'>Nama Pos :<b>"+data_example[i]["name"]+"</b></div><div class='text-primary' style='margin-bottom:5px;font-style:italic;font-size:12px;'>Koordinat : LS "+data_example[i].lat+", BT "+data_example[i].lng+"</div><table class='table table-bordered' style='margin-bottom:5px;'><thead class='colorthead thead-dark'><tr><th scope=col' style='vertical-align: text-bottom;'>Parameter</th><th class='w-auto' style='vertical-align: text-top;'>Nilai</th><th scope='col' style='vertical-align: text-top;'>Data Max Sesaat</th><th scope='col' style='vertical-align: text-top;'>Data Min Sesaat</th></tr></thead><tbody><tr><td>TMA</td><td>"+(data_example[i].intivalue - parseFloat(data_example[i].k_tma)).toFixed(2)+" m</td><td class='text-white' style='background:#a31919' >"+(suply[i]-parseFloat(data_example[i].k_tma)).toFixed(2)+" m</td><td class='text-white' style='background:#ff8c40;'>"+(suplyMin[i]-parseFloat(data_example[i].k_tma)).toFixed(2)+" m</td></tr><tr><td>Debit</td><td>"+((-1 * data_example[i].k2 + Math.sqrt(Math.pow(data_example[i].k2, 2) - 4 * data_example[i].k1 * (data_example[i].k3 - data_example[i].intivalue))) / (2 * data_example[i].k1)).toFixed(2)+"&nbspm<sup>3</sup>/s</td><td class='text-white' style='background:#a31919' >"+((-1 * data_example[i].k2 + Math.sqrt(Math.pow(data_example[i].k2, 2) - 4 * data_example[i].k1 * (data_example[i].k3 - suply[i]))) / (2 * data_example[i].k1)).toFixed(2)+"&nbspm<sup>3</sup>/s</td><td class='text-white' style='background:#ff8c40;'>"+((-1 * data_example[i].k2 + Math.sqrt(Math.pow(data_example[i].k2, 2) - 4 * data_example[i].k1 * (data_example[i].k3 - suplyMin[i]))) / (2 * data_example[i].k1)).toFixed(2)+"&nbspm<sup>3</sup>/s</td></tr></tbody></table><div class='mt-1'><div class='text-danger' style='margin-bottom:15px;font-style:italic;font-size:12px;'>Data Terakhir : "+data_example[i].daterecord+" &nbsp <i class='bx bxs-calendar'></i></div><a class='btn btn-sm btn-secondary text-light' href='{{ url('/hardwaretable/') }}/"+data_example[i].kentang+"'>> check detail </div>",{'className' : 'custom-popup',closeButton: false}).on('mouseover', function () {
                this.openPopup();
            }).openPopup();
        marker.addTo(contoh);
    }


    const kentangGoreng = L.layerGroup();


    const map = L.map('map', {
        center: [-6.2500114, 106.9895103],
        zoom: 10,
        layers: [osm,contoh,kentangGoreng]
    });

    // warning => belum tau kalo ada update pos manual hasinya seperti apa !
    const contoh2 = L.layerGroup();
    for (var i = 0; i < data_example2.length; i++) {
        var marker3 = L.marker([data_example2[i]["lat"], data_example2[i]["lng"]],{icon:redIcon}).bindPopup("<hr style='margin-bottom:5px;margin-top:5px;color:black;'><div class='text-primary' style='margin-bottom:5px;font-style:italic;font-size:12px;'>Nama Pos :<b>"+data_example2[i]["name"]+"</b></div><div class='text-primary' style='margin-bottom:5px;font-style:italic;font-size:12px;'>Koordinat : BT "+data_example2[i].lat+", LS "+data_example2[i].lng+"</div><table class='table table-bordered' style='margin-bottom:5px;'><thead class='colorthead thead-dark'><tr><th scope=col' style='vertical-align: text-top;'>Parameter</th><th style='vertical-align: text-top;width:10rem;'>Nilai</th><th scope='col'>Data Max Sesaat</th><th scope='col'>Data Min Sesaat</th></tr></thead><tbody><tr><td>TMA</td><td>"+(data_example2[i].intivalue)+" m</td><td class='text-white' style='background:#a31919' >"+(data_example2[i].vmax).toFixed(2)+" m</td><td class='text-white' style='background:#ff8c40;'>"+(data_example2[i].vmin).toFixed(2)+" m</td></tr><tr><td>Debit</td><td>"+(data_example2[i].k1*Math.pow(data_example2[i].intivalue+data_example2[i].k2,data_example2[i].k3)).toFixed(2)+" m<sup>3</sup>/s</td><td class='text-white' style='background:#a31919' >"+(data_example2[i].k1*Math.pow(data_example2[i].vmax+data_example2[i].k2,data_example2[i].k3)).toFixed(2)+" m<sup>3</sup>/s</td><td class='text-white' style='background:#ff8c40;'>"+(data_example2[i].k1*Math.pow(data_example2[i].vmin+data_example2[i].k2,data_example2[i].k3)).toFixed(2)+" m<sup>3</sup>/s</td></tr></tbody></table><div class='mt-1'><div class='text-danger' style='margin-bottom:15px;font-style:italic;font-size:12px;'>Data Terakhir : "+data_example2[i].daterecord+" &nbsp <i class='bx bxs-calendar'></i></div><a class='btn btn-sm btn-secondary text-light' href='{{ url('/hardwaretable/') }}/"+data_example2[i].kentang+"'>> check detail </div>",{closeButton: false}).on('mouseover', function () {
                this.openPopup();
            }).openPopup();
        // console.log([[data_example2[i]["lat"]],[data_example2[i]["lng"]]])
        marker3.addTo(contoh2);
    }

    const contoh_bagi_induk = L.layerGroup();
    for (var i = 0; i < data_bagi_induk.length; i++) {
        var marker_bagi_induk = L.marker([data_bagi_induk[i]["lat"], data_bagi_induk[i]["lng"]],{icon:iconmerah}).bindPopup("<hr style='margin-bottom:5px;margin-top:5px;color:black;'><div class='text-primary' style='margin-bottom:5px;font-style:italic;font-size:12px;'>Nama Titik :<b> "+data_bagi_induk[i]["name"]+" </b></div><table class='table table-bordered' style='margin-bottom:5px;'><thead class='colorthead thead-dark'><tr><th></th><th></th></tr></thead><tbody><tr><td style='font-size:10px;background:white;height:15px'>Kode </td><td style='font-size:10px;background:white;height:15px'> "+data_bagi_induk[i]["kode"]+" </td></tr><tr><td style='font-size:10px;background:white;height:15px'>Luas Area </td><td style='font-size:10px;background:white;height:15px'> "+data_bagi_induk[i]["luas"]+" </td></tr><tr><td style='font-size:10px;background:white;height:15px'>Debit </td><td style='font-size:10px;background:white;height:15px'> "+data_bagi_induk[i]["debit"]+" </td></tr><tr><td style='font-size:10px;background:white;height:15px'>Jumlah Pintu </td><td style='font-size:10px;background:white;height:15px'> "+data_bagi_induk[i]["jumlah_pintu"]+" </td></tr><tr><td style='font-size:10px;background:white;height:15px'>Main Intake </td><td style='font-size:10px;background:white;height:15px'> "+data_bagi_induk[i]["main_intake"]+" </td></tr></tbody></table>",{closeButton: false}).on('mouseover', function () {
                this.openPopup();
            }).openPopup();
        marker_bagi_induk.addTo(contoh_bagi_induk);
    }

    const contoh_bagi_sekunder = L.layerGroup();
    for (var i = 0; i < data_bagi_sekunder.length; i++) {
        var marker_bagi_sekunder = L.marker([data_bagi_sekunder[i]["lat"], data_bagi_sekunder[i]["lng"]],{icon:iconhijau}).bindPopup("<hr style='margin-bottom:5px;margin-top:5px;color:black;'><div class='text-primary' style='margin-bottom:5px;font-style:italic;font-size:12px;'>Nama Titik :<b> "+data_bagi_sekunder[i]["name"]+" </b></div><table class='table table-bordered' style='margin-bottom:5px;'><thead class='colorthead thead-dark'><tr><th></th><th></th></tr></thead><tbody><tr><td style='font-size:10px;background:white;height:15px'>Kode </td><td style='font-size:10px;background:white;height:15px'> "+data_bagi_sekunder[i]["kode"]+" </td></tr><tr><td style='font-size:10px;background:white;height:15px'>Saluran Induk </td><td style='font-size:10px;background:white;height:15px'> "+data_bagi_sekunder[i]["saluran_induk"]+" </td></tr><tr><td style='font-size:10px;background:white;height:15px'>Tipe </td><td style='font-size:10px;background:white;height:15px'> "+data_bagi_sekunder[i]["type"]+" </td></tr><tr><td style='font-size:10px;background:white;height:15px'>Jumlah Pintu </td><td style='font-size:10px;background:white;height:15px'> "+data_bagi_sekunder[i]["jumlah_pintu"]+" </td></tr><tr><td style='font-size:10px;background:white;height:15px'>pengamat </td><td style='font-size:10px;background:white;height:15px'> "+data_bagi_sekunder[i]["pengamat"]+" </td></tr></tbody></table>",{closeButton: false}).on('mouseover', function () {
                this.openPopup();
            }).openPopup();
        marker_bagi_sekunder.addTo(contoh_bagi_sekunder);
    }

    const contoh_bendung = L.layerGroup();
    for (var i = 0; i < data_bendung.length; i++) {
        var marker_bendung = L.marker([data_bendung[i]["lat"], data_bendung[i]["lng"]],{icon:iconbiru}).bindPopup("<hr style='margin-bottom:5px;margin-top:5px;color:black;'><div class='text-primary' style='margin-bottom:5px;font-style:italic;font-size:12px;'>Nama Bendung :<b> "+data_bendung[i]["name"]+" </b></div><table class='table table-bordered' style='margin-bottom:5px;'><thead class='colorthead thead-dark'><tr><th></th><th></th></tr></thead><tbody><tr><td style='font-size:10px;background:white;height:15px'>Lokasi </td><td style='font-size:10px;background:white;height:15px'> "+data_bendung[i]["lokasi"]+" </td></tr><tr><td style='font-size:10px;background:white;height:15px'>Elevasi </td><td style='font-size:10px;background:white;height:15px'> "+data_bendung[i]["elevasi"]+" </td></tr><tr><td style='font-size:10px;background:white;height:15px'>Koordinat </td><td style='font-size:10px;background:white;height:15px'> "+data_bendung[i]["lat"]+","+data_bendung[i]["lng"]+" </td></tr></tbody></table>",{closeButton: false}).on('mouseover', function () {
                this.openPopup();
            }).openPopup();
        marker_bendung.addTo(contoh_bendung);
    }

    const contoh_titik_lokasi = L.layerGroup();
    for (var i = 0; i < data_titik_lokasi.length; i++) {
        var marker_titik = L.marker([data_titik_lokasi[i]["lat"], data_titik_lokasi[i]["lng"]],{icon:iconkuning}).bindPopup("<hr style='margin-bottom:5px;margin-top:5px;color:black;'><div class='text-primary' style='margin-bottom:5px;font-style:italic;font-size:12px;'>Nama :<b> "+data_titik_lokasi[i]["name"]+" </b></div><table class='table table-bordered' style='margin-bottom:5px;'><thead class='colorthead thead-dark'><tr><th></th><th></th></tr></thead><tbody><tr><td style='font-size:10px;background:white;height:15px'>Lokasi </td><td style='font-size:10px;background:white;height:15px'> "+data_titik_lokasi[i]["lokasi"]+" </td></tr><tr><td style='font-size:10px;background:white;height:15px'>Divisi </td><td style='font-size:10px;background:white;height:15px'> "+data_titik_lokasi[i]["divisi"]+" </td></tr><tr><td style='font-size:10px;background:white;height:15px'>Koordinat </td><td style='font-size:10px;background:white;height:15px'> "+data_titik_lokasi[i]["lat"]+","+data_titik_lokasi[i]["lng"]+" </td></tr><tr><td style='font-size:10px;background:white;height:15px'>Intake Max </td><td style='font-size:10px;background:white;height:15px'> "+data_titik_lokasi[i]["intake_max"]+" </td></tr></tbody></table>",{closeButton: false}).on('mouseover', function () {
                this.openPopup();
            }).openPopup();
        marker_titik.addTo(contoh_titik_lokasi);
    }

    // var marker2 = L.marker([-6, 107],{icon:redIcon})
    //     marker2.addTo(contoh2);

    /*==============================================
                GEOJSON
    ================================================*/
    // var pointData = L.geoJSON(pointJson).addTo(map)
    var lineData = L.geoJSON(kentang,{
        onEachFeature: function (feature, layer) {
            if (layer instanceof L.Polyline) {
            layer.setStyle({
                'color': feature.style.fill,
                'stroke-width': feature.style.width,
            });
            }
        }
    });
    var polygonData = L.geoJSON(wilayah, {
        onEachFeature: function (feature, layer) {
            layer.bindPopup("<hr style='margin-bottom:5px;margin-top:5px;color:black;'><div class='text-primary' style='margin-bottom:5px;font-style:italic;font-size:12px;'>Wilayah :<b> " +feature.properties.Nama_Das+" </b></div><table class='table table-bordered' style='margin-bottom:5px;'><thead class='colorthead thead-dark'><tr><th></th><th></th></tr></thead><tbody><tr><td style='font-size:10px;background:white;height:15px'>Xodex </td><td style='font-size:10px;background:white;height:15px'> "+feature.properties.XODEX+"</td></tr><tr><td style='font-size:10px;background:white;height:15px'>Kode Das </td><td style='font-size:10px;background:white;height:15px'> "+feature.properties.Kode_Das+"</td></tr><tr><td style='font-size:10px;background:white;height:15px'>Nama WS </td><td style='font-size:10px;background:white;height:15px'> "+feature.properties.Nama_WS+"</td></tr><tr><td style='font-size:10px;background:white;height:15px'>Luas </td><td style='font-size:10px;background:white;height:15px'> "+feature.properties.Luas+"</td></tr><tr><td style='font-size:10px;background:white;height:15px'>Kode WS </td><td style='font-size:10px;background:white;height:15px'> "+feature.properties.Kode_WS+"</td></tr><tr><td style='font-size:10px;background:white;height:15px'>Kewenangan </td><td style='font-size:10px;background:white;height:15px'> "+feature.properties.KEWENANGAN+"</td></tr></tbody></table>",{closeButton: false}).on('mouseover', function () {
                layer.setStyle({
                    fillOpacity: 0.4,
                    fillColor:'yellow'
                })
                this.openPopup();
            }).on('mouseout', function (e) {
                layer.setStyle({
                fillOpacity: 0.2,
                fillColor:'#7FFFD4'
                });
            });
        },
        style: {
            fillColor: '#7FFFD4',
            color:'#20B2AA'
        }
    });

    var polygonData2 = L.geoJSON(tambahan_wilayah, {
        onEachFeature: function (feature, layer) {
            layer.bindPopup("<hr style='margin-bottom:5px;margin-top:5px;color:black;'><div class='text-primary' style='margin-bottom:5px;font-style:italic;font-size:12px;'>Wilayah :<b> "+feature.properties.DAKER+" </b></div><table class='table table-bordered' style='margin-bottom:5px;'><thead class='colorthead thead-dark'><tr><th></th><th></th></tr></thead><tbody><tr><td style='font-size:10px;background:white;height:15px'>Luas </td><td style='font-size:10px;background:white;height:15px'> "+feature.properties.Luas_Km+" </td></tr><tr><td style='font-size:10px;background:white;height:15px'>Unit </td><td style='font-size:10px;background:white;height:15px'> "+feature.properties.unit+" </td></tr></tbody></table>",{closeButton: false}).on('mouseover', function () {
                layer.setStyle({
                    fillOpacity: 0.4,
                    fillColor:'#F08080'
                })
                this.openPopup();
            }).on('mouseout', function (e) {
                layer.setStyle({
                fillOpacity: 0.2,
                fillColor:'#008B8B'
                });
            });
        },
        style: {
            fillColor: '#008B8B',
            color:'#1E90FF'
        }
    });

    // console.log("jungul woy"+kentang)
    const overlays = {
        // 'POS Tatonas':contoh,
        // 'POS PJT II': cities,
        'Wilayah DAS': polygonData,
        'Wilayah Daerah Kerja': polygonData2,
        'Titik Bagi Induk': contoh_bagi_induk ,
        'Titik Bagi Sekunder': contoh_bagi_sekunder ,
        'Lokasi Bendung': contoh_bendung ,
        'Lokasi Air Baku': contoh_titik_lokasi ,
    };

    // const layerControl = L.control.layers(null, overlays).addTo(map);
    const layerControl = L.control.layers(null, overlays,{ collapsed: false}).addTo(map);
    // layerControl.setPosition('topleft');

    L.control.scale({ position: 'topleft' }).addTo(map);

    const openTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: 'Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)'
    });

    // layerControl.addOverlay(contoh, 'POS Tatonas Mfg');

        var kentangMarkers = [
            L.marker([51.5, -0.09]).addTo(map),
            L.marker([51.51, -0.1]).addTo(map),
            L.marker([51.52, -0.08]).addTo(map),
        ];

        var goyangMarkers = [
            L.marker([51.53, -0.1]).addTo(map),
            L.marker([51.54, -0.11]).addTo(map),
            L.marker([51.55, -0.09]).addTo(map),
        ];
    
        function toggleMarkers() {
            // var kentangVisible = document.getElementById('kentangCheckbox').checked;
            // var goyangVisible = document.getElementById('goyangCheckbox').checked;
            var tatonasVisible = document.getElementById('tatonasCheckbox').checked;
            // var manualVisible = document.getElementById('manualCheckbox').checked;

            // kentangMarkers.forEach(marker => {
            //     if (kentangVisible) {
            //         map.addLayer(marker);
            //     } else {
            //         map.removeLayer(marker);
            //     }
            // });

            // goyangMarkers.forEach(marker => {
            //     if (goyangVisible) {
            //         map.addLayer(marker);
            //     } else {
            //         map.removeLayer(marker);
            //     }
            // });

            if (tatonasVisible) {
                map.addLayer(contoh);
            } else {
                map.removeLayer(contoh);
            }

            // if (manualVisible) {
            //     map.addLayer(cities);
            // } else {
            //     map.removeLayer(cities);
            // }
            // if (manualVisible) {
            //     map.addLayer(contoh2);
            // } else {
            //     map.removeLayer(contoh2);
            // }

        }

        // Add event listeners to the checkboxes
        // document.getElementById('kentangCheckbox').addEventListener('change', toggleMarkers);
        // document.getElementById('goyangCheckbox').addEventListener('change', toggleMarkers);
        document.getElementById('tatonasCheckbox').addEventListener('change', toggleMarkers);
        // document.getElementById('manualCheckbox').addEventListener('change', toggleMarkers);

        // Initial marker visibility
        toggleMarkers();
</script>

<script>
    n =  new Date();
    y = n.getFullYear();
    m = n.getMonth() + 1;
    d = n.getDate();
    document.getElementById("nowdate").innerHTML = m + "/" + d + "/" + y;

</script>
@endsection


@endsection