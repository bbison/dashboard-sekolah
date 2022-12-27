@extends('layout/navbar')
@section('body')
<div class="container pb-3 mt-3"><!--Container berita start-->
    <div class="col-12 row">
        <div class="col-md-8">
            @foreach ($artikel as $artikel)
    
            <h4 class="text-center text-secndary">{{$artikel->judul}}</h4>'
            <div class="rounded-2" style="background-color: rgb(197, 230, 249)">
                <small class="text-secondary p-4 ms-1 rounded-5">oleh : {{$artikel->user->name}}</small>
            </div>
            <div class="container d-flex justify-content-center mt-4">
                <div class="col-8">
                    <img src="/image/{{$artikel->foto}}" style="width:100%" alt="" class="d-inline flex-shrink-0">
                </div>
            </div>
            <div class="container">
                {!!$artikel->body!!}
            </div>
            @endforeach
        </div>


        <div class="col-md-4">
           <div class="fs-4">Berita Terbaru</div>
           @foreach ($beritaterbaru as $berita)
            <div class=" row col-12 border-white border rounded-3 ms-1" >

                <div class="col-4 p-2">
                  <img src="/image/{{$berita->foto}}" width="60%" class="card-img-top" alt="...">
                </div>

                <div class=" col-8" style="position: relative">
                  <h5 class="h6"><a class="text-primary text-decoration-none" href="/artikel/{{$berita->slug}}">{{ Str::limit($berita->judul, 40) }}</a></h5>
                  <div class="text-secondary border-secondary p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                      <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                      <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                    <small class="d-inline"> 
                        {{$berita->created_at->diffForHumans()}}
                    </small>
                  </div>
                  
                </div> 
            </div>
           @endforeach
           <div class="fs-4">Prestasi Terbaru</div>
           @foreach ($prestasiterbaru as $prestasi)
           <div class=" row col-12 border-white border rounded-3 ms-1" >

               <div class="col-4 p-2">
               <img src="/image/{{$prestasi->foto}}" width="60%" class="card-img-top" alt="...">
               </div>

               <div class=" col-8" style="position: relative">
               <h5 class="h6"><a class="text-primary text-decoration-none" href="/artikel/{{$prestasi->slug}}">{{ Str::limit($prestasi->judul, 40) }}</a></h5>
               <div class="text-secondary border-secondary p-2">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                   <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                   <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                   </svg>
                   <small class="d-inline"> 
                       {{$prestasi->created_at->diffForHumans()}}
                   </small>
               </div>
               
               </div> 
           </div>
           @endforeach

           


        </div>

        
     
    </div>
    
 
</div><!--Container berita end-->
@include('layout/footer')
@endsection