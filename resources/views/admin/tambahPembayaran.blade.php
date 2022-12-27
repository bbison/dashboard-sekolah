@extends('layout/admin')
@section('admin_body')
<div class=" ">
<div class=" col-12 border-dark">
    <div class="bg-dark text-center fs-3 text-white">
        Catatan Pembayaran
    </div>
    <div>
        <table>
            <tr>
                <td>Nama</td>
                <td>{{$siswa->nama}}</td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>8A</td>
            </tr>
            <tr>
                <td>NISN</td>
                <td>{{$siswa->nisn}}</td>
            </tr>
        </table>

        <table class="table">
            <tr class=" table-secondary">
                <td>Tanggal Pembayaran</td>
                <td>Keterangan Pembayaran</td>
                <td>Jumlah Pembayaran</td>
                <td>status Pembayaran</td>
            </tr>
            @foreach ($siswa->tagihanDanBiaya as $siswa)
            <tr>
                <td>{{$siswa->tanggal_pembayaran}}</td>
                <td>{{$siswa->keterangan_pembayaran}}</td>
                <td>{{$siswa->jumlah_pembayaran}}</td>
                <td >
                    @if ($siswa->status_pembayaran == 'Belum Lunas')
                        <div class="btn-warning d-inline btn">
                            {{$siswa->status_pembayaran}}
                        </div>
                    @elseif($siswa->status_pembayaran == 'Sudah Lunas')
                    <div class="btn-success d-inline btn">
                        {{$siswa->status_pembayaran}}
                    </div>
                    @endif
                    
                    @if ($siswa->status_pembayaran == 'Belum Lunas')
                    <form action="/validasi-pembayaran/{{$siswa->id}}" method="post" class="d-inline">
                        @csrf
                        <button type="submit" class="bg-light text-primary btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-toggle2-off" viewBox="0 0 16 16">
                                <path d="M9 11c.628-.836 1-1.874 1-3a4.978 4.978 0 0 0-1-3h4a3 3 0 1 1 0 6H9z"/>
                                <path d="M5 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0 1A5 5 0 1 0 5 3a5 5 0 0 0 0 10z"/>
                              </svg>
                        </button>
                    </form>
                    @elseif($siswa->status_pembayaran == 'Sudah Lunas')
                    <form action="/batalkan-pembayaran/{{$siswa->id}}" method="post" class="d-inline">
                        @csrf
                        <button type="submit" class="bg-light text-primary btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-toggle2-on" viewBox="0 0 16 16">
                                <path d="M7 5H3a3 3 0 0 0 0 6h4a4.995 4.995 0 0 1-.584-1H3a2 2 0 1 1 0-4h3.416c.156-.357.352-.692.584-1z"/>
                                <path d="M16 8A5 5 0 1 1 6 8a5 5 0 0 1 10 0z"/>
                            </svg>
                        </button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </table>

        

       
    </div>

</div>
</div>
@endsection
