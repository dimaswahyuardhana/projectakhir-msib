<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">COBA PDF</h1>
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>NO</th>
                <th>Keterangan</th>
                <th>Obat</th>
                <th>Dokter</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($resep as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->keterangan }}</td>
                    <td>{{ $data->obat->nama_obat }}</td>
                    <td>{{ $data->dokter->nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
