<?php
$title = "Who Is?";
include('page_header.php');
?>
        <table width="800" cellspacing="0" cellpadding="0" border="0">
	  <tr>
            <td style="padding:30px; vertical-align:top; padding-top:0px;">
              <form onsubmit="return whois(this);" name="myform" action="">
                <h1 style="font-size:30px;"><a href="?" style="text-decoration:none; color:#C00;">enter domain</a></h1>
                <input type="text" name="domain" id="domain" style="font-size:19px; width:700px; border:18px #C00 solid" />
                <br />
                <br />
                <input type="submit" name="button" id="button" value="who is?" style="font-size:19px;" />
              </form>
	    </td>
          </tr>
        </table>
        <div id="sonuc" style="color:#666; font-size:16px; text-align:left; width: 750px;"></div>
        <br />
 <?php include('footer.php'); ?>