<nav id="sidebar" class="">
    <div class="sidebar-header">
<!--                    <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
        <strong><a href="index.html"><img src="img/logo/logosn.png" alt="" /></a></strong>-->
    </div>
    <div class="left-custom-menu-adp-wrap comment-scrollbar">
        <nav class="sidebar-nav left-sidebar-menu-pro">
            <ul class="metismenu" id="menu1">
                <!--<li class="active">-->
                <li>
                    <a class="has-arrow" href="<?= $url; ?>" aria-expanded="true">
                        <i class="fa big-icon fa-home icon-wrap"></i>
                        <span class="mini-click-non">Param&egrave;tre</span>
                    </a>
                    <ul class="submenu-angle" aria-expanded="false">
                        <li><a href="<?= $url; ?>?page=<?php echo base64_encode('sotcocogpages/sotcocogparametre/sotcocoglangue/lister_langue'); ?>"><i class="fa fa-language sub-icon-mg" aria-hidden="true"  title="Langue"></i> <span class="mini-sub-pro">Langue</span></a></li>
                        <li><a href="<?= $url; ?>?page=<?php echo base64_encode('sotcocogpages/sotcocogparametre/sotcocogdevise/lister_devise'); ?>"><i class="fa fa-money sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Devise</span></a></li>
                        <li><a href="<?= $url; ?>?page=<?php echo base64_encode('sotcocogpages/sotcocogparametre/sotcocogpays/lister_pays'); ?>"><i class="fa fa-home sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Pays</span></a></li>
                        <li><a href="<?= $url; ?>?page=<?php echo base64_encode('sotcocogpages/sotcocogparametre/sotcocogville/lister_ville'); ?>"><i class="fa fa-home sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Ville</span></a></li>
                        <li><a href="<?= $url; ?>?page=<?php echo base64_encode('sotcocogpages/sotcocogparametre/sotcocogentreprise/lister_entreprise'); ?>"><i class="fa fa-home sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Entreprise</span></a></li>
                        <li><a href="<?= $url; ?>?page=<?php echo base64_encode('sotcocogpages/sotcocogparametre/sotcocogentete/lister_entete'); ?>"><i class="fa fa-home sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Ent&ecirc;te</span></a></li>
                        <li><a href="<?= $url; ?>?page=<?php echo base64_encode('sotcocogpages/sotcocogparametre/sotcocogdepartement/lister_departement'); ?>"><i class="fa fa-home sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">D&eacute;partement</span></a></li>
                        <li><a href="<?= $url; ?>?page=<?php echo base64_encode('sotcocogpages/sotcocogparametre/sotcocogtypefournisseur/lister_typefournisseur'); ?>"><i class="fa fa-car sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Type Fourniseur</span></a></li>
                    </ul>
                </li>
                <?php
                if (($_SESSION["roleuser"] == "Administrateur") || ($_SESSION["roleuser"] == "Chef d'Achat") || ($_SESSION["roleuser"] == "Directeur Administratif et Finance") || ($_SESSION["roleuser"] == "Directeur Général Adjoint") || ($_SESSION["roleuser"] == "Directeur Général")) {
                    ?>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i class="fa big-icon fa-buysellads icon-wrap"></i> 
                            <span class="mini-click-non">Achat</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="" href="<?= $url; ?>?page=<?php echo base64_encode('sotcocogpages/sotcocogparametre/sotcocogunite/lister_unite'); ?>"><i class="fa fa-mercury sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Unit&eacute;</span></a></li>
                            <li><a title="" href="<?= $url; ?>?page=<?php echo base64_encode('sotcocogpages/sotcocogparametre/sotcocogmodepaiement/lister_modepaiement'); ?>"><i class="fa fa-paypal sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Mode de Paiement</span></a></li>
                        </ul>
                    </li>
                    <?php
                }
                if (($_SESSION["roleuser"] == "Administrateur") || ($_SESSION["roleuser"] == "Chef d'Opération") || ($_SESSION["roleuser"] == "Directeur Administratif et Finance") || ($_SESSION["roleuser"] == "Directeur Général Adjoint") || ($_SESSION["roleuser"] == "Directeur Général")) {
                    ?>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i class="fa big-icon fa-opera icon-wrap"></i> 
                            <span class="mini-click-non">Op&eacute;ration</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="" href="<?= $url; ?>?page=<?php echo base64_encode('sotcocogpages/sotcocogparametre/sotcocogequipe/lister_equipe'); ?>"><i class="fa fa-users sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Equipe</span></a></li>
                        </ul>
                    </li>
                    <?php
                }
                if (($_SESSION["roleuser"] == "Administrateur") || ($_SESSION["roleuser"] == "Directeur Général Adjoint") || ($_SESSION["roleuser"] == "Directeur Général") || ($_SESSION["roleuser"] == "Directeur Administratif et Finance") || ($_SESSION["roleuser"] == "Chef d'Opération") || ($_SESSION["roleuser"] == "Chef d'Achat")) {
                    ?>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i class="fa big-icon fa-user icon-wrap"></i> 
                            <span class="mini-click-non">Utilisateur</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Login" href="<?= $url; ?>?page=<?php echo base64_encode('sotcocogpages/sotcocogutilisateur/lister_utilisateur'); ?>"><i class="fa fa-user-circle sub-icon-mg" aria-hidden="true"></i><span class="mini-sub-pro">Utilisateur</span></a></li>
                        </ul>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </nav>
    </div>
</nav>