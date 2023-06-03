@extends('layouts.main')

@section('konten')


    <h1>HOME</h1>
    
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4">
      
      <div class="col">
        <a href="/dashboard">
          <div class="card">
            <div class="in-card d-inline">
              <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top" 
              alt="Hollywood Sign on The Hill" />
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">Dashboard</h5>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="/pasien">
          <div class="card">
            <div class="in-card d-inline">
              <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp" class="card-img-top" 
              alt="Hollywood Sign on The Hill" />
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">Pasien</h5>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="/pelayanan">
          <div class="card">
            <div class="in-card d-inline">
              <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp" class="card-img-top" 
              alt="Hollywood Sign on The Hill" />
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">Pelayanan</h5>
            </div>
          </div>
        </a>
      </div>      
      <div class="col">
        <a href="/obat">
          <div class="card">
            <div class="in-card d-inline">
              <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/043.webp" class="card-img-top" 
              alt="Hollywood Sign on The Hill" />
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">Obat</h5>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="/datamaster">
          <div class="card">
            <div class="in-card d-inline">
              <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp" class="card-img-top" 
              alt="Hollywood Sign on The Hill" />
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">Data Master</h5>
            </div>
          </div>
        </a>
      </div>            
    </div>
    
  
  
        
      
@endsection