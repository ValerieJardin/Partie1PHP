<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o">
        <!--Lien pour cssiser la vue-->
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <!--Créer une variable nom et l'initialiser avec la valeur de votre choix.
            Afficher : "Bonjour" + nom + ", comment vas tu ?".-->
        <title>Exercice 6 de la partie 1 en PHP</title>
        <!-- Mise en place d'une balise style pour cssiser la vue !-->
    </head>
    <body>
        <!--Mise en place d'une balise p pour mettre le script php-->
        <p>
            <?php
// Déclaration d'une variable nom de type string
            $nom = 'Promo';
// Affichage des variables
            echo 'Bonjour' . ' ' . $nom . '; comment vas-tu ?';
            ?> 
        </p>
        <div class="buttons">
            <a href="http://partie1exo1"><button>Exercice 1</button></a>
            <a href="http://partie1exo2"><button>Exercice 2</button></a>
            <a href="http://partie1exo3"><button>Exercice 3</button></a>
            <a href="http://partie1exo4"><button>Exercice 4</button></a>
            <a href="http://partie1exo5"><button>Exercice 5</button></a>
            <a href="http://partie1exo6"><button>Exercice 6</button></a>
            <a href="http://partie1exo7"><button>Exercice 7</button></a>
            <a href="http://partie1exo8"><button>Exercice 8</button></a>
        </div>
    </body>
</html>