@extends('layout/admin')
@section('admin_body')
<div class="col-12 d-flex justify-content-end">
    <a href="/dashboard/1/edit" class="btn btn-success m-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
            <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
          </svg>
    </a>
</div>
    <table class="table">
        <tr>
            <td>Nama Sekolah</td>
            <td>{{$profile->nama_sekolah}}</td>
        </tr>
        <tr>
            <td>Visi Sekolah</td>
            <td>{{$profile->visi_sekolah}}</td>
        </tr>
        <tr>
            <td>Misi Sekolah</td>
            <td>{{Str::limit(strip_tags($profile->misi_sekolah),20)}}</td>
        </tr>
        <tr>
            <td>Deskripsi Sekolah</td>
            <td>{{Str::limit(strip_tags($profile->deskripsi_sekolah),20)}}</td>
        </tr>
        <tr>
            <td>Jenis Sekolah</td>
            <td>{{$profile->jenis_sekolah}}</td>
        </tr>
        <tr>
            <td>NSS Sekolah</td>
            <td>{{$profile->nss_sekolah}}</td>
        </tr>
        <tr>
            <td>NPSN Sekolah</td>
            <td> {{$profile->npsn_sekolah}} </td>
        </tr> 
        <tr>
            <td>Akreditasi Sekolah</td>
            <td>{{$profile->akreditasi_sekolah}}</td>
        </tr>
        <tr>
            <td>Jurusan Sekolah</td>
            <td>{{$profile->jurusan_sekolah}}</td>
        </tr>
        <tr>
            <td>Izin Sekolah</td>
            <td>{{$profile->izin_sekolah}}</td>
        </tr>
        <tr>
            <td>Luas Sekolah</td>
            <td>{{$profile->luas_sekolah}}</td>
        </tr>
        <tr>
            <td>Alamat Sekolah</td>
            <td>{{$profile->alamat_sekolah}}</td>
        </tr>
        <tr>
            <td>Kecamatan/Kelurahan Sekolah</td>
            <td>{{$profile->kecamatan_sekolah}}</td>
        </tr>
        <tr>
            <td>Kota/Kabupaten Sekolah</td>
            <td>{{$profile->kota_sekolah}}</td>
        </tr>
        <tr>
            <td>Provinsi Sekolah</td>
            <td>{{$profile->provinsi_sekolah}}</td>
        </tr>
        <tr>
            <td>Telephone Sekolah</td>
            <td>{{$profile->telpon_sekolah}}</td>
        </tr>
        <tr>
            <td>Web Sekolah</td>
            <td>{{$profile->web_sekolah}}</td>
        </tr>
        <tr>
            <td>Email Sekolah</td>
            <td>{{$profile->emai_sekolah}}</td>
        </tr>
        <tr>
            <td>Fax Sekolah</td>
            <td>{{$profile->fax_sekolah}}</td>
        </tr>
    </table>
    <h4>Kepala Sekolah</h4>
    <table class="table">
        <tr>
            <td>Nama Kepala Sekolah</td>
            <td>{{$profile->kepala_sekolah}}</td>
        </tr>
        <tr>
            <td>NIP Kepala Sekolah</td>
            <td>{{$profile->nip_kepala_sekolah}}</td>
        </tr>
        <tr>
            <td>Tempat Tanggal Lahir Kepala Sekolah</td>
            <td>{{$profile->ttl_kepala_sekolah}}</td>
        </tr>
        <tr>
            <td>Alamat Kepala Sekolah</td>
            <td>{{$profile->alamat_kepala_sekolah}}</td>
        </tr>
        <tr>
            <td>Pendidikan Kepala Sekolah</td>
            <td>{{$profile->pendidikan_kepala_sekolah}}</td>
        </tr>
        <tr>
            <td>Jurusan Kepala Sekolah</td>
            <td>{{$profile->jurusan_kepala_sekolah}}</td>
        </tr>
    </table>
@endsection