<title>Detail</title>
<body>
<link rel="stylesheet" href="{{asset('style.css')}}"/>
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>


<div class="container">
    <h1>Detail Data</h1>

    <table class="table">
        <tr>
            <th width="100px">NIS</th>
            <th width="30px">:</th>
            <th>{{ $poke->nis }}</th>
        </tr>
        <tr>
            <th width="100px">Nama</th>
            <th width="30px">:</th>
            <th>{{ $poke->nama }}</th>
        </tr>
        <tr>
            <th width="100px">Hobi</th>
            <th width="30px">:</th>
            <th>{{ $poke->hobi }}</th>
        </tr>
        <tr>
            <th width="100px">Umur</th>
            <th width="30px">:</th>
            <th>{{ $poke->umur }}</th>
        </tr>
        <tr>
            <th width="100px">Alamat</th>
            <th width="30px">:</th>
            <th>{{ $poke->alamat }}</th>
        </tr>
        <th><a href="/datasiswa" class="btn btn-sm btn-primary">Back</a></th>
    </table>
</div>
</body>
