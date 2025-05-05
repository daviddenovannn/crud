<?php

include("connection.php");

$query = mysqli_query($connect, "SELECT * FROM indoternak");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

// print_r($results);
?>

<html>

<body>
    <a href="add.php">Masukan Data</a> <br><br>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>Jenis Kelaming</th>
        </tr>
        <?php foreach ($results as $result) : ?>
            <tr>
                <td><?php echo $result['nama'] ?></td>
                <td><?php echo $result['alamat'] ?></td>
                <td><?php echo $result['umur'] ?></td>
                <td><?php echo $result['jenis_kelamin'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>