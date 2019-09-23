<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Member</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="plugin/DataTables/DataTables-1.10.18/css/jquery.dataTables.css"/>
    <link rel="stylesheet" type="text/css" href="plugin/DataTables/Buttons-1.5.6/css/buttons.dataTables.css"/>
 
    <script src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="plugin/DataTables/pdfmake-0.1.36/pdfmake.js"></script>
    <script type="text/javascript" src="plugin/DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="plugin/DataTables/DataTables-1.10.18/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="plugin/DataTables/Buttons-1.5.6/js/dataTables.buttons.js"></script>
    <script type="text/javascript" src="plugin/DataTables/Buttons-1.5.6/js/buttons.html5.js"></script>
    <script type="text/javascript" src="plugin/DataTables/Buttons-1.5.6/js/buttons.print.js"></script>
    <script>
        $(document).ready(function() {
    $('#tabel').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'pdf', 'print'
        ]
    } );
} );
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="luhur">
            <a>PENDAFTARAN MEMBER STARTUP</a>
        </div>
    <form action="cetak.php" method="post" enctype="multipart/form-data">
        <label for="nama">Nama</label><br>
        <input type="text" name="nama" id="nama">
        <br><br>
        <label for="email">E-Mail</label><br>
        <input type="text" name="email" id="email">
        <br><br>
        <label for="jabatan">Jabatan</label><br>
        <select name="jabatan" id="jabatan">
            <option value="-">-</option>
            <option value="Freelancer">Freelancer</option>
            <option value="Product Design">Product Design</option>
            <option value="Software Engineer">Software Engineer</option>
            <option value="Businses Analyst">Businses Analyst</option>
        </select>
        <br><br>
        <label for="ttl">Tempat Tanggal Lahir</label><br>
        <input type="text" name="tempat" id="ttl">
        <input type="date" name="tgl">
        <br><br>
        <label for="jk">Jenis Kelamin</label><br>
        <select name="jk" id="jk">
            <option value="-">-</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <br><br>
        <label for="foto">Upload Foto</label><br>
        <input type="file" name="foto" id="foto">
        <br><br>
        <button type="submit">Kirim</button><br>
    </form>
    <br><br><br><br><br>
    <table id="tabel" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>E-Mail</th>
                <th>Jabatan</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Daftar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $namafile="database.txt";
                $filehandle=fopen($namafile, 'r') or die ("File gagal dibuka!");
                $datastring=fread($filehandle,10000);
                fclose($filehandle);
                echo $datastring;
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>