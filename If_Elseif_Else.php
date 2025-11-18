<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Penentuan Grade Nilai</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .output { font-size: 1.2em; font-weight: bold; margin-top: 15px; }
    </style>
</head>
<body>
    <h1>Penentuan Grade Menggunakan IF/ELSEIF/ELSE</h1>

    <?php
    // 1. Definisikan variabel nilai
    $nilai = 85; 
    $grade = "";

    echo "<p>Nilai yang diuji: <strong>$nilai</strong></p>";

    // 2. Struktur Percabangan IF/ELSEIF/ELSE
    if ($nilai >= 90) {
        $grade = "A";
    } elseif ($nilai >= 80) { // Berarti nilai ada di antara 80 dan 89
        $grade = "B";
    } elseif ($nilai >= 70) { // Berarti nilai ada di antara 70 dan 79
        $grade = "C";
    } elseif ($nilai >= 60) { // Berarti nilai ada di antara 60 dan 69
        $grade = "D";
    } else { // Kondisi default untuk nilai di bawah 60
        $grade = "E";
    }

    // 3. Output yang diharapkan
    echo '<div class="output">';
    echo "Nilai Anda adalah " . $nilai . ", Grade Anda adalah " . $grade . ".";
    echo '</div>';
    ?>

</body>
</html>