<div class="cc" id="frm-akn" style="margin: 10%">
	<!-- <div class="head" style="margin-left: 90%"><button type="button" class="btn btn-danger keluar"><span class="fa fa-fw fa-close" ></span>  CLOSE</button></div> -->
	<div class="posisi">
			<div id="akn_divisi" style="margin-left: 1%;margin-bottom: 1%;">
				<!-- <h1><p class="text-center"><b>Master Pengelola</b></p></h1> -->
				<hr />
				<form id="akn_form">
						
				 	<!-- Nama user -->
					<div class="form-group row">
					    <label for="inputPassword3" class="col-sm-3 control-label"><p class="text-left font-weight-normal">Nama User</p></label>
					    <div class="col-sm-7">
					    	
					      <input type="text" name="akn_nama" class="form-control" id="akn_nama" placeholder="Nama User" required="required" maxlength="20">
					    </div>
				  	</div>
					<!-- jenis kelamin -->
					<div class="form-group row">
					    <label for="inputPassword3" class="col-sm-3 control-label"><p class="text-left font-weight-normal">Jenis Kelamin</p></label>
					    <div class="col-sm-7">
					    	<input type="radio" name="akn_jk" id="akn_l" value="L"> Laki-Laki <input type="radio" name="akn_jk" value="P" id="akn_p"> Perempuan
					    </div>
					</div>
				  	<!-- tempat tanggal lahir -->
				  	<div class="form-group row">
					    <label for="inputPassword3" class="col-sm-3 control-label"><p class="text-left font-weight-normal">Tempat Tanggal Lahir</p></label>
					    <div class="col-sm-3">
					    	<input type="text" class="form-control" name="akn_tempat_lahir" id="akn_tempat_lahir" placeholder="Tempat Lahir" maxlength="25" required>
					    </div>
					     <div class="col-sm-4">
					    	<input type="date" class="form-control" id="akn_tgl_lahir" name="akn_tgl_lahir" placeholder="Tempat Lahir" required>
					    </div>
					</div>
					<!-- user ALAMAT -->
					<div class="form-group row">
					    <label for="inputPassword3" class="col-sm-3 control-label"><p class="text-left font-weight-normal">Alamat</p></label>
					    <div class="col-sm-7">
					    	<textarea name="akn_alamat" class="form-control" id="akn_alamat" placeholder="Alamat User" required="required"  cols="30" rows="6" maxlength="50" maxlength="30"></textarea>
					    </div>
					</div>
					
					<!-- user telepon-->
					<div class="form-group row">
					    <label for="inputPassword3" class="col-sm-3 control-label"><p class="text-left font-weight-normal">No Telepon</p></label>
					    <div class="col-sm-7">
					    	<input type="text" name="akn_tlp" id="akn_tlp" class="akn_tlp angka form-control" maxlength="13" placeholder="089998****" ">
					    </div>
					</div>
					
					<!-- tombol save -->
					<div class="row">
					     <div class="col-md-7 offset-md-3"> <button type="button" id="akn_update" class="btn btn-md btn-primary btn-block"><span class="fa fa-sw fa-save" ></span> UPDATE</button></div>
					</div>
				</form>	
			</div>
</div>
</div>

