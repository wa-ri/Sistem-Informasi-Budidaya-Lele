<div class="cc" id="frm-ktg" style="background-color: #E3DEDE;">
	<!-- <div class="head" style="margin-left: 90%"><button type="button" class="btn btn-danger keluar"><span class="fa fa-fw fa-close" ></span>  CLOSE</button></div> -->
	<div class="posisi">

			<nav>
				  <div class="nav nav-tabs" id="nav-tab" role="tablist">
				    <a class="nav-item nav-link active" id="ktg_btn_input" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tambah Kategori</a>
				    <a class="nav-item nav-link"  id="ktg_btn_select" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Data Kategori</a>
				   
				  </div>
			</nav>

			<div id="ktg_divisi" style="margin-left: 1%;margin-bottom: 1%;">
				<!-- <h1><p class="text-center"><b>Master Pengelola</b></p></h1> -->
				<hr />
				<form id="ktg_form">
					<input type="text" name="ktg_id" id="ktg_id" hidden="true">
				 	<!-- Nama user -->
					<div class="form-group row">
					    <label for="inputPassword3" class="col-sm-3 control-label"><p class="text-left font-weight-normal">Nama Kategori</p></label>
					    <div class="col-sm-7">
					    	
					      <input type="text" name="ktg_nama" class="form-control" id="ktg_nama" placeholder="Nama Kategori" required="required" maxlength="20">
					    </div>
				  	</div>
					
					<!-- tombol save -->
					<div class="row">
					     <div class="col-md-7 offset-md-3"> <button type="button" id="ktg_simpan" class="btn btn-md btn-primary btn-block"><span class="fa fa-sw fa-save" ></span> Save</button></div>
					</div>
				</form>	
			</div>

		<div id="ktg_view" style="margin-left: 1%;margin-bottom: 1%;margin-right: 1%;"></div>

</div>
</div>

