$(document).ready(function() {
		
		sess_id=$('#sess_id').val();
		if(sess_id!='1'){
			$('#maskar').hide();
		}else{
			$('#maskar').show();
		}
	// =================transaksi pembelian.php
		pbl_faktur();
		dis_faktur();
		kas_faktur();
		$(document).click(function(){
			$(".pop_cari").hide('slow');
		});

		// list_pembelian();

	//==============pro_karyawan.php
	// start save karyawan
	$("#kar_simpan").click(function(){
		var kar_form=$("#kar_form").serialize();

		// alert(kar_form);
		// kar_status=$('#kar_status').val();
		kar_jk=$("input[name='kar_jk']:checked").length;
		kar_nama=$("#kar_nama").val();
		kar_tempat_lahir=$("#kar_tempat_lahir").val();
		kar_tgl_lahir=$("#kar_tgl_lahir").val();
		kar_alamat=$("#kar_alamat").val();
		kar_tlp=$("#kar_tlp").val();
		
	
		if($.trim(kar_nama)==""||kar_jk<1||$.trim(kar_tempat_lahir)==""||$.trim(kar_tgl_lahir)==""||$.trim(kar_alamat)==""||$.trim(kar_tlp)==""){
			alert('Data Tidak Boleh Ada Yang Kosong!!');
		}else{
			$.ajax({
				url:"proses/pro_karyawan.php?pro=insert",
				type:"GET",
				data:kar_form,
				cache:false,
				success:function(html){
					 // alert(html);
					$("#kar_nama").val("");
					$("#kar_tempat_lahir").val("");
					$("#kar_tgl_lahir").val("");
					$("#kar_alamat").val("");
					$("#kar_tlp").val("");
					$("#kar_id").val("");
					kar_jk==0;

				}
			});
		}
	});// end save
	 

	// btn select karyawan
	$("#kar_btn_select").click(function(){
		$("#kar_divisi").hide();
		$("#kar_view").show("slow");
		$("#kar_view").load('proses/pro_karyawan.php?pro=select');
	});
	// end select karyawan
	
	// button form input
	$("#kar_btn_input").click(function(){
		$("#kar_view").hide("slow");
		$("#kar_divisi").show("slow");
	});
	// end button

	// ===================pro_ktg_barang.php
	// start save kategori
	$("#ktg_simpan").click(function(){
		var ktg_form=$("#ktg_form").serialize();
		
		ktg_nama=$("#ktg_nama").val();
		ktg_ket=$("#ktg_ket").val();
		
		if($.trim(ktg_nama)==""){
			alert('Data Tidak Boleh Ada Yang Kosong!!');
		}else{
			$.ajax({
				url:"proses/pro_ktg_barang.php?pro=insert",
				type:"GET",
				data:ktg_form,
				cache:false,
				success:function(html){
					 // alert(html);
					$("#ktg_nama").val("");
					$("#ktg_ket").val("");
					$("#ktg_id").val("");
				}
			});
		}
	});// end save

	// btn select kkategori
	$("#ktg_btn_select").click(function(){
		$("#ktg_divisi").hide();
		$("#ktg_view").show("slow");
		$("#ktg_view").load('proses/pro_ktg_barang.php?pro=select');
	});
	// end select k
	
	// button form input
	$("#ktg_btn_input").click(function(){
		$("#ktg_view").hide("slow");
		$("#ktg_divisi").show("slow");
	});
	// end button
	// 
	// =====================================pro_satuan.php
	// start save satuan
	$("#stn_simpan").click(function(){
		var stn_form=$("#stn_form").serialize();
		stn_nama=$("#stn_nama").val();
		
		if($.trim(stn_nama)==""){
			alert('Data Tidak Boleh Ada Yang Kosong!!');
		}else{
			$.ajax({
				url:"proses/pro_satuan.php?pro=insert",
				type:"GET",
				data:stn_form,
				cache:false,
				success:function(html){
					 // alert(html);
					$("#stn_nama").val("");
					$("#stn_id").val("");
				}
			});
		}
	});// end save

	// btn select satuan
	$("#stn_btn_select").click(function(){
		$("#stn_divisi").hide();
		$("#stn_view").show("slow");
		$("#stn_view").load('proses/pro_satuan.php?pro=select');
	});
	// end select k
	
	// button form input
	$("#stn_btn_input").click(function(){
		$("#stn_view").hide("slow");
		$("#stn_divisi").show("slow");
	});
	// end button
	// 
	

	// ================================================frm_master_cabang.php
	// start save satuan
	$("#cbg_simpan").click(function(){
		var cbg_form=$("#cbg_form").serialize();
		cbg_nama=$("#cbg_nama").val();
		
		if($.trim(cbg_nama)==""){
			alert('Data Tidak Boleh Ada Yang Kosong!!');
		}else{
			$.ajax({
				url:"proses/pro_cabang.php?pro=insert",
				type:"GET",
				data:cbg_form,
				cache:false,
				success:function(html){
					 // alert(html);
					$("#cbg_nama").val("");
					$("#cbg_id").val("");
					$("#cbg_tlp").val("");
					$("#cbg_alamat").val("");
				}
			});
		}
	});// end save
	// btn select satuan
	$("#cbg_btn_select").click(function(){
		$("#cbg_divisi").hide();
		$("#cbg_view").show("slow");
		$("#cbg_view").load('proses/pro_cabang.php?pro=select');
	});
	// end select k
	
	// button form input
	$("#cbg_btn_input").click(function(){
		$("#cbg_view").hide("slow");
		$("#cbg_divisi").show("slow");
	});
	// end button


	// ============================frm_suplier.php
	// start save satuan
	$("#spl_simpan").click(function(){
		var spl_form=$("#spl_form").serialize();
		spl_nama=$("#spl_nama").val();
		
		if($.trim(spl_nama)==""){
			alert('Data Tidak Boleh Ada Yang Kosong!!');
		}else{
			$.ajax({
				url:"proses/pro_suplier.php?pro=insert",
				type:"GET",
				data:spl_form,
				cache:false,
				success:function(html){
					 // alert(html);
					$("#spl_nama").val("");
					$("#spl_id").val("");
					$("#spl_tlp").val("");
					$("#spl_alamat").val("");
				}
			});
		}
	});// end save

	// btn select satuan
	$("#spl_btn_select").click(function(){
		$("#spl_divisi").hide();
		$("#spl_view").show("slow");
		$("#spl_view").load('proses/pro_suplier.php?pro=select');
	});
	// end select k
	
	// button form input
	$("#spl_btn_input").click(function(){
		$("#spl_view").hide("slow");
		$("#spl_divisi").show("slow");
	});
	// end button
	// 
	
	// ======================frm_master_barang.php
	// start save satuan
	$("#brg_simpan").click(function(){
		var brg_form=$("#brg_form").serialize();
		// alert(brg_form);
		ktg_id=$("#ktg_id").val();
		stn_id=$("#stn_id").val();
		brg_kode=$("#brg_kode").val();
		brg_lok=$("#brg_lok").val();
		brg_nama=$("#brg_nama").val();
		brg_hrga=$("#brg_hrga").val();
		
		if($.trim(ktg_id)==""||$.trim(stn_id)==""||$.trim(brg_nama)==""||$.trim(brg_hrga)==""){
			alert('Data Tidak Boleh Ada Yang Kosong!!');
		}else{
			$.ajax({
				url:"proses/pro_master_barang.php?pro=insert",
				type:"GET",
				data:brg_form,
				cache:false,
				success:function(html){
					 // alert(html);
					brg_kode=$("#brg_kode").val("");
					brg_lok=$("#brg_lok").val("");
					brg_nama=$("#brg_nama").val("");
					brg_hrga=$("#brg_hrga").val("");
					$("#brg_id").val("");	
					$("#brg_stok").val("");
					$(".ktg_id").append('<option ></option>').attr('value',false).text(null);
					$(".stn_id").append('<option></option>').attr('value',false).text(null);
				}
			});
		}
	});// end save

	// btn select satuan
	$("#brg_btn_select").click(function(){
		$("#brg_divisi").hide();
		$("#brg_view").show("slow");
		$("#brg_view").load('proses/pro_master_barang.php?pro=select');
	});
	// end select k
	
	// button form input
	$("#brg_btn_input").click(function(){
		$("#brg_view").hide("slow");
		$("#brg_divisi").show("slow");
	});
	// end button
 
	// ==================transaksi pembelian
	$("#pbl_jumbel").keyup(function() {
		/* Act on the event */
		jumbel=$("#pbl_jumbel").val();
		harga=$("#pbl_harga").val();
		hasil=parseInt(harga)*parseInt(jumbel);
		if(!isNaN(hasil)){
			$("#pbl_sub").val(hasil);
		}
		
	});

	$("#pbl_simpan").click(function(){
		var pbl_form=$("#pbl_form").serialize();
		pbl_brg_id=$("#pbl_brg_id").val();
		pbl_jumbel=$("#pbl_jumbel").val();
		if($.trim(pbl_brg_id)==""||$.trim(pbl_jumbel)==""){
			alert('Data Tidak Boleh Ada Yang Kosong!!');
		}else{
			$.ajax({
				url:"proses/pro_beli.php?pro=insert",
				type:"GET",
				data:pbl_form,
				cache:false,
				success:function(html){
					 // alert(html);
					$("#pbl_brg_nm").val("");
					$("#pbl_brg_id").val("");
					$("#pbl_kadaluarsa").val("");
					$("#pbl_jumbel").val("");
					$("#pbl_harga").val("");
					$("#pbl_sub").val("");
					$('.hide').show();
				}
			});
		}
	});// end save

	$("#pbl_selesai").click(function(){
		var pbl_form=$("#pbl_form").serialize();
		sup_id=$("#sup_id").val();
		// pbl_jumbel=$("#pbl_jumbel").val();
		// alert(pbl_form);
		if($.trim(sup_id)==""){
			alert('Data Tidak Boleh Ada Yang Kosong!!');
		}else{
			$.ajax({
				url:"proses/pro_beli.php?pro=selesai",
				type:"GET",
				data:pbl_form,
				cache:false,
				success:function(html){
					 // alert(html);
					 pbl_faktur();
					 document.location.reload(true);
					// $("#pbl_brg_nm").val("");
					// $("#pbl_brg_id").val("");
					// $("#pbl_kadaluarsa").val("");
					// $("#pbl_jumbel").val("");
					// $("#pbl_harga").val("");
					// $("#pbl_sub").val("");
					// $('.hide').show();
				}
			});
		}
	});// end save


	// =======================transaksi distribusi
	$("#dis_simpan").click(function(){
		var dis_form=$("#dis_form").serialize();
		dis_brg_id=$("#dis_brg_id").val();
		dis_jumbel=$("#dis_jumbel").val();
		if($.trim(dis_brg_id)==""||$.trim(dis_jumbel)==""){
			alert('Data Tidak Boleh Ada Yang Kosong!!');
		}else{
			$.ajax({
				url:"proses/pro_dis.php?pro=insert",
				type:"GET",
				data:dis_form,
				cache:false,
				success:function(html){
					 // alert(html);
					$("#dis_brg_nm").val("");
					$("#dis_brg_id").val("");
					$("#dis_kadaluarsa").val("");
					$("#dis_jumbel").val("");
					$("#dis_harga").val("");
					$("#dis_sub").val("");
					$('.hide').show();
				}
			});
		}
	});// end save



	$("#dis_selesai").click(function(){
		var dis_form=$("#dis_form").serialize();

		// alert(dis_form);
		cbg_id=$("#cbg_id").val();
		dis_id=$("#dis_id").val();
		cf=confirm("apakah anda akan cetak struk ini??");
		// dis_jumbel=$("#dis_jumbel").val();
		// alert(dis_form);
		if($.trim(cbg_id)==""){
			alert('Data Tidak Boleh Ada Yang Kosong!!');
		}else{
			$.ajax({
				url:"proses/pro_dis.php?pro=selesai",
				type:"GET",
				data:dis_form,
				cache:false,
				success:function(html){

					// alert(html);
					if (cf==true){
						window.open('/Puriasih/menu/menu-laporan/dis_struk.php?dis_id='+dis_id);
					}
					document.location.reload(true);
				}
			});
		}
	});// end save
	


	// ================laporan pembelian
	$("#lap_dis_simpan").click(function(){
		var lap_dis_form=$("#lap_dis_form").serialize();

		// alert(lap_dis_form);
		lap_dis_id=$("#lap_dis_id").val();
		lap_spl_id=$("#lap_spl_id").val();
		lap_bl_p1=$("#lap_bl_p1").val();
		lap_bl_p2=$("#lap_bl_p2").val();
		// cf=confirm("apakah anda akan cetak struk ini??");
		// dis_jumbel=$("#dis_jumbel").val();
		// alert(dis_form);
		// if($.trim(cbg_id)==""){
		// 	alert('Data Tidak Boleh Ada Yang Kosong!!');
		// }else{
			$.ajax({
				url:"proses/pro_lap_beli.php",
				type:"GET",
				data:lap_dis_form,
				cache:false,
				success:function(html){

					// alert(html);
					// if (cf==true){
						window.open('/Puriasih/proses/pro_lap_beli.php?lap_dis_id='+lap_dis_id+"&lap_spl_id="+lap_spl_id+"&lap_bl_p1="+lap_bl_p1+"&lap_bl_p2="+lap_bl_p2);
					// }
					document.location.reload(true);
				}
			});
		// }
	});// end save

	// ================laporan distribusi
	$("#lap_disor_simpan").click(function(){
		var lap_disor_form=$("#lap_disor_form").serialize();

		// alert(lap_dis_form);
		lap_disor_id=$("#lap_disor_id").val();
		lap_cbg_id=$("#lap_cbg_id").val();
		lap_dis_p1=$("#lap_dis_p1").val();
		lap_dis_p2=$("#lap_dis_p2").val();
		
			$.ajax({
				url:"proses/pro_lap_dis.php",
				type:"GET",
				data:lap_disor_form,
				cache:false,
				success:function(html){

						window.open('/Puriasih/proses/pro_lap_dis.php?lap_disor_id='+lap_disor_id+"&lap_cbg_id="+lap_cbg_id+"&lap_dis_p1="+lap_dis_p1+"&lap_dis_p2="+lap_dis_p2);
					document.location.reload(true);
				}
			});
		// }
	});// end save

	// ================laporan stok
	// ================laporan distribusi
	$("#lap_stok_simpan").click(function(){
		// var lap_stok_form=$("#lap_stok_form").serialize();

		// alert(lap_dis_form);
		lap_brg_id=$("#lap_brg_id").val();
		
			$.ajax({
				url:"proses/pro_lap_stok.php",
				type:"GET",
				data:"lap_brg_id="+lap_brg_id,
				cache:false,
				success:function(html){

					
						window.open('/Puriasih/proses/pro_lap_stok.php?lap_brg_id='+lap_brg_id);
					
					document.location.reload(true);
				}
			});
		
	});// end save



	// =============transaksi kas
	$("#kas_pbl_id").change(function(event) {
			kas_pbl_id=$(this).val();
			// alert(kas_pbl_id);

			$.ajax({
			url:"proses/pro_kas.php?pro=show",
			type:"GET",
			data:"kas_pbl_id="+kas_pbl_id,
			cache:false,
			success:function(html){
				// alert(html);
				b=html.split('|');
				$("#kas_jumlah").val(b[0])
			}
		});
	});


	// =======transaksi kas.php
	// start save satuan
	$("#kas_simpan").click(function(){
		var kas_form=$("#kas_form").serialize();
		// alert(kas_form);
		kas_pbl_id=$("#kas_pbl_id").val();
		kas_ket=$("#kas_ket").val();
		kas_jumlah=$("#kas_jumlah").val();

		if($.trim(kas_pbl_id)==""||$.trim(kas_jumlah)==""){
			alert('No transaksi pembelian dan jumlah tidak boleh kosong!!');
		}else if($.trim(kas_ket)==""){
			alert('Jenis Kas tidak boleh kosong!!');
		}else{
			$.ajax({
				url:"proses/pro_kas.php?pro=insert",
				type:"GET",
				data:kas_form,
				cache:false,
				success:function(html){
					 // alert(html);
					$("#kas_pbl_id").val("");
					$("#kas_ket").val("");
					$("#kas_jumlah").val("");
					$("#kas_debit").val("");
					$("#kas_kredit").val("");
					$('.hide').show();
				}
			});
		}
	});// end save


	$("#kas_selesai").click(function(){
		var kas_form=$("#kas_form").serialize();
		kas_kry_id=$("#kas_kry_id").val();

		cf=confirm('anda yakin sudah selesai??');

		if(cf==true){
				$.ajax({
				url:"proses/pro_kas.php?pro=selesai",
				type:"GET",
				data:kas_form,
				cache:false,
				success:function(html){
					 // alert(html);
					 document.location.reload(true);
					
				}
			});
		}else{
			alert("Transaksi belum selesai!!");
		}
		
	});// end save

	//====================== laporan journal
	//
	$("#lap_jn_simpan").click(function(){
		var server="<?php echo  $_SERVER['PHP_SELF'] ?>";

		// alert(lap_dis_form);
		lap_jn_p1=$("#lap_jn_p1").val();
		lap_jn_p2=$("#lap_jn_p2").val();
		
			$.ajax({
				url:"proses/pro_lap_journal.php",
				type:"GET",
				data:"lap_jn_p1="+lap_jn_p1+"&lap_jn_p2="+lap_jn_p2,
				cache:false,
				success:function(html){

					
						window.open('/Puriasih/proses/pro_lap_journal.php?lap_jn_p1='+lap_jn_p1+'&lap_jn_p2='+lap_jn_p2);
					
					document.location.reload(true);
				}
			});
		
	});// end save




});
// ======================end jquery


