<?php

    // The strip_tags () function can be used to separate HTML and PHP tags from a string.

    // $x = "<h1><span>Bangladesh is a natural beautiful country </span></h1><p>Webcoachbd DOT com is the largest bengali tutorial site</p>";
    // echo strip_tags($x);

    $x = "<h1><span>Bangladesh is a natural beautiful country </span></h1><p>Webcoachbd DOT com is the largest bengali tutorial site</p>";
    echo strip_tags($x,'<h1><p>');

?>