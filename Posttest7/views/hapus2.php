<?php include('../aksi/koneksi.php');
    $ID = $_GET['ID'];
    $query = "DELETE FROM listmenu where Id ='$ID'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Error: " . mysqli_errno($conn) . " - " . mysqli_error($conn));
    } else {
        echo "<script>alert('Data berhasil dihapus!');window.location='dataMenu.php';</script>";
    }
    
?>