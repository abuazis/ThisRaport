<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .container {
            display: flex;
            justify-content: space-around;
        }
        .zui-table {
            border: solid 1px #333;
            border-collapse: collapse;
            border-spacing: 0;
            font: normal 13pt Segoe UI;
            width: 80%;
        }
        .zui-table thead th {
            border: solid 2px #333;
            padding: 10px;
            text-align: left;
            text-shadow: 1px 1px 1px #fff;
            text-align: center;
            background-color: grey;
        }
        .zui-table tbody td {
            border: solid 2px #333;
            color: #333;
            padding: 10px;
            text-shadow: 1px 1px 1px #fff;
            text-align: center;
        }
        .no-top {
            border-top: none;
        }
        .sikap {
            font: normal 15.5pt Segoe UI;
            font-weight: 700;
        }
    </style>
    <title>Cetak | Raport</title>
</head>
<body>
    <div class="container">
        <h1>Raport <?= $biodata['nama_siswa']; ?></h1>
    </div>
    <div class="container">
        <h4 class="sikap">A. Nilai Akademik</h4>
    </div>
    <div class="container">
    <table class="zui-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Mata Pelajaran</th>
                <th>KKM</th>
                <th>Nilai</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            <?php foreach($raport as $rpt) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $rpt['nama_mapel'] ?></td>
                <td><?= $rpt['kkm'] ?></td>
                <td><?= $rpt['nilai'] ?></td>
                <td><?= $rpt['keterangan'] ?></td>
            </tr>
            <?php $no++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <div class="container">
        <h4 class="sikap">B. Nilai Sikap</h4>
    </div>
    <div class="container">
        <table class="zui-table no-top">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Aspek Sikap</th>
                    <th>Nilai</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                <?php foreach($sikap as $skp) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $skp['aspek_sikap']; ?></td>
                    <td><?= $skp['nilai']; ?></td>
                    <td><?= $skp['keterangan']; ?></td>
                </tr>
                <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="container">
        <h4 class="sikap">C. Kehadiran</h4>
    </div>
    <div class="container">
        <table class="zui-table no-top">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kehadiran</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Sakit</td>
                    <td><?= $kehadiran['sakit']; ?></td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Izin</td>
                    <td><?= $kehadiran['izin']; ?></td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Alfa</td>
                    <td><?= $kehadiran['alfa']; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <br><br><br>
</body>
</html>