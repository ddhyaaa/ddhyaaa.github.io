<?php
include "../aksi/koneksi.php";

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
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about me</a>
            <a href="#menu">hot menu</a>
            <a href="#contact">Menu's</a>
            <a href="../views/login.php">Order</a>
            <a href="../views/loginadmin.php">Admin</a>
            
        </nav>
        
        <div class="mode">
            <img src="../images/moon.png" id="icon">
        </div>
    </header>
    <!-- header section ends -->
    
    <!-- home section starts  -->
    <section class="home" id="home">
        <div class="contents">
            <h3>Your Box
                <br>
                Bite Box
            </h3>
            <span>The fire is on for your food</span>
            <p>Kami bukan hanya sebuah restoran cepat saji biasa, kami adalah destinasi makanan cepat premium yang
                selalu mengutamakan kualitas bahan dan rasa, memberikan kebahagiaan dalam setiap sajian.</p>
            <a href="../views/order.php"
                class="btn">order now</a>
        </div>
        <div class="images">
            <img src="../images/menu.png" class="header-img" alt="" width="75%">
        </div>
    </section>
    <!-- home section ends -->
    <!-- about section  -->
    <section class="about" id="about">
        <h1 class="heading">
            <span> About</span> Me
        </h1>
        <div class="row">
            <div class="menu">
                <img src="../images/profil.png" alt="">
            </div>
            <div class="content">
                <h3> Raudhya Azzahra'</h3>
                <p>Mahasiswa Informatika Universitas Mulawarman</p>
                <a href="../CV_RAUDHYA/index_cv.html" class="btn">learn more</a>
            </div>
        </div>
    </section>
    <!-- products section starts -->
    <section class="menu" id="menu">
        <h1 class="heading"> hot
            <span>menu</span>
        </h1>
        <div class="box-container">
            <div class="box">
                <span class="discount">-15%</span>
                <div class="image">
                    <img src="../images/burger.png" alt="" width="95%">
                </div>
                <div class="content">
                    <h3>Burger</h3>
                    <div class="price"> Rp21.250
                        <span> Rp25.000</span>
                    </div>
                </div>
            </div>
            <div class="box">
                <span class="discount">-10%</span>
                <div class="image">
                    <img src="../images/ayam.png" alt="" width="80%">
                </div>
                <div class="content">
                    <h3>Fried Chicken</h3>
                    <div class="price"> Rp16.200
                        <span> Rp18.000</span>
                    </div>
                </div>
            </div>
            <div class="box">
                <span class="discount">-10%</span>
                <div class="image">
                    <img src="../images/kentang.png" alt="" width="80%">
                </div>
                <div class="content">
                    <h3>French Fries</h3>
                    <div class="price"> Rp12.750
                        <span> Rp15.000</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section starts -->
    <section class="contact" id="contact">
        <h1 class="heading">
            <span> list</span> Menu
        </h1>
        <div class="row">
            <form>
                <table style="width: 100%; " align="center" cellpadding="10">
                        <tr>
                            <th>ID</th>
                            <th>Nama Menu</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                        </tr>
                        <?php
                        $query = "SELECT * from listmenu order by ID asc";
                        $result = mysqli_query($conn, $query);

                        if(!$result){
                            die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
                        }
                        $no = 1;
                        while($row = mysqli_fetch_assoc($result)) {
                            ?>
                        <tr align="center">
                            <td><?php echo $no ?></td>
                            <td><?php echo $row['produk']; ?></td>
                            <td><?php echo $row['harga']; ?></td>
                            <td><img src="../img/gambar_crud/<?php echo $row['gambar'];?>" alt="<?php echo $row['produk']; ?>"width="100" height="100"></td>
                        </tr>
                        <?php 
                        $no++; 
                        }
                        ?>
                </table>
                <br>
            </form>

            <br>
        </div>
        </div>
    </section>
    <!-- contact section ends -->

    <!-- footer section starts -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#menu">menu</a>
                <a href="#contact">order</a>
            </div>
            <div class="box">
                <h3>Location</h3>
                <a href="https://www.google.co.id/maps/@-0.4947968,117.1357696,14z?entry=ttu">Samarinda</a>
                <a
                    href="https://www.google.co.id/maps/place/Balikpapan,+Kota+Balikpapan,+Kalimantan+Timur/@-1.174603,116.841748,11z/data=!3m1!4b1!4m6!3m5!1s0x2df14710964d9c91:0xcaa6ec96c2aea6d2!8m2!3d-1.2379274!4d116.8528526!16zL20vMDJsYjZ4?entry=ttu">Balikpapan</a>
                <a
                    href="https://www.google.co.id/maps/place/Surabaya,+Jawa+Timur/@-7.1282662,112.815134,12.5z/data=!4m6!3m5!1s0x2dd7fbf8381ac47f:0x3027a76e352be40!8m2!3d-7.2574719!4d112.7520883!16zL20vMDFmNHhk?entry=ttu">Surabaya</a>
                <a
                    href="https://www.google.co.id/maps/place/Denpasar,+Kota+Denpasar,+Bali/@-8.6726833,115.2242733,12z/data=!3m1!4b1!4m6!3m5!1s0x2dd2409b0e5e80db:0xe27334e8ccb9374a!8m2!3d-8.6704582!4d115.2126293!16zL20vMDJuYmgx?entry=ttu">Denpasar</a>
            </div>
            <div class="box">
                <h3>Contact Info</h3>
                <a
                    href="https://www.bing.com/ck/a?!&&p=d5327da7f05045bbJmltdHM9MTY5NTc3MjgwMCZpZ3VpZD0xMjI3MWZjZi04ZjFjLTY5M2ItMjJmZS0wZTI3OGIxYzY3YjEmaW5zaWQ9NTE3NQ&ptn=3&hsh=3&fclid=12271fcf-8f1c-693b-22fe-0e278b1c67b1&psq=raudhya+azzahra%27&u=a1aHR0cHM6Ly93d3cuaW5zdGFncmFtLmNvbS9yYXVkaHlhYS8&ntb=1">ig:@raudhyaa</a>
                <a
                    href="https://mail.google.com/mail/u/0/?hl=en#inbox?compose=DmwnWrRsnwxLmQLPZzFGqQDfsldpXQshBPnQZvvpJFQKPkCVZpTdNcnxFhxLhfwPfHLlZxmfJDlB">raudhya.zhra@gmail.com</a>
                <a href="https://www.google.co.id/maps/@-0.4947968,117.1357696,14z?entry=ttu">Samarinda, Indonesia</a>
            </div>
        </div>
        <div class="credit"> Raudhya Azzahra'
            <span> 2209106034</span>
        </div>
    </section>
    <!-- footer section ends -->
</body>
<script text="text/javascript" src="../js/javascripts.js"></script>

</html>