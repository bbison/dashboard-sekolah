@extends('layout/navbar')
@section('body')


{{-- Berita Section --}}
<section id="berita">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center title-berita">
        <h2>Berita</h2>
      </div>
    </div>

    <!--Container berita start-->
    <div class="row mt-5">
      
      <!--row berita start-->
      <div class="row row-cols-1 row-cols-md-3 g-6">
        @foreach ($beritas as $berita)
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
      <div class="d-flex justify-content-center">
        <div class="d-inine">
          {{ $beritas->links() }}
        </div>
      </div>
    </div>
    
  </div>
  <!--Container berita end-->

</section>
{{-- Berita Section End --}}





{{-- <div class="container pb-3 mt-3"><!--Container berita start-->
  <div class="row col-12 mb-4"><!--row berita start-->
    @foreach ($beritas as $berita)
    <div class="card border-bottom border-white" style="width: 25rem;">
      <img src="image/{{$berita->foto}}" class="card-img-top" alt="...">
      <div class="card-body border-secondary border-bottom">
        <h5 class="card-title">{{$berita->judul}}</h5>
        <p class="card-text">{{Str::limit(strip_tags($berita->body), 45)}}</p>
        <a href="/artikel/{{$berita->slug}}" class="text-secondary">Selengkapnya <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
          <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
        </svg>
        </a>
      </div>
      <div class="text-secondary mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        </svg>
        <p class="d-inline">ADMIN</p>
      </div>
    </div>
    @endforeach
  </div>
  <!--row berita end-->
  
  <div class="d-flex justify-content-center">
    <div class="d-inine">
      {{ $beritas->links() }}
    </div>
  </div>
</div><!--Container berita end--> --}}



@include('layout/footer')
@endsection