<?php
require "../aksi/koneksi.php";
$id = $_GET['id'];

$result =mysqli_query($conn, "SELECT * FROM order_data where id=$id ");

$order_data = [];

while ($row = mysqli_fetch_assoc($result)) {
    $order_data[] = $row;
}

$order_data = $order_data[0];


if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $menu = $_POST['menu'];
    $qty = $_POST['qty'];

    $result = mysqli_query($conn, "UPDATE order_data SET name='$name', number='$number', address='$address', menu='$menu', qty='$qty' WHERE id='$id'");

    if ($result) {
        echo "
        <script>
            alert('Data berhasil Diubah!');
            document.location.href = 'data.php'
        </script>";
    } else {
        echo "
        <script>
            alert('Data Gagal Diubah!');
            document.location.href = 'edit.php'
        </script>";
    }
}

?>

<!-- HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITE BOX</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>

    <section class="contact" id="contact">
        <h1 class="heading">
            <span> Edit </span> order
        </h1>
        <div class="row">

            <!-- <form action="../views/data.php" method="post"> -->
            <form action="" method="post">

                <input name="name" type="text" placeholder="name" class="box" value="<?php echo $order_data['name'] ?>" required>
                <input name="number" type="number" placeholder="nomer hp" class="box" value="<?php echo $order_data['number'] ?>" required>
                <input name="address" type="text" placeholder="alamat" class="box" value="<?php echo $order_data['address'] ?>" required>
                <input name="menu" type="text" placeholder="Pesanan" class="box" value="<?php echo $order_data['menu'] ?>" required>
                <input name="qty" type="number" min="1" placeholder="jumlah" class="box" value="<?php echo $order_data['qty'] ?>" required>
                <input type="submit" value="Edit Data" name="edit" class="btn-submit">

            </form>
        </div>
        </div>
    </section>
    
</body>
</html>
