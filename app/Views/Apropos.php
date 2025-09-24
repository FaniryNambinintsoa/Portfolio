<?php
view('Header');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/Apropos.css'); ?>">
    <title>Document</title>
</head>
<body>
<section class="container my-5">
<div class="container text-center">
    <div class="row justify-content-around">
        <div class="col-4">
            One of two columns
        </div>
        <div class="col-4">
            One of two columns
        </div>
    </div>
</div>
<div class="container text-justify">
<div class="row justify-content-around">
        <div class="col-4">
        MCCI Business School
        <br>
2024 - Présent
<br>
École Supérieure de Management et d’Informatique Appliquée 
<br>
2021 - 2023
<br>
LYCÉE
<br>
Lycée Technique Commercial
<br> 
2019 - 2021
<br>
        </div>
        <div class="col-4">
            One of two columns
        </div>
    </div>
</div>
</section>
<?php
view('Footer');;
?>
</body>
</html>