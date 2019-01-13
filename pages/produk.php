<html>
<head>
	<title>DISTRICT VAPE</title>
	 <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
	 <link href="../assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
	 <script type="text/javascript" src="../assets/js/jquery-2.1.1.js"></script>
	 <link rel="shortcut icon" href="../assets/img"/>
	 <link href="../assets/css/sekolah.css" rel="stylesheet" type="text/css" />
	 <link href="../assets/css/sosmed.css" rel="stylesheet" type="text/css" />
	 <link href="../assets/css/galeristaff.css" rel="stylesheet" type="text/css" />
	 <link rel="shortcut icon" type="image/ico" href="../assets/img/favicon.ico">


</head>
<body class="biru-tua">
	<div class="skl-banner">
		<!-- Start Nama Header -->
		<div class="col-md-6 ">
			<h1 class="txt-putih"></i>&nbsp; DISTRICT VAPE</h1>
			<h5 class="txt-putih">"Best Price, Best Deals, Best Service"</h5>
		</div>
		<!-- End Nama Header -->

		<div class="col-md-6  txt-kanan">
			<p>
				<a href="../index.php" class="txt-putih"> <i class="fa fa-home"></i>&nbsp;Home</a>&nbsp;|  
				<a href="form.php" class="txt-putih"> <i class="fa fa-user"></i>&nbsp;Login</a>
			</p>
			 <form class="navbar-form navbar-right" role="search">
		        <span class="input-group-btn">
		          	<input type="text" class="form-control" placeholder="Search"> 
		          	<button type="submit" class="btn btn-default padding-9 "><i class="fa fa-search"></i>
		          	</button>
		      	</span>
		     </form>
		</div>
		<div class="sambungfloat"></div>
	</div>
	<div class="col-md-12">
		<div class="skl-banner">
			<nav class="navbar navbar-default biru-muda skl-shadow" role="navigation">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a href="../index.php" class="navbar-brand active txt-putih"><i class="fa fa-home"></i>&nbsp;Home</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav ">
			        
			        <li><a href="staff.php"><i class="fa  fa-user ">&nbsp;</i>Staff Vaporista</a></li>
			        <li><a href="produk.php"><i class="fa  fa-group ">&nbsp;</i>Daftar Produk</a></li>
			
			          </ul>
			        </li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
			<!--slider-->

			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel ">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    
			     <div class="item active">
					<img src="../assets/img/homes/coba3.PNG" width="100%" height="60%"  alt="gambar">
					<div class="carousel-caption">
						<b>DISTRICT VAPE SHOP</b>
					</div>
				</div>
				<div class="item">
					<img src="../assets/img/jadi.jpg" width="100%" height="60%" alt="gambar">
					<div class="carousel-caption">
						<b>OUR FAMILY</b> 
					</div>
				</div>
				<div class="item">
					<img src="../assets/img/jadi3.jpg" width="100%" height="60%" alt="gambar">
					<div class="carousel-caption">
						<b>DISTRICT VAPE SHOP</b>
					</div>
				</div>
			    
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			<div class="sambungfloat"></div>
			</div>


				<div class="bg-putih skl-radius skl-shadow">
					<div class="col-md-3">

						<div class="col-md-4 merah skl-radius-ats  txt-putih ">Agenda</div>
						<div class="col-md-8 skl-content "></div>
							
						<div class="sambungfloat"></div>

						<div class="skl-content garis ">
							<div class="row">
								<div class="col-md-12">
								<marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="3" direction="up" width="100%" height="40%" align="left">
								
								<a href="#" target="new">&rsaquo;&rsaquo; Kompetisi CLOUD CHASE 2019</a></br>
								
								</marquee>
								</div>
								<div class="sambungfloat"></div>
							</div>
					</div>
				</div>	

				<div class="col-md-6">
					<div class="col-md-4 merah skl-radius-ats  txt-putih ">PRODUK</div>

					<?php 
                    require "../connect.php";
                    $no = 1;
                    $data = mysqli_query($connect, "SELECT * FROM prodak");
                    while($isi = mysqli_fetch_array($data))
                    {
                    ?>

					<div class="col-md-8 skl-content "></div>
						
						<div class="sambungfloat"></div>

						<div class="skl-content garis">
							<center><h4><b><a href="#"><?php echo $isi['nama_prodak']; ?> (<?php echo $isi['id_prodak']; ?>)</a></b></br><img src="<?php echo "../admin/images/".$isi['gambar']; ?>" width="40%"><br></h4></center>
						<p>
							Keterangan :<br>
							<?php echo $isi['keterangan']; ?>
						</p>
						</div>
						<?php
                                                    }
                                                    ?>
					

				</div>	
					<div class="col-md-3">
						<div class="col-md-4 merah skl-radius-ats  txt-putih ">Info</div>
						<div class="col-md-8 skl-content "></div>
						<div class="sambungfloat"></div>
						
						<div class="skl-content garis">
							<div class="row">
							<div class="col-md-12">

								<p>&radic; 2018-3-07</br> Pendaftaran Kompetisi CLOUDCHASE 5 Desember 2018</br></p>
						        <p>&radic; 2018-3-07</br> Pendaftaran Kompetisi CLOUD TRICK 5 Desember 2018</br></p>
						        <p>&radic; 2018-6-07</br> Pelaksanaan KOMPETISI 20 Desember 2018</br></p>
						        <p>&radic; 2018-9-07</br> Pembagian GIVEAWAY 21 Desember 2018 </br></p>


							</div>

							<div class="sambungfloat"></div>
							</div>
						</div>
					</div>
					<div class="sambungfloat"></div>
				</div>


			<div class="bg-putih skl-radius skl-shadow bts-atas">
				<div class="col-md-3">
					<div class="col-md-4 kuning skl-radius-ats  txt-putih ">Map</div>
					<div class="col-md-8 skl-content "></div>
						
						<div class="sambungfloat"></div>
					<div class="skl-content">
						<div class="row">
							<div >
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15815.176877503303!2d110.4347796!3d-7.7052185!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x778740598bd88b0e!2sSMA+Negeri+2+Ngaglik!5e0!3m2!1sid!2sid!4v1530417809556" width="250" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
								
							</div>
 						</div>
					</div>
				</div>	
				<div class="col-md-6">
					<div class="col-md-4 kuning skl-radius-ats  txt-putih ">Soscial media</div>
					<div class="col-md-8 skl-content "></div>

						<div class="sambungfloat"></div>
					<div class="skl-content">
						<div class="row">
							<div>

								<div class="social">
  									<a href="https://www.facebook.com" class="link facebook" target="_parent"><span class="fa fa-facebook-square"></span></a>
	  								<a href="https://twitter.com/login?lang=id" class="link twitter" target="_parent"><span class="fa fa-twitter"></span></a>
	  								<a href="https://accounts.google.com/ServiceLogin" class="link google-plus" target="_parent"><span class="fa fa-google-plus-square"></span></a>
	  								<a href="https://path.com/" class="link pinterest" target="_parent"><span class="fa fa-pinterest-square"></span></a>
								</div>
								<div class="sambungfloat"></div>
							</div>
						</div>
					</div>
				</div>	
				<div class="col-md-3">
					<div class="col-md-4 kuning skl-radius-ats  txt-putih ">Contact</div>
					<div class="col-md-8 skl-content "></div>
						
						<div class="sambungfloat"></div>
					<div class="skl-content">
						<div class="row">
							<div class=" txt-tengah">
								<h5><b> Alamat: Jl. DAMAI No. 168 A, Sukoharjo, Ngaglik, , Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta <b></h5>
								<h6>
									<b>Telp admin : (0877) 60970007</br> 
									Kodepos: 55581</br> 
									E-Mail: districtvape@gmail.com</b></h6>	
							</div>
						</div>
					</div>
				</div>
				<div class="sambungfloat"></div>
			</div>
			<!--bts akhir footer-->
		</div>
	</div>

</body>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</html>
<div class="biru-tua txt-tengah txt-putih">
	<div>Copyright &copy; 2018 DISTRICT DEFENDERS, All Right Reserved</div>
</div>