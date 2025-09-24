<?php
// Array buah
$buah = ["Apel", "Jeruk", "Mangga", "Pisang", "Anggur"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 PHP</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h2 class="text-center mb-4">Daftar Buah</h2>
    <div class="row g-3">
        <?php foreach ($buah as $b) : ?>
            <div class="col-md-3">
                <div class="card 
                    <?php 
                        if ($b == "Jeruk") {
                            echo 'bg-warning text-dark border-dark';
                        } else {
                            echo 'bg-white';
                        }
                    ?>
                    shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $b; ?></h5>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>
