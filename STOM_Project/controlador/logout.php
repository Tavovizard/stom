<?php
    session_start();
    
    session_destroy();
    
    header("Location: ../vista/indexx2.php");
?>