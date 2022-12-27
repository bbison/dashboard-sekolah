@extends('layout/navbar')
@section('body')
<div class="container mt-3">
    <div class="col p-2">
        <div class="text-center fs-2">Visi</div>
        <div class="d-flex justify-content-center">
            <div class="col-8"> {{$profile->visi_sekolah}}</div>
        </div>
       
    </div>
    <div class="col p-2 ">
        <div class="text-center fs-2">Misi</div>
        <div class="d-flex justify-content-center">
            <div class="col-8">{{$profile->misi_sekolah}}</div>
        </div>
       
    </div>
</div>

<div class="mt-3 p-2">
    <div class="d-flex justify-content-center">
        <div class="text-center row fs-2">Profile Sekolah</div>
    </div>
    <div class="d-flex justify-content-center container">    
    <table class="table ">
        <tr>
            <td>Nama Sekolah</td>
            <td>{{$profile->nama_sekolah}}</td>
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
            <td>{{$profile->npsn_sekolah}}</td>
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
            <td>Kota Sekolah</td>
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
    </div>
   
</div>

<div class="mt-3 p-2">
    <div class="d-flex justify-content-center">
        <div class="text-center row fs-2">Kepala Sekolah</div>
    </div>
    <div class="d-flex justify-content-center container">    
    <table class="table ">
        <tr>
            <td>Nama</td>
            <td>{{$profile->kepala_sekolah}}</td>
        </tr>
        <tr>
            <td>NIP</td>
            <td>{{$profile->nip_kepala_sekolah}}</td>
        </tr>
        <tr>
            <td>Tempat Tanggal Lahir</td>
            <td>{{$profile->ttl_kepala_sekolah}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>{{$profile->alamat_kepala_sekolah}}</td>
        </tr>
        <tr>
            <td>Pendidikan Terakhir</td>
            <td>{{$profile->pendidikan_kepala_sekolah}}</td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>{{$profile->jurusan_kepala_sekolah}}</td>
        </tr>
       
    </table>
    </div>
   
</div>

@include('layout/footer')
@endsection