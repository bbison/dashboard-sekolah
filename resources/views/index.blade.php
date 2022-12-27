@extends('layout/navbar')
@section('body')

{{-- Scroll to Top --}}
<a id="button">
  <i class="fas fa-angle-up"></i>
</a>
{{-- Scroll to Top (End) --}}


{{-- Banner Section --}}
<section class="content-banner">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12">
        <div class="banner-con">
          <p class="nama-sekolah">{{$profile->nama_sekolah}}</p>
          <p class="visi-sekolah">{{$profile->visi_sekolah}}</p>
        </div>
      </div>
    </div>

    {{-- Search Box --}}
    <form action="/cari" method="get">
    <div class="search-box-container pt-5 pb-5">
      <div class="col-md-6 col-lg-6 col-11 mx-auto my-auto search">
        <div class="input-group form-container">
          <input type="text" name="search" class="form-control search-input" placeholder="Apa yang ingin anda cari?" autofocus="autofocus" autocomplete="off">
          <span class="input-group-btn">
            <button class="btn btn-search" type="submit">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </span>
        </div>
      </div>
    </div>
    </form>
    {{-- End Search Box --}}
  </div>
</section>


{{-- Berita Section --}}
<section id="berita">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center title-berita">
        <h2>Berita Terbaru</h2>
      </div>
    </div>

    <!--Container berita start-->
    <div class="row mt-5">
      
      <!--row berita start-->
      <div class="row row-cols-1 row-cols-md-3 g-6">
        @foreach ($berita as $berita)
        <div class="col mb-4">
          <div class="card-berita" >
            <div class="image-berita">
              <img src="/image/{{$berita->foto}}" class="card-image"  alt="...">
            </div>
            <div class="card-body border-secondary border-bottom mb-2 py-3 px-2">
              <h5 class="card-title">{{Str::limit($berita->judul, 30)}}</h5>
              <p class="card-text">{{  Str::limit(strip_tags($berita->body), 45)   }}</p>
              <a href="/artikel/{{$berita->slug}}" class="link-to">Selengkapnya...</a>
            </div>
            <div class="text-secondary mb-4 px-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              </svg>
              <p class="d-inline">{{$berita->user->name}}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <!--row berita end-->
    </div>
  </div>
  <!--Container berita end-->

  <div class="d-flex justify-content-center mt-5">
    <a href="/berita" class="btn-primary btn">Tampilkan Semua Berita</a>
  </div>
</section>
{{-- Berita Section End --}}


{{-- Prestasi Section --}}
<section id="prestasi">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center title-prestasi">
        <h2>Prestasi Terbaru</h2>
      </div>
    </div>

    <!--Container prestasi start-->
    <div class="row mt-5">

      <!--row prestasi start-->
      <div class="row">
        @foreach ($prestasi as $prestasi)
        <div class="card-prestasi mt-3" >
          <div class="row-prestasi row col-12 border-white border rounded-2" >
            <div class="col-md-4 p-2">
              <img src="/image/{{$prestasi->foto}}" class="card-img-top" alt="...">
            </div>
            <div class="col-md-8" style="position: relative">
              <h5 class="prestasi-title text-dark mt-2 mb-2">{{$prestasi->judul}}</h5>
              <div class="text-secondary border-bottom border-secondary py-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                  <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                  <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg>
                <p class="d-inline">{{ date('d-m-y', strtotime($prestasi->created_at))  }}</p>
              </div>
              <p class="card-text">{{  Str::limit(strip_tags($prestasi->body), 45)}}</p>
              <a href="/artikel/{{$prestasi->slug}}" class="link-to" style="position: absolute; bottom:10px; right:10px">Selengkapnya...</a>
            </div> 
          </div>
        </div>
        @endforeach
      </div>
      <!--row prestasi end-->

    </div>
  </div>
  <!--Container prestasi end-->

  <div class="d-flex justify-content-center mt-5">
    <a href="/prestasi" class="btn-primary btn">Tampilkan Semua Prestasi</a>
  </div>
</section>
{{-- Prestasi Section End --}}


{{-- JS --}}
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript">

  $(function(){
    var navbar = $('.header-inner');
    $(window).scroll(function(){
      if($(window).scrollTop() <= 40){
        navbar.removeClass('navbar-scroll');
      } else {
        navbar.addClass('navbar-scroll');
      }
    });
  });
  

  var btnsc = $('#button');
  $(window).scroll(function(){
    if($(window).scrollTop() > 300){
      btnsc.addClass('show');
    } else {
      btnsc.removeClass('show');
    }
  });

  btnsc.on('click', function(e){
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
  });
</script>

@include('layout/footer')

@endsection