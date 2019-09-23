<?php 
$nama=$_POST['nama'];
$email=$_POST['email'];
$jk=$_POST['jk'];
$jabatan=$_POST['jabatan'];
$gambar="default.png";
$tempat=$_POST['tempat'];
$tgl=$_POST['tgl'];
$dibuat=date('d M Y H:i:s');
$namafoto=$_FILES['foto']['name'];
$errorfoto=$_FILES['foto']['error'];
$tmpname=$_FILES['foto']['tmp_name'];

if($errorfoto==0){
    move_uploaded_file($tmpname,'img/gambar.jpg');
    $gambar="gambar.jpg";
} elseif($errorfoto==4){
    $gambar="default.png";
}
    $namafile="database.txt";
    $filehandle=fopen($namafile, 'a') or die("File gagal dibuka!");

    $datastring="<tr><td>$nama</td><td>$email</td><td>$jabatan</td><td>$tempat</td><td>$tgl</td><td>$jk</td><td>$dibuat</td></tr>
    ";
    fwrite($filehandle,$datastring);
    fclose($filehandle);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak ID</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper">
    <div class="card1">
        <div class="card">
            <div class="foto">
                <img src="img/<?=$gambar;?>" alt="" width="200px">
            </div>
            <div class="nama">
                <?= $nama; ?>
            </div>
            <div class="jabatan">
                <?= $jabatan ?>
            </div>    
            <div class="email">
                <?= $email ?>
            </div>
            <div class="ttl">
                <?= $tempat; ?>, <?= $tgl ?>
            </div>     
            <div class="jk">
                <?= $jk ?>
            </div>
        </div>
    </div><br><br>
    <button type="submit"><a href="index.php">Kembali</a></button><br>
    
</div>

</body>
</html>