@extends('template/base')
@section('title','Pembuatan Obat')
@section('container')
<div class="container mt-4">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
<li class="breadcrumb-item"><a href="{{url('/daftar')}}">Daftar Pesanan Obat</a></li>
<li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
</ol>
</nav>
</div>
<div class="container">
<div class="row">
<div class="col-md-12 mt-3">
<h3>Form Pembuatan Obat</h3>
<form action="" method="post">
<div class="form-group">
  <label for="sel1">Pilih Obat : </label>
  <select class="form-control" id="sel1">
    <option disabled selected>----</option>
    @foreach($obat as $i => $item)
    <option value="{{$item->obatalkes_id}}">{{$item->obatalkes_nama}}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
  <label for="sel1">Pilih Signa : </label>
  <select class="form-control" id="sel1">
    <option disabled selected>----</option>
    @foreach($signa as $i => $item)
    <option value="{{$item->signa_id}}">{{$item->signa_nama}}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
<label for="angkatan">Banyaknya Obat</label>
<input class="form-control" type="number" name="angkatan" id="angkatan" placeholder="Jumlah Banyaknya Obat">
</div>
<div class="form-group float-right">
<button class="btn btn-lg btn-primary" type="button">Preview</button>
</div>

<div class="col-12">
<table class="table table-stripped">
<thead class="thead-primary">
<tr>
<th class="text-center">No</th>
<th>Nama Obat</th>
<th>Quantity</th>
<th>Action</th>
</tr>
</thead>
<tbody>
    @foreach($obat as $i => $item)
    <tr>
        <td class="text-center">{{$i+1}}</td>
        <td>{{$item->obatalkes_nama}}</td>
        <td>{{$item->obatalkes_id}}</td>
        <td>
        <a href="{{url('/edit')}}" class="badge badge-success">edit</a>
        <a href="" class="badge badge-danger">delete</a>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
<div class="form-group float-right">
<button class="btn btn-lg btn-danger" type="reset">Reset</button>
<button class="btn btn-lg btn-primary" type="submit">Submit</button>
</div>
</form>
</div>
</div>
</div>
@endsection