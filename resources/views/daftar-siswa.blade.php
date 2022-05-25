@extends('template/base')
@section('title','Daftar Pesanan Obat')
@section('container')
<div class="container mt-4">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
</ol>
</nav>
</div>
<div class="container">
<div class="row">
<div class="my-4 col-12">
<h1 class="float-left">Daftar Siswa</h1>
<a class="btn btn-primary float-right mt-2" href="{{url('/tambah')}}" role="button">Tambah Siswa</a>
</div>
<div class="col-12">
<table class="table table-stripped">
<thead class="thead-primary">
<tr>
<th class="text-center">No</th>
<th>NIS</th>
<th>Nama Siswa</th>
<th>Alamat Siswa</th>
<th>Action</th>
</tr>
</thead>
<tbody>
    @foreach($siswa as $i => $item)
    <tr>
        <td class="text-center">{{$i+1}}</td>
        <td>{{$item->NIS}}</td>
        <td>{{$item->Nama}}</td>
        <td>{{$item->Alamat}}</td>
        <td>
        <a href="{{url('/edit')}}" class="badge badge-success">edit</a>
        <a href="" class="badge badge-danger">delete</a>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
</div>
</div>
@endsection