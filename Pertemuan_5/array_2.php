<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width, initial-scale=1">
        <title>

        </title>
    </head>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }

        th {
            color: black;
            text-align: center;
            letter-spacing: 1px;
        }

        td {
            text-align: center;
            letter-spacing: 1px;
        }
    </style>

    </style>
    <body>
        <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan' 
            ];
            echo "Nama : {$Dosen ['nama']} <br/>";
            echo "Domisili : {$Dosen ['domisili']} <br/>";
            echo "Jenis Kelamin : {$Dosen ['jenis_kelamin']} <br/>";
        ?>
        <br/>
        <table border="1" cellspacing="0" cellpadding="5">
            <tr>
                <th colspan="3">
                    Informasi Dosen Pengajar
                </th>
            </tr>
            <tr>
                <td>
                    Nama
                </td>
                <td>
                    Domisili
                </td>
                <td>
                    Jenis Kelamin
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $Dosen ['nama']?> 
                </td>
                <td>
                    <?php echo $Dosen ['domisili']?>
                </td>
                <td>
                    <?php echo $Dosen ['jenis_kelamin']?>
                </td>
            </tr>
        </table>
    </body>
</html>