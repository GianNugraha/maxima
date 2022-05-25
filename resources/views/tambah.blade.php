@extends('template/base')
@section('title','Tambah Siswa')
@section('container')
<div class="container mt-4">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
<li class="breadcrumb-item"><a href="{{url('/siswa')}}">Daftar Siswa</a></li>
<li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
</ol>
</nav>
</div>
<div class="container">
<div class="row">
<div class="col-md-12 mt-3">
<h3>Form Tambah Siswa</h3>
<form action="{{route('siswa_store')}}" method="post">
<div class="form-group">
<label for="nis">NIS</label>
<input class="form-control" type="text" name="nis" id="nis" placeholder="Masukkan NIS" onkeypress="return hanyaAngka(event)">
</div>
<div class="form-group">
<label for="name">Nama Siswa</label>
<input class="form-control" type="text" name="name" id="name" placeholder="Masukkan Nama Siswa">
</div>
<div class="form-group">
<label for="alamat">Alamat</label>
<textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
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
<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>