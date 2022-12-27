<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pendaftaran</title>

    <style></style>
</head>
<body>

    <center class="mt-3">
        <table border="0" width="100%">
            <tr>
                <td width="3%"></td>
                <td width="15%" align="center">
                    <img src="https://mval.my.id/logo-lp-ma'arif-nu.png" width="100px">
                </td>
                <td width="80%">
                    <center>
                        <font size="3">
                            <b>YAYASAN PENDIDIK ISLAM MA'ARIF</b>
                        </font>
                        <br>
                        <font size="5">
                            <b>MTs MA'ARIF NYATNYONO</b>
                        </font>
                        <br>
                        <font size="2">
                            <i>Jl. Hasan Munadi, Sendangrejo, Nyatnyono, Kec. Ungaran Barat, Kab. Semarang, Jawa Tengah</i>
                        </font>
                        <br>
                        <font size="2">
                            <i>Kode Pos : 50551 Telp. : 08888888</i>
                        </font>
                    </center>
                </td>
                <td width="2%"></td>
            </tr>
            <tr>
                <td width="3%"></td>
                <td colspan="2" width="95%">
                    <hr>
                </td>
                <td width="2%"></td>
            </tr>
        </table>
        
        <table border="0" width="100%">
            <tr align="center">
                <td width="5%"></td>
                <td width="90%">
                    <font size="3">
                        <b>FORMULIR PENDAFTARAN PESERTA DIDIK BARU</b>
                    </font>
                    <br>
                    <font size="3">
                        <b>TAHUN PELAJARAN 2023/2024</b>
                    </font>
                </td>
                <td width="5%"></td>
            </tr>
        </table>
    </center>
    
    <br>
    <br>
    
    <center>
        <table border="0" width="100%">
            <tr>
                <td width="3%"></td>
                <td>
                    <font size="3">
                        <b>A. DATA CALON PESERTA DIDIK</b>
                    </font>
                    <table border="0" width="100%">
                        <tr>
                            <td width="25%">Nama</td>
                            <td width="1%">:</td>
                            <td width="59%">{{$s->nama}}</td>
                            <td rowspan="6" align="center">
                                <img src="https://mval.my.id/template-foto-form.jpg" width="113px" height="151px">
                            </td>
                        </tr>
                        <tr>
                            <td>Tempat/Tanggal Lahir</td>
                            <td>:</td>
                            <td>{{$s->tempat_lahir}},{{ \Carbon\Carbon::parse($s->created_at)->isoFormat('D MMMM Y')}}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>{{$s->jenis_kelamin}}</td>
                        </tr>
                        <tr>
                                <td>Agama</td>
                                <td>:</td>
                                <td>Islam</td>
                        </tr>
                        {{-- <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>email@gmail.com</td>
                        </tr> --}}
                        <tr>
                            <td>No. Kontak</td>
                            <td>:</td>
                            <td>{{$s->kontak_siswa}}</td>
                        </tr>
                        <tr>
                            <td>No. Pendaftaran</td>
                            <td>:</td>
                            <td>{{$s->id}}</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </center>
    
    <center>
        <table border="0" width="100%">
            <tr>
                <td width="3%"></td>
                <td>
                    <font size="3">
                        <b>B. DATA ORANG TUA/WALI</b>
                    </font>
                    <table border="0" width="100%">
                        {{-- AYAH --}}
                        <tr>
                            <td width="25%">Nama Ayah</td>
                            <td width="1%">:</td>
                            <td width="74%">{{$s->nama_ayah}}</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>:</td>
                            <td>{{$s->pekerjaan_ayah}}</td>
                        </tr>
                        {{-- IBU --}}
                        <tr>
                            <td>Nama Ibu</td>
                            <td>:</td>
                            <td>{{$s->nama_ibu}}</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>:</td>
                            <td>P{{$s->pekerjaan_ibu}}</td>
                        </tr>
                        {{-- KONTAK DAN ALAMAT --}}
                        <tr>
                            <td>No. Kontak</td>
                            <td>:</td>
                            <td>0{{$s->kontak_ayah}}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{$s->alamat_orangtua}}</td>
                        </tr>
                        <tr>
                            <td width="25%"></td>
                            <td width="1%"></td>
                            <td width="74%">Kec. {{$s->kecamatan}}, Kab. {{$s->kabupaten}}, Prov. {{$s->provinsi}}</td>
                        </tr>
                        {{-- WALI --}}
                        <tr>
                            <td>Nama Wali</td>
                            <td>:</td>
                            <td>{{$s->nama_wali}}</td>
                        </tr>
                        <tr>
                            <td>Hubungan Wali</td>
                            <td>:</td>
                            <td>{{$s->status_wali}}</td>
                        </tr>
                        <tr>
                            <td>No. Kontak</td>
                            <td>:</td>
                            <td>{{$s->kontak_wali}}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{$s->alamat_wali}}</td>
                        </tr>
                        <tr>
                            <td width="25%"></td>
                            <td width="1%"></td>
                            <td width="74%">{{$s->kecamatan_wali }} {{$s->kabupaten_wali }} {{$s->provinsi_wali }}</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </center>
    
    <center>
        <table border="0" width="100%">
            <tr>
                <td width="3%"></td>
                <td>
                    <font size="3">
                        <b>C. DATA SEKOLAH</b>
                    </font>
                    <table border="0" width="100%">
                        <tr>
                            <td width="25%">Asal Sekolah</td>
                            <td width="1%">:</td>
                            <td width="74%">{{$s->asal_sekolah }}</td>
                        </tr>
                        <tr>
                            <td>NISN</td>
                            <td>:</td>
                            <td>{{$s->nisn }}</td>
                        </tr>
                        <tr>
                            <td>Tahun Lulus</td>
                            <td>:</td>
                            <td>{{$s->tahun_lulus }}</td>
                        </tr>
                        <tr>
                            <td>Nilai Rata-rata UN</td>
                            <td>:</td>
                            <td>{{$s->nilai_rata }}</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </center>
    

    
    <center class="mb-3">
        <table border="0" width="100%">
            <tr>
                <td width="3%"></td>
                <td width="55%">
                    <font size="2">Keterangan:</font>
                    <br>
                    <font size="2">1. Formulir ini dibawa saat melakukan registrasi</font>
                    <br>
                    <font size="2">2. Melampirkan fotocopy Kartu Keluarga dan  Ijazah/SKHUN</font>
                    <br>
                    <font size="2">3. Melampirkan foto ukuran 3x4 (4 lembar)</font>
                    <br>
                    <font size="2">4. Melampirkan foto ukuran 4x6 (3 lembar)</font>
                </td>
                <td width="40%" align="center">
                    <br>
                    <font size="3">Semarang, {{ \Carbon\Carbon::now()->isoFormat('D MMMM Y')}} </font>
                    <br>
                    <font size="3">Mengetahui</font>
                    <br>
                    <font size="3">Orang Tua/Wali</font>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <font size="3">(..............................................)</font>
                </td>
                <td width="2%">
            </tr>
        </table>
 

</body>
</html>