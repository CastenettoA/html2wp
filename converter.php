<?php

/*
 * Created by Andrea Castenetto
 * the program is't ready to use, please wait some days
 */

    $break = array("</head>", "<footer>");
    $filename = "text.html";

    $filestring = file_get_contents($filename); // get the file

    $content = explode($break[0], $filestring); //return array of split string: the header and the body

    $header[] = $content[0];
    $header[] = "</head>";

    $footer = explode($break[1], $content[1]); //return the body and the footer

    //dato che ogni elemento html (quindi anche l'head) più avere una classe
    //devo usare la classe PHP DOMDocument per trovare gli elementi e assegnarli le eventuali classi



    var_dump($footer);



/* position of a string
 $pos = strpos($filestring, $break[0]);
*/
// what is binary safe?
// array_splice — Remove a portion of the array and replace it with something else
// http://www.the-art-of-web.com/php/html-xpath-query/
//http://php.net/manual/en/class.domdocument.php
?>