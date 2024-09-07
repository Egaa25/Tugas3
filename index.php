<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
  mysqli_query($conn, "INSERT INTO mahasiswa set
    nama = '$_POST[nama]',
    nim = '$_POST[nim]',
    kelas = '$_POST[kelas]',
    prodi = '$_POST[prodi]',
    gender = '$_POST[gender]',
    saran = '$_POST[saran]'");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="style.css">

  <script>
    function showNotification() {
      var notification = document.getElementById("notification");
      notification.style.display = "block";

      setTimeout(function () {
        notification.style.display = "none";
        location.reload();
      }, 3000);
    }
  </script>
</head>

<body>
  <h1>Contact Us</h1>
  <form action="#" method="post" onsubmit="showNotification(); return false;">
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama" placeholder="Masukkan nama" required />

    <br />

    <label for="nim">NIM</label>
    <input type="text" name="nim" id="nim" placeholder="Masukkan nim" required />

    <br />

    <label for="kelas">Kelas</label>
    <input type="text" name="kelas" id="kelas" placeholder="Masukkan kelas" required />
    <br>
    <label for="prodi">Prodi</label>
    <input type="text" name="prodi" id="prodi" placeholder="Masukkan prodi" required />
    <br />
    <label for="gender">Jenis Kelamin :</label><br>
    <input type="radio" id="laki-laki" name="gender" value="laki-laki" required />
    <label for="laki-laki">Laki-laki</label>
    <input type="radio" id="perempuan" name="gender" value="perempuan" required />
    <label for="perempuan">Perempuan</label><br />

    <br />

    <label for="saran">Saran :</label>
    <textarea name="saran" id="saran" rows="10" cols="30"></textarea>

    <input type="submit" value="submit" name="submit">

    <div id="notification">
      Data anda berhasil dikirim!
    </div>
    </div>
  </form>
  </div>
  </div>
</body>

</html>