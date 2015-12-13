<?php
    session_start();
?>
<?php
    echo 'Bienvenido, ';
    if (isset($_SESSION['k_username'])) {
        echo '<b>'.$_SESSION['k_username'].'</b>.';
        echo '<p><a href="../../../paginas/logout.php">Logout</a></p>';
    }else{
        echo '<p><a href="../../../paginas/index.php">Login</a></p>';        
    }
?>
