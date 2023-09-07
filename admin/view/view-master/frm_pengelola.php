<div class="cc" id="frm-pll" style="background-color: #E3DEDE;">
	<!-- <div class="head" style="margin-left: 90%"><button type="button" class="btn btn-danger keluar"><span class="fa fa-fw fa-close" ></span>  CLOSE</button></div> -->
	<div class="posisi">

			<nav>
				  <div class="nav nav-tabs" id="nav-tab" role="tablist">
				    <a class="nav-item nav-link active" id="pll_btn_input" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tambah Pengelola</a>
				    <a class="nav-item nav-link"  id="pll_btn_select" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Data Pengelola</a>
				   
				  </div>
			</nav>

			<div id="pll_divisi" style="margin-left: 1%;margin-bottom: 1%;">
				<!-- <h1><p class="text-center"><b>Master Pengelola</b></p></h1> -->
				<hr />
				<form id="pll_form">
						<input type="text" name="pll_id" id="pll_id" hidden="true">
					
					<div class="form-group row">
					    <label for="inputPassword3" class="col-sm-3 control-label"><p class="text-left font-weight-normal">Level karyawan</p></label>
					    <div class="col-sm-7">
					    	
					     <select name="pll_lvl" id="pll_lvl" class="form-control">
					     	<option class="pll_lvl"></option>
					     	<option value="1">Pengawas</option>
					     	<option value="2">Sekretaris</option>
					     </select>
					    </div>
				  	</div>
				 	<!-- Nama user -->
					<div class="form-group row">
					    <label for="inputPassword3" class="col-sm-3 control-label"><p class="text-left font-weight-normal">Nama User</p></label>
					    <div class="col-sm-7">
					    	
					      <input type="text" name="pll_nama" class="form-control" id="pll_nama" placeholder="Nama User" required="required" maxlength="20">
					    </div>
				  	</div>
					<!-- jenis kelamin -->
					<div class="form-group row">
					    <label for="inputPassword3" class="col-sm-3 control-label"><p class="text-left font-weight-normal">Jenis Kelamin</p></label>
					    <div class="col-sm-7">
					    	<input type="radio" name="pll_jk" value="L" id="pll_l"> Laki-Laki <input type="radio" name="pll_jk" value="P" id="pll_p"> Perempuan
					    </div>
					</div>
				  	<!-- tempat tanggal lahir -->
				  	<div class="form-group row">
					    <label for="inputPassword3" class="col-sm-3 control-label"><p class="text-left font-weight-normal">Tempat Tanggal Lahir</p></label>
					    <div class="col-sm-3">
					    	<input type="text" class="form-control" name="pll_tempat_lahir" id="pll_tempat_lahir" placeholder="Tempat Lahir" maxlength="20" required>
					    </div>
					     <div class="col-sm-4">
					    	<input type="date" class="form-control" id="pll_tgl_lahir" name="pll_tgl_lahir" placeholder="Tempat Lahir" required>
					    </div>
					</div>
					<!-- user ALAMAT -->
					<div class="form-group row">
					    <label for="inputPassword3" class="col-sm-3 control-label"><p class="text-left font-weight-normal">Alamat</p></label>
					    <div class="col-sm-7">
					    	<textarea name="pll_alamat" class="form-control" id="pll_alamat" placeholder="Alamat User" required="required"  cols="30" rows="6" maxlength="50"></textarea>
					    </div>
					</div>
					
					<!-- user telepon-->
					<div class="form-group row">
					    <label for="inputPassword3" class="col-sm-3 control-label"><p class="text-left font-weight-normal">No Telepon</p></label>
					    <div class="col-sm-7">
					    	<input type="text" name="pll_tlp" id="pll_tlp" class="pll_tlp angka form-control" maxlength="13" placeholder="089998****" onkeyup="valid_angka(event)">
					    </div>
					</div>
					
					<!-- tombol save -->
					<div class="row">
					     <div class="col-md-7 offset-md-3"> <button type="button" id="pll_simpan" class="btn btn-md btn-primary btn-block"><span class="fa fa-sw fa-save" ></span> Save</button></div>
					</div>
				</form>	
			</div>

		<div id="pll_view" style="margin-left: 1%;margin-bottom: 1%;margin-right: 1%;"></div>

</div>
</div>

