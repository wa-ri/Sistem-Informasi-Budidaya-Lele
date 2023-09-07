// start jquery
$(document).ready(function() {
	view_cus();
	$("#psn_view").load("proses/pro_pemesanan.php?pro=select");
// =======================frm_pengelola.php
	// start save pllyawan
	$("#pll_simpan").click(function(){
		var pll_form=$("#pll_form").serialize();
		// alert(pll_form);
		pll_is=$('#pll_is').val();
		pll_lvl=$('#pll_lvl').val();
		pll_jk=$("input[name='pll_jk']:checked").length;
		pll_nama=$("#pll_nama").val();
		pll_tempat_lahir=$("#pll_tempat_lahir").val();
		pll_tgl_lahir=$("#pll_tgl_lahir").val();
		pll_alamat=$("#pll_alamat").val();
		pll_tlp=$("#pll_tlp").val();
		
	
		if($.trim(pll_nama)==""||pll_jk<1||$.trim(pll_tempat_lahir)==""||$.trim(pll_tgl_lahir)==""||$.trim(pll_alamat)==""||$.trim(pll_tlp)==""){
			alert('Data Tidak Boleh Ada Yang Kosong!!');
		}else{
			$.ajax({
				url:"proses/pro_pengelola.php?pro=insert",
				type:"GET",
				data:pll_form,
				cache:false,
				success:function(html){
					 // alert(html);
					$("#pll_nama").val("");
					$("#pll_tempat_lahir").val("");
					$("#pll_tgl_lahir").val("");
					$("#pll_alamat").val("");
					$("#pll_tlp").val("");
					$("#pll_id").val("");
					pll_jk==0;

				}
			});
		}
	});// end save

	

	// btn select karyawan
	$("#pll_btn_select").click(function(){
		$("#pll_divisi").hide();
		$("#pll_view").show("slow");
		$("#pll_view").load('proses/pro_pengelola.php?pro=select');
	});
	// end select pllyawan
	
	// button form input
	$("#pll_btn_input").click(function(){
		$("#pll_view").hide("slow");
		$("#pll_divisi").show("slow");
	});
	// end button

// ===============================frm_kategori.php
	// start save kategori
	$("#ktg_simpan").click(function(){
		var ktg_form=$("#ktg_form").serialize();
		// alert(ktg_form);
		
		ktg_nama=$("#ktg_nama").val();	
		ktg_id=$("#ktg_id").val();
		
	
		if($.trim(ktg_nama)==""){
			alert('Data Tidak Boleh Ada Yang Kosong!!');
		}else{
			$.ajax({
				url:"proses/pro_kategori.php?pro=insert",
				type:"GET",
				data:ktg_form,
				cache:false,
				success:function(html){
					 // alert(html);
					$("#ktg_nama").val("");
					$("#ktg_id").val("");

				}
			});
		}
	});// end save


	// btn select karyawan
	$("#ktg_btn_select").click(function(){
		$("#ktg_divisi").hide();
		$("#ktg_view").show("slow");
		$("#ktg_view").load('proses/pro_kategori.php?pro=select');
	});
	// end select ktgyawan
	
	// button form input
	$("#ktg_btn_input").click(function(){
		$("#ktg_view").hide("slow");
		$("#ktg_divisi").show("slow");
	});
	// end button


// =======================frm_produk.php
	// start save pllyawan
	$("#pdk_simpan").click(function(){
		// var pdk_form=$("#pdk_form").serialize();
		pdk_gbr=$("#pdk_gbr").val();
		
		var pdk_form=new FormData($("#pdk_form")[0]);
		
		pdk_id=$("#pdk_id").val();
		pdk_nama=$("#pdk_nama").val();
		pdk_ktg_id=$("#pdk_ktg_id").val();
		pdk_harga=$("#pdk_harga").val();
		
	
		if($.trim(pdk_nama)==""||$.trim(pdk_harga)==""||$.trim(pdk_ktg_id)==""){
			alert('Data Tidak Boleh Ada Yang Kosong!!');
		}else{
			$.ajax({
				url:"proses/pro_produk.php?pro=insert",
				type:"post",
				data:pdk_form,
				cache:false,
				contentType:false,
				processData:false,
				success:function(html){
					 // alert(html);
					

					window.location.reload(true);

				}
			});
		}
	});// end save


	// btn select karyawan
	$("#pdk_btn_select").click(function(){
		$("#pdk_divisi").hide();
		$("#pdk_view").show("slow");
		$("#pdk_view").load('proses/pro_produk.php?pro=select');
	});
	// end select pdkyawan
	
	// button form input
	$("#pdk_btn_input").click(function(){
		$("#pdk_view").hide("slow");
		$("#pdk_divisi").show("slow");
	});
	// end button
	// 
	// 
// ==========================frm_budidaya.php

	// start save p
	$("#bdy_simpan").click(function(){
		var bdy_form=$("#bdy_form").serialize();
		// alert(bdy_form);
		bdy_id=$("#bdy_id").val();
		bdy_nama=$("#bdy_nama").val();
		bdy_tlp=$("#bdy_tlp").val();
		bdy_alamat=$("#bdy_alamat").val();
		
	
		if($.trim(bdy_nama)==""||$.trim(bdy_alamat)==""||$.trim(bdy_tlp)==""){
			alert('Data Tidak Boleh Ada Yang Kosong!!');
		}else{
			$.ajax({
				url:"proses/pro_budidaya.php?pro=insert",
				type:"GET",
				data:bdy_form,
				cache:false,
				success:function(html){
					 // alert(html);
					bdy_id=$("#bdy_id").val("");
					bdy_nama=$("#bdy_nama").val("");
					bdy_tlp=$("#bdy_tlp").val("");
					bdy_alamat=$("#bdy_alamat").val("");

					window.location.reload(true);

				}
			});
		}
	});// end save

	

	// btn select karyawan
	$("#bdy_btn_select").click(function(){
		$("#bdy_divisi").hide();
		$("#bdy_view").show("slow");
		$("#bdy_view").load('proses/pro_budidaya.php?pro=select');
	});
	// end select bdyyawan
	
	// button form input
	$("#bdy_btn_input").click(function(){
		$("#bdy_view").hide("slow");
		$("#bdy_divisi").show("slow");
	});
	// end button
// ============================frm_artikel.php
// start save pllyawan
	$("#atk_simpan").click(function(){
		// var atk_form=$("#atk_form").serialize();
		var atk_form=new FormData($('#atk_form')[0]);
		alert(atk_form);
		atk_id=$('#atk_id').val();
		atk_judul=$("#atk_judul").val();
		atk_isi=$("#atk_isi").val();
		// atk_status=$("#atk_status").val();
		
		
	
		if($.trim(atk_judul)==""||$.trim(atk_isi)==""){
			alert('Data Tidak Boleh Ada Yang Kosong!!');
		}else{
			$.ajax({
				url:"proses/pro_artikel.php?pro=insert",
				type:"POST",
				data:atk_form,
				cache:false,
				contentType:false,
				processData:false,

				success:function(html){
					 // alert(html);
				 	window.location.reload(true);
				}
			});
		}
	});// end save

	

	// btn select karyawan
	$("#atk_btn_select").click(function(){
		$("#atk_divisi").hide();
		$("#atk_view").show("slow");
		$("#atk_view").load('proses/pro_artikel2.php?pro=select');
	});
	// end select atkyawan
	
	// button form input
	$("#atk_btn_input").click(function(){
		$("#atk_view").hide("slow");
		$("#atk_divisi").show("slow");
	});
	// end button
	// 
// ===============================frm_jadwal.php
// start save pllyawan
	$("#jdl_simpan").click(function(){
		var jdl_form=$("#jdl_form").serialize();
		// alert(jdl_form);
		jdl_id=$('#jdl_id').val();
		jdl_tgl=$("#jdl_tgl").val();
		jdl_bdy_id=$("#jdl_bdy_id").val();
		jdl_status=$("#jdl_status").val();
		
		
	
		if($.trim(jdl_tgl)==""||$.trim(jdl_bdy_id)==""){
			alert('Data Tidak Boleh Ada Yang Kosong!!');
		}else{
			$.ajax({
				url:"proses/pro_jadwal.php?pro=insert",
				type:"GET",
				data:jdl_form,
				cache:false,
				success:function(html){
					 alert(html);
						jdl_id=$('#jdl_id').val("");
						jdl_tgl=$("#jdl_tgl").val("");
						jdl_bdy_id=$("#jdl_bdy_id").val("");
						jdl_status=$("#jdl_status").val("");
		

				}
			});
		}
	});// end save

	

	// btn select karyawan
	$("#jdl_btn_select").click(function(){
		$("#jdl_divisi").hide();
		$("#jdl_view").show("slow");
		$("#jdl_view").load('proses/pro_jadwal.php?pro=select');
	});
	// end select jdlyawan
	
	// button form input
	$("#jdl_btn_input").click(function(){
		$("#jdl_view").hide("slow");
		$("#jdl_divisi").show("slow");
	});
	// end button
// ==========================lap_transaksi.php
$("#lap_dis_simpan").click(function(){
		var lap_dis_form=$("#lap_dis_form").serialize();
		lap_bl_p1=$("#lap_bl_p1").val();
		lap_bl_p2=$("#lap_bl_p2").val();
		
			$.ajax({
				url:"proses/pro_lap_pesan.php",
				type:"GET",
				data:lap_dis_form,
				cache:false,
				success:function(html){

					// alert(html);
					// if (cf==true){
						window.open('/sibule/admin/proses/pro_lap_pesan.php?lap_bl_p1='+lap_bl_p1+'&lap_bl_p2='+lap_bl_p2);
					// }
					document.location.reload(true);
				}
			});
		// }
	});// end save



// =====================end jquery
})// end jquery
// ======================end jquery
// 
// ==================function
// 
// 
// frm_pemesanan.php
function psn_update(id){
	// alert(id);
	$.ajax({
		url:"proses/pro_pemesanan.php?pro=update",
		type:"get",
		data:"psn_id="+id,
		cache:false,
		success:function(html){
			// alert(html);
			$("#psn_view").load("proses/pro_pemesanan.php?pro=select");
			
		}
	});
	
}

	function valid_angka(evt){
	var charcode= (evt.which) ? evt.which : event.keycode;
		if(charcode>31 &&(charcode <48||charcode>57)){
			alert("maaf harus angka");
			$(".angka").val("");
			return false;
		}
	return true;
}//end fungsi

