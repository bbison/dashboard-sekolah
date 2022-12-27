@extends('layout/navbar')
@section('body')

{{-- Prestasi Section --}}
<section id="prestasi">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center title-prestasi">
        <h2>Prestasi</h2>
      </div>
    </div>

    <!--Container prestasi start-->
    <div class="row mt-5">

      <!--row prestasi start-->
      <div class="row">
        @foreach ($prestasis as $prestasi)
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
                <p class="d-inline">{{$prestasi->created_at}}</p>
              </div>
              <p class="card-text">{{  Str::limit(strip_tags($prestasi->body), 45)}}</p>
              <a href="/artikel/{{$prestasi->slug}}" class="link-to" style="position: absolute; bottom:10px; right:10px">Selengkapnya...</a>
            </div> 
          </div>
        </div>
        @endforeach
      </div>
      <!--row prestasi end-->

      <div class="d-flex justify-content-center">
        <div class="d-inine">
          {{ $prestasis->links() }}
        </div>
      </div>

    </div>
  </div>
  <!--Container prestasi end-->

</section>
{{-- Prestasi Section End --}}




{{-- 
<div class="container pb-3 mt-3"><!--Container berita start-->
  <div class="row col-12 mb-4"><!--row berita start-->
    @foreach ($prestasis as $berita)
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
  </div><!--row berita end-->
  <div class="d-flex justify-content-center">
    <div class="d-inine">
      {{ $prestasis->links() }}
    </div>
  </div>
</div><!--Container berita end--> --}}


@include('layout/footer')
@endsection