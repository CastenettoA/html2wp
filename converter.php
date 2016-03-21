<?php

/*
 * Created by Andrea Castenetto
 * the program is't ready to use, please wait some days
 */

    $break = array("</head>", "<footer>");
    $filename = "text.html";

    $filestring = file_get_contents($filename); // get the file

    $doc = new DOMDocument();
    $doc->loadHTML($filestring);
    $sxml = simplexml_import_dom($doc);  //Get a SimpleXMLElement object from a DOM node.
    var_dump($doc);



/* position of a string
 $pos = strpos($filestring, $break[0]);
*/
// what is binary safe?
// array_splice — Remove a portion of the array and replace it with something else
// http://www.the-art-of-web.com/php/html-xpath-query/
//http://php.net/manual/en/class.domdocument.php
?>