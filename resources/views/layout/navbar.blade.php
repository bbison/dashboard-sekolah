<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MTS MA'ARIF NYATNYONO</title>
    
    {{-- Bootstrap V.5 ---> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    {{-- CSS File --}}
    <link rel="stylesheet" href="/style.css">
    
    {{-- FontAwesome ---> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  

</head>
<body>

  {{-- Navbar Start --}}
<header class="header">
  <div class="header-inner">
    <div class="container ">
      <nav class="navbar navbar-expand-lg my-navbar">
          <a class="navbar-brand" href="/">
            <span class="logo">
              <img src="https://mval.my.id/logo-lp-ma'arif-nu.png" alt="logo" width="40" class="d-inline-block me-3 bg-light">MTS MA'ARIF NYATNYONO
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></i></span>
          </button>
          <div class="collapse navbar-collapse text-center align-items-center" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item mx-2">
                <a class="nav-link" aria-current="page" href="/">BERANDA</a>
              </li>
              <li class="nav-item dropdown mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  PROFIL
                </a>
                <ul class="dropdown-menu text-center align-items-center" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/profile/visi-misi">VISI & MISI</a></li>
                  <li><a class="dropdown-item" href="/profile/sejarah">SEJARAH</a></li>
                  <li><a class="dropdown-item" href="/profile/fasilitas">FASILITAS</a></li>
                  <li><a class="dropdown-item" href="/profile/guru-dan-karyawan">GURU & KARYAWAN</a></li>
                </ul>
              </li>
              <li class="nav-item mx-1">
                <a class="nav-link" href="/berita">BERITA
                </a>
              </li>
              <li class="nav-item mx-1">
                <a class="nav-link" href="/prestasi">PRESTASI
                </a>
              </li>
              <li class="nav-item mx-1">
                <a class="nav-link" href="/galeri">GALERI
                </a>
              </li>
              <li class="nav-item mx-1">
                <a class="nav-link" href="/ppdb">PPDB
                </a>
              </li>
            </ul>
            <div>
              <a class="button-primary btn" href="#kontak">KONTAK
              </a>
            </div>
          </div>
      </nav>

    </div>
  </div>
</header>
{{-- Navbar End --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

@yield('body')

</body>
</html>