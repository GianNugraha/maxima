@extends('template/base')
@section('title','Home')
@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-10 mt-4">
            <h1>Test Maxima </h1>
        </div>
        <div class="col-5 mt-2">
            <h6>Selamat Datang</h6>
        </div>
    </div>
    <div class="row row-cols-4">
        <div class="card mt-4 ml-4 shadow-sm p-3 mb-5 bg-white rounded" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Master Siswa</h5>
                <a class="btn btn-primary float-left mt-2" href="{{url('/siswa')}}" role="button">Lihat</a>
            </div>
        </div>
        <div class="card mt-4 ml-4 shadow-sm p-3 mb-5 bg-white rounded" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Master Mata Pelajaran</h5>
                <a class="btn btn-primary float-left mt-2" href="{{url('/mapel')}}" role="button">Disini</a>
            </div>
        </div>
<div class="card mt-4 ml-4 shadow-sm p-3 mb-5 bg-white rounded" style="width: 18rem;">
<div class="card-body">
<h5 class="card-title">Read</h5>
<p class="card-text">Proses menampilkan data dari database</p>
</div>
</div>
<div class="card mt-4 ml-4 shadow-sm p-3 mb-5 bg-white rounded" style="width: 18rem;">
<div class="card-body">
<h5 class="card-title">Update</h5>
<p class="card-text">Proses merubah data pada databse</p>
</div>
</div>
<div class="card mt-4 ml-4 shadow-sm p-3 mb-5 bg-white rounded" style="width: 18rem;">
<div class="card-body">
<h5 class="card-title">Delete</h5>
<p class="card-text">Proses menghapus data dari database</p>
</div>
</div>
</div>
</div>
</body>
</html>
@endsection