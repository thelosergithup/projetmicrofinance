<div class="container-fluid">
    <div class="row">
        <div class="col-md-1 col-lg-1 col-sm-2 col-xs-2">
            <?php
            if (($_SESSION["roleuser"] == "administrateur") ) {
                ?><br>
                <div id="dl-menu" class="dl-menuwrapper">
                    <button class="dl-trigger">Menu</button>
                    <ul class="dl-menu">
                        <li>
                            <a href="#">Paramètre</a>
                            <ul class="dl-submenu">
                                
                                <li>
                                    <a href="#">
                                        Pays
                                    </a>
                                    <ul class="dl-submenu">
                                        <li><a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfparametre/pmfpays/lister_pays'); ?>">Pays</a></li>
                                        <li><a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfparametre/pmfville/lister_ville'); ?>">Ville</a></li>
                                        
                                    </ul>
                                </li>
                               
                            </ul>
                        </li>
                    </ul>
                </div><!-- /dl-menuwrapper -->
                <?php
            } else {
                ?>
                &nbsp;<br>
                <?php
            }
            ?>
        </div>

    </div>
</div>
<div class="header-top-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                <div class="header-top-menu tabl-d-n">
                    <ul class="nav navbar-nav mai-top-nav ">
                        <li class="nav-item"><a href="<?= $url; ?>"  class="nav-link area" style="padding-left: 5px; padding-right: 5px;" >Accueil</a></li>
                        <?php
                        if (($_SESSION["roleuser"] == "administrateur")  ) {
                            ?>
                            <li class="nav-item"><a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfutilisateur/lister_utilisateur'); ?>" class="nav-link area" style="padding-left: 5px; padding-right: 5px;"  >Utilisateur</a>
                           
                            </li>
                            <?php
                        }
                        ?>
                        

                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <div class="header-right-info">
                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                <img src="pmfupload/profil/<?php echo $_SESSION["photouser"]; ?>" alt="" />
                                <span class="admin-name"><?php echo $_SESSION["nomuser"]; ?></span>
                                <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                            </a>
                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                <li><a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfutilisateur/info_user'); ?>"><span class="edu-icon edu-user-rounded author-log-ic"></span>Mon Profil</a>
                                </li>
                                <li><a href="javascript:deconnexion();"><span class="edu-icon edu-locked author-log-ic"></span>D&eacute;connexion</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu start -->
