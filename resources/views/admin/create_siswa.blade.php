@extends('../../layout/admin')
@section('admin_body')
<form action="/siswa" method="post">
    @csrf
            <label>Nama Siswa</label>
            <input class="form-control"   type="text" name="nama" id="" value=""><br>
            <label>Alamat Siswa</label>
            <input class="form-control"   type="text" name="alamat" id="" value=""><br>
            <label>Kelas Siswa</label>
            <input class="form-control"   type="text" name="kelas" id="" value=""><br>
            <label>Tahun Masuk Siswa</label>
            <input class="form-control"   type="text" name="tahun_masuk" id="" value=""><br>
        
    <button class="btn btn-primary col-12 mb-5" type="submit">Tambah</button>
</form>

@endsection