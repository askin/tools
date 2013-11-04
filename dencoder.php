<?php
$title = "URL Decoder/Encoder";
include('page_header.php');
?>
        <table width="800" cellspacing="0" cellpadding="0" border="0">
	  <tr>
            <td width="50%" style="padding:30px; vertical-align:top; padding-top:0px;">
              <form onsubmit="return bomb(this);" name="myform" action="">
                <h1 style="font-size:30px;"><a href="?" style="text-decoration:none; color:#C00;">enter url</a></h1>
                <textarea cols="100" rows="10" id="dencoder" name="dencoder" style="font-size:19px; width:700px; border:18px #C00 solid" /></textarea>
                <br />
                <br />
                <input type="button" onclick="urlDecode()" value="Decode" />
                <input type="button" onclick="urlEncode()" value="Encode" />
              </form>
	    </td>
          </tr>
        </table>
        <div id="sonuc" style="color:#666; font-size:16px; text-align:left; width: 750px;"></div>
        <br />
 <?php include('footer.php'); ?>
