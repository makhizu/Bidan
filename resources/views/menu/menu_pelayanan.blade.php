@extends('layouts.main')

@section('konten')


    <h1>PELAYANAN</h1>
    
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4">
      <div class="col">
        <a href="/data_kehamilan">
          <div class="card">
            <div class="in-card d-inline">
              <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top" 
              alt="Hollywood Sign on The Hill" />
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">Kehamilan</h5>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="/data_persalinan">
          <div class="card">
            <div class="in-card d-inline">
              <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp" class="card-img-top" 
              alt="Hollywood Sign on The Hill" />
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">Persalinan</h5>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="/data_kb">
          <div class="card">
            <div class="in-card d-inline">
              <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp" class="card-img-top" 
              alt="Hollywood Sign on The Hill" />
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">KB</h5>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="/data_imunisasi">
          <div class="card">
            <div class="in-card d-inline">
              <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp" class="card-img-top" 
              alt="Hollywood Sign on The Hill" />
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">Imunisasi</h5>
            </div>
          </div>
        </a>
      </div>       
    </div>
    
  
  
        
      
@endsection