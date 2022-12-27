@extends('/layout/navbar')
@section('body')

{{-- Galeri Section --}}
<section id="galeri">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center title-galeri">
          <h2>Hasil Pencaian</h2>
        </div>
      </div>
  
      <!--Container Galeri start-->
      <div class="row mt-5">
        
        <!--row Galeri start-->
        <div class="row row-cols-1 row-cols-md-3 g-6">
          @if ($jumlah >=1)
          @foreach ($post as $berita)
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
          @else
          <div class="" style="height: 300px">
              <div class="fs-2 p-4">
                  Post Tidak Ditemukan
              </div>
          </div>
             
          @endif
        </div>
        <!--row Galeri end-->
      
      </div>
      
    </div>
    <!--Container Galeri end-->
  
  </section>


@include('layout/footer')
@endsection

