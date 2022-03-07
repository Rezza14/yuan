<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Holla</title>
</head>
<body>
    <link rel="stylesheet" href="{{asset('style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>


        <div class="container">
       <h1>Holla</h1>

       <h2>{{ $nama_siswa }}</h2>
       <h2>{{ $kelas }}</h2>


       <a href="/datasiswa" class="btn btn-sm btn-primary">Lihat Data Siswa</a>


    </div>
</body>
</html>
