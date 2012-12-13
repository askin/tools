<?php

// syntax - asc2bin("text to convert");
function asc2bin($in) {
    $out = '';
    for ($i = 0, $len = strlen($in); $i < $len; $i++)
    {
        $out .= sprintf("%08b",ord($in{$i}));
    }
    return $out;
}

// use this function to convert binary back to readable ascii text
// syntax - bin2asc("binary to convert");
function bin2asc($in) {
    $out = '';
    for ($i = 0, $len = strlen($in); $i < $len; $i += 8)
    {
        $out .= chr(bindec(substr($in,$i,8)));
    }
    return $out;
}
/* Ryan Cheeseman */
/* ~~Dull1554 */
/* ~~~~Dull1554@gmail.com */

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

if ($op == "asc2bin") {
    $gelen = $_POST['gelen'];
    echo wordwrap(asc2bin($gelen), 8, " ", true);
} else if ($op == "bin2asc") {
    $giden = $_POST['giden'];
    echo bin2asc(str_replace(" ", "", $giden));
}
?>