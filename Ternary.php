<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas 3: Operator Ternary</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .output { font-size: 1.2em; font-weight: bold; margin-top: 15px; }
    </style>
</head>
<body>
    <h1>3. Prioritas Bimbingan (Operator Ternary)</h1>

    <?php
    // Inisialisasi variabel $grade (anggap hasil dari penentuan nilai sebelumnya)
    $grade = "C"; // Uji dengan nilai lain seperti "D" atau "E" untuk melihat perubahannya
    $prioritas_bimbingan = "";

    echo "<p>Grade yang diuji: <strong>$grade</strong></p>";

    // Struktur Operator Ternary
    // SINTAKS: (kondisi) ? (nilai jika TRUE) : (nilai jika FALSE);
    $prioritas_bimbingan = ($grade == 'D' || $grade == 'E') ? 
                           "Wajib Bimbingan" : 
                           "Tidak Wajib Bimbingan";
    
    // Output yang diharapkan:
    echo '<div class="output">';
    echo "Status Bimbingan: " . $prioritas_bimbingan;
    echo '</div>';
    ?>

</body>
</html>