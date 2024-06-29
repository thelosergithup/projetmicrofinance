<?php

// This is a sample PHP script which demonstrates the 'remote' validator
// To make it work, point the web server to root Bootstrap Validate directory
// and open the remote.html file:


header('Content-type: application/json');


//sleep(5);
include('../../../sotcocogconnexion/connexion.php');

$valid = true;

$rsltpay = $con->query("SELECT * FROM sot_pays ") or die(mysqli_error($con));
$payss = array();
$i = 0;
while ($rowpay = mysqli_fetch_array($rsltpay)) {
    $payss[$i]["id"] = $rowpay["idpays"];
    $payss[$i]["code"] = $rowpay["codepays"];
    $payss[$i]["pays"] = $rowpay["libellepays"];
    $payss[$i]["indice"] = $rowpay["indicepays"];
    $i = $i + 1;
}

if (isset($_POST['codep'])) {
    $code = $_POST['codep'];
    foreach ($payss as $k => $v) {
        if ($code == $payss[$k]["code"]) {
            $valid = false;
            break;
        }
    }
} else if (isset($_POST['pays'])) {
    $code = $_POST['pays'];
    foreach ($payss as $k => $v) {
        if ($code == $payss[$k]["pays"]) {
            $valid = false;
            break;
        }
    }
} else if (isset($_POST['indice'])) {
    $code = $_POST['indice'];
    foreach ($payss as $k => $v) {
        if ($code == $payss[$k]["indice"]) {
            $valid = false;
            break;
        }
    }
}


if (isset($_POST['codepe'])) {
    $code = $_POST['codepe'];
    $id = $_POST['idpays'];
//    echo $id;
    foreach ($payss as $k => $v) {
        if ($code == $payss[$k]["code"]) {
            if ($id != $payss[$k]["id"]) {
                $valid = false;
                break;
            }
        }
    }
} else if (isset($_POST['payse'])) {
    $code = $_POST['payse'];
    $id = $_POST['idpays'];
    foreach ($payss as $k => $v) {
        if ($code == $payss[$k]["pays"]) {
            if ($id != $payss[$k]["id"]) {
                $valid = false;
                break;
            }
        }
    }
} else if (isset($_POST['indicee'])) {
    $code = $_POST['indicee'];
    $id = $_POST['idpays'];
    foreach ($payss as $k => $v) {
        if ($code == $payss[$k]["indice"]) {
            if ($id != $payss[$k]["id"]) {
                $valid = false;
                break;
            }
        }
    }
}


echo json_encode(array(
    'valid' => $valid,
));
