<?php

/*
 * Created by Andrea Castenetto
 * the program is't ready to use, please wait some days
 */

    $file_array = array();
    $n = 0;
    $filename = 'text.html';

    $filestring = file_get_contents($filename);
    $filearray = explode("\n", $filestring);


    while(list($var, $val) = each($filearray)){
        ++$var;
        $val = htmlspecialchars(trim($val));
        print "Line $var: $val<br>";
    }


//preg_replace, strpos??? http://php.net/manual/en/function.strpos.php
//what is binary safe?

?>