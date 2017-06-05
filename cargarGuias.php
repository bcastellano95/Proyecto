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



                                <h1>Nombre de la Clase</h1>
                                <select  name="nom_clases" id="nom_clases"  required>

                                    <?php
                                    require_once 'dataBase.php';
                                    $db = new dataBase();
                                    $db->conectar();
                                    $rec = $db->consultar("clases");
                                    while ($row = mysqli_fetch_array($rec)) {
                                        echo '<option value= "' . $row['nom_clase'] . '" selected="selected">';
                                        echo $row['nom_clase'];
                                        echo "</option>";
                                    }
                                    ?>

                                </select>
                                <br></br>
                                <h1>Nombre de la Especializacion</h1>
                                <textarea name="nomEspec" class="comenta" id="nomEspec" cols="100%" rows="1" required></textarea>
                                <label for="comment" style="display:none;"><small>Comment (required)</small></label>
                                </select>
                                <br>



                                    <h1>Introduccion</h1>
                                    <p>
                                        <textarea name="introduccion" class="comenta" id="introduccion" cols="100%" rows="10"></textarea>
                                        <label for="comment" style="display:none;"><small>Comment (required)</small></label>
                                    </p>

                            </fieldset>   
                        </div>

                        <div id="Resumendehabilidades">
                            <h1>Resumen de Habilidades</h1>


                            <p>

                                <textarea name="resumendehabilidades" class="comenta" id="resumendehabilidades" cols="100%" rows="10"></textarea>
                                <label for="comment" style="display:none;"><small>Comment (required)</small></label>
                            </p><br></br>

                        </div>
                        <div id="Talentos">
                            <h1>Talentos</h1>


                            <p>

                                <textarea name="talentos" class="comenta" id="talentos" cols="100%" rows="10"></textarea>
                                <label for="comment" style="display:none;"><small>Comment (required)</small></label>
                            </p><br></br>

                        </div>
                        <div id="ArtefactoyReliquias">
                            <h1>Artefacto y Reliquias</h1>


                            <p>

                                <textarea name="artefactoyReliquias" class="comenta" id="artefactoyReliquias" cols="100%" rows="10"></textarea>
                                <label for="comment" style="display:none;"><small>Comment (required)</small></label>
                            </p><br></br>

                        </div>
                        <div id="EstadisticasPincipales">
                            <h1>Estadisticas Pincipales</h1>



                            <p>
                                <textarea name="estadisticasPincipales" class="comenta" id="estadisticasPincipales" cols="100%" rows="10"></textarea>
                                <label for="comment" style="display:none;"><small>Comment (required)</small></label>
                            </p><br></br>

                        </div>
                        <div id="GemasEncantamientos">
                            <h1>Gemas, Encantamientos y Consumibles</h1>


                            <p>

                                <textarea name="gemasEncantamientos" class="comenta" id="gemasEncantamientos" cols="100%" rows="10"></textarea>
                                <label for="comment" style="display:none;"><small>Comment (required)</small></label>
                            </p><br></br>

                        </div>
                        <div id="LegendariosBIS">
                            <h1>Legendarios y Best in Slot</h1>



                            <p>
                                <textarea name="legendariosBIS" class="comenta" id="legendariosBIS" cols="100%" rows="10"></textarea>
                                <label for="comment" style="display:none;"><small>Comment (required)</small></label>
                            </p><br></br>

                        </div>


                        <input id="guardarguia" name="guardarguia" type="submit" value="Guardar Guia">
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
                            <li><a href="javascript:mostrarRes();">Resumen de habilidades</a></li>
                            <li><a href="javascript:mostrarTal();">Talentos</a></li>
                            <li><a href="javascript:mostrarArt();">Artefacto y reliquias</a></li>
                            <li><a href="javascript:mostrarEst();">Estadisticas principales</a></li>
                            <li><a href="javascript:mostrarGem();">Gemas, Encantamientos y Consumibles</a></li>
                            <li><a href="javascript:mostrarLeg();">Legendarios y Best in Slot</a></li>

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