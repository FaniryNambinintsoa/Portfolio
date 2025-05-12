<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="acceuil.css">
    <title>Document</title>
</head>

<body>
<section class="container my-5">
<div class="row text-justify mt-4">
<div class="row justify-content-evenly">
    <div class="col-6"><img src="images/acc.jpg" alt="" width="500px"></div>
    <div class="col-6">
        <h3>Je suis Faniry Nambinintsoa, un étudiant en Informatique.</h3>
        <p>Je m'appelle Faniry, j'ai 20 ans et je viens de Madagascar. 
            Actuellement étudiant en première année de BTS SIO à la MCCI Business School 
            à Maurice, je me spécialise dans le développement back-end. 
            Curieux et passionné par les technologies, j’aime apprendre par moi-même, 
            surtout quand le sujet me motive. J’ai commencé à découvrir la gestion de projet 
            à travers des formations en ligne, notamment avec la méthode Agile, que je m’efforce 
            de mettre en pratique même si je manque encore d’expérience. 
            Je suis motivé, autonome, et j’aspire à progresser continuellement pour devenir 
            un développeur complet.
        </p>
        <hr>
        <div class="row justify-content-between">
            <div class="col-6">
                <p>Nom: RANAIVOSOA Faniry Nambinintsoa</p>
                <p>Age: 20</p>
            </div>
            <div class="col-6">
                <p>Pays d'origine: Madagascar</p>
                <p>Email: nambinintsoafaniry@gmail.com</p>
            </div>
            <div class="col align-self-start">
            <a href="CV.pdf" download class="btn btn-primary">Télécharger le CV</a>

            </div>
            
        </div>
    </div>
  </div>
</div>
<br><br>
    <h1 class="text-center">Mes projets</h1>
    <div class="row text-justify mt-4">
        <div class="col-md-4 gonflement">
            <a href="">
            <div class="card h-100">
            <div class="container-md"><br><i class="fa-brands fa-connectdevelop fa-2x" ></i></div>
                <div class="card-body">
                    <h5 class="card-title">DEVELOPPEMENT WEB</h5>
                    <p>Puissance et élégance réunies.</p>
                    
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-4 gonflement">
            <a href="">
            <div class="card h-100">
            <div class="container-md"><br><i class="fa-brands fa-connectdevelop fa-2x" ></i></div>
                <div class="card-body">
                    <h5 class="card-title">(VIDE)</h5>
                    <p></p>
                    
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-4 gonflement">
            <a href="">
            <div class="card h-100">
            <div class="container-md"><br><i class="fa-brands fa-connectdevelop fa-2x" ></i></div>
                <div class="card-body">
                    <h5 class="card-title">(VIDE)</h5>
                    <p></p>
                    
                </div>
            </div>
            </a>
        </div>
    </div>

    
</section>
<?php
include('footer.php');
?>
</body>
</html>