// =============================================function
// =========function pro_karyawan.php
// functiom hapus karyaawan
function kry_hapus(id){
	a=confirm("Amda Yakin Akan Menghapus Ini?");
	if(a==true){
		$.ajax({
			url:"proses/pro_karyawan.php?pro=delete",
			type:"GET",
			data:"kar_id="+id,
			cache:false,
			success:function(html){
				// alert(html);
				$("#kar_view").load('proses/pro_karyawan.php?pro=select');
			}
		});
	}else{
		alert("Data Batal Dihapus");
		$("#kar_view").load('proses/pro_karyawan.php?pro=select');
	}
	

}

function kry_update(id){
	$("#kar_view").hide("slow");
	$("#kar_divisi").show("slow");
	$.ajax({
		url:"proses/pro_karyawan.php?pro=select_up",
		type:"GET",
		data:"kar_id="+id,
		success:function(html){
			a=html.split('|');
			$("#kar_id").val(id);
			$("#kar_nama").val(a[0]);
			$("#kar_tempat_lahir").val(a[2]);
			$("#kar_tgl_lahir").val(a[3]);
			$("#kar_alamat").val(a[5]);
			$("#kar_tlp").val(a[4]);
			var lvl=a[6];
			// alert(lvl);
			if(lvl=='1'){
				$(".kar_lvl").append('<option value="1">Admin</option>');
			}else{
				$(".kar_lvl").append('<option value="2">Karyawan</option>');
			}
			var jk=a[1];
			if(jk=='L'||jk=='l'){
				$('#kar_l').prop('checked',true);
			}else{
				$('#kar_p').prop('checked',true);
			}

		}
	});
}



