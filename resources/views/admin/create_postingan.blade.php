@extends('layout/admin')
@section('admin_body')
<form action="/postingan" method="post" enctype="multipart/form-data">
    @csrf
            <div class="d-flex justify-content-center">
                <div class="col-sm-4">
                    <img class="img-preview " style="display: block;" src="" width="100%">
                </div>
            </div>
            <label>Judul</label>
            <input class="form-control"   type="text" name="judul" id="judul" value="">
            <small>Tekan tab untuk membuat slug otomatis</small><br><br>
            <label>Slug</label>
            <input class="form-control"   type="text" name="slug" id="slug" value="" readonly><br>
            <label>Foto</label>
            <input class="form-control" name="foto" id="image" type="file" placeholder="foto" onchange="previewImage()" required>
            <small>Format Foto Disarankan JPG</small><br><br>
            <label>Kategori</label>
            <select name="kategori_id" id="cars" class="form-control">
                @foreach ($kategori as $kategori)
                <option value="{{$kategori->id}}">{{$kategori->name}}</option>
                @endforeach
              </select><br>
            <label>Body</label>
            <input class="form-control" id="x"   type="hidden" name="body" id="" value=""><br>
            <trix-editor input="x" class="mb-3"></trix-editor>
        
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