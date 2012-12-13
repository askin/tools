<?php
$title = "Get Web Page Headers";
include('page_header.php');
?>
        <table width="800" cellspacing="0" cellpadding="0" border="0">
	  <tr>
            <td width="50%" style="padding:30px; vertical-align:top; padding-top:0px;">
              <form onsubmit="return bomb(this);" name="myform" action="">
                <h1 style="font-size:30px;"><a href="?" style="text-decoration:none; color:#C00;">enter url</a></h1>
                <input type="text" name="gelen" id="gelen" style="font-size:19px; width:350px; border:18px #C00 solid" />
                <br />
                <br />
                <input type="submit" name="button" id="button" value="get header" style="font-size:19px;" />
              </form>
	    </td>
          </tr>
        </table>
        <div id="sonuc" style="color:#666; font-size:16px; text-align:left; width: 750px;"></div>
        <br />
 <?php include('footer.php'); ?>

