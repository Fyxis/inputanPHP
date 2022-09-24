<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tipe TIpe Inputan di PHP</title>
</head>
<body>
    <form>
    <div>
        <label>Nama</label> <br>
        <input type="text" name="nama">
    </div>
    <br>
    <div>
        <label>Email</label> <br>
        <input type="email" name="email">
    </div>
    <br>
    <div>
        <label>Password</label> <br>
        <input type="password" name="pass">
    </div>
    <br>
    <div>
        <label>No. Absen</label> <br>
        <input type="number" name="absen">
    </div>
    <br>
    <div>
        <label>Alamat URL Instagram</label> <br>
        <input type="url" name="url_instagram">
    </div>
    <br>
    <div>
        <label>Nomor Telepon</label><br>
        <label><i>example 0831-4227-3480</i></label><br>
        <input type="tel" name="nomer_telepon" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}">
    </div>
    <br>
    <div>
        <label>Tanggal Lahir</label><br>
        <input type="date" name="tgl_lahir">
    </div>
    <br>
    <div>
        <label>Waktu Pembayaran</label><br>
        <input type="datetime-local" name="waktu_pembayaran">
    </div>
    <br>
    <div>
        <label>Waktu Berangkat</label><br>
        <input type="time" name="waktu_berangkat">
    </div>
    <br>
    <div>
        <label>Bulan Lahir</label><br>
        <input type="month" name="bulan_lahir">
    </div>
    <br>
    <div>
        <label>Pekan Lahir</label><br>
        <input type="week" name="pekan_lahir">
    </div>
    <br>
    <div style="margin-bottom: 1rem;">
        <label>Jenis Kelamin</label> <br>
        <input type="radio" name="jenis_kelamin" value="Laki - Laki"> Laki-Laki <br>
        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Hobi</label> <br>
        <input type="checkbox" name="hobi" value="Sepak Bola"> Sepak Bola <br>
        <input type="checkbox" name="hobi" value="Basketball"> Basketball <br>
        <input type="checkbox" name="hobi" value="Bulu Tangkis"> Bulu Tangkis <br>
        <input type="checkbox" name="hobi" value="ngoding"> Ngoding <br>
    </div>
    <div>
        <label>Upload Foto</label> <br>
        <input type="file" name="foto" accept=".jpg">
    </div>
    <br>
    <div>
        <label>Atur Volume Anda</label> <br>
        <input type="range" name="volume">
    </div>
    <br>
    <div>
        <label>Warna Background</label> <br>
        <input type="color" name="bgcolor">
    </div>
    <br>
    <div>
        <label>Cari Sekarang</label> <br>
        <input type="search" name="cari">
    </div>
    <br>
    <div>
        <label>Kirim sekarang jika form diatas sudah benar</label> <br>
        <input type="submit" name="kirim" value="Submit">
    </div>
    <br>
    <div>
        <label>Reset sekarang jika ingin mengulanginya dari awal</label> <br>
        <input type="reset" value="Reset Sekarang">
    </div>
    <br>
    <div>
        <label>Hidden</label> <br>
        <input type="hidden" name="sebuah_nama" value="sebuah_nilai">
        <input type="submit">
    </div>



</form>
</body>
</html>