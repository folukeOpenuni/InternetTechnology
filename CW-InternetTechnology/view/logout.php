<?php
    session_start();
    session_destroy();
    echo "<script type='text/javascript'>window.location.href = 'http://lamp.scim.brad.ac.uk:50218/InternetTechnology/CW-InternetTechnology/index.php';</script>";
    exit();
 
