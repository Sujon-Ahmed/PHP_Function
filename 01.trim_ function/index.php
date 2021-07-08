<?php

    /* trim() always remove extra space */

    // $txt = " Sujon ";
    // $txt = trim($txt);

    /* trim() always remove new line with both side */
    // $txt = "\n\nSujon\n\n";
    // $txt = trim($txt);

    /* trim() remove font and end character */
    $txt = "iBangladeshi";
    $txt = trim($txt,'i');

    var_dump($txt);

?>