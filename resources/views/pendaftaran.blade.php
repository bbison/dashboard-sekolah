@extends('layout/navbar')
@section('body')

<section id="ppdb">
    <div class="container p-5 my-3 border bg-light">
        <h1 class="text-center">FORM PENDAFTARAN PESERTA DIDIK BARU</h1>
        <h4 class="text-center">MTs Ma'arif Nyatnyono</h4>
        <h4 class="text-center">Tahun Pelajaran <?php echo date("Y")?>/<?php echo date("Y", strtotime('+1 year'))?></h4>

        
        {{-- INPUT DATA SISWA --}}
        <form method="POST" id="form" action="/ppdb" class="row g-3 needs-validation" novalidate>
            @csrf
            <div class="alert alert-secondary mt-5">
                <strong>DATA CALON PESERTA DIDIK</strong>
            </div>
            <div class="row my-2">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label for="nama" class="form-label">Nama Lengkap :</label>
                        <input type="text" name="nama" class="form-control @if($errors->has('nama')) is-invalid @elseif(old('nama')) is-valid @endif" value="{{old('nama')}}" placeholder="Nama Lengkap" id="nama" required>
                        <div class="invalid-feedback">
                            Nama Lengkap wajib diisi.
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="asal_sekolah" class="form-label">Asal Sekolah :</label>
                        <input type="text" name="asal_sekolah" class="form-control @if($errors->has('asal_sekolah')) is-invalid @elseif(old('asal_sekolah')) is-valid @endif" value="{{old('asal_sekolah')}}" placeholder="Asal Sekolah" id="asal_sekolah" required>
                        <div class="invalid-feedback">
                            Asal Sekolah wajib diisi.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir :</label>
                        <input type="text" name="tempat_lahir" class="form-control @if($errors->has('tempat_lahir')) is-invalid @elseif(old('tempat_lahir')) is-valid @endif" value="{{old('tempat_lahir')}}" placeholder="Tempat Lahir" id="tempat_lahir" required>
                        <div class="invalid-feedback">
                            Tempat Lahir wajib diisi.
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir :</label>
                        <input type="date" name="tanggal_lahir" class="form-control @if($errors->has('tanggal_lahir')) is-invalid @elseif(old('tanggal_lahir')) is-valid @endif" value="{{old('tanggal_lahir')}}" id="tanggal_lahir" required>
                        <div class="invalid-feedback">
                            Tanggal Lahir wajib diisi.
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="nisn" class="form-label">NISN :</label>
                        <input type="text" name="nisn" class="form-control @if($errors->has('nisn')) is-invalid @elseif(old('nisn')) is-valid @endif" value="{{old('nisn')}}" placeholder="NISN" id="nisn" required>
                        <div class="invalid-feedback">
                            NISN wajib diisi.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin :</label>
                        <select class="form-control @if(old('jenis_kelamin')=="Laki-Laki") is-valid @elseif(old('jenis_kelamin')=="pilih") is-invalid  @elseif(old('jenis_kelamin')=="Perempuan") is-valid @endif" name="jenis_kelamin" id="jenis_kelamin">
                            <option value="pilih">Pilih</option>
                            <option value="Laki-Laki" @if(old('jenis_kelamin')=="Laki-Laki") selected @endif >Laki-Laki</option>
                            <option value="Perempuan"  @if(old('jenis_kelamin')=="Perempuan") selected @endif>Perempuan</option>
                        </select>
                        <div class="invalid-feedback">
                            Jenis Kelamin wajib diisi.
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="tahun_lulus" class="form-label">Tahun Lulus :</label>
                        <input type="text" name="tahun_lulus" class="form-control @if($errors->has('tahun_lulus')) is-invalid @elseif(old('tahun_lulus')) is-valid @endif" value="{{old('tahun_lulus')}}" placeholder="Tahun Lulus" id="tahun_lulus" required>
                        <div class="invalid-feedback">
                            Tahun Lulus wajib diisi.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label for="email" class="form-label">Email :</label>
                        <input type="email" name="email" class="form-control @if($errors->has('email')) is-invalid @elseif(old('email')) is-valid @endif" value="{{old('email')}}" placeholder="Email" id="email" required>
                        <div class="invalid-feedback">
                            Email wajib diisi.
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="nilai_rata" class="form-label">Nilai Rata-Rata :</label>
                        <input type="text" name="nilai_rata" class="form-control @if($errors->has('nilai_rata')) is-invalid @elseif(old('nilai_rata')) is-valid @endif" value="{{old('nilai_rata')}}" placeholder="Nilai Rata-Rata" id="nilai_rata" required>
                        <div class="invalid-feedback">
                            Kolom wajib diisi.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label for="kontak_siswa" class="form-label">No. Telp/Hp :</label>
                        <input type="text" name="kontak_siswa" class="form-control @if($errors->has('kontak_siswa')) is-invalid @elseif(old('kontak_siswa')) is-valid @endif" value="{{old('kontak_siswa')}}" placeholder="Masukan Nomor" id="kontak_siswa" required>
                        <div class="invalid-feedback">
                            Silahkan masukan nomor yang dapat dihubungi.
                        </div>
                    </div>
                </div>
            </div>
        {{-- END INPUT DATA SISWA --}}


        {{-- INPUT DATA ORANG TUA / WALI --}}
            {{-- AYAH --}}
            <div class="alert alert-secondary mt-5">
                <strong>DATA ORANG TUA/WALI</strong>
            </div>
            <div class="row my-2">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label for="nama_ayah" class="form-label">Nama Ayah :</label>
                        <input type="text" name="nama_ayah" class="form-control @if($errors->has('nama_ayah')) is-invalid @elseif(old('nama_ayah')) is-valid @endif" value="{{old('nama_ayah')}}" placeholder="Nama Lengkap Ayah Kandung" id="nama_ayah" required>
                        <div class="invalid-feedback">
                            Nama Ayah wajib diisi.
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="pekerjaan_ayah" class="form-label">Pekerjaan :</label>
                        <input type="text" name="pekerjaan_ayah" class="form-control @if($errors->has('pekerjaan_ayah')) is-invalid @elseif(old('pekerjaan_ayah')) is-valid @endif" value="{{old('pekerjaan_ayah')}}" placeholder="Pekerjaan Ayah" id="pekerjaan_ayah" required>
                        <div class="invalid-feedback">
                            Pekerjaan Ayah wajib diisi.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="tempat_lahir_ayah" class="form-label">Tempat Lahir :</label>
                        <input type="text" name="tempat_lahir_ayah" class="form-control @if($errors->has('tempat_lahir_ayah')) is-invalid @elseif(old('tempat_lahir_ayah')) is-valid @endif" value="{{old('tempat_lahir_ayah')}}" placeholder="Tempat Lahir" id="tempat_lahir_ayah" required>
                        <div class="invalid-feedback">
                            Kolom wajib diisi.
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="tanggal_lahir_ayah" class="form-label">Tanggal Lahir :</label>
                        <input type="date" name="tanggal_lahir_ayah" class="form-control @if($errors->has('tanggal_lahir_ayah')) is-invalid @elseif(old('tanggal_lahir_ayah')) is-valid @endif" value="{{old('tanggal_lahir_ayah')}}" id="tanggal_lahir_ayah" required>
                        <div class="invalid-feedback">
                            Kolom wajib diisi.
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="kontak_ayah" class="form-label">No. Telp/Hp :</label>
                        <input type="text" name="kontak_ayah" class="form-control @if($errors->has('kontak_ayah')) is-invalid @elseif(old('kontak_ayah')) is-valid @endif" value="{{old('kontak_ayah')}}" placeholder="Masukan Nomor" id="kontak_ayah" required>
                        <div class="invalid-feedback">
                            Silahkan masukan nomor yang dapat dihubungi.
                        </div>
                    </div>
                </div>
            </div>

            {{-- IBU --}}
            <div class="row my-2">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label for="nama_ibu" class="form-label">Nama Ibu :</label>
                        <input type="text" name="nama_ibu" class="form-control @if($errors->has('nama_ibu')) is-invalid @elseif(old('nama_ibu')) is-valid @endif" value="{{old('nama_ibu')}}" placeholder="Nama Lengkap Ibu Kandung" id="nama_ibu" required>
                        <div class="invalid-feedback">
                            Nama Ibu wajib diisi.
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="pekerjaan_ibu" class="form-label">Pekerjaan :</label>
                        <input type="text" name="pekerjaan_ibu" class="form-control @if($errors->has('pekerjaan_ibu')) is-invalid @elseif(old('pekerjaan_ibu')) is-valid @endif" value="{{old('pekerjaan_ibu')}}" placeholder="Pekerjaan Ibu" id="pekerjaan_ibu" required>
                        <div class="invalid-feedback">
                            Pekerjaan Ibu wajib diisi.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="tempat_lahir_ibu" class="form-label">Tempat Lahir :</label>
                        <input type="text" name="tempat_lahir_ibu" class="form-control @if($errors->has('tempat_lahir_ibu')) is-invalid @elseif(old('tempat_lahir_ibu')) is-valid @endif" value="{{old('tempat_lahir_ibu')}}" placeholder="Tempat Lahir" id="tempat_lahir_ibu" required>
                        <div class="invalid-feedback">
                            Kolom wajib diisi.
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="tanggal_lahir_ibu" class="form-label">Tanggal Lahir :</label>
                        <input type="date" name="tanggal_lahir_ibu" class="form-control @if($errors->has('tanggal_lahir_ibu')) is-invalid @elseif(old('tanggal_lahir_ibu')) is-valid @endif" value="{{old('tanggal_lahir_ibu')}}" id="tanggal_lahir_ibu" required>
                        <div class="invalid-feedback">
                            Kolom wajib diisi.
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="kontak_ibu" class="form-label">No. Telp/Hp :</label>
                        <input type="text" name="kontak_ibu" class="form-control @if($errors->has('kontak_ibu')) is-invalid @elseif(old('kontak_ibu')) is-valid @endif" value="{{old('kontak_ibu')}}" placeholder="Masukan Nomor" id="kontak_ibu" required>
                        <div class="invalid-feedback">
                            Silahkan masukan nomor yang dapat dihubungi.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label for="alamat_orangtua" class="form-label">Alamat :</label>
                        <textarea class="form-control @if($errors->has('alamat_orangtua')) is-invalid @elseif(old('alamat_orangtua')) is-valid @endif" value="dfdfdf" name="alamat_orangtua" rows="2" id="alamat_orangtua" required> {{old('alamat_orangtua')}}</textarea>
                        <div class="invalid-feedback">
                            Alamat Orang Tua wajib diisi.
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="kode_pos" class="form-label">Kode Pos :</label>
                        <input type="text" name="kode_pos" class="form-control @if($errors->has('kode_pos')) is-invalid @elseif(old('kode_pos')) is-valid @endif" value="{{old('kode_pos')}}" placeholder="Kode Pos" id="kode_pos" required>
                        <div class="invalid-feedback">
                            Kolom wajib diisi.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm">
                    <div class="form-group">
                        <label for="kecamatan" class="form-label">Kecamatan :</label>
                        <input type="text" name="kecamatan" class="form-control @if($errors->has('kecamatan')) is-invalid @elseif(old('kecamatan')) is-valid @endif" value="{{old('kecamatan')}}" placeholder="Kecamatan" id="kecamatan" required>
                        <div class="invalid-feedback">
                            Kolom wajib diisi.
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="kabupaten" class="form-label">Kabupaten/Kota :</label>
                        <input type="text" name="kabupaten" class="form-control @if($errors->has('kabupaten')) is-invalid @elseif(old('kabupaten')) is-valid @endif" value="{{old('kabupaten')}}" placeholder="Kabupaten/Kota" id="kabupaten" required>
                        <div class="invalid-feedback">
                            Kolom wajib diisi.
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="provinsi" class="form-label">Provinsi :</label>
                        <input type="text" name="provinsi" class="form-control @if($errors->has('provinsi')) is-invalid @elseif(old('provinsi')) is-valid @endif" value="{{old('provinsi')}}" placeholder="Provinsi" id="provinsi" required>
                        <div class="invalid-feedback">
                            Kolom wajib diisi.
                        </div>
                    </div>
                </div>
            </div>

            {{-- WALI MURID --}}
            <div class="row mt-5">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label for="nama_wali" class="form-label">Nama Wali :</label>
                        <input type="text" name="nama_wali" class="form-control" placeholder="Nama Lengkap Wali">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="pekerjaan_wali" class="form-label">Pekerjaan :</label>
                        <input type="text" name="pekerjaan_wali" class="form-control" placeholder="Pekerjaan Wali">
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label for="status_wali" class="form-label">Hubungan Wali :</label>
                        <input type="text" name="status_wali" class="form-control" placeholder="Hubungan Wali dengan Murid">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="kontak_wali" class="form-label">No. Telp/Hp :</label>
                        <input type="text" name="kontak_wali" class="form-control" placeholder="Masukan Nomor">
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label for="alamat_wali" class="form-label">Alamat :</label>
                        <textarea class="form-control" name="alamat_wali" rows="2" id="alamat_wali"></textarea>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="kode_pos_wali" class="form-label">Kode Pos :</label>
                        <input type="text" name="kode_pos_wali" class="form-control" placeholder="Kode Pos">
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-sm">
                    <div class="form-group">
                        <label for="kecamatan_wali" class="form-label">Kecamatan :</label>
                        <input type="text" name="kecamatan_wali" class="form-control" placeholder="Kecamatan">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="kabupaten_wali" class="form-label">Kabupaten/Kota :</label>
                        <input type="text" name="kabupaten_wali" class="form-control" placeholder="Kabupaten/Kota">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="provinsi_wali" class="form-label">Provinsi :</label>
                        <input type="text" name="provinsi_wali" class="form-control" placeholder="Provinsi">
                    </div>
                </div>
            </div>


            {{-- Cek Box --}}
            <div class="row pt-4">
                <div class="alert alert-success">
                    <h6>Silahkan Ceklist Berikut :</h6>
                    <div class="form-check">
                        <strong>
                            <input class="form-check-input @error('pernyataan1') is-invalid @enderror"  type="checkbox" value="Setuju  Pernyataan1" name="pernyataan1" id="invalidCheck" required>
                            <label class="form-check-label @error('pernyataan1') text-danger @enderror" for="invalidCheck">
                                Saya menyatakan bahwa data yang saya isi diatas telah sesuai dan benar.
                            </label>
                        </strong>
                    </div>
                    <div class="form-check">
                        <strong>
                            <input class="form-check-input @error('pernyataan2') is-invalid @enderror" type="checkbox" value="Setuju  Pernyataan2" name="pernyataan2" id="invalidCheck2" required>
                            <label class="form-check-label @error('pernyataan2') text-danger @enderror" for="invalidCheck2">
                                Saya bersedia menerima sanksi apabila melakukan pembatalan setelah berhasil mengirim formulir diatas.
                            </label>
                        </strong>
                    </div>
                </div>
            </div>
            {{-- End Cek Box --}}
            
            {{-- Button --}}
            <div class="row pt-3">
                <center>
                    <button type="submit" name="submit" class="btn btn-daftar">Daftar</button>
                    <button type="reset" name="reset" class="btn btn-reset">Kosongkan Kembali Formulir</button>
                </center>
            </div>
            {{-- End Button --}}
            
        </form>
        {{-- END INPUT DATA ORANG TUA / WALI --}}

    </div>

    
</section>




@include('layout/footer')
@endsection