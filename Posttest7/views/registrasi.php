<?php
session_start();
require '../aksi/koneksi.php';

if(isset($_POST['register'])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    
    if($password == $cpassword){
        $password = password_hash($password,PASSWORD_DEFAULT);
        $result  = mysqli_query($conn,"SELECT username from user WHERE username = '$username' ");
        if(mysqli_fetch_assoc($result)){
            echo "<script> alert('username sudah ada !!!');
            document.location.href='registrasi.php';
            </script>";
        }else{
            $sql = "INSERT INTO user VALUES ('','$username','$password')";
            $result_query = mysqli_query($conn,$sql);

            if(mysqli_affected_rows($conn) > 0){
                echo "<script> alert( 'Registrasi Berhasil!!');
            document.location.href='login.php';
            </script>";
            }else{
                echo "<script> alert( 'Registrasi gagal!!');
                document.location.href='registrasi.php';
                </script>";
            }
        }
    }else{
        echo "<script> alert('password tidak sama !!!');
        document.location.href='registrasi.php';
        </script>";
    }
}
?>
<!-- html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
<!-- contact section starts -->
<section class="contact" id="contact">
    <h1 class="heading">
        <span> Regist </span> here
    </h1>
    <div class="row">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input name="username" type="text" placeholder="Username" class="box" required>
            <input name="password" type="text" placeholder="Password" class="box" required>
            <input name="cpassword" id="cpassword" type="text" placeholder="Confirm Password" class="box" required>
            <input type="submit" value="Registrasi" name="register" class="btn-submit">
           
        </form>
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