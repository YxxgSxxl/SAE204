<!-- Vue: Page après clique de la SAE selectionnée -->

<?php
// Récupération du numéro de la SAE
$id_sae = $_GET["sae"];
// Récuperation nom de la SAE pour le <title>
$sae_title = idSAE($id_sae);
$numsae = "";

foreach ($sae_title as $cl => $valeur) {
    $numsae .= "$valeur";
}

// Récupération du titre de la SAE (son nom)
$rTitreSae = titreSAE($id_sae);
$titresae = "";

foreach ($rTitreSae as $cl => $valeur) {
    $titresae .= "$valeur";
}

// Récupération de la description de la SAE
$rDescSae = descSAE($id_sae);
$descsae = "";

foreach ($rDescSae as $cl => $valeur) {
    $descsae .= "$valeur";
}

// Récupération des compétences de la SAE
$rCompetenceSae = listeCompetence($id_sae);
$competencesae = "";
for ($i = 0; $i < count($rCompetenceSae); $i++) {
    foreach ($rCompetenceSae[$i] as $cl => $valeur) {
        $competencesae .= "<span class='comp-span'>$valeur</span>";
    }
}

// Récupération des AC de la SAE
$racSae = listeAC($id_sae);
$acSae = "";
for ($i = 0; $i < count($racSae); $i++) {
    foreach ($racSae[$i] as $cl => $valeur) {
        $acSae .= "$valeur<br>";
    }
}

// Récupération des Ressources de la SAE
$rressourceSae = listeRess($id_sae);
$ressourceSae = "";
for ($i = 0; $i < count($rressourceSae); $i++) {
    foreach ($rressourceSae[$i] as $cl => $valeur) {
        $ressourceSae .= "$valeur<br>";
    }
}

// Récupération du semestre de la SAE
$rsemestreSae = listeSemestre($id_sae);
$semestreSae = "";

foreach ($rsemestreSae as $cl => $valeur) {
    $semestreSae .= "$valeur";
}

// Récupération du numéro de la SAE pour le href (justifications)
$hrefsae = $numsae;
?>


<!-- Initialisation de la page HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/saeclicked.css">
    <title>SAE
        <?= $numsae ?>
    </title>
</head>

<body>
    <!-- Bouton de retour en arrière -->
    <a href="controleur.php">
        <div class="backButton" onclick="history.back()"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M19 12H6M12 5l-7 7 7 7" />
            </svg>
        </div>
    </a>

    <div class="sae-wrapper">

        <!-- Affichage du numéro et du titre de la SAE cliquée -->
        <h1 class="titreSAE">
            SAE
            <?= $numsae ?>: <br>
            <?= $titresae ?>
        </h1>

        <!-- Affichage de la description de la SAE cliquée -->
        <i class="descSAE">
            <h2>Description:</h2>
            <?= $descsae ?>
        </i>

        <!-- Affichage des compétences de la SAE cliquée -->
        <p class="competenceSAE">
        <h3>Compétences: </h3>
        <div class="saecomp">
            <?= $competencesae ?>
        </div>
        </p>

        <!-- Affichage des Apprentissages critiques de la SAE cliquée -->
        <p class="acSAE">
        <h3>AC: <div>
                <?= $acSae ?>
            </div>
        </h3>
        </p><br>

        <!-- Justification des SAE sur un pdf ramenant sur un Google Drive spécifique à la SAE cliquée -->
        <a class="justifications" href="../ac/<?= $id_sae . ".pdf"?>" target="_blank">Justifications</a>

        <!-- Affichage des ressources de la SAE cliquée -->
        <p class="ressourceSAE">
        <h3>Ressources: <div>
                <?= $ressourceSae ?>
            </div>
        </h3>
        </p>

        <!-- Affichage du semestre de la SAE cliquée -->
        <p class="semestreSAE">
        <h3>Semestre: <div>
                <?= $semestreSae ?>
            </div>
        </h3>
        </p>
    </div>

    <noscript>Please, activate javascript to make the website work perfectly.</noscript>
    <script src="../js/sae.js"></script>
</body>

</html>