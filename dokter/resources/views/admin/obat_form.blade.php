@extends('admin.layout')
@section('content')
<br>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-xxl">
        <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Input Data Obat</h5>
            <small class="text-muted float-end">Default label</small>
        </div>
        <div class="card-body">
            <form method="POST" action="#">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Obat" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Stok</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="stok" placeholder="Masukkan Spesialis" />
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