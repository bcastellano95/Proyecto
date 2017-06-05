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
        <div class="wrapper col4">
            <div id="container">
                <div id="content">
                    <form action="Control.php" method="post" enctype="multipart/form-data">
                        <fieldset id="noticiasCarga">
                            <h1>Nombre de la noticia</h1>
                            <p>
                                <textarea name="nomNoticia" class="comenta" id="nomNoticia" cols="100%" rows="1" required></textarea>
                                <label for="comment" style="display:none;"><small>Comment (required)</small></label>
                            </p>
                            <label for="publicacion">Fecha de Publicacion:<span>*</span>&nbsp;</label></br>
                            <input type="date" name="fechaPulic" id="fechaPulic" required></br></br>

                                <p>
                                    <label for="imagenPubl">Link de Imagen a publicar:<span>*</span>&nbsp;</label></br>
                                    <textarea name="linkImg" class="comenta" id="linkImg" cols="100%" rows="1" required></textarea>
                                
                                </p>

                                <h1>Descripcion de la noticia</h1>
                                <p>
                                    <textarea name="descripcion" class="comenta" id="descripcion" cols="100%" rows="10"></textarea>
                                    <label for="comment" style="display:none;"><small>Comment (required)</small></label>
                                </p>

                                <input id="guardarNoticia" name="guardarNoticia" type="submit" value="Guardar Noticia">
                                    </fieldset>
                                    </form>
                                    </div>
                                    <div id="column">
                                        <ul id="latestnews">
                                            <li><img src="images/demo/80x80.gif" alt="" />
                                                <p><strong><a href="#">Indonectetus facilis leo.</a></strong> Nullamlacus dui ipsum cons eque lobor ttis non euis que morbi penas dapi bulum orna. Urnaul trices quis curabitur.</p>
                                            </li>
                                            <li><img src="images/demo/80x80.gif" alt="" />
                                                <p><strong><a href="#">Indonectetus facilis leo.</a></strong> Nullamlacus dui ipsum cons eque lobor ttis non euis que morbi penas dapi bulum orna. Urnaul trices quis curabitur.</p>
                                            </li>
                                            <li><img src="images/demo/80x80.gif" alt="" />
                                                <p><strong><a href="#">Indonectetus facilis leo.</a></strong> Nullamlacus dui ipsum cons eque lobor ttis non euis que morbi penas dapi bulum orna. Urnaul trices quis curabitur.</p>
                                            </li>
                                            <li><img src="images/demo/80x80.gif" alt="" />
                                                <p><strong><a href="#">Indonectetus facilis leo.</a></strong> Nullamlacus dui ipsum cons eque lobor ttis non euis que morbi penas dapi bulum orna. Urnaul trices quis curabitur.</p>
                                            </li>
                                            <li class="last"><img src="images/demo/80x80.gif" alt="" />
                                                <p><strong><a href="#">Indonectetus facilis leo.</a></strong> Nullamlacus dui ipsum cons eque lobor ttis non euis que morbi penas dapi bulum orna. Urnaul trices quis curabitur.</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <br class="clear" />
                                    </div>
                                    <br class="clear" />
                                    </div>
                                    <!-- ####################################################################################################### -->

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