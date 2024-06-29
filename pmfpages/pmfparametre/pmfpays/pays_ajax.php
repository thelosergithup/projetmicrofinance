<?php

if (isset($_REQUEST["desactiver"])) {
    $id = trim($_REQUEST["idpays"]);
    $con->query(" update sot_pays set etatpays=0 where idpays='" . $id . "' ") or die(mysqli_error($con));

    echo "<script language='javascript'>alert('Pays Désactivé avec succes')</script>";
    $pagp = 'sotcocogpages/sotcocogparametre/sotcocogpays/lister_pays';
    die('<meta http-equiv="refresh" content="0 ; URL=' . $url . '?page=' . base64_encode($pagp) . '">');
}

if (isset($_REQUEST["activer"])) {
    $id = trim($_REQUEST["idpays"]);
    $con->query(" update sot_pays set etatpays=1 where idpays='" . $id . "' ") or die(mysqli_error($con));

    echo "<script language='javascript'>alert('Pays Activé avec succes')</script>";
    $pagp = 'sotcocogpages/sotcocogparametre/sotcocogpays/lister_pays';
    die('<meta http-equiv="refresh" content="0 ; URL=' . $url . '?page=' . base64_encode($pagp) . '">');
}

if (isset($_REQUEST["supprimer"])) {
    $id = trim($_REQUEST["idpays"]);
    $req = $con->query("select * from sot_ville where idpays='" . $id . "'") or die(mysqli_error($con));
    $nb = mysqli_num_rows($req);
    if (($nb == 0)) {
        $con->query(" delete from sot_pays where idpays='" . $id . "' ") or die(mysqli_error($con));

        echo "<script language='javascript'>alert('Suppression terminée')</script>";
        $pagp = 'sotcocogpages/sotcocogparametre/sotcocogpays/lister_pays';
        die('<meta http-equiv="refresh" content="0 ; URL=' . $url . '?page=' . base64_encode($pagp) . '">');
    } else {

        echo "<script language='javascript'>alert('Impossible de surprimer ce Pays car il y a des Villes !!!')</script>";
        $pagp = 'sotcocogpages/sotcocogparametre/sotcocogpays/lister_pays';
        die('<meta http-equiv="refresh" content="0 ; URL=' . $url . '?page=' . base64_encode($pagp) . '">');
    }
}
?>