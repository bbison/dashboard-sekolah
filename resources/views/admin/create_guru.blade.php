@extends('../../layout/admin')
@section('admin_body')
<form action="/guru-dan-karyawan" method="post">
    @csrf
            <label>Nama Guru</label>
            <input class="form-control"   type="text" name="name" id="" value=""><br>
            <label>Email Guru</label>
            <input class="form-control"   type="text" name="email" id="" value=""><br>
            <label>Jabatan Guru</label>
            <input class="form-control"   type="text" name="jabatan" id="" value=""><br>
        
    <button class="btn btn-primary col-12 mb-5" type="submit">Tambah</button>
</form>

@endsection