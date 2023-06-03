@extends('layouts.main')

@section('konten')


    <h1>DATA MASTER</h1>
    
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4">
      <div class="col">
        <a href="/data_ibu">
          <div class="card">
            <div class="in-card d-inline">
              <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top" 
              alt="Hollywood Sign on The Hill" />
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">Data Ibu</h5>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="/data_anak">
          <div class="card">
            <div class="in-card d-inline">
              <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp" class="card-img-top" 
              alt="Hollywood Sign on The Hill" />
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">Data Anak</h5>
            </div>
          </div>
        </a>
      </div>     
    </div>
    
  
  
        
      
@endsection