// valid anggka usr_tlp
function valid_angka(evt){
	var charcode= (evt.which) ? evt.which : event.keycode;
		if(charcode>31 &&(charcode <48||charcode>57)){
			alert("maaf harus angka");
			$(".angka").val("");
			return false;
		}
	return true;
}//end fungsi


// ===============function pro_ktg_barang.php
// functiom hapus karyaawan
function ktg_hapus(id){
	a=confirm("Amda Yakin Akan Menghapus Ini?");
	if(a==true){
		$.ajax({
			url:"proses/pro_ktg_barang.php?pro=delete",
			type:"GET",
			data:"ktg_id="+id,
			cache:false,
			success:function(html){
				// alert(html);
				$("#ktg_view").load('proses/pro_ktg_barang.php?pro=select');
			}
		});
	}else{
		alert("Data Batal Dihapus");
		$("#ktg_view").load('proses/pro_ktg_kategori.php?pro=select');
	}
}

//ktg_update 
function ktg_update(id){
	$("#ktg_view").hide("slow");
	$("#ktg_divisi").show("slow");
	$.ajax({
		url:"proses/pro_ktg_barang.php?pro=select_up",
		type:"GET",
		data:"ktg_id="+id,
		success:function(html){
			a=html.split('|');
			$("#ktg_id").val(id);
			$("#ktg_nama").val(a[0]);
			$("#ktg_ket").val(a[1]);

		}
	});
}
 // ========================function pro_satuan.php
 // functiom hapus karyaawan
