@extends('../../layout/admin')
@section('admin_body')

<div class="container">

    <div class="row">

        <div class="col-12">

        
            <a href="/ppdb" class="btn btn-tambah my-3">
                Tambah Data
            </a>

             <!--Br e aja dihapus soal e ketumpuk header -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" >
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2" value=""  onkeyup="ajax(this.value)">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <table class="table table-striped">
                <div class="table-category">
                    <tr>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Tahun Masuk</th>
                        <th>Status</th>
                        <th>Edit Data</th>
                    </tr>
                </div>
            @foreach ($siswa as $siswa)
            <tr class="show" id="show">
                <td> {{$siswa->nama}} </td>
                {{-- <td> {{$siswa->alamat}} </td>  MASUKAN KE MENU DETAIL! --}}
                <td>
                    @if ($siswa->kelas_id==0)
                        <form action="/siswa/updatekelas" class="col-8 d-flex ">
                            <select name="kelas_id" id="" class="form-select d-inline">
                                <option value=""> ==Silahkan update Kelas==</option>
                                @foreach ($kelas as $kls)
                                <option value="{{$kls->id}}">{{$kls->nama_kelas}}</option>
                                @endforeach
                            </select>
                            <input type="hidden" name="siswa_id" id="" value="{{$siswa->id}}">
                            <button type="submit" class="ms-2 btn btn-success d-inline">Masukan</button>
                        </form>

                    @elseif($siswa->status=='Menunggu Verifikasi')
                    Verifikasi Data Siswa Terlebih Dahulu
                    @else
                    {{$siswa->kelas->nama_kelas}} 
                    @endif
                    
                </td>
                <td> {{$siswa->created_at->isoFormat('Y')}}
                <td> {{$siswa->status}}
                <td> {{$siswa->tahun_masuk}} 
                <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                    </svg>
                </a> 
                <form action="/siswa/{{$siswa->id}}" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                        </svg>
                    </button>
                </form>
                <a href="/siswa/{{$siswa->id}}/detail" class="btn btn-primary">
                    Detail
                </a> 
                </td>
            
            </tr>
            @endforeach

            </table>

        </div>

    </div>

</div>

<script>
    function ajax(str) {
  
   const xhttp = new XMLHttpRequest();
   xhttp.onload = function() {
     document.getElementById("show").innerHTML = this.responseText;
   }
   xhttp.open("GET", "/siswa/ajax/"+str);
   xhttp.send();
 }
     
 </script>

@endsection