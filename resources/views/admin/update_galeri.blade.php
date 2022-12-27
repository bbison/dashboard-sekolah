@extends('layout/admin')
@section('admin_body')
<form action="/galeriadmin/{{$galeri->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
            <div class="d-flex justify-content-center">
                <div class="col-sm-4">
                    <img class="img-preview " style="display: block;" src="/image/{{$galeri->foto}}" width="100%">
                </div>
            </div>
            <label>keterangan</label>
            <input class="form-control"   type="text" name="keterangan" id="keterangan" value="{{$galeri->keterangan}}" required>
            <label>Foto</label>
            <input class="form-control mb-3" name="foto" id="image" type="file" placeholder="foto" onchange="previewImage()" >
           
    <button class="btn btn-primary col-12 mb-5" type="submit">Tambah</button>
</form>

<script>
    
    function previewImage(){
     const image= document.querySelector('#image');
     const imgPreview = document.querySelector('.img-preview');
 
     imgPreview.style.display='block';
 
     const oFReader = new FileReader();
     oFReader.readAsDataURL(image.files[0]);
 
     oFReader.onload = function(oFREvent){
         imgPreview.src = oFREvent.target.result;
     }
    }
 
 
 </script>

 <script>
    const judul=document.querySelector('#judul');
    const slug=document.querySelector('#slug');

    judul.addEventListener('change', function(){
        fetch('/postingan/slug?judul='+judul.value)
        .then(response=>response.json())
        .then(data=>slug.value=data.slug)
    })
 </script>


@endsection