function stn_hapus(id){
	a=confirm("Amda Yakin Akan Menghapus Ini?");
	if(a==true){
		$.ajax({
			url:"proses/pro_satuan.php?pro=delete",
			type:"GET",
			data:"stn_id="+id,
			cache:false,
			success:function(html){
				// alert(html);
				$("#stn_view").load('proses/pro_satuan.php?pro=select');
			}
		});
	}else{
		alert("Data Batal Dihapus");
		$("#stn_view").load('proses/pro_satuan.php?pro=select');
	}
}

//stn_update 
function stn_update(id){
	$("#stn_view").hide("slow");
	$("#stn_divisi").show("slow");
	$.ajax({
		url:"proses/pro_satuan.php?pro=select_up",
		type:"GET",
		data:"stn_id="+id,
		success:function(html){
			a=html.split('|');
			$("#stn_id").val(id);
			$("#stn_nama").val(a[0]);


		}
	});
}

// =======================function frm_master_cabang.php
// functiom hapus karyaawan
function cbg_hapus(id){
	a=confirm("Amda Yakin Akan Menghapus Ini?");
	if(a==true){
		$.ajax({
			url:"proses/pro_cabang.php?pro=delete",
			type:"GET",
			data:"cbg_id="+id,
			cache:false,
			success:function(html){
				// alert(html);
				$("#cbg_view").load('proses/pro_cabang.php?pro=select');
			}
		});
	}else{
		alert("Data Batal Dihapus");
		$("#cbg_view").load('proses/pro_cabang.php?pro=select');
	}
}

