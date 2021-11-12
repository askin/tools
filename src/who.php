<?php

if (isset($_POST['domain'])) {
    $query = $_POST['domain'];
} else {
    $query = 'yollu.com';
}

include('phpwhois/whois.main.php');

$whois = new Whois();

$result = $whois->Lookup($query,true);

$reg = $result['regrinfo']['domain'];
echo "Name: " . $reg['name'] . "<br />\n";

if (is_array($reg['status'])) {
    echo "Status : <br />\n";
    foreach ($reg['status'] as $key => $value)
        echo "&nbsp;&nbsp;&nbsp;&nbsp;$key => $value <br/>\n";
} else {
    echo "Status : " . $reg['status'] . "<br />\n";
}

echo "Name Servers : <br />\n";
foreach ($reg['nserver'] as $key => $value)
    echo "&nbsp;&nbsp;&nbsp;&nbsp;$key => $value <br/>\n";

echo "Changed: " . $reg['changed'] . " </br>\n";
echo "Created: " . $reg['created'] . "</br>\n";
echo "Expires: " . $reg['expires'] . "</br>\n";

echo "Registred: " . $result['regrinfo']['registered'] . "<br />\n";

?>