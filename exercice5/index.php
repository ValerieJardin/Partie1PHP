<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o">
        <!--Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur.
            Donner une valeur à cette variable et l'afficher.-->
        <title>Exercice 5 de la partie 1 en PHP</title>
        <!-- Mise en place d'une balise style pour cssiser la vue !-->
        <style>
            p{               
                padding-left: 100px;
                background-color: lightgrey;
                width: 100px;
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
// Déclaration d'une variable de type int qui à pour valeur NULL
           $whole = NULL;
           //$whole = 8;
// Affichage des variables
           echo $whole;
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