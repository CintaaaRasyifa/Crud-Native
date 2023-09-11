<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WEBSISWA - Pendaftaran Siswa Baru</title>
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
<h3>Pendaftaran Siswa Baru</h3>
<h1>SMKN 1 Kepanjen</h1>
</header>
<h4>Menu</h4>
<nav>
<ul>
<li><a href="form-daftar.php">Daftar Baru</a></li>
<li><a href="list-siswa.php">List Pendaftar</a></li>
</ul>
</nav>
<?php if (isset($_GET['status'])) : ?>
<?php if ($_GET['status'] == 'sukses') : ?>
Pendaftaran Siswa Baru Berhasil.!!
<?php else : ?>
Pendaftaran Siswa Baru Gagal.!!
<?php endif; ?>
<?php endif; ?>
</h3>
<h3>
<?php if (isset($_GET['status'])) : ?>
<?php if ($_GET['status'] == 'sukses') : ?>
Pendaftaran Siswa Baru Berhasil.!!
<?php else : ?>
Pendaftaran Siswa Baru Gagal.!!
<?php endif; ?>
<?php endif; ?>
</h3>
</body>
</html>