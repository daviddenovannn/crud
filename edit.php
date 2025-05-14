<?php
// testing aja apakah id nya masuk kedalam edit.php echo $_GET['id'];

include('connection.php'); //ini mengkoneksikan ke connection.php file yang mengkoneksikan db with php
$id = $_GET['id']; //mengambil variabel string dari ID dan di simpan kedalam variabel id
$query = mysqli_query($connect, "SELECT * FROM indoternak where id='$id' LIMIT 1"); //melakukan query ke database dengan nama tabel indoternak dan id nya di ambil dari variabel id yang di ambil dari url
$result = mysqli_fetch_all($query, MYSQLI_ASSOC); //mengambil semua data dari hasil query dan di simpan kedalam variabel result
// print_r($result); //ini untuk ngecek data nya berhasil terambil atau tidak
// exit; // ini supaya tidak melanjutkan ke bawah sehingga form diabawah tidak  di tampilkan
?>
<html>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $result[0]['id'] ?>">
    <label for="">Nama</label><br>
    <input type="text" name="nama" placeholder="Masukkan Nama Anda" value="<?php echo $result[0]['nama'] ?>"><br><br>
    <label for="">Alamat</label><br>
    <textarea name="alamat" id="" placeholder="Masukan Alamat Anda"><?php echo $result[0]['alamat'] ?></textarea><br><br>
    <label for="">Umur</label><br>
    <input type="text" name="umur" placeholder="Masukan Umur Anda" value="<?php echo $result[0]['umur'] ?>"><br><br>
    <select name="jenis_kelamin">
        <option value="pria" <?php echo ($result[0]["jenis_kelamin"] == 'pria') ? 'selected' : '' ?>>Pria</option>
        <option value="perempuan" <?php echo ($result[0]["jenis_kelamin"] == 'perempuan') ? 'selected' : '' ?>>Perempuan</option>
    </select> <br><br>
    <button type="submit">Perbaharui</button>
</form>

</html>