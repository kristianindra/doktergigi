<!DOCTYPE>
<html lang="en">
<head>
 <meta charset="utf-8">
  <?php loadAsset("css/style_basic.css"); ?>
  <?php loadAsset("css/style_drg.css"); ?>
  <?php loadAsset("css/login.css")?>
  <?php loadAsset("css/datepicker.css")?>
  <?php loadAsset("bootstrap/css/bootstrap.min.css")?>
  <?php loadAsset("bootstrap/css/clockpicker.css")?>
  <?php loadAsset("css/jquery-ui.min.css")?>
   
   <script src="<?php echo base_url("assets/js/jquery-2.2.3.min.js")?>"></script>
   
   <script src="<?php echo base_url("assets/js/jquery-ui.min.js")?>"></script>
   
   <script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js"); ?>"></script>
   <script src="<?php echo base_url("assets/bootstrap/js/clockpicker.js"); ?>"></script> 
  <script>
	$(document).ready(function()
	{
				
	})
	
  </script>
  <style>
  .ui-autocomplete { z-index:2147483647;}
  </style>
  <title> Aplikasi Dokter Gigi</title>
</head>

<body>
<!-- ini header, pakai <header> saja-->
<header>
	<ul>
		<li id="headerKanan"><a href="<?php echo site_url("Cont_login/index");?>">Logout</a></li>
		<li id="headerKanan"><a>[Resepsionis]</a></li>
	</ul>
</header>

<!-- ini menu2, lokasi di bawah header, ukuran dibuat agak besar (height), soalnya nanti pemakaiannya di layar touch screen, kasi gambar kalau perlu-->
<nav class="container-fluid">
  <ul class="nav nav-pills nav-justified">
    <li class=" dropdown">
	    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-size:14pt;" >
        <span style="font-size:20px" class="glyphicon glyphicon-calendar"></span> Jadwal 
        <span class="caret"></span>
	    </a>
	    <ul class="dropdown-menu">
        <li><a href="<?php echo site_url("Resepsionis/Cont_resepsionis/jadwalAntrian/jadwalPasien")?>">Jadwal Pasien</a></li>
        <li><a href="<?php echo site_url("Resepsionis/Cont_resepsionis/jadwalAntrian/reminder")?>">Reminder Pasien</a></li>
        <li><a href="<?php echo site_url("Resepsionis/Cont_resepsionis/jadwalAntrian/followup")?>">Follow Up Pasien</a></li> 
        <li><a href="<?php echo site_url("Resepsionis/Cont_resepsionis/jadwalAntrian/jadwalDokter")?>">Jadwal Dokter</a></li> 
      </ul>
	  </li>

    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-size:14pt;" >
        <span style="font-size:20px" class="glyphicon glyphicon-calendar"></span> Informasi
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo site_url("Resepsionis/Cont_informasi/index/dataPasien")?>">Data Pasien</a></li>
        <li><a href="<?php echo site_url("Resepsionis/Cont_informasi/index/daftarHarga")?>">Daftar Harga</a></li>
      </ul>
    </li>    

  	
    <li>
      <a  style="font-size:14pt;" href="<?php echo site_url("Resepsionis/Cont_penjualan")?>">
        <span style="font-size:20px" class="glyphicon glyphicon-shopping-cart"></span> Penjualan
      </a>
    </li>

    <li class="active">
      <a data-toggle="pill" style="font-size:14pt;" href="#menu1">
        <span style="font-size:20px" class="glyphicon glyphicon-credit-card"></span> Pembayaran
      </a>
    </li>

    <li>
      <a  style="font-size:14pt;" href="<?php echo site_url("Resepsionis/Cont_penerimaanBarang")?>">
        <span style="font-size:20px" class="glyphicon glyphicon-duplicate"></span> Penerimaan Barang
      </a>
    </li>

  </ul>

