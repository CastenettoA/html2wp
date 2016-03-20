<?php

/*
 * Created by Andrea Castenetto
 * the program is't ready to use, please wait some days
 */

    $file_array = array();
    $n = 0;
    $break = array("</head>", "<footer>");
    $filename = "text.html";

    $filestring = file_get_contents($filename); // get the file


    $header = explode($break[0], $filestring);

    $header = array_map("htmlspecialchars", $header);
    print_r($header);

    /*
     * position of a string
     $pos = strpos($filestring, $break[0]);
    */



    //now I have to check with strpos the position of the brack point and divede the file in 3 array (header, body, footer).

//preg_replace, strpos??? http://php.net/manual/en/function.strpos.php
//what is binary safe?

?>