@extends('template/base')
@extends('template/stylesheet')
@section('title','Pembuatan Resep Obat')
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
<h3>Form Pembuatan Resep Obat</h3>
<form action="" method="post">
<div class="form-group">
<label for="resep">Nama Resep</label>
<input class="form-control" type="text" name="nama_resep" id="nama_resep" placeholder="Nama Resep">
</div>
<div class="form-group">
  {{-- 
  <label for="sel1">Pilih Obat : </label>
  <br/>
  @foreach($obat as $item)
  <label class="checkbox-inline checkbox">
      <input type="checkbox" value="{{$item->obatalkes_id}}">{{$item->obatalkes_nama}}
    </label>
    @endforeach
--}}
  <label>Pilih Obat</label>  <span style="color:red; cursor:pointer" title='tekan "CTRL" untuk memilih lebih dari 1 '>?</span>

  <select id="paket" name="paket[]" class="form-control" multiple="multiple">
      @foreach($obat as $item)
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
<button class="btn btn-primary" type="button">Preview</button>
</div>

<div class="col-12 ">
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
    <tr>
        <td class="text-center">1</td>
        <td>Paracetamol</td>
        <td>23</td>
        <td>
        <a href="{{url('/edit')}}" class="badge badge-success">edit</a>
        <a href="" class="badge badge-danger">delete</a>
        </td>
    </tr>
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
@push('after_scripts')
{{-- chartjs links --}}
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

        <script>

            $(document).ready(function () {

                $("#paket").select2({

                    placeholder: "Silahkan Pilih"

                });

            });

        </script>
@endpush