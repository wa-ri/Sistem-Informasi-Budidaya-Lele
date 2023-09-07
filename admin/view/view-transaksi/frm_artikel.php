<div class="cc" id="frm-atk" style="background-color: #E3DEDE;">
	<!-- <div class="head" style="margin-left: 90%"><button type="button" class="btn btn-danger keluar"><span class="fa fa-fw fa-close" ></span>  CLOSE</button></div> -->
	<div class="posisi">

			<nav>
				  <div class="nav nav-tabs" id="nav-tab" role="tablist">
				    <a class="nav-item nav-link active" id="atk_btn_input" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tambah Artikel</a>
				    <a class="nav-item nav-link"  id="atk_btn_select" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Data Artikel</a>
				   
				  </div>
			</nav>

			<div id="atk_divisi" style="margin-left: 1%;margin-bottom: 1%;">
				<!-- <h1><p class="text-center"><b>Master Pengelola</b></p></h1> -->
				<hr />
				<form id="atk_form" >
						<input type="text" name="atk_id" id="atk_id" hidden="true">
					
					
				 	<!-- Nama user -->
					<div class="form-group row">
					    <label for="inputPassword3" class="col-sm-3 control-label"><p class="text-left font-weight-normal">Judul Artikel</p></label>
					    <div class="col-sm-7">
					    	
					      <input type="text" name="atk_judul" class="form-control" id="atk_judul" placeholder="Judul Artikel" required="required" maxlength="30">
					    </div>
				  	</div>

				  	<!-- Nama user -->
					<div class="form-group row">
					    <label for="inputPassword3" class="col-sm-3 control-label"><p class="text-left font-weight-normal">Isi Artikel</p></label>
					    <div class="col-sm-7">		    	
					      <textarea name="atk_isi" id="atk_isi" class="form-control" cols="30" rows="6" required="required"></textarea>
					    </div>
				  	</div>

				  	<div class="form-group row">
					    <label for="inputPassword3" class="col-sm-3 control-label"><p class="text-left font-weight-normal">Gambar</p></label>
					    <div class="col-sm-7">		    	
					      <input type="file" name="atk_gambar" required="required" /> 
					    </div>
				  	</div>
					
					
					<!-- tombol save -->
					<div class="row">
					     <div class="col-md-7 offset-md-3"> <button type="button" id="atk_simpan" class="btn btn-md btn-primary btn-block"><span class="fa fa-sw fa-save" ></span> Save</button></div>
					</div>
				</form>	
			</div>

		<div id="atk_view" style="margin-left: 1%;margin-bottom: 1%;margin-right: 1%;"></div>

</div>
</div>

