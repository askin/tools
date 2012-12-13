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


if (isset($_POST['group1'])) {
    $op = $_POST['group1'];
} else {
    $op = "";
}

if (isset($_POST['content'])) {
    $content = $_POST['content'];
} else {
    $content = "";
}

if ($op == "ascii2binary") {
    $result = asc2bin($content);
    $ascii2binary = "checked";
    $binary2ascii = "";
} else if ($op == "binary2ascii") {
    $result = bin2asc($content);
    $ascii2binary = "";
    $binary2ascii = "checked";
} else {
    $result = "";
    $ascii2binary = "checked";
    $binary2ascii = "";
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
    <title>ASCII -- BINARY</title>
	<meta name="description" content="Ascii to binary and binary to ascii conversion">
	<meta name="keywords" content="ascii, binary, convert">
	<meta name="title" content="ascii - binary">
	<meta NAME="Copyright" CONTENT="Copyright 2011, Aşkın Yollu">
	<meta NAME="Creator" CONTENT="Aşkın Yollu">
  </head>
  <body>
    <form action="binary-ascii.php" method="post">
      <table>
        <tr>
          <td>
            Enter Text Here
          <td>
        </tr>
        <tr>
          <td>
            <textarea name="content"><?php echo isset($content) ? $content : ""; ?></textarea>
          </td>
        </tr>
        <tr>
          <td>
            Result:
          <td>
        </tr>
        <tr>
          <td>
            <p>
              <?php echo isset($result) ? $result : ""; ?>
            </p>
          </td>
        </tr>
        <tr>
          <td>
            <input type="radio" name="group1" value="ascii2binary" <?php echo $ascii2binary; ?> >
            Ascii 2 Binary
            <input type="radio" name="group1" value="binary2ascii" <?php echo $binary2ascii; ?> >
            Binary 2 Ascii
          </td>
        </tr>
        <tr>
          <td>
            <input type="submit" value="Submit" />
          </td>
        <tr>
      </table>
      <form>
  </body>
</html>
