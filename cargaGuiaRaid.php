<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Newserific
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php session_start(); ?>

        <title>Guias latinWoW</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
        <script type="text/javascript" src="js/jquery-1.7.2-min.js"></script>
        <script type="text/javascript" src="JS/EfectoForm.js"></script>

    </head>
    <body id="top">
        <div class="wrapper col1">
            <div id="header">
                <div class="fl_left">
                    <h1><a href="index.php">Guias latinWoW</a></h1>
                   
                </div>
                <div class="fl_right"><a href="#"><img src="../images/demo/468x60.gif" alt="" /></a></div>
                <br class="clear" />
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper col2">
            <div id="topbar">
                <div id="topnav">
                    <ul>
                        <li class="active"><a href="cargaNoticias.php">Carga Noticias</a></li>

                        <li><a href="cargarGuias.php">Carga Guias de clases</a>

                        </li>
                        <li><a href="cargaGuiaRaid.php">Carga Guias de Bandas</a>

                        </li>
                        <li class="last"><a href="login.php">Crear Administrador</a></li>
                    </ul>
                </div>

                <br class="clear" />
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <!-- <div class="wrapper col3">
             <div id="breadcrumb">
                 <ul>
                     <li class="first">You Are Here</li>
                     <li>&#187;</li>
                     <li><a href="#">Home</a></li>
                     <li>&#187;</li>
                     <li><a href="#">Grand Parent</a></li>
                     <li>&#187;</li>
                     <li><a href="#">Parent</a></li>
                     <li>&#187;</li>
                     <li class="current"><a href="#">Child</a></li>
                 </ul>
             </div>
         </div> -->
        <!-- ####################################################################################################### -->
        <div class="wrapper col4">
            <div id="container">

                <div id="content">
                    <form action="Control.php" method="post" enctype="multipart/form-data">
                        <div id="clase">

                        </div>
                        <div id="Introduccion">
                            <fieldset id="cargarGuias">



                                <h1>Nombre de la Raid</h1>
                                <p>
                                    <textarea name="nomRaid" class="comenta" id="nomRaid" cols="100%" rows="1" required></textarea>
                                    <label for="comment" style="display:none;"><small>Comment (required)</small></label>
                                </p><br></br>
                                <h1>Nombre del Jefe</h1>
                                <textarea name="nomBoss" class="comenta" id="nomBoss" cols="100%" rows="1" required></textarea>
                                </br></br>

                                <h1>Introduccion</h1>
                                <p>
                                    <textarea name="intro" class="comenta" id="intro" cols="100%" rows="10"></textarea>
                                    <label for="comment" style="display:none;"><small>Comment (required)</small></label>
                                </p>

                            </fieldset>   
                        </div>

                        <div id="Resumendehabilidades">
                            <h1>Habilidades</h1>


                            <p>

                                <textarea name="Habilidades" class="comenta" id="Habilidades" cols="100%" rows="10"></textarea>
                                <label for="comment" style="display:none;"><small>Comment (required)</small></label>
                            </p><br></br>

                        </div>
                        <div id="Talentos">
                            <h1>Estrategia Normal/Heroico</h1>


                            <p>

                                <textarea name="Heroico" class="comenta" id="Heroico" cols="100%" rows="10"></textarea>
                                <label for="comment" style="display:none;"><small>Comment (required)</small></label>
                            </p><br></br>

                        </div>
                        <div id="ArtefactoyReliquias">
                            <h1>Estrategia Mitico</h1>


                            <p>

                                <textarea name="Mitico" class="comenta" id="Mitico" cols="100%" rows="10"></textarea>
                                <label for="comment" style="display:none;"><small>Comment (required)</small></label>
                            </p><br></br>

                        </div>



                        <input id="guardarguiaBoss" name="guardarguiaBoss" type="submit" value="Guardar Guia de jefes">
                    </form>

                    <!-- ########################################################################################################## -->
                    <div id="comments">

                    </div>

                    <div id="respond">
                        <form action="#" method="post">

                        </form>
                    </div>
                </div>
                <div id="column">
                    <div class="subnav">
                        <h2>Secondary Navigation</h2>
                        <ul>
                            <li><a href="javascript:mostrarInt();">Introducción</a></li>
                            <li><a href="javascript:mostrarRes();">Habilidades</a></li>
                            <li><a href="javascript:mostrarTal();">Estrategia Normal/Heroico</a></li>
                            <li><a href="javascript:mostrarArt();">Estrategia Mitico</a></li>


                        </ul>
                    </div>



                </div>
                <br class="clear" />
            </div>
        </div>
        <!-- ####################################################################################################### -->

        <!-- ####################################################################################################### -->
        <div class="wrapper col7">
            <div id="copyright">
                <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
                <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
                <br class="clear" />
            </div>
        </div>
    </body>
</html>