<?php 
    echo "<h1>Hello Android</h1>"; 
?> 

Include & Require Two methods of include. 
include, include_once 

Include: Includes external file into php. It throws an warning and continues to the next if it doesn't finds the file. include(def.php); 
include_once: Includes external file, but once only. Even if it is included multiple times. include_once(def.php); 

Require: Makes it mandatory to include the file and if the file is not found throws an error. 
Two methods: require, require_once require(); 
require_once: requires a file once only even if it is called multiple times. 