// =================frm_pengelola.php
function png_update(id){
	$("#pll_view").hide("slow");
	$("#pll_divisi").show("slow");
	$.ajax({
		url:"proses/pro_pengelola.php?pro=select_up",
		type:"GET",
		data:"pll_id="+id,
		success:function(html){
			a=html.split('|');
			$("#pll_id").val(id);
			$("#pll_nama").val(a[0]);
			$("#pll_tempat_lahir").val(a[2]);
			$("#pll_tgl_lahir").val(a[3]);
			$("#pll_alamat").val(a[5]);
			$("#pll_tlp").val(a[4]);
			var lvl=a[6];
			// alert(lvl);
			if(lvl=='1'){
				$(".pll_lvl").append('<option value="1">Admin</option>');
			}else{
				$(".pll_lvl").append('<option value="2">karyawan</option>');
			}
			var jk=a[1];
			if(jk=='L'||jk=='l'){
				$('#pll_l').prop('checked',true);
			}else{
				$('#pll_p').prop('checked',true);
			}

		}
	});
}	


// functiom hapus karyaawan
function png_hapus(id){
	a=confirm("Amda Yakin Akan Menghapus Ini?");
	if(a==true){
		$.ajax({
			url:"proses/pro_pengelola.php?pro=delete",
			type:"GET",
			data:"pll_id="+id,
			cache:false,
			success:function(html){
				// alert(html);
				$("#pll_view").load('proses/pro_pengelola.php?pro=select');
			}
		});
	}else{
		alert("Data Batal Dihapus");
		$("#kar_view").load('proses/pro_karyawan.php?pro=select');
	}
	

}


