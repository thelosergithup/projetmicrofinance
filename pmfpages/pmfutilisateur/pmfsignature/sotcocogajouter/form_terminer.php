<?php
if (isset($_SESSION['formsignature']) && $_SESSION['formsignature'] != NULL) {
    inserer_signature($_SESSION['formsignature'],$con);
} else {
    echo "<script language='javascript'>$('div.addnull').show('slow').delay(3000).hide('slow');</script>";
}
?>                                                                                                                                                                                                                                                                        