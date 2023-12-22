@extends('layouts.layoutadmin')

@section('content')
<div class="container">

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Tabel</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-list-ul"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">List Data Pos Hidrologi</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-outline-secondary btn-md ">settings</button>
                <button type="button"
                    class="btn btn-secondary split-bg-outline-secondary dropdown-toggle dropdown-toggle-split"
                    data-bs-toggle="dropdown">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->

    @if(session()->get('message'))
    <div class="alert alert-info alert-dismissable mt-20 text-center" role="alert">
        <h4>{{ session()->get('message') }} </h4>
    </div>
    @endif

    @if(session()->get('warning'))
    <div class="alert alert-danger alert-dismissable mt-20 text-center" role="alert">
        <h4>{{ session()->get('warning') }} </h4>
    </div>
    @endif

    <hr />
    <p class="mb-0 text-uppercase display-6 text-center">Edit Data Pos Hidrologi</p>
    <hr />

    <div class="card">
        <div class="card-body">
            <div class="login-separater text-center mb-4">
                <hr />
            </div>
            <form method="post" action="{{url('/changepos/'.$check->kd_hardware)}}" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">ID Hardware</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="{{$check->kd_hardware}}" name="" id="" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Pos Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="{{$check->pos_name}}" name="pos_name" id="nis" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Location</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="{{$check->location}}" name="location" id="nis" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Latitude</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="{{$check->latitude}}" name="latitude" id="nis" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Longitude</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="{{$check->longitude}}" name="longitude" id="nis" required>
                    </div>
                </div>
		<div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Nomor GSM</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="{{$check->no_gsm}}" name="no_gsm" id="nis" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Provinsi</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="{{$check->kd_provinsi}}" name="kd_provinsi" id="nis" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Kabupaten</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="{{$check->kd_kabupaten}}" name="kd_kabupaten" id="nis" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Kecamatan</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="{{$check->kd_kecamatan}}" name="kd_kecamatan" id="nis" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Desa</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="{{$check->kd_desa}}" name="kd_desa" id="nis" required>
                    </div>
                </div>
		<div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Nomor Pos</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="{{$check->nomor_pos}}" name="nomor_pos" id="nis" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Tahun Dibangun</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="{{$check->thn_dibangun}}" name="thn_dibangun" id="nis" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Dibangun Oleh</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="{{$check->pendiri}}" name="pendiri" id="nis" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Wilayah Sungai</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="{{$check->wilayah_sungai}}" name="wilayah_sungai" id="nis" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Elevasi</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="{{$check->elevasi}}" name="elevasi" id="nis" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Konstanta <b>a</b></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="number" step=".0001" class="form-control" name="k1" placeholder="{{$check->k1}}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Konstanta <b>b</b></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="number" step=".0001" class="form-control" name="k2" placeholder="{{$check->k2}}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Konstanta <b>c</b></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="number" step=".0001" class="form-control" name="k3" placeholder="{{$check->k3}}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">K TMA</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="number" step=".0001" class="form-control" name="k_tma" placeholder="{{$check->k_tma}}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Foto POS</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="file" class="form-control" id="foto_pos" name="foto_pos"
                            data-toggle="custom-file-input" accept=".jpg, .jpeg" multiple>
                    </div>
                </div>
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <button type="submit" id="covid" class="btn btn-primary"
                        onclick="return confirm('Yakin data sudah benar?')">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection