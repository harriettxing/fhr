<h4> doctor's visit </h4>

<?php

    if ($visit_id < 1)
    {
        include "visitadd.php";
    } else {
        include "visitupdate.php";
    }
?>