// =====================function frm_kategori.php
function ktg_update(id){
	$("#ktg_view").hide("slow");
	$("#ktg_divisi").show("slow");
	$.ajax({
		url:"proses/pro_kategori.php?pro=select_up",
		type:"GET",
		data:"ktg_id="+id,
		success:function(html){
			a=html.split('|');
			$("#ktg_id").val(id);
			$("#ktg_nama").val(a[1]);
			
		}
	});
}	

// ======
function ktg_hapus(id){
	a=confirm("Amda Yakin Akan Menghapus Ini?");
	if(a==true){
		$.ajax({
			url:"proses/pro_kategori.php?pro=delete",
			type:"GET",
			data:"ktg_id="+id,
			cache:false,
			success:function(html){
				// alert(html);
				$("#ktg_view").load('proses/pro_kategori.php?pro=select');
			}
		});
	}else{
		alert("Data Batal Dihapus");
		$("#ktg_view").load('proses/pro_kategori.php?pro=select');
	}
	

}

// ===================function frm_produk.php
function pdk_update(id){
	$("#pdk_view").hide("slow");
	$("#pdk_divisi").show("slow");
	$.ajax({
		url:"proses/pro_produk.php?pro=select_up",
		type:"GET",
		data:"pdk_id="+id,
		success:function(html){
			a=html.split('|');
			$("#pdk_id").val(id);
			$("#pdk_nama").val(a[1]);
			$(".pdk_ktg_id").append('<option ></option>').attr('value',a[2]).text(a[3]);
			$("#pdk_harga").val(a[4]);
			
		}
	});
}	