//stn_update 
function cbg_update(id){
	$("#cbg_view").hide("slow");
	$("#cbg_divisi").show("slow");
	$.ajax({
		url:"proses/pro_cabang.php?pro=select_up",
		type:"GET",
		data:"cbg_id="+id,
		success:function(html){
			a=html.split('|');
			$("#cbg_id").val(id);
			$("#cbg_nama").val(a[0]);
			$("#cbg_tlp").val(a[1]);
			$("#cbg_alamat").val(a[2]);


		}
	});
}

// ==================================frm_master supplier.php
// functiom hapus karyaawan
function spl_hapus(id){
	a=confirm("Amda Yakin Akan Menghapus Ini?");
	if(a==true){
		$.ajax({
			url:"proses/pro_suplier.php?pro=delete",
			type:"GET",
			data:"spl_id="+id,
			cache:false,
			success:function(html){
				// alert(html);
				$("#spl_view").load('proses/pro_suplier.php?pro=select');
			}
		});
	}else{
		alert("Data Batal Dihapus");
		$("#spl_view").load('proses/pro_suplier.php?pro=select');
	}
}

//stn_update 
function spl_update(id){
	$("#spl_view").hide("slow");
	$("#spl_divisi").show("slow");
	$.ajax({
		url:"proses/pro_suplier.php?pro=select_up",
		type:"GET",
		data:"spl_id="+id,
		success:function(html){
			a=html.split('|');
			$("#spl_id").val(id);
			$("#spl_nama").val(a[0]);
			$("#spl_tlp").val(a[1]);
			$("#spl_alamat").val(a[2]);


		}
	});
}

