<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Un combat, un sourire. Association qui vient en aide aux enfants atteints de cancers.</title>
    <script src="https://kit.fontawesome.com/7d8b466c07.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;500&family=EB+Garamond:wght@500;700&family=Roboto:wght@300;500&display=swap" rel="stylesheet">
</head>
<body>

    <?php

    include 'header.php'; 

    ?>

    <main>
        <img src="visuels/main-image.jpg"
             alt="Image principale" class="main__img">
        <a class="main__link" href="#">Faire un don pour l'association</a>
        <hr class="main__section">
    </main>
    <section class="section-1">
        <h2 class="section__title">Notre Combat : </h2>
        <p class="section__paragraphe">L'association vient en aide aux familles et surtout aux enfants atteints de cancers
           pédiatriques.
           Chaque année, 1750 nouveaux cas de cancers sont recensés chez les enfants.
           Un chiffre qui ne doit pas rester en suspend !
           Pour cela nous organisons des collectes afin de financer les frais médicaux,
           d'améliorer les conditions de vies ou d'hospitalisation.
        </p>
        <a class="section__link link" href="#">En savoir plus</a>
    </section>
    <aside>
        <img src="visuels/aside-imagebis.jpg" alt="Evénement" class="aside__image">
        <a class="aside__link link" href="evenements.php">Prochain événement</a>
    </aside>

    <?php

    include 'footer.php';

    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>