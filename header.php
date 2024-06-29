<?php
session_start();
ob_start();

include('pmfconnexion/connexion.php');
include('./pmfinclude/fonctionglobale.php');

include './pmfinclude/get_url.php';
include 'pmfsms/envoyersmsbon.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> projet microfinance</title>

        <link rel="shortcut icon" href="pmfupload/logo/logo.png"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="pmfcss/login.css" rel="stylesheet" type="text/css" />
        <link href="pmfplugin/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="pmfinclude/dist/css/bootstrap.css" rel="stylesheet">

        <link href="pmfinclude/footercss/style.css" rel="stylesheet">
        <link href="pmfinclude/signin.css" rel="stylesheet">
        <!-- favicon
                    ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="pmfupload/logo/logo.png">


        <!-- Bootstrap CSS
                    ============================================ -->
        <link rel="stylesheet" href="pmfcss/bootstrap.min.css">

        <!-- menu -->
        <link href="pmfplugin/menu/css/component.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap CSS
                    ============================================ -->
        <link rel="stylesheet" href="pmfcss/font-awesome.min.css">
        <!-- owl.carousel CSS
                    ============================================ -->
        
        <!-- animate CSS
                    ============================================ -->
        <link rel="stylesheet" href="pmfcss/animate.css">
        <!-- normalize CSS
                    ============================================ -->
        <link rel="stylesheet" href="pmfcss/normalize.css">
        <!-- meanmenu icon CSS
                    ============================================ -->
        <link rel="stylesheet" href="pmfcss/meanmenu.min.css">
        <!-- main CSS
                    ============================================ -->
        <link rel="stylesheet" href="pmfcss/main.css">
        <!-- educate icon CSS
                    ============================================ -->
        <link rel="stylesheet" href="pmfcss/educate-custon-icon.css">
        <!-- morrisjs CSS
                    ============================================ -->
        <link rel="stylesheet" href="pmfcss/morrisjs/morris.css">
        <!-- mCustomScrollbar CSS
                    ============================================ -->
        <link rel="stylesheet" href="pmfcss/scrollbar/jquery.mCustomScrollbar.min.css">
        <!-- metisMenu CSS
                    ============================================ -->
        <link rel="stylesheet" href="pmfcss/metisMenu/metisMenu.min.css">
        <link rel="stylesheet" href="pmfcss/metisMenu/metisMenu-vertical.css">
        <!-- calendar CSS
                    ============================================ -->
        <link rel="stylesheet" href="pmfcss/calendar/fullcalendar.min.css">
        <link rel="stylesheet" href="pmfcss/calendar/fullcalendar.print.min.css">

        <!-- normalize CSS
                    ============================================ -->
        <link rel="stylesheet" href="pmfcss/data-table/bootstrap-table.css">
        <link rel="stylesheet" href="pmfcss/data-table/bootstrap-editable.css">
        <!-- style CSS
                    ============================================ -->

        <link rel="stylesheet" href="pmfcss/responsive.css">

        <link rel="stylesheet" href="style.css">
        <!-- jquery
                    ============================================ -->
        <script src="pmfjs/vendor/jquery-1.12.4.min.js"></script>
        <!-- modernizr JS
                    ============================================ -->
        <script src="pmfjs/vendor/modernizr-2.8.3.min.js"></script>


        <!-- validation des formulaires -->
        <link href="pmfplugin/bootstrapvalidator/css/bootstrapValidator.min.css" rel="stylesheet" type="text/css" />
        <link type="text/css" rel="stylesheet" href="pmfcss/bootstrap-fileupload.min.css"/><!--pour la confirmation des fichier et images-->

        <!--Pour previsualiser les images du dossier-->
        <script src="pmfjs/jquery.imagebox.js"></script>

        <!-- les dates -->
        <link rel="stylesheet" href="pmfplugin/datetimepicker/css/bootstrap-datetimepicker.min.css">
        <!--<link rel="stylesheet" href="plugin/datetimepicker/css/bootstrap-combined.min.css">-->

        

        <script src="pmfckeditor/ckeditor.js"></script>
        <script src="pmfckfinder/ckfinder.js"></script>

        <style>
            body{
                font-family: Book Antiqua !important;
            }
            thead th{
                white-space: nowrap;
            }
            .panel-heading{
                padding: 1px;
            }
        </style>
    </head>
    <?php
            
            include './pmfpages/pmfparametre/pmfpays/pmffonction.php';
            include './pmfpages/pmfparametre/pmfville/pmffonction.php';
            include './pmfpages/pmfutilisateur/pmffonction.php';
            
    ?>