<?php
view('Header');;
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

    <!-- Première carte -->
    <div class="col-md-4 gonflement">
        <a href="javascript:void(0)" onclick="openModal('modal1')">
            <div class="card h-100">
                <div class="container-md"><br><i class="fa-brands fa-connectdevelop fa-2x"></i></div>
                <div class="card-body">
                    <h5 class="card-title">DEVELOPPEMENT WEB</h5>
                    <p></p>
                </div>
            </div>
        </a>
    </div>

    <!-- Deuxième carte -->
    <div class="col-md-4 gonflement">
        <a href="javascript:void(0)" onclick="openModal('modal2')">
            <div class="card h-100">
                <div class="container-md"><br><i class="fa-brands fa-connectdevelop fa-2x"></i></div>
                <div class="card-body">
                    <h5 class="card-title">(VIDE)</h5>
                    <p></p>
                </div>
            </div>
        </a>
    </div>

    <!-- Troisième carte -->
    <div class="col-md-4 gonflement">
        <a href="javascript:void(0)" onclick="openModal('modal3')">
            <div class="card h-100">
                <div class="container-md"><br><i class="fa-brands fa-connectdevelop fa-2x"></i></div>
                <div class="card-body">
                    <h5 class="card-title">(VIDE)</h5>
                    <p></p>
                </div>
            </div>
        </a>
    </div>

</div>

<!-- Modal 1 (pour la première carte) -->
<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1Label">Développement Web</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h3>SUPERCAR: </h3>
                <a href="http://localhost/supercar_project/Pages/accueil/accueil.php">Démo locale du site</a><br>
                <a href="https://www.canva.com/design/DAGnIKjUtFY/25n17YVhmRbFLKGnt6d8QA/view?utm_content=DAGnIKjUtFY&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=he2835d6772">Lien de presentation canva</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 (pour la deuxième carte) -->
<div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal2Label"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <a href="#"></a>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3 (pour la troisième carte) -->
<div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="modal3Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal3Label"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <a href="#"></a>
            </div>
        </div>
    </div>
</div>

<!-- Lien vers les scripts Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script JS pour ouvrir les modals -->
<script>
function openModal(modalId) {
    var myModal = new bootstrap.Modal(document.getElementById(modalId));
    myModal.show();
}
</script>

    
</section>
<?php
view('Footer');;
?>
</body>
</html>
