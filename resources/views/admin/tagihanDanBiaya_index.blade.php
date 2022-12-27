@extends('layout/admin')
@section('admin_body')
    {{-- Fasilitas Section --}}

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
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 1216px;">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div>
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-header mt-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table style="font-size:medium">
                                                <tbody>
                                                    <tr>
                                                        <th>Pilih Tahun</th>
                                                        <th></th>
                                                        <th style="width: 300px;">Pilih Bulan</th>
                                                        <th style="width: 300px;"> Kelas</th>
                                                        <th style="width: 300px;">Pilih Status Pembayaran</th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <select name="tahun" id="sel-tahun" class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                                <option value="" selected="">
                                                                    Tahun Ajaran</option>
                                                                <option value="2021">Tahun 2021</option>
                                                                <option value="2022">Tahun 2022</option>
                                                                <option value="2023">Tahun 2023</option>
                                                            </select>
                                                            <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 171px;">
                                                                <span class="selection">
                                                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-sel-eselon-container">
                                                                        <span class="select2-selection__arrow" role="presentation">
                                                                            <b role="presentation"></b>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                            </span>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td>
                                                            <select name="bulan" id="sel-bulan" class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                                <option value="">Pilih Bulan</option>
                                                                <option value="januari">Januari</option>
                                                                <option value="februari">Februari</option>
                                                                <option value="maret">Maret</option>
                                                                <option value="april">April</option>
                                                                <option value="mei">Mei</option>
                                                                <option value="juni">Juni</option>
                                                                <option value="juli">Juli</option>
                                                                <option value="agustus">Agustus</option>
                                                                <option value="september">September</option>
                                                                <option value="oktober">Oktober</option>
                                                                <option value="november">November</option>
                                                                <option value="desember">Desember</option>
                                                            </select>
                                                            <span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" style="width: 300px;">
                                                                <span class="selection">
                                                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-sel-satker-container">
                                                                        <span class="select2-selection__arrow" role="presentation">
                                                                            <b role="presentation"></b>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <select name="pembayaran" id="sel-pembayaran" class="form-control">
                                                                <option value="">Kelas</option>
                                                                <option value="sudah">92</option>
                                                                <option value="belum">kelas2</option>
                                                            </select>
                                                        </td>
                                                        
                                                        <td>
                                                            <select name="pembayaran" id="sel-pembayaran" class="form-control">
                                                                <option value="">Status Pembayaran</option>
                                                                <option value="sudah">Sudah Lunas</option>
                                                                <option value="belum">Belum Lunas</option>
                                                            </select>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td>
                                                            <button class="btn btn-warning btn-md" type="button" id="btn-filter">
                                                                Filter
                                                            </button>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td>
                                                            <button class="btn btn-success btn-md" type="button" id="btn-filter">
                                                                <i class="fa fa-file-excel-o"></i>
                                                                Export ke Excel
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"></div>
                            </div>
                        </div>
                        {{-- <div class="box-body mt-4">
                            <div class="show_error"></div>
                            <div class="table-responsive">
                                <div id="load-table">
                                    <center>
                                        <h3>Silahkan filter untuk menampilkan data</h3>
                                    </center>
                                </div>
                            </div>
                        </div> --}}
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <div id="show" class="mt-3"></div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<script>
   function ajax(str) {
  if (str == "") {
    document.getElementById("show").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("show").innerHTML = this.responseText;
  }
  xhttp.open("GET", "/tagihan-dan-pembayaran/ajax/"+str);
  xhttp.send();
}
    
</script>

@endsection
