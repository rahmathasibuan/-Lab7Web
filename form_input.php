<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab7WEB Rahmat Hasibuan</title>
</head>
<body style="">
    <h1>Praktikum 7: PHP Dasar Rahmat Hasibuan</h1>
    <form style="" action="Database.php" method="post">
        Nama: 
        <input type="text" name="nama" id="nama">
        <br>
        <br>
        tanggal lahir: 
        <input type="date" name="tgl_lahir" id="tgl_lahir">
        <br>
        <br>
        Pekerjaan: 
        <select name="pekerjaan" id="pekerjaan">
            <option value="Pengusaha">Pengusaha</option>
            <option value="Pengajar">Pengajar</option>
        </select>
        <br>
        <br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>