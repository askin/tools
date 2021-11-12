<?php
// Turn off all error reporting
error_reporting(0);
if (isset($_POST['gelen'])) {
    $url = $_POST['gelen'];
    // $url = "http://askin.ws";

    $new_str = "";
    foreach ($_POST as $key => $value) {
        $new_str = $new_str . "$key=$value&";
    }

    $url = substr($new_str, 6, -1);

    if (substr($url, 0, 4) != "http") {
        $url = "http://" . $url;
    }

    $header = get_headers($url);
    if ($header) {
        echo "<h2>URL: $url</h2>";
        foreach ($header as $key => $value) {
            echo "$value<br />\n";
        }
    } else {
        echo     "<h2>URL: $url' is not a valid url!!!</h2>";
    }
}
?>