// =================function master barang
function brg_hapus(id){
	// alert(id);
	a=confirm("Amda Yakin Akan Menghapus Ini?");
	if(a==true){
		$.ajax({
			url:"proses/pro_master_barang.php?pro=delete",
			type:"GET",
			data:"brg_id="+id,
			cache:false,
			success:function(html){
				// alert(html);
				$("#brg_view").load('proses/pro_master_barang.php?pro=select');
			}
		});
	}else{
		alert("Data Batal Dihapus");
		$("#brg_view").load('proses/pro_master_barang.php?pro=select');
	}
}

//stn_update 
function brg_update(id){
	$("#brg_view").hide("slow");
	$("#brg_divisi").show("slow");
	$.ajax({
		url:"proses/pro_master_barang.php?pro=select_up",
		type:"GET",
		data:"brg_id="+id,
		success:function(html){
			a=html.split('|');
			$("#brg_id").val(id);
			$(".ktg_id").append('<option ></option>').attr('value',a[0]).text(a[1]);
			$(".stn_id").append('<option></option>').attr('value',a[2]).text(a[3]);
			// $(".hide").hide();
			brg_kode=$("#brg_kode").val(a[5]);
			brg_lok=$("#brg_lok").val(a[7]);
			brg_nama=$("#brg_nama").val(a[6]);
			brg_hrga=$("#brg_hrga").val(a[9]);
			brg_hrga=$("#brg_stok").val(a[8]);


			


		}
	});
}

