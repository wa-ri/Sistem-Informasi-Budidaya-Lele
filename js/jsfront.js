//============ start jquery
$(document).ready(function(){
	// psn_view();
	faktur();
	shop_view()
	show_akun();
	show_panen();

	//============= register.php
	$("#cus_register").click(function(){
		cus_register=$("#cus_form").serialize();
		// alert(cus_register);
		$.ajax({
			url:"proses/pro_daftar.php?pro=insert",
			type:"get",
			data:cus_register,
			cache:false,
			success:function(html){
				// alert(html);
				$(".bersih").val("");
				alert("Berhasil!!");
				window.location="?cs=index";
			}

		});
	});



	//============= index/login.php
	$("#lgn").click(function(){
		lgn_form=$("#lgn_form").serialize();
		// alert(lgn_form);
		$.ajax({
			url:"proses/pro_login.php",
			type:"get",
			data:lgn_form,
			cache:false,
			success:function(html){
				// alert(html);
				$(".bersih").val("");
				if(html==""){
					alert("Berhasil!!");
					window.location="?cs=category";
				}else{
					alert("Failed Login!!");
					window.location="?cs=index";
				}
				
			}

		});
	});


	var sess_id=$("#sess_id").val();
	$(".valid").click(function(event) {
		event.preventDefault();
		// alert(sess_id);

		var attr=$(this).attr("href");
		// alert(attr);
		if(sess_id==""){
				alert("Sorry You have to Login !!");
				window.location="?cs=index";
		}else{
				window.location=attr;
		}
		
	});


	// view kategori
	$(".opt").click(function(event) {
		event.preventDefault();
		opt=$(this).attr("href");
		// alert(opt);
		
		window.location="?cs=category&ktg_id="+opt;
	});


	// singgle produk
	$(".add_cart").click(function(event) {
		event.preventDefault();

		pdk_id=$(this).attr("id");
		jumlah=$("#sst").val();
		no_cart=$("#no_cart").val();
		harga=$("#harga").val();


		// alert (pdk_id+"/"+jumlah+"/"+no_cart+"/"+harga);
		// 
		$.ajax({
			url:"proses/pro_addcart.php?pro=insert",
			type:"get",
			data:"pdk_id="+pdk_id+"&jumlah="+jumlah+"&no_cart="+no_cart+"&harga="+harga,
			cache:false,
			success:function(html){
				// alert(html);

			}

		});

	}); 


	// checkout
	$("#checkout").click(function(event) {
		no_cart=$("#no_cart").val();
		sess_id=$("#sess_id").val();

		// alert(no_cart+"/"+sess_id);
		$.ajax({
			url:"proses/pro_checkout.php?pro=insert",
			type:"get",
			data:"no_cart="+no_cart,
			cache:false,
			success:function(html){
				// alert(html);
				
					window.location.reload(true);
					window.location="?cs=category";
				
			}

		})

	});
	// 
	
	


	//========== menu myaccount |index.php
	$(".not_next").click(function(event) {
		event.preventDefault();
		var attr=$(this).attr("href");
		sess_id=$("#sess_id").val();
		no_cart=$("#no_cart").val();
		// alert(attr);
		if(sess_id!==""){
				window.location=attr+"&no_cart="+no_cart;
		}

		
	});
	

// ================akun.php
$("#akn_update").click(function(event) {
	akn_form=$("#akn_form").serialize();
	// alert(akn_form);

	$.ajax({
		url:"proses/pro_akun.php?pro=update",
		type:"get",
		data:akn_form,
		cache:false,
		success:function(html){
			console.log(html)
		}
	});
});


	




});
//================== end jquery


// =======================function faktur pesan 
function faktur(){
	$.ajax({
		url:"proses/pro_addcart.php?pro=faktur",
		type:"get",
		success:function(html){
			// alert(html);
			$("#no_cart").val(html);
		}

	});
}


// ============= keranjang
function psnview (){
	no_cart=$("#no_cart").val();
	$("#psn_view").load('proses/pro_addcart.php?pro=select&no_cart='+no_cart);
}

function psn_hapus(id){
	sess_id=$("#sess_id").val();
	no_cart=$("#no_cart").val();
	// alert(id+"/"+sess_id+"/"+no_cart);
	con=confirm("Are You Sure want to delete this product??");
	if(con==true){
		$.ajax({
			url:"proses/pro_addcart.php?pro=delete",
			type:"get",
			data:"no_cart="+no_cart+"&pdk_id="+id,
			cache:false,
			success:function(html){
				// alert(html);
				window.location.reload(true);
				
			}
		});
	}else{
		alert("Cancel delete this product!!");
	}
	


}

function shop_view(){
	$.ajax({
		url:"proses/pro_shoping.php?pro=select",
		type:"get",
		cache:false,
		success:function(html){
			$("#shop_view").load('proses/pro_shoping.php?pro=select');
		}

	});
}



// show akun

function show_akun(){
	sess_id=$("#sess_id").val();
		if(sess_id!==""){
			$.ajax({
				url:"proses/pro_akun.php?pro=select_up",
				type:"get",
				cache:false,
				success:function(html){
					// alert(html);
					a=html.split("|");
					$("#akn_nama").val(a[0]);
					jk=a[5];
					if(jk=="l"||jk=="L"){
						$("#akn_l").prop('checked',true);
					}else{
						$("#akn_p").prop('checked',true);
					}
					$("#akn_tempat_lahir").val(a[1]);
					$("#akn_tgl_lahir").val(a[2]);
					$("#akn_alamat").val(a[4]);
					$("#akn_tlp").val(a[3]);
				}
			})
		}
}


// panen.php
function show_panen(){
	$.ajax({
		url:"proses/pro_jadwal.php?pro=select",
		type:"get",
		cache:false,
		success:function(html){
			$("#view_jdl").load("proses/pro_jadwal.php?pro=select");
		}
	});
}

