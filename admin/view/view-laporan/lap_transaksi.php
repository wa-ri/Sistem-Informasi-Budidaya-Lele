<?php 
	// session_start();
	if( ! $_SESSION)
	{
	    session_start();
	} 
	include_once('proses/koneksi.php'); 
	date_default_timezone_set("ASIA/JAKARTA");
		
	if(empty($_SESSION['sess_adm_id'])){
	  header('location:index.php');
	}


?>
<div class="cc" id="frm-lap_pbl" style="background-color: #E3DEDE;">
	<!-- <div class="head" style="margin-left: 90%"><button type="button" class="btn btn-danger keluar"><span class="fa fa-fw fa-close" ></span>  CLOSE</button></div> -->
	<div class="posisi">
				
			<div id="lap_dis_divisi" style="margin-left: 1%;margin-bottom: 1%;">
				<h1><p class="text-center"><b>Laporan Pemesanan</b></p></h1><hr />
				<form id="lap_dis_form">
							<h3> <?php echo date("d/m/Y")."-". date("H:i"); ?> </h3><br>
						 

  							<div class="form-group row">
							    <label for="staticEmail" class="col-sm-2 col-form-label">Periode</label>
							    <div class="col-sm-3">
							      <input type="date" class="form-control " id="lap_bl_p1" name="lap_bl_p1">
							    </div>

							    <div class="col-sm-3">
							      <input type="date" class="form-control " id="lap_bl_p2" name="lap_bl_p2">
							    </div>
  							</div>	


  							<div class="form-group row">
							    <!-- <label for="staticEmail" class="col-sm-2 col-form-label">No Transaksi</label> -->
								    <div class="col-sm-3">
								       <button type="button" id="lap_dis_simpan" class="btn btn-success"> Cetak</button>
								    </div>
  							</div>	
				</form>	
			</div>


</div>
</div>

