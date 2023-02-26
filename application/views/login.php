<!DOCTYPE html>
<html class=""><head><meta charset="utf-8"><meta name="viewport" content="width=device-width"><title>
	Halaman Login
</title> <link rel="stylesheet" href="<?php echo base_url('Styles/Style.css');?>"/> 


<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('assets_login/images/icons/icon.ico'); ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_login/vendor/bootstrap/css/bootstrap.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_login/vendor/animate/animate.css'); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_login/vendor/css-hamburgers/hamburgers.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_login/vendor/animsition/css/animsition.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_login/vendor/select2/select2.min.css'); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_login/vendor/daterangepicker/daterangepicker.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_login/css/util.css'); ?>">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_login/css/mains.css'); ?>"> -->
<!--===============================================================================================-->


  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" rel="stylesheet">






    
<!-- Google Font -->
<link rel="stylesheet" href="<?php echo base_url('https://fonts.googleapis.com/css?family=Nunito:300,300i,400,600,800'); ?>">
    
<!-- Font Awesome Icons -->
<link rel="stylesheet" crossorigin="anonymous" href="<?php echo base_url('https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU'); ?>">
    
<!-- Main CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css'); ?>">
    
<!-- Animation CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/vendor/aos.css'); ?>">

</head>
    

<body style="background-repeat: no-repeat; background-size: cover; background-image: url(<?php echo base_url();?>assets_login/images/IMG_Background.jpg)">

	
<div class="polman-nav-static-top" style="opacity: 0.9;">
                      <div class="float-left">
	<img src="<?php echo base_url('assets_login/images/IMG_Logo.png') ?>" style="height: 40px; margin-top: 5px;"></a>                   
                    </div>
                </div>






<!-- 	<!-- Main -->
<div class="limiter">
<br>
<br>
<br>
<br>
 <form class="polman-form-login" action="" method="post" autocomplete="off">

        <h4>Masuk Akun</h4>
        <hr>

        <div class="form-group" data-validate = "Enter username">
        	<label for="txtUsername">Username <span style="color: red;">*</span></label>
            <span id="MainContent_reqTxtUsername" style="color:Red;display:none;"> harus diisi</span>
						<input class="form-control" type="text" id="yourUsername" name="yourUsername" placeholder="Username">
					</div>

			<div class="form-group" data-validate="Enter password">
			<label for="txtPassword">Password <span style="color: red;">*</span></label>
            <span id="MainContent_reqTxtPassword" style="color:Red;display:none;"> harus diisi</span>
					
						<input class="form-control"  id="yourPassword" name="yourPassword" placeholder="Password">
					</div>
					<div class="polman-nav-static-bottom">
                        Copyright © 2023 - MI Politeknik Astra

</div>

        
            
        <a onclick="getValue()" class="btn btn-primary" style="color: white; width: 100%; margin-top: 10px; margin-bottom: 10px;"Get value>Masuk</a>
       <!--  <div class="container-login100-form-btn m-t-32">
						<button class="btn btn-primary">
							Masuk
						</button>
					</div> -->
</form>


    </div>



</div>
</div>

</head>

<!-- <body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" 
				action="" method="post" autocomplete="off">

					
        <div class="form-group" data-validate = "Enter username">
        	<label for="txtUsername">Username <span style="color: red;">*</span></label>
            <span id="MainContent_reqTxtUsername" style="color:Red;display:none;"> harus diisi</span>
						<input class="form-control" type="text" name="username" placeholder="Username">
					</div>

			<div class="form-group" data-validate="Enter password">
			<label for="txtPassword">Password <span style="color: red;">*</span></label>
            <span id="MainContent_reqTxtPassword" style="color:Red;display:none;"> harus diisi</span>
					
						<input class="form-control" type="password" name="pass" placeholder="Password">
					</div>
					<input type="submit" name="ctl00$MainContent$btnLogin" value="Masuk" onclick="" id="MainContent_btnLogin" class="btn btn-primary" style="width: 100%; margin-top: 10px; margin-bottom: 10px;">	
						<!-- <div class="container-login100-form-btn m-t-32" >
							<button class="btn btn-primary">
								Login
							</button>
						</div> -->
<!-- 
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div> -->
</body>

	
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets_login/vendor/jquery/jquery-3.2.1.min.js'); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets_login/vendor/animsition/js/animsition.min.js'); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets_login/vendor/bootstrap/js/popper.js'); ?>"></script>
	<script src="<?php echo base_url('assets_login/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets_login/vendor/select2/select2.min.js'); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets_login/vendor/daterangepicker/moment.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets_login/vendor/daterangepicker/daterangepicker.js'); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets_login/vendor/countdowntime/countdowntime.js'); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets_login/js/main.js'); ?>"></script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="<?php echo base_url() ?>assets/swal/sweetalert2@11.js"></script>


<script>
    function getValue()
    {
        var usernameUser = document.getElementById('yourUsername').value;
        var pass = document.getElementById('yourPassword').value;
        const d = new Date();
        d.setTime(d.getTime() + (1 * 24 * 60 * 60 * 1000));
        let expires = "expires=" + d.toUTCString();
        // $.support.cors = true;
        $.ajax({
                //Nge get access token
                url: "https://api.polytechnic.astra.ac.id:2906/api_dev/AccessToken/Get",
                type: "POST",
                contenttype : "application/x-www-form-urlencoded",

                // parameter access token
                data: { username: usernameUser, password: pass, grant_type:'password' },  

                success: function (data) {
                    var url1 = "https://api.polytechnic.astra.ac.id:2906/api_dev/efcc359990d14328fda74beb65088ef9660ca17e/SIA/LoginSIA?username="
                    +usernameUser+"&password="+pass;
                    $.ajax({
                        url: url1,
                        type: "POST",
                        headers: {
                            'Authorization': 'Bearer '+data["access_token"]
                        },
                        contentType: 'application/json',
                        // data: { username: usernameUser, password: pass },
                        success: function (result) {
                            // nama var dari api postman
                             if(result["nama"]==""){
                               Swal.fire({
                                icon: 'error',
                                title: 'Gagal Login',
                                text: 'Username atau Password salah!'
                              })
                            }else{
                                Swal.fire({
                                  icon: 'success',
                                  title: 'Login Berhasil!',
                                  showConfirmButton: false,
                                  sleep: 10000
                                })
                                 
                                document.cookie="npk=" + result["npk"] + ";" + expires + ";path=/";
                                document.cookie="username=" + result["username"] + ";" + expires + ";path=/";
                                document.cookie="nama=" + result["nama"] + ";" + expires + ";path=/";
                                document.cookie="role=" + result["role"] + ";" + expires + ";path=/";
                                // Buat nge get masuk sebagai apa

                                setTimeout(() => {
                                  window.location.href= "<?php echo base_url().'login/sso';?> ";
                                }, 1500);
                            }
                        },
                        
                         error: function (data) {
                          Swal.fire({
                            icon: 'error',
                            title: 'Gagal Login',
                            text: 'Username atau Password Salah!'
                          })
                        }
                        
                    });
                }
            });
    }
    </script>

</body>
</html>



