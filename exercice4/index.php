<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o">
        <!--Créer une variable de type string, une variable de type int, une variable de type 
            float, une variable de type booléan et les initialiser avec une valeur de votre choix.
            Les afficher.-->
        <title>Exercice 4 de la partie 1 en PHP</title>
        <!-- Mise en place d'une balise style pour cssiser la vue !-->
        <style>
            p{               
                padding-left: 100px;
                background-color: lightgrey;
                width: 400px;
                border-left: 20px solid red;
                border-right: 20px solid red;
                border-radius: 20px;
            }
            .buttons{
                margin-top: 15px;
                padding-left: 4%;
                background-color: blueviolet;
                width: 70%;
            }           
        </style>
    </head>
    <body>
<!--Mise en place d'une balise p pour mettre le script php-->
        <p>
           <?php
// Déclaration des variables nom, prénom, âge, QI et de leurs valeurs ainsi qu'une variable de type booléan
           $nom = 'JARDIN';
           $prenom = 'Valérie';
           $age = 43;
           $QI = 2.1;
           $mon_QI_progresse = false;
// Affichage des variables
           echo $nom .' '. $prenom . ' '. $age . ' ans ' . $QI . ' de QI ' . $mon_QI_progresse;
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