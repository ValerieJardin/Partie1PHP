<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"/>
        <!--Lien pour cssiser la vue-->
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <!--Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. 
            Attention age est de type entier. Afficher : "Bonjour" + nom + prenom + ",tu as" + age + "ans".-->
        <title>Exercice 7 de la partie 1 en PHP</title>
        <!-- Mise en place d'une balise style pour cssiser la vue !-->
    </head>
    <body>
        <!--Mise en place d'une balise p pour mettre le script php-->
        <p>
            <?php
// Déclaration de trois variables nom et prénom de type string et age de type int
            $nom = 'JARDIN';
            $prenom = 'Valérie';
            $age = 43;
// Affichage des trois variables en les concaténant
            // echo 'Bonjour ' . $nom . ' ' . $prenom . ', tu as ' . $age . ' ans.';
            ?> 
            <!--Préférer le -->
        <p>Bonjour <?php echo $nom . ' ' . $prenom ?> , tu as <?php echo $age ?> ans.</p>
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