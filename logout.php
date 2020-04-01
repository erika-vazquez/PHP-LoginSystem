<?php
    // remove all session variable
    session_unset();

    // destroy the session
    session_destroy();

    header('location: index.php');

?>