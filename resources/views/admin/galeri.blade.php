@extends('layout/admin')
@section('admin_body')
<div class="container">
    <a href="/galeriadmin/create" class="btn btn-success m-3">Tambah galeri</a>
  
<div class="pb-3 mt-3"><!--Container berita start-->
    <div class="row col-12 mb-4"><!--row berita start-->

        @foreach ($galeri as $galeri)

        <div class="card border-bottom border-light bg-none p-3 m-3" style="width: 15rem;postition:relative" id="card-galeri">
            <img src="/image/{{$galeri->foto}}" class="card-img-top" alt="...">
            <div class="text-center p-2 ">
                <p class="card-title">{{$galeri->keterangan}}</p>
                <form action="/galeriadmin/{{$galeri->id}}" method="post" class="d-inline" id="btn-galeri">
                    @csrf
                    @method('DELETE')
                    <button class="btn border-danger text-danger ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                          </svg>
                    </button>
                </form>
                <a href="/galeriadmin/{{$galeri->id}}/edit" class="btn">Edit</a>
            </div>
        </div>

        @endforeach
       
      
    </div><!--row berita end-->
</div><!--Container berita end-->

</div>

@endsection