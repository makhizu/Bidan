{{-- @dd( $Ibu ) --}}
@extends('layouts.main')

@section('konten')

<div class="tombol">
  <a href="" class="btn btn-success ">Back</a>
  <a href="" class="btn btn-primary ">Create</a>
</div>
<form action="">
    @csrf

    
</form>
<div class="mt-4 table-responsive">

  <table class="table table-hover table-bordered">
    <thead class="table-dark">
      <tr class="text-center">
        <th scope="col">No</th>
        <th scope="col">NIK</th>
        <th scope="col">Nama</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Alamat</th>
        <th scope="col">Jumlah Anak</th>
        <th scope="col">Nama Suami</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($Ibu as $dataIbu)
      <tr>
        {{-- Penomoran --}}
        <td scope="row" class="text-center">{{ $loop->iteration }}</td> 
        <td class="text-center">
          <a href="/data_ibu/{{ $dataIbu->NIK }}" class="btn btn-primary"> {{ $dataIbu->NIK }} </a>
        </td>
        <td>{{ $dataIbu->name }}</td>
        <td class="text-center">{{ $dataIbu->tanggal_lahir }}</td>
        <td>{{ $dataIbu->alamat }}</td>

        <td class="text-center" >
          <a href="" class="btn btn-primary accordion-toggle" data-bs-toggle="collapse" data-bs-target="#{{ $dataIbu->NIK }}">
            {{ $dataIbu->jumlah_anak }}
          </a>
        </td>
        <td>{{ $dataIbu->nama_suami }}</td>
      <tr class="accordion-body collapse table-success text-center" id="{{ $dataIbu->NIK }}">
        <th colspan="2">Nama</th>
        <th>Berat Lahir</th>
        <th>Tinggi Lahir</th>
        <th>Jenis Kelamin</th>
        <th colspan="2">Anak ke-</th>
      </tr>
      <tr class="accordion-body collapse" id="{{ $dataIbu->NIK }}">
        <td colspan="2" class="text-center">Muhfid</td>
        <td>3,5 kg</td>
        <td>40 cm</td>
        <td>Laki - laki</td>
        <td colspan="2" class="text-center">1 </td>
      </tr>
    </div>
      @endforeach
    </tbody>
  </table>
</div>

  @endsection