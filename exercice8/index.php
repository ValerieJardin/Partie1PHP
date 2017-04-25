<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o">
        <!--Créer 3 variables :
            Dans la première mettre le résultat de l'opération 3 + 4.
            Dans la deuxième mettre le résultat de l'opération 5 * 20.
            Dans la troisième mettre le résultat de l'opération 45 / 5.
            Afficher le contenu des variables.-->
        <title>Exercice 8 de la partie 1 en PHP</title>
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
// Déclaration de trois variables qui ont pour valeur des opérations
           $addition = 3 + 4;
           $multiplication = 5 * 20;
           $division = 45 / 5;
// Affichage des variables
           echo '3 + 4 = ' . $addition . ' ; '; 
           echo '5 x 20 = ' . $multiplication . ' ; ';
           echo '45 / 5 = ' . $division;
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