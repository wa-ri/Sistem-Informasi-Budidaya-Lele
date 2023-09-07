<div class="cc" id="frm-bdy" style="background-color: #E3DEDE;">
	<!-- <div class="head" style="margin-left: 90%"><button type="button" class="btn btn-danger keluar"><span class="fa fa-fw fa-close" ></span>  CLOSE</button></div> -->
	<div class="posisi">

			<nav>
				  <div class="nav nav-tabs" id="nav-tab" role="tablist">
				    <a class="nav-item nav-link active" id="bdy_btn_input" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tambah Lokasi</a>
				    <a class="nav-item nav-link"  id="bdy_btn_select" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Data Lokasi</a>
				   
				  </div>
			</nav>

			<div id="bdy_divisi" style="margin-left: 1%;margin-bottom: 1%;">
				<!-- <h1><p class="text-center"><b>Master Pengelola</b></p></h1> -->
				<hr />
				<form id="bdy_form">
					<input type="text" name="bdy_id" id="bdy_id" hidden="true">
				 	<!-- Nama user -->
					<div class="form-group row">
					    <label for="inputPassword3" class="col-sm-3 control-label"><p class="text-left font-weight-normal">Nama Pemilik</p></label>
					    <div class="col-sm-7">
					    	
					      <input type="text" name="bdy_nama" class="form-control" id="bdy_nama" placeholder="Nama Pemilik" required="required" maxlength="20">
					    </div>
				  	</div>

				  	<div class="form-group row">
					    <label for="inputPassword3" class="col-sm-3 control-label"><p class="text-left font-weight-normal">No Telepon</p></label>
					    <div class="col-sm-7">
					    	
					      <input type="text" name="bdy_tlp" class="form-control" id="bdy_tlp" placeholder="08999*****" required="required" maxlength="13">
					    </div>
				  	</div>

				  	<div class="form-group row">
					    <label for="inputPassword3" class="col-sm-3 control-label"><p class="text-left font-weight-normal">Alamat</p></label>
					    <div class="col-sm-7">
					    	<textarea name="bdy_alamat" class="form-control" id="bdy_alamat" cols="30" rows="7"></textarea>
					    </div>
				  	</div>
					
					<!-- tombol save -->
					<div class="row">
					     <div class="col-md-7 offset-md-3"> <button type="button" id="bdy_simpan" class="btn btn-md btn-primary btn-block"><span class="fa fa-sw fa-save" ></span> Save</button></div>
					</div>
				</form>	
			</div>

		<div id="bdy_view" style="margin-left: 1%;margin-bottom: 1%;margin-right: 1%;"></div>

</div>
</div>

