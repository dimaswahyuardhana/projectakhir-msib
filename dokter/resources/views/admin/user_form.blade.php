@extends('admin.layout')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-xxl">
        <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Input Data User</h5>
            <small class="text-muted float-end">Default label</small>
        </div>
        <div class="card-body">
            <form method="POST" action="#">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama User" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 form-label" for="basic-icon-default-message">Alamat</label>
                <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-message2" class="input-group-text"></span>
                        <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat" aria-label="Hi, Do you have a moment to talk Joe?"></textarea>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-2 form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" id="optionA" type="radio" name="jenis_kelamin" value="L" />
                    <label class="form-check-label" for="optionA">Laki-Laki</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" id="optionB" type="radio" name="jenis_kelamin" value="P" />
                    <label class="form-check-label" for="optionB">Perempuan</label>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Usia</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="usia" placeholder="Masukkan Usia User" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Tanggal Lahir</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" name="tgl_lahir"/>
                </div>
            </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection