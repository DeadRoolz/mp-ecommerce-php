<?php
    //$filename = uniqid ( );
    file_put_contents('dbg/mp.json',  file_get_contents("php://input") . '\n\n', FILE_APPEND);