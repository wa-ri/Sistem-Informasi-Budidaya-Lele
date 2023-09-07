<div class="cc" id="frm-pdk" style="background-color: #E3DEDE;">
	<!-- <div class="head" style="margin-left: 90%"><button type="button" class="btn btn-danger keluar"><span class="fa fa-fw fa-close" ></span>  CLOSE</button></div> -->
	<div class="posisi">

			<nav>
				  <div class="nav nav-tabs" id="nav-tab" role="tablist">
				    <a class="nav-item nav-link active" id="pdk_btn_input" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tambah Produk</a>
				    <a class="nav-item nav-link"  id="pdk_btn_select" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Data Produk</a>
				   
				  </div>
			</nav>

			<div id="pdk_divisi" style="margin-left: 1%;margin-bottom: 1%;">
				<!-- <h1><p class="text-center"><b>Master Pengelola</b></p></h1> -->
				<hr />
				<form id="pdk_form">
						<input type="text" name="pdk_id" id="pdk_id" hidden="true">
					
					<div class="form-group row">
					    <label for="inputPassword3" class="col-sm-3 control-label"><p class="text-left font-weight-normal">Jenis Produk</p></label>
					    <div class="col-sm-7">
					    	
					     <select name="pdk_ktg_id" id="pdk_ktg_id" class="form-control">
					     	<option class="pdk_ktg_id"></option>

					     	<?php 
					     	include_once("proses/koneksi.php");
					     		$qr=mysql_query("SELECT * FROM tbl_kategori ORDER BY ktg_id") or die (mysql_error());
					     		while ($arr=mysql_fetch_array($qr)) {
					     			extract($arr);
					     				echo '<option value="'.$ktg_id.'">'.$ktg_nama.'</option>';
					     		}
					     	 ?>
					     	
					     	
					     </select>
					    </div>
				  	</div>
				 	<!-- Nama user -->
					<div class="form-group row">
					    <label for="inputPassword3" class="col-sm-3 control-label"><p class="text-left font-weight-normal">Nama Produk</p></label>
					    <div class="col-sm-7">
					    	
					      <input type="text" name="pdk_nama" class="form-control" id="pdk_nama" placeholder="Nama Produk" required="required" maxlength="100">
					    </div>
				  	</div>
					
					<!-- user telepon-->
					<div class="form-group row">
					    <label for="inputPassword3" class="col-sm-3 control-label"><p class="text-left font-weight-normal">Harga Produk</p></label>
					    <div class="col-sm-7">
					    	<input type="text" name="pdk_harga" id="pdk_harga" class="pdk_harga angka form-control" maxlength="13" placeholder="Harga Produk" onkeyup="valid_angka(event)">
					    </div>
					</div>

					<div class="form-group row">
					    <label for="inputPassword3" class="col-sm-3 control-label"><p class="text-left font-weight-normal">Gambar</p></label>
					    <div class="col-sm-7">
					    	<input type="file" name="pdk_gbr" id="pdk_gbr" class="pdk_gbr form-control" >
					    </div>
					</div>
					
					<!-- tombol save -->
					<div class="row">
					     <div class="col-md-7 offset-md-3"> <button type="button" id="pdk_simpan" class="btn btn-md btn-primary btn-block"><span class="fa fa-sw fa-save" ></span> Save</button></div>
					</div>
				</form>	
			</div>

		<div id="pdk_view" style="margin-left: 1%;margin-bottom: 1%;margin-right: 1%;"></div>

</div>
</div>

