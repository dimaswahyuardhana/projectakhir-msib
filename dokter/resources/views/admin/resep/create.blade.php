@extends('admin.layout')
@section('content')
    <br>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-xxl">
            <div class="card mb-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Input Resep</h5>
                    <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin-resep.store') }}">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Keterangan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="keterangan"
                                    placeholder="Masukkan Nama Obat" value="{{ old('keterangan') }}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Obat</label>
                            <div class="col-sm-10">
                                <select name="obat_id" id="" class="form-control">
                                    @foreach ($obat as $obat)
                                        <option disabled selected>-- Pilih Obat --</option>
                                        <option value="{{ $obat->id }}">{{ $obat->nama_obat }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Dokter</label>
                            <div class="col-sm-10">
                                <select name="dokter_id" id="" class="form-control">
                                    @foreach ($dokter as $dokter)
                                        <option disabled selected>-- Pilih Obat --</option>
                                        <option value="{{ $dokter->id }}">{{ $dokter->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="card-footer">
                            <a href="{{ route('admin-resep.index') }}" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary float-right">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
