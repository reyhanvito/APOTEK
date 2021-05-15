<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>APOTEK AMANAH</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  </head>
  <body>
    <div class="medsos">
      <div class="container">
        <ul>
          <li><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li> 
          <li><a href="#"><i class="fab fa-whatsapp"></i></a></li> 
          <li><a href="#"><i class="fab fa-youtube"></i></a></li>
        </ul>
      </div>
    </div>
    <header>
      <div class="container">
      <h1><a href="index.html"><i class="fas fa-shopping-cart"></i>APOTEK AMANAH</a></h1>
        <ul>
          <li><a href="index.html"><i class="fas fa-home"></i>HOME</a></li>
          <li><a href="about.html"><i class="fas fa-address-card"></i>ABOUT</a></li>
          <li><a href="product.html"><i class="fab fa-shopify"></i>PRODUCT</a></li>
          <li><a href="bukutamu.php"><i class="fas fa-address-book"></i>BUKU TAMU</a></li>
          <li><a href="Detailproduk.html"><i class="fas fa-question-circle"></i>Detailproduk</a></li>
        </ul>
      </div>
    </header>
    <div class="buku">
        <table>
            <form action="<?php echo $_SERVER ['PHP_SELF'] ?>" method="POST" onsubmit="validasi()">
            <tr><div>
                <td><label for="">Nama Lengkap</label></td>
                <td><input type="text" name="nama" id="nama" placeholder="contoh. Reyhanvito"></td>
            </tr></div>
            <tr><div>
                <td><label for="">Email</label></td>
                <td><input type="text" name="email" id="email" placeholder="contoh. Reyhanvito"></td>
            </tr></div>
            <tr><div>
                <td><label for="">Nomor HP</label></td>
                <td><input type="number" name="nomer" id="nomer" placeholder="contoh. Reyhanvito"></td>
            </tr></div>
            <tr><div>
                <td><label for="">Alamat</label></td>
                <td><input type="text" name="alamat" id="alamat" placeholder="contoh. Reyhanvito"></td>
            </tr></div>
            <tr><div>
                <td><label for="">Umur</label></td>
                <td><input type="number" name="umur" id="umur" placeholder="contoh. Reyhanvito"></td>
            </tr></div>
            <tr><div class="button">
                <td colspan="2"><input type="submit" value="Submit"></td>
            </div></tr>
            </form>
        </table>
        </fieldset>
    </div>
    <script>
        function validasi() {
            var nama = document.getElementById("nama").value;
            var email = document.getElementById("email").value;
            var nomer = document.getElementById("nomer").value;
            var alamat = document.getElementById("alamat").value;
            var umur = document.getElementById("umur").value;

            if (nama !="" && email !="" && nomer !="" && alamat !="" umur !=""){
                return true
            }else{
                alert("Anda harus mengisi data terlebih dahulu")
            }
        }
    </script>
    <br><div class="php">
    <?php
        if(isset($_POST['nama'])){
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $nomer = $_POST['nomer'];
            $alamat = $_POST['alamat'];
            $umur = $_POST['umur'];

            echo"
            <table>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nomer</th>
                    <th>Alamat</th>
                    <th>Umur</th>
                </tr>
                <tr>
                    <td>$nama</td>
                    <td>$email</td>
                    <td>$nomer</td>
                    <td>$alamat</td>
                    <td>$umur</td>
                </tr>
            </table>";
        }
    ?>    
    </div>

    <footer>
		<div class="container">
			<marquee direction="left">Copyright &copy; 2020 - ReyhanVito.All Right Reserved..</marquee>
		</div>
	</footer>
  </body>
</html>
