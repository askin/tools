<?php
$title = "Decimal Hexadecimal Conversion";
include('page_header.php');
?>
<table width="800" cellspacing="0" cellpadding="0" border="0">
  <tr>
    <td width="50%" style="padding:30px; vertical-align:top; padding-top:0px;">
      <form onsubmit="return dec2hex(this);" name="myform" action="">
        <h1 style="font-size:30px;"><a href="?" style="text-decoration:none; color:#C00;">convert 2 hexadecimal</a></h1>
        <input type="text" name="dechex" id="dechex" style="font-size:19px; width:350px; border:18px #C00 solid" />
        <br />
        <br />
        <input type="submit" name="button" id="button" value="convert" style="font-size:19px;" />
      </form>
    </td>
    <td style="padding:30px; vertical-align:top; padding-top:0px;">
      <form onsubmit="return hex2dec(this);" name="myform2" action="">
        <h1 style="font-size:30px; color:#066">
          <a href="?" style="text-decoration:none; color:#666;">convert 2 decimal</a>
        </h1>
        <input type="text" name="hexdec" id="hexdec" style="font-size:19px; width:350px; border:18px #666 solid" />
        <br />
        <br />
        <input type="submit" name="button" id="button2" value="convert" style="font-size:19px;" />
      </form>
    </td>
  </tr>
</table>
<div id="sonuc" style="color:#666; font-size:42px;"></div>
<br />
<?php include('footer.php'); ?>
