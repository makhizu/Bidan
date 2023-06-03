{{-- @dd( $Ibu ) --}}
@extends('layouts.main')

@section('konten')

<div class="tombol">
    <a href="/data_ibu" class="btn btn-success">Back</a>
</div>

<h1>Detail Data Ibu</h1>

<h2>{{ $Ibu->name }}</h2>
<h2>{{ $Ibu->NIK }}</h2>

@endsection