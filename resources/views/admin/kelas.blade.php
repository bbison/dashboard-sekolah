@extends('layout/admin')
@section('admin_body')
<div class="container">
    @if(session()->has('berhasil'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil ! </strong> Kelas Berhasil Ditambahkan
        <button type="button" onclick='hide()' class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
    {{-- Buat nama Kelas --}}
    <div class="fs-3">Daftar Kelas</div>
    <p>Disini ada bisa mengatur Nama Kelas dan Siapa Wali kelasnya</p>
  
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="/kelas" method="post" >
        @csrf
        <div class="input-group">
            <input type="text" class="form-control bg-light  border-1 small" placeholder="Nama Kelas"
                aria-label="Search" aria-describedby="basic-addon2" value="" name="nama_kelas" required >
                <select class="form-select ms-2" name="user_id" required>
                    <option disabled>==Pilih Wali Kelas==</option>
                    @foreach ($user as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            <div class="input-group-append ms-2">
                <button class="btn btn-success" type="submit">
                    Tambah Kelas
                </button>
            </div>
        </div>
    </form>
{{-- Ganti Wali --}}
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="/kelas/gantiwali" method="post" >
        @csrf
        <div class="input-group">
                <select class="form-select ms-2" name="kelas_id" required>
                    <option disabled>==Pilih Kelas==</option>
                    @foreach ($edit_kelas as $kls)
                    <option value="{{$kls->id}}">{{$kls->nama_kelas}}</option>
                    @endforeach
                </select>
                <select class="form-select ms-2" name="user_id" required>
                    <option disabled>==Pilih Wali Kelas==</option>
                    @foreach ($edit_user as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                 
                </select>
            <div class="input-group-append ms-2">
                <button class="btn btn-success" type="submit">
                    Ganti Wali
                </button>
            </div>
        </div>
    </form>



  
<div class="pb-3 mt-3"><!--Container berita start-->
    <div class="row col-12 mb-4"><!--row berita start-->

        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Kelas</th>
                <th scope="col">Wali Kelas</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($kelas as $kelas)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$kelas->nama_kelas}}</td>
                    <td>{{$kelas->user->name}}</td>
                  </tr>      
                @endforeach
            </tbody>
          </table>
    
       
      
    </div><!--row berita end-->
</div><!--Container berita end-->

</div>
<br>
<br>
<br>


<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="/kelas/gantinama" method="post" >
    @csrf
    <div class="input-group">
            <select class="form-select ms-2" name="kelas_id" required>
                <option disabled>==Pilih Kelas==</option>
                @foreach ($edit_kelas as $kelas)
                <option value="{{$kelas->id}}">{{$kelas->nama_kelas}}</option>
                @endforeach
            </select>
            <input type="text" class="form-control bg-light  border-1 small" placeholder="Ganti Nama Kelas"
                aria-label="Search" aria-describedby="basic-addon2" value="" name="nama_kelas" required >
        <div class="input-group-append ms-2">
            <button class="btn btn-success" type="submit">
                Ganti Nama Kelas
            </button>
        </div>
    </div>
</form>

@endsection