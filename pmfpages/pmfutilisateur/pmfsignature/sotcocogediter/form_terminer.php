<?php
if (isset($_SESSION['formsignaturee']) && $_SESSION['formsignaturee'] != NULL) {
    update_signature($_SESSION['formsignaturee'],$con);
} else {
    echo "<script language='javascript'>$('div.addnull').show('slow').delay(3000).hide('slow');</script>";
}
?>                                                                                                                                                                                                                                                                        