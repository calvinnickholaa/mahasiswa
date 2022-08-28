<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="row center">
        <div class="col-2"></div>
        <div class="col-8">
            <h1>Tabel Barang</h1>
            <a class="btn btn-primary" href="{{ route('create') }}" type="submit">Add</a>
            <table class="table">
                <div class="mb-3">

                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Angkatan</th>
                        <th>Tanggal Lahir</th>
                        <th>Rombel</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($mahasiswas as $no => $mahasiswa)
                        <tr>
                            <td>{{ $no + 1 }}</td>
                            <td>{{ $mahasiswa->name }}</td>
                            <td>{{ $mahasiswa->nim }}</td>
                            <td>{{ $mahasiswa->angkatan }}</td>
                            <td>{{ $mahasiswa->tanggal_lahir }}</td>
                            <td>{{ $mahasiswa->rombel }}</td>
                            <td>
                                <a href="{{ route('edit', $mahasiswa->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('destroy', $mahasiswa->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </div>
            </table>
            {{ $mahasiswas->links() }}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
