<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Siswa</title>
</head>
<body>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>

    <div class="container">
        <h1>Data Siswa</h1>

        <a href="/" class="btn btn-sm btn-primary">Back</a>
        <a href="/add" class="btn btn-sm btn-primary">Add</a><br>
        <br>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Hobi</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                    <?php $no=1; ?>
                    @foreach ($poke as $data)
                    <tr>
                        <td>{{ $no ++}}</td>
                        <td>{{$data -> nis}}</td>
                        <td>{{$data -> nama}}</td>
                        <td>{{$data -> hobi}}</td>
                        <td>{{$data -> umur}}</td>
                        <td>{{$data -> alamat}}</td>
                        <td> <a href="/detail/{{ $data->id }}" class="btn btn-sm btn-success">Detail</a>

                            <a href="/edit/{{ $data->id}}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="{{ url('delete/' . $data->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus data?')">Delete</a>




                        </td>
                    </tr>
                    @endforeach
            </tbody>

        </div>
        </table>

            @include('sweetalert::alert')

</body>
</html>