// ========================TRANSAKSI PEMBELIAN
function pbl_faktur(){
	$.ajax({
		url:"proses/pro_beli.php?pro=faktur",
		type:"GET",
		cache:false,
		success:function(html){
			// alert(html);
			$("#pbl_id").val(html);
		}
	});
}

function pbl_cari(){
	a=$("#pbl_brg_nm").val();
	$.ajax({
		url:"proses/pro_beli.php?pro=select_brg",
		date:"pbl_brg_nm"+a,
		cache:false,
		success:function(html){
			$(".pop_cari").show();
			$(".pop_cari").load("proses/pro_beli.php?pro=select_brg&pbl_brg_nm="+a);
		}
	});
}

function pbl_get(id){
	$.ajax({
		url:"proses/pro_beli.php?pro=show",
		data:"pbl_brg_id="+id,
		cacche:false,
		success:function(html){
			a=html.split("|");
			$("#pbl_brg_nm").val(a[1]);
			$("#pbl_brg_id").val(a[0]);
			$("#pbl_harga").val(a[2]);
		}
	});
}

function list_pembelian(){
	pbl_id=$("#pbl_id").val();
	$.ajax({
		url:"proses/pro_beli.php?pro=select",
		data:"pbl_id="+pbl_id,
		cache:false,
		success:function(html){
			// alert(html);
			$("#pbl_view").load("proses/pro_beli.php?pro=select&pbl_id="+pbl_id);
		}

	});	
}

