<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>SysCard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="../resources/assets/css/carnet.css" media="screen" >
        <link href="../resources/assets/css/picedit.css" rel="stylesheet" type="text/css"/>
        <link href="../resources/assets/css/picedit.min.css" rel="stylesheet" type="text/css"/>
        <link href="../resources/assets/css/effecstyle.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!-- Page Wrapper -->
        <div id="page-wrapper">
            <!-- Header -->
            <header id="header" class="alt">
                <h1><a href="main.xhtml">SysCard</a></h1>
                <nav id="nav">
                    <ul>
                        <li class="special">
                            <a href="#menu" class="menuToggle"><span>Menu</span></a>
                            <div id="menu">
                                <ul>
                                    <li><a href="main.php">Principal</a></li>
                                    <li><a href="carnet.php">Carné</a></li>
                                    <li><a href="newjsf.xhtml">Elements</a></li>
                                    <li><a href="../resources/assets/php/logout.php">Log out</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </header>
            <!-- Main -->
            <article id="main">
                    <aside id="izq"><br></br>
                        <form id="" action="" method="post">
                            <input type="text" name="nombres" placeholder="Nombres" value="" required=""></br>
                            <input type="text" name="apellidos" placeholder="Apellidos" value="" required=""></br>
                            <input type="text" name="carrara" placeholder="Carrera" value="" required=""></br>
                            <input type="text" name="facultad" placeholder="Facultad" value="" required=""></br>
                            <input type="text" name="carnet" placeholder="Carnet" value="" required=""></br>
                            <input type="text" name="url" placeholder="URL" value=""></br>
                            <button value="Enviar" id="enviar" >Enviar</button></br>
                        </form>
                    </aside>
                    <div id="cen" >
                        <div id="car">
                            <div id="conimg">
                                <img id="img" src="../resources/images/cam.png" alt="" />
                            </div>
                            <div id="con" style="text-align: center">
                                <label id="cent" style="text-align: center">universidad nacional</label><br>
                                <label id="cent">autonoma de nicaragua</label><br>
                                <label id="cent">managua</label><br>
                                <label id="cent">nombres</label><br>
                                <label id="cent">apellidos</label><br>
                                <div style="text-align: left">
                                    <label id="left">no carnet</label><br>
                                    <label id="left">codigo de barra</label><br><br>
                                </div>
                                <div style="display: -moz-grid; display: -webkit-flex; width:100%;">
                                    <div style="text-align: left; width:45%; ">
                                        <label id="left">carrera</label>
                                    </div>
                                    <div style="text-align: right; width:45%; ">
                                        <label id="right">facultad</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <aside id="der">
                        <br />
                        <br />
                        <br />
                        <div style="text-align: center;">
                            <button value="Pop up en Zoom In" class="button" data-type="zoomin">
                                <img src="../resources/images/cam.png" width="50" height="50" alt="camara"/>
                            </button>
                        </div><br /><br />
                        <div style="text-align: center;">
                            <button value="Pop up en Zoom out" class="button" data-type="zoomout">
                                <img src="../resources/images/imp.png" width="50" height="50" alt="impresion"/>
                            </button>
                        </div>
                    </aside>
            </article>
            <footer id="footer">
                <ul class="copyright">
                    <li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                </ul>
            </footer>
        </div>
        <div class="overlay-container">
            <div class="window-container zoomin">
                <div style="margin:10% auto 0 auto; display: table;">
                    <form action="" method="post" enctype="multipart/form-data" id="xid">
                        <input type="file" name="thefile" id="thebox">
                        <div style="margin-top:30px; text-align: center;">
                            <button id="sub" type="button">Submit</button>
                        </div>
                    </form>
                </div>
                <span class="close">Cerrar</span>
            </div>
            <div class="window-container zoomout">
                <span class="close">Cerrar</span>
            </div>
        <!-- Footer -->

        <!-- Scripts -->
        <script src="../resources/assets/js/jquery.min.js"></script>
        <script src="../resources/assets/js/jquery.scrollex.min.js"></script>
        <script src="../resources/assets/js/jquery.scrolly.min.js"></script>
        <script src="../resources/assets/js/skel.min.js"></script>
        <script src="../resources/assets/js/util.js"></script>
        <script src="../resources/assets/js/main.js"></script>
        <script>!window.jQuery && document.write(unescape('%3Cscript src="../resources/assets/js/jquery.min.js"%3E%3C/script%3E'))</script>

        <script src="../resources/assets/js/picedit.min.js" ></script>
        <script type="text/javascript">
            $(function () {
                $('#thebox').picEdit();
            });
        </script>
    </body>
</html>
