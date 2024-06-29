<?php

//fonction pour ajouter un pays
function inserer_pays($reg, $con) {
    $path = $_SERVER['PHP_SELF'];
    $url = basename($path);
    if (($reg != NULL) && isset($reg["1"])) {
        $req = $con->query("select * from sot_pays where codepays='" . $reg["1"]["codep"] . "' or libellepays='" . addslashes($reg["1"]["pays"]) . "'or indicepays='" . addslashes($reg["1"]["indice"]) . "'") or die(mysqli_error($con));
        $nb = mysqli_num_rows($req);
        if (($nb == 0)) {
            $con->query("insert into sot_pays(libellepays,codepays,indicepays,datepays) values('" . addslashes($reg["1"]["pays"]) . "', "
                    . "'" . $reg["1"]["codep"] . "', '" . addslashes($reg["1"]["indice"]) . "', now())") or die(mysqli_error($con));
//            $con->query("insert into log(iduser,operation,dateLog) values('{$_SESSION['iduser']}','Ajout dans la table sot_pays de la valeure {$reg["1"]["pays"]}',now())") or die(mysqli_error($con));
            echo "<script language='javascript'>$('div.addok').show('slow').delay(8000).hide('slow');</script>";
            unset($_SESSION['formpays']);
            $pagp = 'sotcocogpages/sotcocogparametre/sotcocogpays/lister_pays';
            die('<meta http-equiv="refresh" content="3 ; URL=' . $url . '?page=' . base64_encode($pagp) . '">');
        } else {
            echo "<script language='javascript'>$('div.addko').show('slow').delay(8000).hide('slow');</script>";
            $pagp = 'sotcocogpages/sotcocogparametre/sotcocogpays/sotcocogajouter/ajout_pays';
            die('<meta http-equiv="refresh" content="3 ; URL=' . $url . '?page=' . base64_encode($pagp) . '">');
        }
    }
}

//fonction pour lister les payss
function lister_pays($con) {
    $path = $_SERVER['PHP_SELF'];
    $url = basename($path);
    $rsltuser = $con->query('select * from sot_pays') or die(mysqli_error($con));
    while ($recuser = mysqli_fetch_assoc($rsltuser)) {
        ?>
        <tr >
            <td></td>
            <td><?php print nl2br(htmlspecialchars($recuser["idpays"])) ?></td>
            <td><?php print nl2br(htmlspecialchars($recuser["codepays"])) ?></td>
            <td><?php print nl2br(htmlspecialchars($recuser["libellepays"])) ?></td>
            <td><?php print nl2br(htmlspecialchars($recuser["indicepays"])) ?></td>
            <td>
                <?php
                if ($recuser["etatpays"]) {
                    ?>
                    <a href='<?= $url; ?>?page=<?php echo base64_encode('sotcocogpages/sotcocogparametre/sotcocogpays/pays_ajax'); ?>&idpays=<?php echo $recuser["idpays"]; ?>&desactiver=desactiver' onclick="return(confirm('Etes-vous s&ucirc;r de vouloir Désactiver ce Pays ?'));">
                        <span title="Activ&eacute;" data-toggle="tooltip" alt="oui" class="label-success label">Activ&eacute;</span>
                    </a>
                    <?php
                } else {
                    ?>
                    <a href="<?= $url; ?>?page=<?php echo base64_encode('sotcocogpages/sotcocogparametre/sotcocogpays/pays_ajax'); ?>&idpays=<?php echo $recuser["idpays"]; ?>&activer=activer" onclick="return(confirm('Etes-vous s&ucirc;r de vouloir Activer ce Pays ?'));">
                        <span title="D&eacute;sactiv&eacute; " data-toggle="tooltip" alt="non" class="label-warning label">D&eacute;sactiv&eacute;</span>
                    </a>
                    <?php
                }
                ?>
            </td>
            <td><?php print nl2br(htmlspecialchars($recuser["datepays"])) ?></td>
            <td>
                <a href="<?= $url; ?>?page=<?php echo base64_encode('sotcocogpages/sotcocogparametre/sotcocogpays/sotcocogediter/edit_pays'); ?>&idpays=<?php echo $recuser["idpays"]; ?>" >
                    <span title="Modifier ce Pays" alt="editer"><i class="glyphicon glyphicon-edit"></i></span>
                </a>
                &nbsp;&nbsp;
                <a href="<?= $url; ?>?page=<?php echo base64_encode('sotcocogpages/sotcocogparametre/sotcocogpays/lister_ville'); ?>&idpays=<?php echo $recuser["idpays"]; ?>" >
                    <span title="Lister les Villes de ce Pays" alt="ville"><i class="glyphicon glyphicon-list-alt"></i></span>
                </a>
                &nbsp;&nbsp;
                <a href='<?= $url; ?>?page=<?php echo base64_encode('sotcocogpages/sotcocogparametre/sotcocogpays/pays_ajax'); ?>&idpays=<?php echo $recuser["idpays"]; ?>&supprimer=supprimer' onclick="return(confirm('Etes-vous s&ucirc;r de vouloir Supprimer ce Pays ?'));" >
                    <span title="Supprimer ce Pays " alt="suppr">  <i class="glyphicon glyphicon-trash"></i></span>
                </a>
            </td>
        </tr>
        <?php
    }
}

