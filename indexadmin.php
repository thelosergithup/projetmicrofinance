<?php
    include_once("header.php");  
?>




<?php include('./pmfinclude/navbar.php'); ?> 

<h1 class="mt-5">Accueil</h1>

 <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="javascript:history.go(-1)" class="btn btn-sm pull-left btn-primary" >
							<i class="glyphicon glyphicon-backward"></i> Pr&eacute;cedant</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12" id="products">
                            <?php include './pmfinclude/alertjs.php'; ?>
                            <?php
                            if (isset($_REQUEST["page"])) {
                                $page = base64_decode($_REQUEST["page"]) . ".php";
                                
                                if (file_exists($page)) {
                                    
                                    include ($page);
                                } else {
                                    echo 'Page nom disponible sur le serveur';
                                }
                            } else {
                                include './pmfinclude/pmfaccueil.php';
                            }
                            ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div><!--/.container-->


<?php
    include_once("footer.php");
?>
