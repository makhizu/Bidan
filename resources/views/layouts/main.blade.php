<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" type="images/x-icon" href="{{ asset('img/Klinik-Bersalin-Karawang.png') }}" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bidan | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

    {{-- select list search --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    {{-- my css --}}
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    {{-- <link rel="stylesheet" href="/css/home.css"> --}}
  </head>
  <body class="home-page">
    <div class="full-height d-flex">
        
        <div class="sidebar">
            <div class="header">
                <img src="/img/Klinik-Bersalin-Karawang.png" alt="logo bidan" width="100px" height="100px" class="mx-auto d-block logo">
            </div>
            
            {{-- menu --}}

            {{-- HOME --}}
            <div class="list-item">
                <a href="/home" class="text-decoration-none">
                    <div class="navigasi p-2 {{ $title === "Home" ? 'menu-selected text-white' : '' }}">
                        <img src="/img/home.png" alt="home" width="50" height="50" class="mx-auto d-block mb-1">
                        <p class="description text-center mb-0">HOME</p>
                    </div>
                </a>
            </div>

            {{-- DASHBOARD --}}
            <div class="list-item">
                <a href="/page" class="text-decoration-none">
                    <div class="navigasi p-2 {{ $title === "Dashboard" ? 'menu-selected text-white' : '' }}">
                        <img src="/img/dashboard.png" alt="dashboard" width="50" height="50" class="mx-auto d-block mb-1 manu">
                        <p class="description text-center mb-1">DASHBOARD</p>
                    </div>
                </a>
            </div>

            {{-- PASIEN --}}
            <div class="list-item">
                <a href="/pasien" class="text-decoration-none">
                    <div class="navigasi p-2 {{ $title === "Pasien" ? 'menu-selected text-white' : '' }}">
                        <img src="/img/pasien.png" alt="home" width="65" height="50" class="mx-auto d-block mb-1">
                        <p class="description text-center mb-1">PASIEN</p>
                    </div>
                </a>

                <div class="submenu">
                    <a data-bs-toggle="collapse" href="#collapsePasien" role="button" aria-expanded="false" aria-controls="collapsePasien" class="dropicon {{ ($dropdown === "Pasien") ? 'show' : '' }}">
                        <div class="drop d-flex justify-content-center">
                            <i class="bi bi-caret-down-fill"></i>
                        </div>
                    </a>
                    <div class="collapse {{ ($dropdown === "Pasien") ? 'show' : '' }}" id="collapsePasien">

                        <div class="list-group">
                            <a href="/data_ibu" class="list-group-item list-group-item-action sub-item {{ $title === "Data Ibu" ? 'bg-secondary text-white fw-bold' : '' }}">
                                Data Ibu
                            </a>
                            <a href="/data_anak" class="list-group-item list-group-item-action sub-item {{ $title === "Data Anak" ? 'bg-secondary text-white fw-bold' : '' }}">Data Anak</a>
                        </div>
                    </div>
                </div>              
            </div>

            {{-- PELAYANAN --}}
            <div class="list-item">
                <a href="/pelayanan" class="text-decoration-none">
                    <div class="navigasi p-2 {{ $title === "Pelayanan" ? 'menu-selected text-white' : '' }}">
                        <img src="/img/pasien.png" alt="home" width="65" height="50" class="mx-auto d-block mb-1">
                        <p class="description text-center mb-1">PELAYANAN</p>
                    </div>
                </a>

                <div class="submenu">
                    <a data-bs-toggle="collapse" href="#collapsePelayanan" role="button" aria-expanded="false" aria-controls="collapsePelayanan" class="dropicon {{ ($dropdown === "Pelayanan") ? 'show' : '' }}">
                        <div class="drop d-flex justify-content-center">
                            <i class="bi bi-caret-down-fill"></i>
                        </div>
                    </a>
                    <div class="collapse {{ ($dropdown === "Pelayanan") ? 'show' : '' }}" id="collapsePelayanan">

                        <div class="list-group">
                            <a href="/data_kehamilan" class="list-group-item list-group-item-action sub-item {{ $title === "Kehamilan" ? 'bg-secondary text-white fw-bold' : '' }}">
                                Kehamilan
                            </a>
                            <a href="/data_persalinan" class="list-group-item list-group-item-action sub-item {{ $title === "Persalinan" ? 'bg-secondary text-white fw-bold' : '' }}">Persalinan
                            </a>
                            <a href="/data_kb" class="list-group-item list-group-item-action sub-item {{ $title === "Keluarga Berencana" ? 'bg-secondary text-white fw-bold' : '' }}">
                                KB
                            </a>
                            <a href="/data_imunisasi" class="list-group-item list-group-item-action sub-item {{ $title === "Imunisasi" ? 'bg-secondary text-white fw-bold' : '' }}">Imunisasi
                            </a>
                        </div>
                    </div>
                </div>              
            </div>            

            {{-- OBAT --}}
            <div class="list-item">
                <a href="/obat" class="text-decoration-none">
                    <div class="navigasi p-2 {{ $title === "Obat" ? 'menu-selected text-white' : '' }}">
                        <img src="/img/obat.png" alt="obat" width="50" height="50" class="mx-auto d-block mb-1">
                        <p class="description text-center mb-1">OBAT</p>
                    </div>
                </a>

                <div class="submenu">
                    <a data-bs-toggle="collapse" href="#collapseObat" role="button" aria-expanded="true" aria-controls="collapseObat" class="dropicon">
                        <div class="drop d-flex justify-content-center">
                            <i class="bi bi-caret-down-fill"></i>
                        </div>
                    </a>
                    <div class="collapse {{ ($dropdown === "Obat") ? 'show' : '' }}" id="collapseObat">

                        <div class="list-group">
                            <a href="/data_obat" class="list-group-item list-group-item-action sub-item {{ $title === "Obat" ? 'bg-secondary text-white fw-bold' : '' }}">
                                Obat
                            </a>
                            <a href="/data_vaksin" class="list-group-item list-group-item-action sub-item {{ $title === "Vaksin" ? 'bg-secondary text-white fw-bold' : '' }}">
                                Vaksin
                            </a>
                            <a href="/data_akseptor" class="list-group-item list-group-item-action sub-item {{ $title === "Akseptor" ? 'bg-secondary text-white fw-bold' : '' }}">
                                Akseptor
                            </a>
                        </div>
                    </div>
                </div>  
            </div>

            {{-- DATA MASTER --}}
            <div class="list-item">
                <a href="/datamaster" class="text-decoration-none">
                    <div class="navigasi p-2 {{ $title === "Data Master" ? 'menu-selected text-white' : '' }}">
                        <img src="/img/obat.png" alt="obat" width="50" height="50" class="mx-auto d-block mb-1">
                        <p class="description text-center mb-1">DATA MASTER</p>
                    </div>
                </a>

                <div class="submenu">
                    <a data-bs-toggle="collapse" href="#collapseDatamaster" role="button" aria-expanded="true" aria-controls="collapseDatamaster" class="dropicon">
                        <div class="drop d-flex justify-content-center">
                            <i class="bi bi-caret-down-fill"></i>
                        </div>
                    </a>
                    <div class="collapse {{ ($dropdown === "Data Master") ? 'show' : '' }}" id="collapseDatamaster">

                        <div class="list-group">
                            <a href="/data_ibu" class="list-group-item list-group-item-action sub-item {{ $title === "Data Ibu" ? 'bg-secondary text-white fw-bold' : '' }}">
                                Data Ibu
                            </a>
                            <a href="#" class="list-group-item list-group-item-action sub-item {{ $title === "Data Anak" ? 'bg-secondary text-white fw-bold' : '' }}">Data Anak</a>
                        </div>
                    </div>
                </div>  
            </div>
            {{-- menu --}}
        </div>

        <div class="main-content">
            <div class="header d-flex justify-content-between p-2 bg-light">
                <h4>Bidan Hj. Anna Rohanah, Amd. Keb</h4>
                <div class="akun dropdown">
                    <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>nama</span>
                        <img src="/img/akun.png" alt="akun" width="20" height="20">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Ganti Password</a></li>
                        <li><a class="dropdown-item" href="#">Ganti Modul</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                      </ul>
                </div>
            </div>
            <div class="container mt-4">
                @yield('konten')
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script> --}}
    

    {{-- my js --}}
    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>