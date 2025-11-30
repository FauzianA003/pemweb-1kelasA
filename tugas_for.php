<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Perulangan For (1 sampai 15)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>Daftar Angka 1 sampai 15 (Perulangan FOR)</h1>

    <table>
        <thead>
            <tr>
                <th>Nomor Urut</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Perulangan FOR: Menghitung dari 1 sampai dengan 15
            for ($i = 1; $i <= 15; $i++) {
                // Cetak baris tabel (<tr>) dan kolom (<td>)
                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>Ini adalah baris ke-" . $i . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>