function pbl_del(brg_id){
	pbl_id=$("#pbl_id").val();
		// alert(brg_id+"/"+pbl_id);
		// 
	a=confirm("Anda Yakin Menghapus Data ini??");
	if(a==true){
			$.ajax({
				url:"proses/pro_beli.php?pro=delete",
				data:"pbl_id="+pbl_id+"&pbl_brg_id="+brg_id,
				cache:false,
				success:function(html){
					$("#pbl_view").load("proses/pro_beli.php?pro=select&pbl_id="+pbl_id);
				}
			});
	}else{
		alert('Data Batal Dihapus');
	}
		
	
}

// ========================TRANSAKSI ditribusi
function dis_faktur(){
	$.ajax({
		url:"proses/pro_dis.php?pro=faktur",
		type:"GET",
		cache:false,
		success:function(html){
			// alert(html);
			$("#dis_id").val(html);
		}
	});
}


function dis_cari(){
	a=$("#dis_brg_nm").val();
	$.ajax({
		url:"proses/pro_dis.php?pro=select_brg",
		date:"dis_brg_nm"+a,
		cache:false,
		success:function(html){
			$(".pop_cari").show();
			$(".pop_cari").load("proses/pro_dis.php?pro=select_brg&dis_brg_nm="+a);
		}
	});
}

function dis_get(id){
	$.ajax({
		url:"proses/pro_dis.php?pro=show",
		data:"dis_brg_id="+id,
		cacche:false,
		success:function(html){
			a=html.split("|");
			$("#dis_brg_nm").val(a[1]);
			$("#dis_brg_id").val(a[0]);
			$("#dis_harga").val(a[2]);
		}
	});
}

function list_dis(){
	dis_id=$("#dis_id").val();
	$.ajax({
		url:"proses/pro_dis.php?pro=select",
		data:"dis_id="+dis_id,
		cache:false,
		success:function(html){
			// alert(html);
			$("#dis_view").load("proses/pro_dis.php?pro=select&dis_id="+dis_id);
		}

	});	
}

function dis_del(brg_id){
	dis_id=$("#dis_id").val();
		// alert(brg_id+"/"+dis_id);
		// 
	a=confirm("Anda Yakin Menghapus Data ini??");
	if(a==true){
			$.ajax({
				url:"proses/pro_dis.php?pro=delete",
				data:"dis_id="+dis_id+"&dis_brg_id="+brg_id,
				cache:false,
				success:function(html){
					$("#dis_view").load("proses/pro_dis.php?pro=select&dis_id="+dis_id);
				}
			});
	}else{
		alert('Data Batal Dihapus');
	}
		
	
}


// ================funcion transaksi
function kas_faktur(){
	$.ajax({
		url:"proses/pro_kas.php?pro=faktur",
		type:"GET",
		cache:false,
		success:function(html){
			// alert(html);
			$("#kas_id").val(html);
		}
	});
}

function list_kas(){
	kas_id=$("#kas_id").val();
	$.ajax({
		url:"proses/pro_kas.php?pro=select",
		data:"kas_id="+kas_id,
		cache:false,
		success:function(html){
			// alert(html);
			$("#kas_view").load("proses/pro_kas.php?pro=select&kas_id="+kas_id);
		}

	});	
}


function kas_delete(){
	kas_id=$("#kas_id").val();
		// alert(kas_id);
		// 
	a=confirm("Anda Yakin Menghapus Data ini??");
	if(a==true){
			$.ajax({
				url:"proses/pro_kas.php?pro=delete",
				data:"kas_id="+kas_id,
				cache:false,
				success:function(html){
					$("#kas_view").load("proses/pro_kas.php?pro=select&kas_id="+kas_id);
				}
			});
	}else{
		alert('Data Batal Dihapus');
	}
		
	
}


function get_level(a){
	alert(a);
	// if(a!=='1'){
	// 	$('#maskar').hide();
	// }
}