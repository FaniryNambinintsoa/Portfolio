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
    <link rel="stylesheet" href="<?= base_url('assets/css/Parcours.css'); ?>">
    <title>Document</title>
</head>
<body>
<section class="container my-5">
    <div class="container text-center">
        <div class="row justify-content-evenly">
            <div class="col-4">
                <h2>ÉTUDES ET DIPLÔMES</h2>
            </div>
            <div class="col-4">
                <h2>COMPÉTENCES</h2>
            </div>
        </div>
    </div>
<br>
    <div class="container text-justify">
<div class="row justify-content-evenly">
            <div class="col-4">
            <h5>MCCI Business School</h5>
            <p>2024 - Présent</p>   
            <h5>École Supérieure de Management et d’Informatique Appliquée</h5>
      <p >2021 - 2023</p>
      <h5>Lycée Technique Commercial</h5>
      <p >2019 - 2021</p>
      <ul>
        <li>Baccalauréat – Série Comptabilité Générale</li>
        <li>BEP – Comptabilité Générale</li>
      </ul>
            </div>
            <div class="col-4">
            
      Maintenance informatique</br>
      Informatique bureautique</br>
      IDE: IntelliJ IDEA, Visual Studio Code</br>
      Langages: HTML, CSS, PHP, JAVA, PYTHON</br>
      Base de données: MySQL, PostgreSQL</br>
      Outils: GanttProject, Power AMC, Jira, Git, GitHub</br>
      Méthodologies: Merise, UML, Scrum</br><br><br>
      <h2 class="text-center">EXPÉRIENCES</h2> <br>
      <h6>STAGE D’IMPRÉGNATION</h6>
      <p >CCI Antananarivo – 2023</p>
      
        <p>Étude de l’environnement PHP</p>
        <p>Création d'une base de données</p>
    

      <h6>STAGE DE DÉCOUVERTE</h6>
      <p >Institution SENAT Madagascar – 2022</p>

        <p>Maintenance informatique</p>
        <p>Dépannage systèmes d’exploitation</p>

            
        
</section>

<?php
view('Footer');;
?>
</body>
</html>

