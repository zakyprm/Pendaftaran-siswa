<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Formulir Pendaftaran Baru | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Baru</h3>
    </header>
    <form action="proses-pendaftaran.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" placeholder="Nama Lengkap" />
            </p>
            <p>
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id=""></textarea>
            </p>
            <p>
                <label for="jenis-kelamin">Jenis Kelamin : </label>
                <label for=""><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki - Laki</label>
                <label for=""><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama</label>
                <select name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Atheis">Atheis</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah : </label>
                <input type="text" name="sekolah_asal" placeholder="Nama Sekolah" />
            </p>
            <p><input type="submit" value="Daftar" name="daftar"></p>
        </fieldset>
    </form>

</body>

</html>