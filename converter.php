<?php

/*
 * Created by Andrea Castenetto
 * the program is't ready to use, please wait some days
 */

    $file_array = array();
    $n = 0;
    $break1 = "</head>";
    $break2 = "<footer>";
    $filename = "text.html";

    $filestring = file_get_contents($filename); // get the file

    $filestring = htmlspecialchars($filestring);

    print_r($filestring);

    //now I have to check with strpos the position of the brack point and divede the file in 3 file.

//preg_replace, strpos??? http://php.net/manual/en/function.strpos.php
//what is binary safe?

?>