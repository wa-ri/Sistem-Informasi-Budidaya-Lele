<div class="cc" id="frm-jdl" style="background-color: #E3DEDE;">
	<!-- <div class="head" style="margin-left: 90%"><button type="button" class="btn btn-danger keluar"><span class="fa fa-fw fa-close" ></span>  CLOSE</button></div> -->
	<div class="posisi">

			<nav>
				  <div class="nav nav-tabs" id="nav-tab" role="tablist">
				    <a class="nav-item nav-link active" id="jdl_btn_input" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tambah jadwal</a>
				    <a class="nav-item nav-link"  id="jdl_btn_select" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Data jadwal</a>
				   
				  </div>
			</nav>

			<div id="jdl_divisi" style="margin-left: 1%;margin-bottom: 1%;">
				<!-- <h1><p class="text-center"><b>Master Pengelola</b></p></h1> -->
				<hr />
				<form id="jdl_form">
						<input type="text" name="jdl_id" id="jdl_id" hidden="true">
					
					
				 	<!-- Nama user -->
					<div class="form-group row">
					    <label for="inputPassword3" class="col-sm-3 control-label"><p class="text-left font-weight-normal">Tanggal Panen</p></label>
					    <div class="col-sm-7">
					    	
					      <input type="date" name="jdl_tgl" class="form-control" id="jdl_tgl" placeholder="Nama jadwal" required="required" maxlength="20">
					    </div>
				  	</div>
					
					<!-- user telepon-->
					<div class="form-group row">
					    <label for="inputPassword3" class="col-sm-3 control-label"><p class="text-left font-weight-normal">Lokasi Panen/Pemilik</p></label>
					    <div class="col-sm-7">
					    	
					     <select name="jdl_bdy_id" id="jdl_bdy_id" class="form-control">
					     	<option class="jdl_bdy_id"></option>

					     	<?php 
					     	include_once("proses/koneksi.php");
					     		$qr=mysql_query("SELECT * FROM tbl_tempat_budidaya ORDER BY bdy_id") or die (mysql_error());
					     		while ($arr=mysql_fetch_array($qr)) {
					     			extract($arr);
					     				echo '<option value="'.$bdy_id.'">'.$bdy_pemilik.'</option>';
					     		}
					     	 ?>
					     	
					     	
					     </select>
					    </div>
				  	</div>

				  	<!-- <div class="form-group row">
					    <label for="inputPassword3" class="col-sm-3 control-label"><p class="text-left font-weight-normal">Status Panen</p></label>
					    <div class="col-sm-7">

					    <input type="text" class="form-control" id="jdl_status" name="jdl_status" >
					 </div>
				  	</div> -->
					<!-- tombol save -->
					<div class="row">
					     <div class="col-md-7 offset-md-3"> <button type="button" id="jdl_simpan" class="btn btn-md btn-primary btn-block"><span class="fa fa-sw fa-save" ></span> Save</button></div>
					</div>
				</form>	
			</div>

		<div id="jdl_view" style="margin-left: 1%;margin-bottom: 1%;margin-right: 1%;"></div>

</div>
</div>

