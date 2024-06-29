<?php

// Récupération du numéro de l'étape en cours
if (empty($_GET['pagecom']) or ! is_numeric($_GET['pagecom'])) {
    define('NUM_PAGE', 1);
} else {
    // En situation réelle, il faudrait vérifier l'existence de cette page
    define('NUM_PAGE', intval($_GET['pagecom']));
}

// Déclaration de la variable de session
if (empty($_SESSION['formpays'])) {
    $_SESSION['formpays'] = array();
}

switch (NUM_PAGE) {

    case 2:
        // Récupération des informations du formulaire précédent
        if (!empty($_POST)) {
            $_SESSION['formpays'][NUM_PAGE - 1] = array(
                'codep' => strtoupper(trim(htmlspecialchars($_POST["codep"]))),
                'pays' => ucwords(trim(htmlspecialchars($_POST["pays"]))),
                'indice' => trim(htmlspecialchars($_POST["indice"]))
            );
        }
        require('sotcocogpages/sotcocogparametre/sotcocogpays/sotcocogajouter/form_terminer.php');
        break;

    case 1:
    default:
        // Valeurs par défaut
        if (empty($_SESSION['formpays'][NUM_PAGE])) {

            $_SESSION['formpays'][NUM_PAGE] = array(
                'codep' => '',
                'pays' => '',
                'indice' => ''
            );
        }
        require('sotcocogpages/sotcocogparametre/sotcocogpays/sotcocogajouter/form_ajouter_pays.php');
        break;
}