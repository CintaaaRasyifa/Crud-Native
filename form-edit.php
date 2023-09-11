<?php 
include("koneksi.php"); 

// kalau tidak ada id di query string 
if (!isset($_GET['id'])) { 
 header('Location: list-siswa.php'); 
} 

// ambil id dari query string 
$id = $_GET['id']; 

// buat query untuk ambil data dari database 
$sql = "SELECT * FROM tb_siswa WHERE id=$id"; 
$query = mysqli_query($conn, $sql); 
$siswa = mysqli_fetch_assoc($query); 

// jika data yang di-edit tidak ditemukan 
if (mysqli_num_rows($query) < 1) { 
 die("data tidak ditemukan..."); 
} 
?> 
<!DOCTYPE html> 
<html lang="en">
<head> 
 <meta charset="UTF-8"> 
 <meta name="viewport" content="width=device-width, initial-scale=1.0">  
 <title>WEBSISWA - Edit Pendaftar</title> 
</head> 
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
<body> 
 <header> 
 </header> 
 <form action="proses-edit.php" method="POST"> 
    <form><h3>Formulir Edit Siswa</h3>
 <fieldset> 
 <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>"  /> 
 <p> 
 <label for="nama">Nama: </label> 
 <input type="text" name="nama" placeholder="Nama lengkap"  value="<?php echo $siswa['nama'] ?>" /> 
 </p> 
 <p> 
 <label for="email">Email: </label> 
 <input type="email" name="email" placeholder="Email"  value="<?php echo $siswa['email'] ?>" /> 
 </p> 
 <p> 
 <label for="telepon">Telepon: </label> 
 <input type="text" name="telepon" placeholder="Nomor Telepon" value="<?php echo $siswa['telepon'] ?>" /> 
 </p> 
 <p> 
 <label for="kelamin">Jenis Kelamin: </label> 
 <?php $jk = $siswa['kelamin']; ?> 
 <label><input type="radio" name="kelamin" value="Laki-Laki" <?php echo ($jk == 'Laki-Laki') ? "checked" : "" ?>> Laki-laki</label> 
 <label><input type="radio" name="kelamin" value="Perempuan" <?php echo ($jk == 'Perempuan') ? "checked" : "" ?>> Perempuan</label>
</p>
 <input type="submit" value="Simpan" name="simpan" />  
 </fieldset> 
 </form> 
 </form> 
</body> 
</html>
