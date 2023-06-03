{{-- @dd( $Ibu ) --}}
@extends('layouts.main')

@section('konten')

<h1>DATA KELUARGA BERENCANA</h1>
<div class="tombol">
  <a href="/pelayanan" class="btn btn-success ">Back</a>
  <a href="/tambah_kb" class="btn btn-primary ">Create</a>
</div>
<form action="">
    @csrf

    
</form>


  @endsection