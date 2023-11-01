<?php
session_start();
 include('../aksi/koneksi.php'); 
// $ID = $_GET['ID'];
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: loginadmin.php"); 
}

     if(isset($_POST['submit'])) {
        $produk = $_POST['produk'];
        $harga = $_POST['harga'];
        $gambar = $_FILES['gambar']['name'];
 
     if($gambar != "") {
        $ekstensi_diperbolehkan = array('png', 'jpg');
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];
        // $angka_acak = date("Y-m-d");
        $gambar_baru = date('Y-m-d') . ' ' .$produk . '.' . $ekstensi;
 
         if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
             move_uploaded_file($file_tmp, '../img/gambar_crud/'.$gambar_baru);
 
            //  $query = "UPDATE produk (nama_produk, deskripsi, harga_beli, harga_jual, gambar_produk) VALUES ('$nama_produk', '$deskripsi', '$harga_beli', '$harga_jual', '$nama_gambar_baru')";
             $query = "INSERT INTO listmenu (produk, harga, gambar) VALUES ('$produk','$harga','$gambar_baru')";
             $result = mysqli_query($conn, $query);
 
             if (!$result) {
                die("Query Error: " . mysqli_errno($conn) . " - " . mysqli_error($conn));
            } else {
                echo "<script>alert('Data berhasil ditambahkan!');window.location='dataMenu.php';</script>";
            }
            
        } else {
            echo "<script>alert('Ekstensi gambar hanya bisa jpg dan png!');window.location='menu.php;</script>";
        }
    }
   }
?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bite Box</title>
    <!-- Link -->
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <!-- header section starts -->
    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
        <a href="#" class="logo">Bite Box
            <span>.</span>
        </a>

        <div class="mode">
            <img src="../images/moon.png" id="icon">
        </div>
    </header>
    <!-- header section ends -->
    >

    <br><br><br><br><br><br>
  <!-- contact section starts -->
  <section class="contact" id="contact">
           <h1 class="heading">
               <span> Add </span> Menu
           </h1>
           <div class="row">
   
               <!-- <form action="../views/data.php" method="post"> -->
               <form action="" method="post" enctype="multipart/form-data">
   
                   <input name="produk" type="text" placeholder="nama menu" class="box" required>
                   <input name="harga" type="text" placeholder="harga menu" class="box" required>
                   <input name="gambar" type="file" class="box" required>
                   <a href="../views/order.php" class="btn-submit"> Back </a>
                   <input type="submit" value="Submit" name="submit" class="btn-submit">
   
               </form>
           </div>
           </div>
       </section>
       <!-- contact section ends -->
    <!-- footer section starts -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="../views/index.php">home</a>
                <a href="../views/index.php">about</a>
                <a href="../views/index.php">menu</a>
                <a href="../views/index.php">contact</a>
            </div>
            <div class="box">
                <h3>Location</h3>
                <a href="https://www.google.co.id/maps/@-0.4947968,117.1357696,14z?entry=ttu">Samarinda</a>
                <a href="https://www.google.co.id/maps/place/Balikpapan,+Kota+Balikpapan,+Kalimantan+Timur/@-1.174603,116.841748,11z/data=!3m1!4b1!4m6!3m5!1s0x2df14710964d9c91:0xcaa6ec96c2aea6d2!8m2!3d-1.2379274!4d116.8528526!16zL20vMDJsYjZ4?entry=ttu">Balikpapan</a>
                <a href="https://www.google.co.id/maps/place/Surabaya,+Jawa+Timur/@-7.1282662,112.815134,12.5z/data=!4m6!3m5!1s0x2dd7fbf8381ac47f:0x3027a76e352be40!8m2!3d-7.2574719!4d112.7520883!16zL20vMDFmNHhk?entry=ttu">Surabaya</a>
                <a href="https://www.google.co.id/maps/place/Denpasar,+Kota+Denpasar,+Bali/@-8.6726833,115.2242733,12z/data=!3m1!4b1!4m6!3m5!1s0x2dd2409b0e5e80db:0xe27334e8ccb9374a!8m2!3d-8.6704582!4d115.2126293!16zL20vMDJuYmgx?entry=ttu">Denpasar</a>
            </div>
            <div class="box">
                <h3>Contact Info</h3>
                <a href="https://www.bing.com/ck/a?!&&p=d5327da7f05045bbJmltdHM9MTY5NTc3MjgwMCZpZ3VpZD0xMjI3MWZjZi04ZjFjLTY5M2ItMjJmZS0wZTI3OGIxYzY3YjEmaW5zaWQ9NTE3NQ&ptn=3&hsh=3&fclid=12271fcf-8f1c-693b-22fe-0e278b1c67b1&psq=raudhya+azzahra%27&u=a1aHR0cHM6Ly93d3cuaW5zdGFncmFtLmNvbS9yYXVkaHlhYS8&ntb=1">ig:@raudhyaa</a>
                <a href="https://mail.google.com/mail/u/0/?hl=en#inbox?compose=DmwnWrRsnwxLmQLPZzFGqQDfsldpXQshBPnQZvvpJFQKPkCVZpTdNcnxFhxLhfwPfHLlZxmfJDlB">raudhya.zhra@gmail.com</a>
                <a href="https://www.google.co.id/maps/@-0.4947968,117.1357696,14z?entry=ttu">Samarinda, Indonesia</a>
            </div>
        </div>
        <div class="credit"> Raudhya Azzahra'
            <span> 2209106034</span>
        </div>
    </section>
    <!-- footer section ends -->
</body>
    <script>
        
var icon = document.getElementById("icon");

icon.onclick = function(){
    document.body.classList.toggle("dark-theme");
    if(document.body.classList.contains("dark-theme")){
        icon.src="../images/moon.png";
    } else{
       icon.src = "../images/sun.png";
    } 
}
    </script>
</html>
