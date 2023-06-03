{{-- @dd( $Ibu ) --}}
@extends('layouts.main')

@section('konten')

<h1>DATA PERSALINAN</h1>
<div class="tombol">
  <a href="/pelayanan" class="btn btn-success ">Back</a>
  <a href="/tambah_persalinan" class="btn btn-primary ">Create</a>
</div>
<form action="">
    @csrf

    
</form>


  @endsection