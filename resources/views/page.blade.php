@extends('layouts.main')

@section('konten')
    <h1>Konten 2</h1>

    <form class="form-floating m-4">
        <div class="row">

          {{-- identitas ortu --}}
          
          <div class="col">
            <fieldset>
            <legend>Identitas Orang Tua</legend>

            <div class="mb-3">
              <label for="orangtua" class="form-label">Nama Orang tua (Ayah / Ibu)</label>
              {{-- <input type="text" class="form-control" id="orangtua"> --}}
              <input list="namaortu" name="orangtua" id="orangtua">
                <datalist id="namaortu">
                  <option selected></option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </datalist>

                <label for="browser">Choose your browser from the list:</label>
                <select id="select-state" placeholder="Pick a state..." style="width: 50%">
                  <option value="">Select a state...</option>
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                  <option value="AR">Arkansas</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="DC">District of Columbia</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="HI">Hawaii</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                </select>
              </div>

            </div>
            <div class="row">
              <div class="mb-3 col">
                <label for="nik_ibu" class="form-label">NIK Ibu</label>
                <input type="text" class="form-control" id="nik_ibu">
              </div>
              <div class="mb-3 col">
                <label for="no_kk" class="form-label">No KK</label>
                <input type="text" class="form-control" id="no_kk">
              </div>                        
            </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat">
          </div>
          
        </fieldset>
        </div>

        {{-- identitas bayi --}}
        <div class="col">
          <fieldset>
            <legend>Identitas Bayi</legend>
            <div class="mb-3">
              <label for="bayi" class="form-label">Nama Bayi</label>
            <input type="text" class="form-control" id="bayi" aria-describedby="emailHelp">          
          </div>
        <div class="row">

          <div class="mb-3 col">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="text" class="form-control" id="tgl_lahir">
          </div>
          <div class="mb-3 col">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir">
          </div>
        </div>

        <div class="row">

          <div class="mb-3 col">
            <label for="bb_lahir" class="form-label">Berat Badan Lahir</label>
            <input type="text" class="form-control" id="bb_lahir">
          </div>        
          <div class="mb-3 col">
            <label for="jk" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" id="jk">
          </div>
        </div>
      </fieldset>
      <div >
        <p>Klik tombol jika data bayi tidak ada</p>
        <a href="#" class="btn btn-success">Tambah Data Bayi</a>
      </div>
      </div>
      
    </div>
        {{-- data kunjungan dan imunisasi --}}
        <div class="col-md-6">

          <div class="mb-3">
            <label for="umur_bayi" class="form-label">Umur</label>
          <input type="text" class="form-control" id="umur_bayi">
        </div>        
        <div class="mb-3">
          <label for="bb" class="form-label">Berat Badan</label>
          <input type="text" class="form-control" id="bb">
        </div>
        <div class="mb-3">
          <label for="jenis_imunisasi" class="form-label">Jenis Imunisasi</label>
          <input type="text" class="form-control" id="jenis_imunisasi">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form> 
@endsection