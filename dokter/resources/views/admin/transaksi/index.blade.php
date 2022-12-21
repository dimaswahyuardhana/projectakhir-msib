@extends('admin.layout')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Manajemen Transaksi</h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <div class="card-tools">
                        <a href="#" class="btn btn-tool">
                            <i class="fas fa-file-excel"></i>
                        </a>
                    </div>
                    <table class="table" id="data_user">
                        <thead>
                            <tr>
                                <th>NAMA</th>
                                <th>ALAMAT</th>
                                <th>EMAIL</th>
                                <th>NO TELP</th>
                                <th>PAYMENT</th>
                                <th>TOTAL PRICE</th>
                                <th>STATUS</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                                <tr>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->address }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->phone }}</td>
                                    <td>{{ $data->payment }}</td>
                                    <td>{{ $data->total_price }}</td>
                                    <td>{{ $data->status }}</td>
                                    <td>
                                        <form action="{{ route('obat.destroy', $data->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <div class="btn-group">
                                                <a href="{{ route('obat.edit', $data->id) }}"
                                                    class="btn btn-warning btn-sm">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                <button type="submit" class="btn btn-danger btn-sm"
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
    </div>
@endsection
