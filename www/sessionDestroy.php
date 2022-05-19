<?php
    session_unset();
    if(isSet($_SESSION['username'])){
        echo "Session Alive";
    }else{
        echo "Session Killed";
    }
?>