<?php
if (isset($_SESSION['formpays']) && $_SESSION['formpays'] != NULL) {
    inserer_pays($_SESSION['formpays'],$con);
} else {
    echo "<script language='javascript'>$('div.addnull').show('slow').delay(3000).hide('slow');</script>";
}
?>