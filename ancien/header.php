<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="conteneur-header">
            <div class="pseudoetlien">
            <div class="pseudoetlogo">
                <h1>Boniry</h1>
            </div>
                <div class="liens">
                    <ul>
                            <li>
                            <a href="acceuil.php">Acceuil</a>
                            </li>
                            <li>
                            <a href="#">À propos</a>
                            </li>
                            <li>
                            <a href="blog.php">Blog</a>
                            </li>
                            <li>
                            <a href="parcours.php">Parcours</a>
                            </li>
                    </ul>
                </div>
                </div>
                    <div class="salutation">
                        <h5>Bonjour,</h5>
                        <h1><strong>Je suis un Développeur web</strong></h1>
                        <i>J'aime la simplicité.</i>
                        <br>
                        <a href="#" class="btn btn-primary">Contactez-moi</a>
                    </div>
                    <div class="contact">
                        <table>
                            <tr>
                                <td>Email <br> nambinintsoafaniry@gmail.com</td>
                                <td>Telephone <br> +23054832870</td>
                                <td>Adresse <br>Plaisance, Rose-hill</td>
                            </tr>
                        </table>
                    </div>
        </div>
    </header>
    <script>
    const links = document.querySelectorAll('ul li a');
    const currentPage = window.location.pathname.split("/").pop();

    links.forEach(link => {
        const href = link.getAttribute('href').split("/").pop();
        if (href === currentPage) {
            link.classList.add('active');
        }
    });
    </script>
</body>
</html>