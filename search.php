<?php

include("connection.php");

$search = $_GET['search'];
$query = mysqli_query($connect, "SELECT * FROM indoternak WHERE nama='$search' OR alamat='$search' OR umur='$search' OR jenis_kelamin='$search'");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

// print_r($results);
?>

<html>

<body>
    <a href="add.php">Masukan Data</a> <br><br>

    <form action="search.php" method="GET">
        <input type=text name="search" placeholder="Cari .." value="<?php echo $_GET['search'] ?>" />
        <button type="submit">Cari</button>
    </form>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>Jenis Kelaming</th>
            <th>Action</th>
        </tr>
        <?php foreach ($results as $result) : ?>
            <tr>
                <td><?php echo $result['nama'] ?></td>
                <td><?php echo $result['alamat'] ?></td>
                <td><?php echo $result['umur'] ?></td>
                <td><?php echo $result['jenis_kelamin'] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $result['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $result['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>