</nav>
<!-- Ini pilihan untuk ngubah tanggal. Default tanggal hari ini. Tabel di bawah menampilkan data antrian pada tanggal yg disini -->
<br><br>
<div>
<!-- ini tabel antrian, pakai datatable -->
<div class="container-fluid">
	<div class="tab-content">
		<div id="menu2" class="tab-pane fade in active">
			<div class="row">
				<div class="col-sm-9">
				</div>
				<div class="col-sm-3">
					<h2>TOTAL: Rp.0,00</h2>
				</div>
			</div>
			
			
			<div class="container-fluid">
				<div class="form-group">
					<label class="control-label col-sm-2">No Transaksi:</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="noTrans" placeholder="nomor transaksi" />
					</div>
					<label class="control-label col-sm-2">Tanggal transaksi</label>
					<div class="col-sm-2">
						<input type="date" class="form-control" id="tanggalTrans" placeholder="Tanggal transaksi" value="<?php echo date("Y-m-d")?>" />
					</div>
					<br><br>
					<label class="control-label col-sm-2">Nama Customer</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="NamaCustomer" placeholder="Nama Pelanggan" />
					</div>
					<label class="control-label col-sm-2">Nama Barang</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="TanggalPenjualan" placeholder="Nama Barang" />
					</div>
					<br><br>
					<label class="control-label col-sm-2">Kode Barang</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="kodeBarang" placeholder="Kode Barang" />
					</div>
					<label class="control-label col-sm-2">Harga Barang</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="hargaBarang" placeholder="Harga Barang" />
					</div>
					<label class="control-label col-sm-2">Jumlah Barang</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="jumlahBarang" placeholder="Jumlah Barang" />
					</div>
					<br><br>
					<div class="col-sm-4" ></div>
					<div class="col-sm-3">
						<input type="button" value="InsertData" class="form-control" id="insertDataButton" />
					</div>
					<br>
				</div>
				
				
			<br>
				<table class="table table-bordered table-striped">
			  <thead>
				<tr>
				  <th class="col-sm-2">No Barang</th>
				  <th class="col-sm-4">Nama Barang</th>
				  <th class="col-sm-2">Harga</th>
				  <th class="col-sm-2">Jumlah</th>
				  <th class="col-sm-2">Total</th>
				  <th class="col-sm-1">&nbsp </th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <td>1</td>
				  <td>A</td>
				  <td>150000</td>
				  <td>2</td>
				  <td>300000</td>
				  <td><button>Cancel</button></td>
				</tr>
			  </tbody>
			  <tbody>
				<tr>
				  <td>2</td>
				  <td>AB</td>
				  <td>100000</td>
				  <td>3</td>
				  <td>300000 </td>
				  <td><button>Cancel</button></td>
				</tr>
			  </tbody>
			  <tbody>
				<tr>
				  <td>3</td>
				  <td>ABC</td>
				  <td>75000</td>
				  <td>3</td>
				  <td>225000 </td>
				  <td><button>Cancel</button></td>
				</tr>
			  </tbody>
			</table>
			</div>
			
			<div class="container-fluid">
				<div class="col-sm-11">
				</div>
				<button class="col-sm-1 btn-md btn-primary"> Submit </button>
			</div>
			
		</div>
  </div>
</div>

</body>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Antrian</h4>
      </div>
      <div class="modal-body">	
		<div id="form1" >
			<form role="form" class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-2" for="usr">Nama</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="Nama">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2 " for="usr">Jam</label>
					<div class="col-sm-7">
						<input type="text" data-default="20:48" class="form-control clockpicker" id="datetimepicker4">
					</div>
				</div>
				<div class="form-group ui-widget">
					<label class="control-label col-sm-2" for="usr">Dokter</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="Dokter">
					</div>
				</div>
				
			</form>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" id="saveButton" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<input type="hidden" id="idDokter" value="">

<script>
  $("#tanggal_antrian").datepicker({
    minDate: "0",
    changeMonth: true,
    changeYear: true,
    showOtherMonths: true,
    selectOtherMonths: true,
    dateFormat: "yy-mm-dd",
    regional: "id"
    
  });
</script>

<html>