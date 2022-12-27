@extends('layout/navbar')
@section('body')

{{-- Galeri Section --}}
<section id="galeri">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center title-galeri">
          <h2>Galeri</h2>
        </div>
      </div>
  
      <!--Container Galeri start-->
      <div class="row mt-5">
        
        <!--row Galeri start-->
        <div class="row row-cols-1 row-cols-md-3 g-6">
          @foreach ($galeris as $galeri)
          <div class="col mb-4">
            <div class="card-galeri" >
              <div class="image-galeri">
                <img src="/image/{{$galeri->foto}}" class="card-image-top" width="100%"  alt="...">
              </div>
              <div class="card-body border-secondary border-bottom mb-2 py-3 px-2">
                <h5 class="card-title">{{$galeri->keterangan}}</h5>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <!--row Galeri end-->
        <div class="d-flex justify-content-center">
          <div class="d-inine">
            {{ $galeris->links() }}
          </div>
        </div>
      </div>
      
    </div>
    <!--Container Galeri end-->
  
  </section>
  {{-- Galeri Section End --}}




{{-- <div class="container pb-3 mt-3"><!--Container berita start-->
    <div class="row col-12 mb-4"><!--row berita start-->
        @foreach ($galeris as $galeri)
        <div class="card border-bottom border-white" style="width: 25rem;">
            <img src="/image/{{$galeri->foto}}" class="card-img-top" alt="...">
            <div class="text-center ">
                <p class="card-title">{{$galeri->keterangan}}</p>
            </div>
        </div>
        @endforeach
    </div><!--row berita end-->
    <div class="d-flex justify-content-center">
        <div class="d-inine">
          {{ $galeris->links() }}
        </div>
      </div>
</div><!--Container berita end--> --}}

@include('layout/footer')
@endsection