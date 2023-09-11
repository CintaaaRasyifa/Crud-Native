<?php include("koneksi.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBSISWA - List Pendaftar Baru</title>
<style>
    /* Reset CSS */
body, h1, h2, h3, p, ul, li {
    margin: 0;
    padding: 0;
}

/* Body Style */
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    color: #333;
    margin: 0;
    padding: 0;
}

/* Header Style */
header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}

/* Navigation Style */
nav {
    background-color: #333;
    text-align: center;
    padding: 10px 0;
}

nav a {
    color: #fff;
    text-decoration: none;
    margin: 0 10px;
}

/* Table Style */
table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
}

table th, table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

table th {
    background-color: #333;
    color: #fff;
}

/* Form Style */
form {
    margin: 20px;
}

form label, form input, form select {
    display: block;
    margin-bottom: 10px;
}

form input[type="text"], form input[type="email"], form input[type="tel"], form select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

form input[type="submit"] {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* Footer Style */
footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}

</style>
</head>
<body>
    <header>
        <h3>List Pendaftar Baru</h3>
    </header>
    <nav>
        <a href="form-daftar.php">[+] Daftarkan Siswa Baru</a>
    </nav>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Jenis Kelamin</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM tb_siswa";
            $query = mysqli_query($conn, $sql);
            $i = 1;
            ?>
            <?php if (mysqli_num_rows($query) > 0) : ?>
                <?php while ($siswa = mysqli_fetch_array($query)) : ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $siswa['nama'] ?></td>
                        <td><?php echo $siswa['email'] ?></td>
                        <td><?php echo $siswa['telepon'] ?></td>
                        <td><?php echo $siswa['kelamin'] ?></td>
                        <td>
                            <a href="form-edit.php?id=<?php echo $siswa['id'] ?>">Edit</a> |
                            <a href="hapus.php?id=<?php echo $siswa['id'] ?>">Hapus</a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endwhile; ?>
            <?php else : ?>
                <tr>
                    <td colspan="6">Tidak ada pendaftar baru.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <?php
    if (mysqli_error($conn)) {
        echo "Error: " . mysqli_error($conn);
    }
    ?>
</body>
</html>