<div class="mobile-menu-area">
    <div class="">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mlobie-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li><a href="<?= $url; ?>">Accueil</a></li>
                            <?php
                            if (($_SESSION["roleuser"] == "administrateur") || ($_SESSION["roleuser"] == "Directeur Général Adjoint") || ($_SESSION["roleuser"] == "Directeur Général") || ($_SESSION["roleuser"] == "Directeur Administratif et Finance") || ($_SESSION["roleuser"] == "Chef Finance")) {
                                ?>
                                <li><a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfutilisateur/lister_utilisateur'); ?>" >Utilisateur</a>
                                </li>
                                <?php
                            }
                            ?>
                            <?php
                            if (($_SESSION["roleuser"] == "administrateur") || ($_SESSION["roleuser"] == "Directeur Général Adjoint") || ($_SESSION["roleuser"] == "Directeur Général") || ($_SESSION["roleuser"] == "Directeur Administratif et Finance") || ($_SESSION["roleuser"] == "Chef Finance")) {
                                ?>
                                <li><a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmffournisseur/lister_fournisseur'); ?>" >Fournisseur</a>
                                </li>

                                <?php
                            }
                            ?>
                            <?php
                            if (($_SESSION["roleuser"] != "Chef Matériel") && ($_SESSION["roleuser"] != "Chef d'Achat") && ($_SESSION["roleuser"] != "Chef d'Opération")) {
                                ?>
                                <li><a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfprojet/lister_projet'); ?>"  >Projet</a>
                                </li>
                                <?php
                            }
                            ?>
                            <li>
                                <a href="#" data-toggle="collapse" data-target="#courrier"   >Courrier  <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                <ul id="courrier" class="collapse dropdown-header-top">
                                    <a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfcourrier/lister_courrier'); ?>" class="dropdown-item">Gestion des courriers</a>
                                    <a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfcourrier/courrier_archive_form'); ?>" class="dropdown-item">Courriers archiv&eacute;s</a>

                                </ul>
                            </li>
                            <?php
                            if (($_SESSION["roleuser"] != "Chef Matériel") && ($_SESSION["roleuser"] != "Chef d'Achat") && ($_SESSION["roleuser"] != "Chef d'Opération") && ($_SESSION["roleuser"] != "Bureau d'Ordre") && ($_SESSION["roleuser"] != "Contrôleur de Dépenses")) {
                                ?>
                                <li>
                                    <a href="#" data-toggle="collapse" data-target="#etatpaiement" >Etat de paiement  <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="etatpaiement" class="collapse dropdown-header-top">
                                        <a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfetatpaiement/lister_etatpaiement'); ?>" class="dropdown-item">Gestion des &eacute;tats de paiement</a>
                                        <a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfetatpaiement/etatpaiement_paye_form'); ?>" class="dropdown-item">Engagement Tiers</a>

                                    </ul>
                                </li>
                                <?php
                            }
                            ?>
                            <li><a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfmemo/lister_memo'); ?>"  >Memo</a>
                            </li>
                            <?php
                            if (($_SESSION["roleuser"] == "administrateur") || ($_SESSION["roleuser"] == "Directeur Général Adjoint") || ($_SESSION["roleuser"] == "Directeur Général") || ($_SESSION["roleuser"] == "Directeur Administratif et Finance") || ($_SESSION["roleuser"] == "Chef Finance")) {
                                ?>
                                <li><a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfcharge/lister_charge'); ?>"  >Charges</a>
                                </li>
                                <?php
                            }
                            ?>
                            <?php
                            if (($_SESSION["roleuser"] == "administrateur") || ($_SESSION["roleuser"] == "Directeur Général Adjoint") || ($_SESSION["roleuser"] == "Directeur Général") || ($_SESSION["roleuser"] == "Directeur Administratif et Finance")) {
                                ?>
                                <li><a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfdecompte/lister_decompte'); ?>"  >Décompte</a>
                                </li>
                                <?php
                            }
                            ?>
                            <?php
                            if (($_SESSION["roleuser"] != "Chef Matériel") && ($_SESSION["roleuser"] != "Chef d'Achat") && ($_SESSION["roleuser"] != "Chef d'Opération") && ($_SESSION["roleuser"] != "Bureau d'Ordre") && ($_SESSION["roleuser"] != "Contrôleur de Dépenses") && ($_SESSION["roleuser"] != "Comptable") && ($_SESSION["roleuser"] != "Chef Comptable")) {
                                $annee = date('Y');
                                ?>
                                <li>
                                    <a href="#" data-toggle="collapse" data-target="#budget"  >Budget  <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="budget" class="collapse dropdown-header-top">
                                        <a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfbudget/pmftrimestre/lister_trimestre'); ?>" class="dropdown-item">Trimestre</a>
                                        <a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfbudget/pmfencaissement/lister_encaissement'); ?>" class="dropdown-item">Encaissement</a>
                                        <a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfbudget/lister_budget'); ?>" class="dropdown-item">Tr&eacute;sorerie</a>
                                        <a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfbudget/afficher_budget_annee'); ?>&annee=<?php echo $annee; ?>" class="dropdown-item">Budget Annuel</a>
                                    </ul>
                                </li>
                                <?php
                            }
                            ?>
                            <?php
                            if (($_SESSION["roleuser"] == "administrateur") || ($_SESSION["roleuser"] == "Directeur Général Adjoint") || ($_SESSION["roleuser"] == "Directeur Général") || ($_SESSION["roleuser"] == "Directeur Administratif et Finance") || ($_SESSION["roleuser"] == "Chef Finance")) {
                                $mois1 = "Janvier";
                                $mois2 = "Février";
                                $mois3 = "Mars";
                                $mois4 = "Avril";
                                $mois5 = "Mai";
                                $mois6 = "Juin";
                                $mois7 = "Juillet";
                                $mois8 = "Août";
                                $mois9 = "Septembre";
                                $mois10 = "Octobre";
                                $mois11 = "Novembre";
                                $mois12 = "Décembre";
                                $year = date('Y');
                                ?>
                                <li>
                                    <a href="#" data-toggle="collapse" data-target="#liquidation"  >Liquidation  <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="liquidation" class="collapse dropdown-header-top">

                                        <a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfbudget/pmfpositionnement/afficher_positionnement'); ?>&mois=<?php echo $mois1; ?>&annee=<?php echo $year; ?>">Janvier</a>
                                        <a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfbudget/pmfpositionnement/afficher_positionnement'); ?>&mois=<?php echo $mois2; ?>&annee=<?php echo $year; ?>">F&eacute;vrier</a>
                                        <a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfbudget/pmfpositionnement/afficher_positionnement'); ?>&mois=<?php echo $mois3; ?>&annee=<?php echo $year; ?>">Mars</a>
                                        <a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfbudget/pmfpositionnement/afficher_positionnement'); ?>&mois=<?php echo $mois4; ?>&annee=<?php echo $year; ?>">Avril</a>
                                        <a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfbudget/pmfpositionnement/afficher_positionnement'); ?>&mois=<?php echo $mois5; ?>&annee=<?php echo $year; ?>">Mai</a>
                                        <a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfbudget/pmfpositionnement/afficher_positionnement'); ?>&mois=<?php echo $mois6; ?>&annee=<?php echo $year; ?>">Juin</a>
                                        <a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfbudget/pmfpositionnement/afficher_positionnement'); ?>&mois=<?php echo $mois7; ?>&annee=<?php echo $year; ?>">Juillet</a>
                                        <a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfbudget/pmfpositionnement/afficher_positionnement'); ?>&mois=<?php echo $mois8; ?>&annee=<?php echo $year; ?>">Ao&ucirc;t</a>
                                        <a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfbudget/pmfpositionnement/afficher_positionnement'); ?>&mois=<?php echo $mois9; ?>&annee=<?php echo $year; ?>">Septembre</a>
                                        <a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfbudget/pmfpositionnement/afficher_positionnement'); ?>&mois=<?php echo $mois10; ?>&annee=<?php echo $year; ?>">Octobre</a>
                                        <a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfbudget/pmfpositionnement/afficher_positionnement'); ?>&mois=<?php echo $mois11; ?>&annee=<?php echo $year; ?>">Novembre</a>
                                        <a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfbudget/pmfpositionnement/afficher_positionnement'); ?>&mois=<?php echo $mois12; ?>&annee=<?php echo $year; ?>">D&eacute;cembre</a>

                                    </ul>
                                </li>
                                <?php
                            }
                            ?>
                            <?php
                            if (($_SESSION["roleuser"] == "administrateur") || ($_SESSION["roleuser"] == "Directeur Général Adjoint") || ($_SESSION["roleuser"] == "Directeur Général") || ($_SESSION["roleuser"] == "Directeur Administratif et Finance") || ($_SESSION["roleuser"] == "Chef Finance")) {
                                ?>
                                <li>
                                    <a href="#" data-toggle="collapse" data-target="#statis"  >Statistique <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="statis" class="collapse dropdown-header-top">
                                        <a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmffournisseur/historiquefournisseur/lister_fournisseur'); ?>" class="dropdown-item">Historique de fournisseurs</a>
                                        <a href="<?= $url; ?>?page=<?php echo base64_encode('pmfpages/pmfstatistique/statistique_form'); ?>" class="dropdown-item">Statistique annuel</a>

                                    </ul>
                                </li>

                                <?php
                            }
                            ?>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu end -->
<!--<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list  single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcome-heading">
                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->