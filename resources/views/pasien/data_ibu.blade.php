{{-- @dd( $Ibu ) --}}
@extends('layouts.main')

@section('konten')

<div class="tombol">
  <a href="/pasien" class="btn btn-success ">Back</a>
  <a href="/tambah_ibu" class="btn btn-primary ">Create</a>
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

        {{-- collapse data anak berdasarkan nik ibu --}}
      <tr class="accordion-body collapse table-success text-center" id="{{ $dataIbu->NIK }}">
        <th colspan="2">Nama</th>
        <th>Berat Lahir</th>
        <th>Tinggi Lahir</th>
        <th>Jenis Kelamin</th>
        <th colspan="2">Anak ke-</th>
      </tr>

      @foreach ( $dataIbu->anak as $anak)
        <tr class="accordion-body collapse" id="{{ $dataIbu->NIK }}">
          <td colspan="2" class="text-center">{{ $anak->nama }}</td>
          <td>{{ $anak->bb_lahir }} kg</td>
          <td>40 cm</td>
          <td>{{ $anak->jenis_kelamin }}</td>
          <td colspan="2" class="text-center">{{ $anak->anak_ke }}</td>
        </tr>
      @endforeach
    </div>
      @endforeach
    </tbody>
  </table>
</div>

  @endsection