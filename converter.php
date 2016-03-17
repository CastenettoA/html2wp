<?php

/*
 * Created by Andrea Castenetto
 * the program is't ready to use, please wait some days
 */

    $file_array = array();
    $n = 0;

    $the_file = file('text.html');

    //assign each line to the array $file_array
    foreach($the_file as $line_num => $line) {
       $file_array[$n] = htmlspecialchars($line);
       $n++;
    }

    $n = 0;



   foreach($file_array as $linea){
        echo $linea .'<br>';
       $output = preg_match("/<\/head>/", $linea);
       print_r($output) .'<br>';
    }

//preg_replace, strpos??? http://php.net/manual/en/function.strpos.php
?>