function update_pays($reg, $con) {
    $path = $_SERVER['PHP_SELF'];
    $url = basename($path);
    if (($reg != NULL) && isset($reg["1"])) {
        $req = $con->query("select * from sot_pays where codepays='" . $reg["1"]["codepe"] . "' or libellepays='" . addslashes($reg["1"]["payse"]) . "'or indicepays='" . addslashes($reg["1"]["indicee"]) . "'") or die(mysqli_error($con));
        $nb = mysqli_num_rows($req);
        if (($nb == 0)) {
            $con->query("update sot_pays set codepays='" . $reg["1"]["codepe"] . "', libellepays='" . addslashes($reg["1"]["payse"]) . "', indicepays='" . addslashes($reg["1"]["indicee"]) . "' where idpays='" . $reg["1"]["idpays"] . "'") or die(mysqli_error($con));
//            $con->query("insert into log(iduser,operation,dateLog) values('{$_SESSION['iduser']}','Mise a jour dans la table sot_pays de la valeure {$reg["1"]["pays"]}',now())") or die(mysqli_error($con));
            unset($_SESSION['formpayse']);
            echo "<script language='javascript'>$('div.editok').show('slow').delay(8000).hide('slow');</script>";
            $pagp = 'sotcocogpages/sotcocogparametre/sotcocogpays/lister_pays';
            die('<meta http-equiv="refresh" content="3; URL=' . $url . '?page=' . base64_encode($pagp) . '">');
        } else {
            $ok = true;
            while ($rowv = mysqli_fetch_assoc($req)) {
                if ($rowv["idpays"] != $reg["1"]["idpays"]) {
                    $ok = FALSE;
                }
            }
            if ($ok) {
                $con->query("update sot_pays set codepays='" . $reg["1"]["codepe"] . "', libellepays='" . addslashes($reg["1"]["payse"]) . "', indicepays='" . addslashes($reg["1"]["indicee"]) . "' where idpays='" . $reg["1"]["idpays"] . "'") or die(mysqli_error($con));
//            $con->query("insert into log(iduser,operation,dateLog) values('{$_SESSION['iduser']}','Mise a jour dans la table sot_pays de la valeure {$reg["1"]["pays"]}',now())") or die(mysqli_error($con));
                unset($_SESSION['formpayse']);
                echo "<script language='javascript'>$('div.editok').show('slow').delay(8000).hide('slow');</script>";
                $pagp = 'sotcocogpages/sotcocogparametre/sotcocogpays/lister_pays';
                die('<meta http-equiv="refresh" content="3; URL=' . $url . '?page=' . base64_encode($pagp) . '">');
            } else {
                echo "<script language='javascript'>$('div.addko').show('slow').delay(8000).hide('slow');</script>";
                $pagp = 'sotcocogpages/sotcocogparametre/sotcocogpays/sotcocogediter/edit_pays';
                die('<meta http-equiv="refresh" content="3; URL=' . $url . '?page=' . base64_encode($pagp) . '&idpays=' . $reg["1"]["idpays"] . '">');
            }
        }
    }
}

//fonction pour lister les villes
function lister_ville_pays($id, $con) {
    $path = $_SERVER['PHP_SELF'];
    $url = basename($path);
    $rsltuser = $con->query("select * from sot_ville as v left join sot_pays as p on v.idpays=p.idpays where v.idpays='".$id."'") or die(mysqli_error($con));
    while ($recuser = mysqli_fetch_assoc($rsltuser)) {
        ?>
        <tr >
            <td></td>
            <td><?php print nl2br(htmlspecialchars($recuser["idville"])) ?></td>
            <td><?php print nl2br(htmlspecialchars($recuser["libelleville"])) ?></td>
            <td>
                <?php
                if ($recuser["etatville"]) {
                    ?>
                    <a href='<?= $url; ?>?page=<?php echo base64_encode('sotcocogpages/sotcocogparametre/sotcocogville/ville_ajax'); ?>&idville=<?php echo $recuser["idville"]; ?>&desactiver=desactiver' onclick="return(confirm('Etes-vous s&ucirc;r de vouloir Désactiver cette Ville ?'));">
                        <span title="Activ&eacute;" data-toggle="tooltip" alt="oui" class="label-success label">Activ&eacute;</span>
                    </a>
                    <?php
                } else {
                    ?>
                    <a href="<?= $url; ?>?page=<?php echo base64_encode('sotcocogpages/sotcocogparametre/sotcocogville/ville_ajax'); ?>&idville=<?php echo $recuser["idville"]; ?>&activer=activer" onclick="return(confirm('Etes-vous s&ucirc;r de vouloir Activer cette Ville ?'));">
                        <span title="D&eacute;sactiv&eacute; " data-toggle="tooltip" alt="non" class="label-warning label">D&eacute;sactiv&eacute;</span>
                    </a>
                    <?php
                }
                ?>
            </td>
            <td><?php print nl2br(htmlspecialchars($recuser["dateville"])) ?></td>
            <td>
                <a href="<?= $url; ?>?page=<?php echo base64_encode('sotcocogpages/sotcocogparametre/sotcocogville/sotcocogediter/edit_ville'); ?>&idville=<?php echo $recuser["idville"]; ?>" >
                    <span title="Modifier cette ville" alt="editer"><i class="glyphicon glyphicon-edit"></i></span>
                </a>
                &nbsp;&nbsp;
                <a href='<?= $url; ?>?page=<?php echo base64_encode('sotcocogpages/sotcocogparametre/sotcocogville/ville_ajax'); ?>&idville=<?php echo $recuser["idville"]; ?>&supprimer=supprimer' onclick="return(confirm('Etes-vous s&ucirc;r de vouloir Supprimer cette Ville ?'));" >
                    <span title="Supprimer cette Ville " alt="suppr">  <i class="glyphicon glyphicon-trash"></i></span>
                </a>
            </td>
        </tr>
        <?php
    }
}
