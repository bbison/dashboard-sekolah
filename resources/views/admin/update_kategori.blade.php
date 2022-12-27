@extends('../../layout/admin')
@section('admin_body')
<form action="/kategori/{{$kategori->id}}" method="post">
    @method('PUT')
    @csrf
            <label>kategori</label>
            <input class="form-control"   type="text" name="name" id="" value="{{$kategori->name}}"><br>
            <input class="form-control"   type="hidden" name="slug" id="" value=""><br>

        
    <button class="btn btn-primary col-12 mb-5" type="submit">update</button>
</form>

@endsection