@extends('../../layout/admin')
@section('admin_body')
<form action="/dashboard/{{$profile->id}}" method="post">
    @method('PUT')
    @csrf
            <label>Nama Sekolah</label>
            <input class="form-control"   type="text" name="nama_sekolah" id="" value="{{$profile->nama_sekolah}}"><br>
            <label>Visi Sekolah</label>
            <input class="form-control"   type="text" name="visi_sekolah" id="" value="{{$profile->visi_sekolah}}"><br>
            <label>Misi Sekolah</label>
            <input class="form-control"   type="hidden" name="misi_sekolah" id="misi_sekolah" value="{{$profile->misi_sekolah}}">
            <trix-editor input="misi_sekolah" class="mb-3"></trix-editor><br>
            <label>Deskripsi Sekolah</label>
            <input class="form-control"   type="hidden" name="deskripsi_sekolah" id="deskripsi_sekolah" value="{{$profile->deskripsi_sekolah}}">
            <trix-editor input="deskripsi_sekolah" class="mb-3"></trix-editor><br>
            <label>Jenis Sekolah</label>
            <input class="form-control"   type="text" name="jenis_sekolah" id="" value="{{$profile->jenis_sekolah}}"><br>
            <label>NSS Sekolah</label>
            <input class="form-control"   type="text" name="nss_sekolah" id="" value="{{$profile->nss_sekolah}}"><br>
            <label>NPSN Sekolah</label>
            <input class="form-control"   type="text" name="npsn_sekolah" id="" value="{{$profile->npsn_sekolah}}"><br>
            <label>Akreditasi Sekolah</label>
            <input class="form-control"   type="text" name="akreditasi_sekolah" id="" value="{{$profile->akreditasi_sekolah}}"><br>
            <label>Jurusan Sekolah</label>
            <input class="form-control"   type="text" name="jurusan_sekolah" id="" value="{{$profile->jurusan_sekolah}}"><br>
            <label>Izin Sekolah</label>
            <input class="form-control"   type="text" name="izin_sekolah" id="" value="{{$profile->izin_sekolah}}"><br>
            <label>Luas Sekolah</label>
            <input class="form-control"   type="text" name="luas_sekolah" id="" value="{{$profile->luas_sekolah}}"><br>
            <label>Alamat Sekolah</label>
            <input class="form-control"   type="text" name="alamat_sekolah" id="" value="{{$profile->alamat_sekolah}}"><br>
            <label>Kecamatan/Kelurahan Sekolah</label>
            <input class="form-control"  type="text" name="kecamatan_sekolah" id="" value="{{$profile->kecamatan_sekolah}}"><br>
            <label>Kota/Kabupaten Sekolah</label>
            <input class="form-control"   type="text" name="kota_sekolah" id="" value="{{$profile->kota_sekolah}}"><br>
            <label>Provinsi Sekolah</label>
            <input class="form-control"   type="text" name="provinsi_sekolah" id="" value="{{$profile->provinsi_sekolah}}"><br>
            <label>Telephone Sekolah</label>
            <input class="form-control"   type="text" name="telpon_sekolah" id="" value="{{$profile->telpon_sekolah}}"><br>
            <label>Web Sekolah</label>
            <input class="form-control"   type="text" name="web_sekolah" id="" value="{{$profile->web_sekolah}}"><br>
            <label>Email Sekolah</label>
            <input class="form-control"   type="text" name="emai_sekolah" id="" value="{{$profile->emai_sekolah}}"><br>
            <label>Fax Sekolah</label>
            <input class="form-control"   type="text" name="fax_sekolah" id="" value="{{$profile->fax_sekolah}}"><br>
    <br>
    <h4>Kepala Sekolah</h4>
            <label>Nama Kepala Sekolah</label>
            <input class="form-control"   type="text" name="kepala_sekolah" id="" value="{{$profile->kepala_sekolah}}"><br>
            <label>NIP Kepala Sekolah</label>
            <input  class="form-control"  type="text" name="nip_kepala_sekolah" id="" value="{{$profile->nip_kepala_sekolah}}"><br>
            <label>Tempat Tanggal Lahir Kepala Sekolah</label>
            <input class="form-control"   type="text" name="ttl_kepala_sekolah" id="" value="{{$profile->ttl_kepala_sekolah}}"><br>
            <label>Alamat Kepala Sekolah</label>
            <input class="form-control"   type="text" name="alamat_kepala_sekolah" id="" value="{{$profile->alamat_kepala_sekolah}}"><br>
            <label>Pendidikan Kepala Sekolah</label>
            <input class="form-control"   type="text" name="pendidikan_kepala_sekolah" id="" value="{{$profile->pendidikan_kepala_sekolah}}"><br>
            <label>Jurusan Kepala Sekolah</label>
            <input class="form-control"   type="text" name="jurusan_kepala_sekolah" id="" value="{{$profile->jurusan_kepala_sekolah}}"><br>
    <br>
    <button class="btn btn-primary col-12 mb-5" type="submit">Update</button>
</form>

@endsection