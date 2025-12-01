
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas 2: SWITCH Keterangan</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .output { font-size: 1.2em; font-weight: bold; margin-top: 15px; }
    </style>
</head>
<body>
    <h1>2. Keterangan Kelulusan (SWITCH)</h1>

    <?php
    // Inisialisasi variabel $grade (anggap hasil dari Bagian 1)
    $grade = "B"; // Ganti dengan A, C, D, atau E untuk menguji
    $keterangan_kelulusan = "";  

    echo "<p>Grade yang diuji: <strong>$grade</strong></p>";

    // Struktur SWITCH
    switch ($grade) {
        case 'A':
        case 'B':
            // Kasus gabungan untuk A atau B
            $keterangan_kelulusan = "Sangat Memuaskan, Anda Lulus!";
            break;
        case 'C':
            $keterangan_kelulusan = "Cukup Memuaskan, Anda Lulus dengan Syarat.";
            break;
        case 'D':
        case 'E':
            // Kasus gabungan untuk D atau E
            $keterangan_kelulusan = "Mohon Maaf, Anda Tidak Lulus.";
            break;
        default:
            $keterangan_kelulusan = "Grade Tidak Dikenali.";
            break;
    }

    echo '<div class="output">';
    echo "Keterangan Kelulusan: " . $keterangan_kelulusan;
    echo '</div>';
    ?>

</body>
</html>
