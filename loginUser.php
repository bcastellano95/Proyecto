<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Sign-Up/Login Form</title>
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <script type="text/javascript" src="JS/jquery-1.7.2-min.js"></script>


        <link rel="stylesheet" href="css/style.css">


    </head>

    <body>
        <div class="form">

            <ul class="tab-group">
                <li class="tab active"><a href="#signup">Registrar</a></li>
                <li class="tab"><a href="#login">Ingresar</a></li>
            </ul>

            <div class="tab-content">
                <div id="signup">   
                    <h1>Registro para Usuarios</h1>

                    <form action="Control.php" method="post" enctype="multipart/form-data">

                        <div class="top-row">
                            <div class="field-wrap">
                                <label>
                                    Primer Nombre<span class="req">*</span>
                                </label>
                                <input type="text" id="pname" name="pname" required autocomplete="off" />
                            </div>

                            <div class="field-wrap">
                                <label>
                                    Nombre de Usuraio<span class="req">*</span>
                                </label>
                                <input type="text" id="uname" name="uname" required autocomplete="off">
                            </div>
                        </div>

                        <div class="field-wrap">
                            <label>
                                Email <span class="req">*</span>
                            </label>
                            <input type="email" id="email" name="email" required autocomplete="off">
                        </div>

                        <div class="field-wrap">
                            <label>
                                Contraseña<span class="req">*</span>
                            </label>
                            <input type="password" id="pass" name="pass" required autocomplete="off">
                        </div>

                        <button type="submit" id="enviarU"  name="enviarU" class="button button-block">Resgistrar</button>

                    </form>

                </div>

                <div id="login">   
                    <h1>Bienvenido!</h1>

                    <form action="Control.php" method="post" enctype="multipart/form-data">

                        <div class="field-wrap">
                            <label>
                                Nombre de Usuario <span class="req">*</span>
                            </label>
                            <input type="text" id="userNam" name="userNam" required autocomplete="off"/>
                        </div>

                        <div class="field-wrap">
                            <label>
                                Contraseña<span class="req">*</span>
                            </label>
                            <input type="password" id="passLog" name="passLog" required autocomplete="off"/>
                        </div>



                        <button id="ingresarU"  name="ingresarU" class="button button-block">Ingresar</button>
                    
                       
                    </form>

                </div>

            </div><!-- tab-content -->

        </div> <!-- /form -->
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    </body>
</html>
