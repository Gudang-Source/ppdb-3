<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pendaftaran</title>
</head>

<body>

    <table width="100%">
        <tr>
            <td align="center">
                <span style="line-height: 1.6; font-weight:bold; font-size: 24px;">
                    HASIL SELEKSI <br> PPDB SMAN1 DIPATIUKUR
                </span>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <br>
    <table align="center">
        <tr>
            <th></th>
            <th></th>
        </tr>
        <tr >
            <td style="padding: 8px">NIK : </td>
            <td> <?= $biodata['nik'] ?></td>
        </tr>
        <tr>
            <td style="padding: 8px">NISN : </td>
            <td> <?= $biodata['nisn'] ?></td>
        </tr>
        <tr>
            <td style="padding: 8px">Nama Lengkap : </td>
            <td> <?= $biodata['fullname'] ?></td>
        </tr>
        <tr>
            <td style="padding: 8px">Jenis Kelamin : </td>
            <td> <?= $biodata['gender'] ?></td>
        </tr>
        <tr>
            <td style="padding: 8px">Sekolah Asal : </td>
            <td> <?= $biodata['school'] ?></td>
        </tr>
        <tr>
            <td style="padding: 8px">Tahun Lulus : </td>
            <td>year_graduated</td>
        </tr>
    </table>
    <br>
    <br>
    <br>
    <center>
        <h1>DINYATAKAN<br>LULUS</h1>
    </center>


</body>

</html>