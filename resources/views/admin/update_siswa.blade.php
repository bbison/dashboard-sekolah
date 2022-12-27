@extends('../../layout/admin')
@section('admin_body')
<form action="/siswa/{{$siswa->id}}" method="post">
    @csrf
    @method('PUT')
            <label>Nama Siswa</label>
            <input class="form-control"   type="text" name="nama" id="" value="{{$siswa->nama}}"><br>
            <label>Alamat Siswa</label>
            <input class="form-control"   type="text" name="alamat" id="" value="{{$siswa->alamat}}"><br>
            <label>Kelas Siswa</label>
            <input class="form-control"   type="text" name="kelas" id="" value="{{$siswa->kelas}}"><br>
            <label>Tahun Masuk Siswa</label>
            <input class="form-control"   type="text" name="tahun_masuk" id="" value="{{$siswa->tahun_masuk}}"><br>
        
    <button class="btn btn-primary col-12 mb-5" type="submit">Update</button>
</form>

@endsection