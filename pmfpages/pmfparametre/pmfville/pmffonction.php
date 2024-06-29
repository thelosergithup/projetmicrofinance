<?php

//fonction pour ajouter un ville
function inserer_ville($reg, $con) {
    $path = $_SERVER['PHP_SELF'];
    $url = basename($path);
    if (($reg != NULL) && isset($reg["1"])) {
        $req = $con->query("select * from sot_ville where libelleville='" . addslashes($reg["1"]["ville"]) . "'") or die(mysqli_error($con));
        $nb = mysqli_num_rows($req);
        if (($nb == 0)) {
            $con->query("insert into sot_ville(libelleville,idpays,dateville) values('" . addslashes($reg["1"]["ville"]) . "', '" . $reg["1"]["pays"] . "',now())") or die(mysqli_error($con));
//            $con->query("insert into log(iduser,operation,dateLog) values('{$_SESSION['iduser']}','Ajout dans la table sot_ville de la valeure {$reg["1"]["ville"]}',now())") or die(mysqli_error($con));
            echo "<script language='javascript'>$('div.addok').show('slow').delay(8000).hide('slow');</script>";
            unset($_SESSION['formville']);
            $pagp = 'sotcocogpages/sotcocogparametre/sotcocogville/lister_ville';
            die('<meta http-equiv="refresh" content="3 ; URL=' . $url . '?page=' . base64_encode($pagp) . '">');
        } else {
            echo "<script language='javascript'>$('div.addko').show('slow').delay(8000).hide('slow');</script>";
            $pagp = 'sotcocogpages/sotcocogparametre/sotcocogville/sotcocogajouter/ajout_ville';
            die('<meta http-equiv="refresh" content="3 ; URL=' . $url . '?page=' . base64_encode($pagp) . '">');
        }
    }
}

//fonction pour lister les villes
function lister_ville($con) {
    $path = $_SERVER['PHP_SELF'];
    $url = basename($path);
    $rsltuser = $con->query("select * from sot_ville as v left join sot_pays as p on v.idpays=p.idpays") or die(mysqli_error($con));
    while ($recuser = mysqli_fetch_assoc($rsltuser)) {
        ?>
        <tr >
            <td></td>
            <td><?php print nl2br(htmlspecialchars($recuser["idville"])) ?></td>
            <td><?php print nl2br(htmlspecialchars($recuser["libelleville"])) ?></td>
            <td><?php print nl2br(htmlspecialchars($recuser["libellepays"])) ?></td>
            <td>
                <?php
                if ($recuser["etatville"]) {
                    ?>
                   <a href='<?= $url; ?>?page=<?php echo base64_encode('sotcocogpages/sotcocogparametre/sotcocogville/ville_ajax'); ?>&idville=<?php echo $recuser["idville"]; ?>&desactiver=desactiver' onclick="return(confirm('Etes-vous s&ucirc;r de vouloir Désactiver cette Ville ?'));">
                       <span title="Activ&eacute;" data-toggle="tooltip" alt="oui" class="label-success label">Activ&eacute;</span>
                    </a>
                    <?php
                }else{
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

function update_ville($reg, $con) {
    $path = $_SERVER['PHP_SELF'];
    $url = basename($path);
    if (($reg != NULL) && isset($reg["1"])) {
        $req = $con->query("select * from sot_ville where libelleville='" . addslashes($reg["1"]["villee"]) . "'") or die(mysqli_error($con));
        $nb = mysqli_num_rows($req);
        if (($nb == 0)) {
            $con->query("update sot_ville set idpays='" . $reg["1"]["payse"] . "', libelleville='" . addslashes($reg["1"]["villee"]) . "' where idville='" . $reg["1"]["idville"] . "'") or die(mysqli_error($con));
//            $con->query("insert into log(iduser,operation,dateLog) values('{$_SESSION['iduser']}','Mise a jour dans la table sot_ville de la valeure {$reg["1"]["ville"]}',now())") or die(mysqli_error($con));
            unset($_SESSION['formvillee']);
            echo "<script language='javascript'>$('div.editok').show('slow').delay(8000).hide('slow');</script>";
            $pagp = 'sotcocogpages/sotcocogparametre/sotcocogville/lister_ville';
            die('<meta http-equiv="refresh" content="3; URL=' . $url . '?page=' . base64_encode($pagp) . '">');
        } else {
            $rowv = mysqli_fetch_assoc($req);
            if ($rowv["idville"] == $reg["1"]["idville"]) {
                $con->query("update sot_ville set idpays='" . $reg["1"]["payse"] . "', libelleville='" . addslashes($reg["1"]["villee"]) . "' where idville='" . $reg["1"]["idville"] . "'") or die(mysqli_error($con));
//            $con->query("insert into log(iduser,operation,dateLog) values('{$_SESSION['iduser']}','Mise a jour dans la table sot_ville de la valeure {$reg["1"]["ville"]}',now())") or die(mysqli_error($con));
                unset($_SESSION['formvillee']);
                echo "<script language='javascript'>$('div.editok').show('slow').delay(8000).hide('slow');</script>";
                $pagp = 'sotcocogpages/sotcocogparametre/sotcocogville/lister_ville';
                die('<meta http-equiv="refresh" content="3; URL=' . $url . '?page=' . base64_encode($pagp) . '">');
            } else {
                echo "<script language='javascript'>$('div.addko').show('slow').delay(8000).hide('slow');</script>";
                $pagp = 'sotcocogpages/sotcocogparametre/sotcocogville/sotcocogediter/edit_ville';
                die('<meta http-equiv="refresh" content="3; URL=' . $url . '?page=' . base64_encode($pagp) . '&idville=' . $reg["1"]["idville"] . '">');
            }
        }
    }
}
