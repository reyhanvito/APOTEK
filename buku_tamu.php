html>
	<head>
		<title>Home</title>
	</head>

	<style>
	* {
		box-sizing: border-box;
		font-family: Times New Roman;
	}
	body {
	  margin: 0;
	}  
	.header {
	  background-color: #f0f0f0;
	  padding: 20px;
	  text-align: center;
	}
	.topnav {
	  overflow: hidden;
	  background-color: black;
	}
	.topnav a {
	  float: left;
	  display: block;
	  color: #f2f2f2;
	  text-align: center;
	  padding: 14px 74.22px;
	  text-decoration: none;
	}
	.topnav a:hover {
	  background-color: #ddd;
	  color: black;
	}
	div.home{
		margin: 12px;
		border: 1px solid #ccc;
		width: 300px;
		padding: 6px;
		float: left;
		
	}
	div.home:hover{
		border: 1px solid #777;
	}
	div.name{
		font-size: 110%;
		margin-bottom: 20px;
		text-transform: uppercase;
		text-align: center;
	}
	div.name a {
		color: black;
		font-weight: bold;
	}
	div.name a:hover{
		color:blue;
	}

	.img{
		 width: 90%;
		 height: 300px;
		 margin-right: 15px;
	}
	div.creator{
		padding: 15px;
		text-align: justify;
	}
	div.desc{
		color: #707070;
		text-align: justify;
	}
	div.price{
		font-size: 80%;
		padding-left: 15px;
		color: red;
	}
	div.price-diskon{
		padding-left: 15px;
		color: darkblue;
	}
</style>

	<style>
		* {
		  box-sizing: border-box;
		}

		input[type=text], select, textarea {
		  width: 100%;
		  padding: 12px;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  resize: vertical;
		}

		label {
		  padding: 12px 12px 12px 0;
		  display: inline-block;
		}

		input[type=submit] {
		  background-color: black;
		  color: white;
		  padding: 12px 20px;
		  border: none;
		  border-radius: 4px;
		  cursor: pointer;
		}

		input[type=submit]:hover {
		  background-color: #2e2e2e;
		}

		.container {
		  border-radius: 5px;
		  padding: 20px;
		}

		.col-25 {
		  float: left;
		  width: 25%;
		  margin-top: 6px;
		}

		.col-75 {
		  float: left;
		  width: 75%;
		  margin-top: 6px;
		}

		/* Clear floats after the columns */
		.row:after {
		  content: "";
		  display: table;
		  clear: both;
		}

		/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
		@media screen and (max-width: 600px) {
		  .col-25, .col-75, input[type=submit] {
		    width: 100%;
		    margin-top: 0;
		  }
		}
		.report-success{
			height: 40px;
			float: left;
			width: 100%;
			margin: 10px;
			padding-top: 6px;
			background-color: green;
			color: white;
			font-weight: bold;
			text-align: center;
		}
		.report-error{
			height: 40px;
			float: left;
			width: 100%;
			margin: 10px;
			padding-top: 6px;
			background-color: red;
			color: white;
			font-weight: bold;
			text-align: center;
		}
	</style>

	<body>
		<div class="header">
			<h2 align="center">Wardah Beauty</h2>
			<p align="center">Menjual Berbagai Produk Wardah<p/>
		</div>

		<div class="topnav">
		  <a href="index.php">Home</a>
		  <!-- <a href="cart.php">CART</a> -->
		  <a href="pesan.php">Pemesanan</a>
		  <a href="buku_tamu">Buku Tamu</a>
		  <!-- <a href="profile.php">PROFILE</a> -->
		</div>

		<h3 align="center">BUKU TAMU</h3>

	    	

		  <?php 
		  	if(isset($_GET['submit'])){

					if($_GET["nama"] == "" || $_GET["hp"] == "" || $_GET["email"] == "" || $_GET["alamat"] == "" ||  $_GET["tau"] == "" ||  $_GET["saran"] == ""){
						echo "<h4 align='center'>Terjadi Kesalahan, Harap Lengkapi Form Pemesanan</h4>";
						return;
					}	
					$host = "localhost";
					$username = "root";
					$password = "";
					$database = "uas";

					$conn2 = new mysqli($host, $username, $password, $database);

					if ($conn2->connect_error)	die("Connection failed: " . $conn2->connect_error);

					$sql = "INSERT INTO buku_tamu (NAMA, ALAMAT, HP, EMAIL, TAU_DARI, SARAN) VALUES ('".$_GET["nama"]."', '".$_GET["alamat"]."', '".$_GET["hp"]."', '".$_GET["email"]."', '".$_GET["tau"]."', '".$_GET["saran"]."')";

					if($conn2->query($sql) === FALSE){
						echo'
							<div class="report-error">Harap Coba Lagi...</div>
						';
						echo $conn2->error;
					}else{
						echo '
							<div class="report-success">Berhasil!</div>
						';
					}

					$conn2->close();
				}
		   ?>
			  <br>
		<div class="container">
		  <form action="?">
			  <div class="row">
			    <div class="col-25">
			      <label for="nama">Nama</label>
			    </div>
			    <div class="col-75">
			      <input type="text" id="nama" name="nama">
			    </div>
			  </div>

			  <div class="row">
			    <div class="col-25">
			      <label for="hp">Nomor HP</label>
			    </div>
			    <div class="col-75">
			      <input type="text" id="hp" name="hp">
			    </div>
			  </div>

			  <div class="row">
			    <div class="col-25">
			      <label for="email">Email</label>
			    </div>
			    <div class="col-75">
			      <input type="text" id="email" name="email">
			    </div>
			  </div>

			  <div class="row">
			    <div class="col-25">
			      <label for="alamat">Alamat</label>
			    </div>
			    <div class="col-75">
			      <textarea id="alamat" name="alamat"style="height:200px"></textarea>
			    </div>
			  </div>

			  <div class="row">
			    <div class="col-25">
			      <label for="tau">Tau Web dari ?</label>
			    </div>
			    <div class="col-75">
			      <select id="tau" name="tau">
			        <option value="Teman / Saudara">Teman / Saudara</option>
			        <option value="Sosial Media<">Sosial Media</option>
			        <option value="Iklan">Iklan</option>
			        <option value="Saran">Saran</option>
			      </select>
			    </div>
			  </div>

			  <div class="row">
			    <div class="col-25">
			      <label for="saran">Saran</label>
			    </div>
			    <div class="col-75">
			      <textarea id="saran" name="saran"style="height:200px"></textarea>
			    </div>
			  </div>

			  <br>

			  <div class="row">
			  	<center>
			    <input type="submit" name="submit" value="KIRIM">
				</center>
			  </div>

		  </form>

		</div>
			<?php
				$host = "localhost";
				$username = "root";
				$password = "";
				$database = "uas";
					
				$conn = new mysqli($host, $username, $password, $database);

				if ($conn->connect_error)	die("Connection failed: " . $conn->connect_error);

				$sql = "SELECT * FROM buku_tamu";
				$result = $conn->query($sql);
	 
				if (isset($result->num_rows) && $result->num_rows > 0) {
				  while($row = $result->fetch_assoc()) {
					echo'
						<div class="home">
							<h3>'.$row['nama'].'</h3>
							<div class="desc">'.$row['saran'].'</div>
						</div>
					';
				  }
				} else {
				  echo "no data results";
				}

				$conn->close();

			?>
	</body>
</html>