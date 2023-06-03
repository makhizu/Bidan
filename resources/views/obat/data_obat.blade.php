{{-- @dd( $Ibu ) --}}
@extends('layouts.main')

@section('konten')

<h1>DATA OBAT</h1>
<div class="tombol">
  <a href="/obat" class="btn btn-success ">Back</a>
  <a href="/tambah_obat" class="btn btn-primary ">Create</a>
</div>
<form action="">
    @csrf

    
</form>


  @endsection