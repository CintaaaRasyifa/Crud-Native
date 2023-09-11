<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WEBSISWA - Tambah Pendaftar Baru</title>
<a href="style.css"></a>
<style>/* Reset CSS */
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
    background-color: #DFCCFB;
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


<h3>Formulir Pendaftaran Siswa Baru</h3>
</header>
<form action="proses-daftar.php" method="POST">
<fieldset>
<p>
<label for="nama">Nama: </label>
<input type="text" name="nama" placeholder="Nama Lengkap" />
</p>
<p>
<label for="nama">Email: </label>
<input type="text" name="email" placeholder="Alamat Email" />
</p>
<p>
<label for="nama">Telepon: </label>
<input type="text" name="telepon" placeholder="Nomor Telepon"
/>
</p>
<p>
<label for="kelamin">Jenis Kelamin: </label>
<label><input type="radio" name="kelamin" value="Laki-Laki">
Laki-laki</label>
<label><input type="radio" name="kelamin" value="Perempuan">
Perempuan</label>
</p>
<p>
<input type="submit" value="Daftar" name="daftar" />
</p>
</fieldset>
</form>
</body>
</html>