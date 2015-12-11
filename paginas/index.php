<!DOCTYPE html>
<html>
    <head>
      <meta name="viewport" content="width=divice-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>SysCard</title>
        <link rel="shortcut icon" href="../resources/images/favicon.ico">
        <link rel="stylesheet" type="text/css" href="../resources/assets/css/style.css" >

    </head>
    <body>
        <figure id="cambiado"></figure>
        <div class="container">
            <section id="content">
                <form id="en" action="../resources/assets/php/con.php" method="post">
                    <h1>Identificarme</h1>
                    <div>
                        <input type="text" placeholder="Username" required="" id="username" name="usuario">
                    </div>
                    <div>
                        <input type="password" placeholder="Contraseña" required="" id="password" name="pass" >
                    </div>
                    <div>
                        <input id="bu" type="submit" value="Entrar" >
                    </div>
                </form>
                <div class="button">
                </div><!-- button -->
            </section><!-- content -->
        </div><!-- container -->
        <script src="../resources/assets/js/custom.js" type="text/javascript"></script>
        <script src="../resources/assets/js/jquery.min.js" type="text/javascript"></script>
    </body>
</html>
