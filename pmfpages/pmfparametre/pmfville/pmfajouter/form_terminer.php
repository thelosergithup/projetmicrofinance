<?php
if (isset($_SESSION['formville']) && $_SESSION['formville'] != NULL) {
    inserer_ville($_SESSION['formville'],$con);
} else {
    echo "<script language='javascript'>$('div.addnull').show('slow').delay(3000).hide('slow');</script>";
}
?>                                                                                                                                                                                                                                                                 