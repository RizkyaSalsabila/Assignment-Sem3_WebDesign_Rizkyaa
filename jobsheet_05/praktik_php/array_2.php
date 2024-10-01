<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name = "viewport" content = "width = device-width, initial scale = 1">
        <title></title>
    </head>
    <body>
        <style>
            table {
                border: 1px solid white;
            }
            th, td {
                padding: 15px;
                text-align: center;
            }
            th {
                background-color: pink;
            }
        </style>
        <table border = "1", cellpadding = "5">
            <thead>
                <th>Nama</th>
                <th>Domisili</th>
                <th>Jenis Kelamin</th>
            </thead>
            <tbody>
                <?php
                    $Dosen = [
                        'nama' => 'Elok Nur Hamdana',
                        'domisili' => 'Malang',
                        'jenis_kelamin' => 'Perempuan'
                    ];

                    echo "<td> {$Dosen ['nama']} </td>";
                    echo "<td> {$Dosen ['domisili']} </td>";
                    echo "<td> {$Dosen ['jenis_kelamin']} </td>";
                ?>
            </tbody>
        </table>
    </body>
</html>