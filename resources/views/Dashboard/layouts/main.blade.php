<!doctype html> 
<html lang="en"> 
 
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
 
    <title>Lelang Aset Diskominfosan | Dashboard</title> 
 
 
    <!-- Bootstrap core CSS --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
 
 
 
    <!-- Custom styles for this template --> 
    <link href="/css/dashboard.css" rel="stylesheet"> 
 
    {{-- trix editor --}} 
    <link rel="stylesheet" type="text/css" href="/css/trix.css"> 
    <script type="text/javascript" src="/js/trix.js"></script> 
 
    <style> 
        trix-toolbar [data-trix-button-group="file-tools"] { 
            display: none; 
        } 
    </style> 
</head> 
 
<body> 
 
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow mb-3"> 
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-5" href="/"><b>Lelang Aset</b></a> 
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" 
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" 
            aria-label="Toggle navigation"> 
            <span class="navbar-toggler-icon"></span> 
        </button> 
        {{-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> --}} 
 
 
        <div class="d-flex gap-5 justify-content-center px-5" id="dropdownMacos"> 
            <ul class="navbar-nav-dropdown ms-auto"> 
                <li class="nav-item dropdown"> 
                    <a class="nav-link dropdown-toggle pt-3" href="#" id="navbarDropdown" role="button" 
                        data-bs-toggle="dropdown" aria-expanded="false"><span data-feather="user"></span> 
                         
                    <ul class="dropdown-menu dropdown-menu-macos mx-0 border-0 shadow mt-3"> 
                        <li><a class="dropdown-item" href="/"> Home <span data-feather="home"></span></a></li> 
                        <form action="/logout" method="post"> 
                            @csrf 
                            <button type="submit" class="dropdown-item"></i> 
                                Keluar <span data-feather="log-out"></span></button> 
                        </form> 
                    </ul> 
                </li> 
            </ul> 
        </div> 
    </header> 
<div class="container-fluid"> 
        <div class="row"> 
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse  mt-3"> 
                <div class="position-sticky pt-3 px-4"> 
                    <ul class="nav flex-column"> 
                        <li class="nav-item"> 
                            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" 
                                href="/dashboard"> 
                                <span data-feather="home"></span> 
                                Dashboard 
                            </a> 
                        </li> 
                        <li class="nav-item"> 
                            <a class="nav-link {{ Request::is('dashboard/tambah-lelang*') ? 'active' : '' }}" 
                                href="/dashboard/tambah-lelang"> 
                                <span data-feather="grid"></span> 
                                Tambah Lelang 
                            </a> 
                        </li> 
                        <li class="nav-item"> 
                            <a class="nav-link {{ Request::is('dashboard/materi*') ? 'active' : '' }}" 
                                href="{{ url('/tambah-sewa')}}"> 
                                <span data-feather="dollar-sign"></span> 
                                Tambah Sewa 
                            </a> 
                        </li> 
                        <li class="nav-item"> 
                            <a
class="nav-link {{ Request::is('dashboard/pesanan*') ? 'active' : '' }}" 
                                href="/dashboard/pesanan"> 
                                <span data-feather="book"></span> 
                                Data Peserta 
                            </a> 
                        </li> 
                    </ul> 
                </div> 
            </nav> 
 
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> 
                @yield('container') 
            </main> 
        </div> 
    </div> 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"> 
    </script> 
 
 
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" 
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"> 
    </script> 
 
    <script src="/js/dashboard.js"></script> 
 
</body> 
 
</html>