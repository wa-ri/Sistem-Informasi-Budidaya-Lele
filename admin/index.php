<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sibule||Login</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <!-- <img class="align-content" src="images/logo.png" alt=""> -->
                        <h1><p>Sistem Informasi Budidaya Lele || SIBULE</p></h1>
                    </a>
                </div>
                <div class="login-form">
                    <form>
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" placeholder="User Name" id="lgn_user">
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="yyyy-mm-dd" id="lgn_pass">
                        </div>
                                
                                <button type="button" class="btn btn-success btn-flat m-b-30 m-t-30" id="login-btn">Sign in</button>
                               
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- <script src="vendors/popper.js/dist/umd/popper.min.js"></script> -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- <script src="assets/js/main.js"></script> -->
    
    <script>
    $(document).ready(function(){
        $("#login-btn").click(function(e){
            e.preventDefault();
            user=$("#lgn_user").val();
            pass=$("#lgn_pass").val();

            if($.trim(user)=="" && $.trim(pass)==""){
                alert("Username Dan Password Harus Diisi!!");
          $("#lgn_user").focus();
            }else if($.trim(user)==""){
                alert("Username Tdak Boleh Kosong!!");
                $("#lgn_user").focus();
            }else if($.trim(pass)==""){
                alert("Paassword Tdak Boleh Kosong!!");
                $("#lgn_pass").focus();
            }else{
                $.ajax({
                    url:"proses/pro_login.php",
                    type:"post",
                    data:"lgn_user="+user+"&lgn_pass="+pass,
                    cache:false,
                    success:function(html){
                        // alert(html);
                        if(html==""){
                            window.location='home.php';

                        }else{
                             alert(html);
                             $("#lgn_user").val("");
                             $("#lgn_pass").val("");
                        }
                    }
                });
            }

        });
      // jika textbox username di enter
        $("#lgn_user").keyup(function(event) {
           user=$("#lgn_user").val();
            var charcode =(event.which)?event.which:event.keycode;
            if(charcode==13){
                if($.trim(user)==""){
                  alert("Username Tdak Boleh Kosong!!");
                  $("#lgn_user").focus();
                }else{
                    $("#lgn_pass").focus();
                }
            

            }
        });
        // jika textbox password di enter
       $("#lgn_pass").keyup(function(event) {
           pass=$(this).val();
            var charcode =(event.which)?event.which:event.keycode;
            if(charcode==13){
                if($.trim(pass)==""){
                  alert("Password Tdak Boleh Kosong!!");
                 $("#lgn_pass").focus();
                }else{
                   $("#login-btn").focus();
                }
            

            }
        });

    });
  </script>

</body>

</html>