// ======
function pdk_hapus(id){
	a=confirm("Amda Yakin Akan Menghapus Ini?");
	if(a==true){
		$.ajax({
			url:"proses/pro_produk.php?pro=delete",
			type:"GET",
			data:"pdk_id="+id,
			cache:false,
			success:function(html){
				// alert(html);
				$("#pdk_view").load('proses/pro_produk.php?pro=select');
			}
		});
	}else{
		alert("Data Batal Dihapus");
		$("#pdk_view").load('proses/pro_produk.php?pro=select');
	}
	

}

// ========================function frm_budidaya.php
function bdy_update(id){
	$("#bdy_view").hide("slow");
	$("#bdy_divisi").show("slow");
	$.ajax({
		url:"proses/pro_budidaya.php?pro=select_up",
		type:"GET",
		data:"bdy_id="+id,
		success:function(html){
			a=html.split('|');
			$("#bdy_id").val(id);
			$("#bdy_nama").val(a[1]);
			$("#bdy_tlp").val(a[2]);
			$("#bdy_alamat").val(a[3]);
			
		}
	});
}	

// ======
function bdy_hapus(id){
	a=confirm("Amda Yakin Akan Menghapus Ini?");
	if(a==true){
		$.ajax({
			url:"proses/pro_budidaya.php?pro=delete",
			type:"GET",
			data:"bdy_id="+id,
			cache:false,
			success:function(html){
				// alert(html);
				$("#bdy_view").load('proses/pro_budidaya.php?pro=select');
			}
		});
	}else{
		alert("Data Batal Dihapus");
		$("#bdy_view").load('proses/pro_budidaya.php?pro=select');
	}
	

}

// ==============================frm_jadwal.php
function jdl_update(id){
	$("#jdl_view").hide("slow");
	$("#jdl_divisi").show("slow");
	$.ajax({
		url:"proses/pro_jadwal.php?pro=insert",
		type:"GET",
		data:"jdl_id="+id,
		success:function(html){
			alert(html);
			// a=html.split('|');
			// $("#jdl_id").val(id);
			// $("#jdl_nama").val(a[1]);
			// $("#jdl_tlp").val(a[2]);
			// $("#jdl_alamat").val(a[3]);
			
		}
	});
}	

// ======
function jdl_hapus(id){
	a=confirm("Amda Yakin Akan Menghapus Ini?");
	if(a==true){
		$.ajax({
			url:"proses/pro_jadwal.php?pro=delete",
			type:"GET",
			data:"jdl_id="+id,
			cache:false,
			success:function(html){
				// alert(html);
				$("#jdl_view").load('proses/pro_jadwal.php?pro=select');
			}
		});
	}else{
		alert("Data Batal Dihapus");
		$("#jdl_view").load('proses/pro_jadwal.php?pro=select');
	}
	

}


// ================frm_customer.php
function view_cus(){
	$.ajax({
		url:"proses/pro_customer.php?pro=select",
		type:"get",
		cache:false,
		success:function(html){
			// alert(html);
			$("#cus_view").load("proses/pro_customer.php?pro=select");
		}
	});
}

