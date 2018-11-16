<?php
    session_start();

    if (!isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 0;
    }
    else {
        $_SESSION['counter']++;
    }

    echo "You have visited this page ".$_SESSION['counter']." in this session";
    echo "<form action='phpSession.php' method='POST'> 
    <input value='reset' type='submit' name='button'></form>";

    if (isset($_POST['button']))
    {
    unset($_SESSION['counter']);
    header("location:phpSession.php");//rediriger vers la page phpSession.php
    }
