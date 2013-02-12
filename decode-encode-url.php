<?php
$title = "URL Decode Encode";
include('page_header.php');
?>
<table width="800" cellspacing="0" cellpadding="0" border="0">
  <tr>
    <td width="50%" style="padding:30px; vertical-align:top; padding-top:0px;">
      <form onsubmit="return encodeURL(this);" name="encodeURLForm" action="">
        <h1 style="font-size:30px;"><a href="?" style="text-decoration:none; color:#C00;">Encode URL</a></h1>
        <input type="text" name="inpEncode" id="inpEncode" style="font-size:19px; width:350px; border:18px #C00 solid" />
        <br />
        <br />
        <input type="submit" name="button" id="button" value="Encode" style="font-size:19px;" />
      </form>
    </td>
    <td style="padding:30px; vertical-align:top; padding-top:0px;">
      <form onsubmit="return decodeURL(this);" name="decodeURLForm" action="">
        <h1 style="font-size:30px; color:#066">
          <a href="?" style="text-decoration:none; color:#666;">Decode URL</a>
        </h1>
        <input type="text" name="inpDecode" id="inpDecode" style="font-size:19px; width:350px; border:18px #666 solid" />
        <br />
        <br />
        <input type="submit" name="button" id="button2" value="Decode" style="font-size:19px;" />
      </form>
    </td>
  </tr>
</table>
<div id="sonuc" style="color:#666; font-size:42px;"></div>
<br />
<?php include('footer.php'); ?>
