<?php

    //setcookie("customerId", "1234", time() + 60 * 60 * 24); // 24 časa

    setcookie("customerId", "test", time() - 60 * 60); // unset cookie

    // $_COOKIE["customerId"] = "test"; // change the name of cookie

    echo $_COOKIE["customerId"]; // pokazi ime

?>