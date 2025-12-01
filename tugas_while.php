
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Perulangan While (Perkalian 3)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            width: 40%; /* Lebar sedikit lebih kecil */
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #e6e6fa; /* Warna berbeda */
        }
    </style>
</head>
<body>

    <h1>Daftar Perkalian Angka 3 (Perulangan WHILE)</h1>

    <table>
        <thead>
            <tr>
                <th>Operasi</th>
                <th>Hasil</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // 1. Inisialisasi variabel counter
            $angka = 1;
            $konstanta = 3;

            // 2. Perulangan WHILE: Berjalan selama $angka <= 10
            while ($angka <= 10) {
                // Hitung hasil perkalian
                $hasil = $konstanta * $angka;

                // Cetak baris tabel (<tr>)
                echo "<tr>";
                echo "<td>" . $konstanta . " x " . $angka . "</td>";
                echo "<td>" . $hasil . "</td>";
                echo "</tr>";

                // 3. PENTING: Increment counter agar tidak menjadi Infinite Loop
                $angka++;
            }
            ?>
        </tbody>
    </table>

</body>
</html>
