@extends('admin.layout')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Resep Dokter</h5>
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="table-responsive text-nowrap">
                <div class="card-tools">
                    <a href="{{ route('admin-resep.create') }}" class="btn btn-tool">
                        <i class="fas fa-plus"></i> Add
                    </a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>NO</th>
                            {{-- <th>Nama Pasien</th> --}}
                            <th>Keterangan</th>
                            <th>Obat</th>
                            <th>Dokter</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($resep as $resep)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                {{-- <td>{{ $resep->user->name }}</td> --}}
                                <td>{{ $resep->keterangan }}</td>
                                <td>{{ $resep->obat->nama_obat }}</td>
                                <td>{{ $resep->dokter->nama }}</td>
                                <td style="width: 100px">
                                    <form action="{{ route('obat.destroy', ['obat' => $resep->id]) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <div class="btn-group">
                                            <a href="{{ route('obat.edit', ['obat' => $resep->id]) }}"
                                                class="btn btn-warning">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah anda yakin mau menghapus?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
