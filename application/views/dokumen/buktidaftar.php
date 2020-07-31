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
                    BUKTI PENDAFTARAN <br> PPDB SMAN1 DIPATIUKUR
                </span>
            </td>
        </tr>
    </table>
    <br>
    <p>No Pendaftaran : <?= $biodata['nopen'] ?></p>

    <p>BIODATA</p>
    <table>
        <tr >
            <th style="padding: 8px">DATA</th>
            <th>ISI</th>
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
        <tr>
            <td style="padding: 8px">Tempat Lahir : </td>
            <td> <?= $biodata['born_place'] ?></td>
        </tr>
        <tr>
            <td style="padding: 8px">Tanggal Lahir : </td>
            <td> <?= $biodata['date'] ?></td>
        </tr>
    </table>
    <br>

    <table width="100%" style="border: 1px;">
        <tr>
            <th>Mata Pelajaran</th>
            <th>Sem1</th>
            <th>Sem2</th>
            <th>Sem3</th>
            <th>Sem4</th>
            <th>Sem5</th>
        </tr>
        <tr>
            <td>Pend Agama</td>
            <?php for($i = 1; $i <=5; $i++) { ?>
                <td style="padding: 15px"><?= $raport['agama'.$i] ?>
            <?php } ?>
        </tr>
        <tr>
            <td>B. Indonesia</td>
            <?php for($i = 1; $i <=5; $i++) { ?>
                <td style="padding: 15px"><?= $raport['b_indonesia'.$i] ?>
            <?php } ?>
        </tr>
        <tr>
            <td>Matematika</td>
            <?php for($i = 1; $i <=5; $i++) { ?>
                <td style="padding: 15px"><?= $raport['matematika'.$i] ?>
            <?php } ?>
        </tr>
        <tr>
            <td>IPA</td>
            <?php for($i = 1; $i <=5; $i++) { ?>
                <td style="padding: 15px"><?= $raport['ipa'.$i] ?>
            <?php } ?>
        </tr>
        <tr>
            <td>IPS</td>
            <?php for($i = 1; $i <=5; $i++) { ?>
                <td style="padding: 15px"><?= $raport['ips'.$i] ?>
            <?php } ?>
        </tr>
        <tr>
            <td>PPKN</td>
            <?php for($i = 1; $i <=5; $i++) { ?>
                <td style="padding: 15px"><?= $raport['ppkn'.$i] ?>
            <?php } ?>
        </tr>
        <tr>
            <td>B. Inggris</td>
            <?php for($i = 1; $i <=5; $i++) { ?>
                <td style="padding: 15px"><?= $raport['b_inggris'.$i] ?>
            <?php } ?>
        </tr>
    </table>
</body>

</html>