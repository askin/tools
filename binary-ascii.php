<?php
$title = "Conver string to binary or binary to strin";
include('page_header.php');
?>
          <table width="800" cellspacing="0" cellpadding="0" border="0">
	    <tr><td width="50%" style="padding:30px; vertical-align:top; padding-top:0px;">
                <form onsubmit="return bomb1(this);" name="myform" action="">
                  <h1 style="font-size:30px;"><a href="?" style="text-decoration:none; color:#C00;">convert 2 binary</a></h1>
                  <input type="text" name="gelen" id="gelen" style="font-size:19px; width:350px; border:18px #C00 solid" />
                  <br />
                  <br />
                  <input type="submit" name="button" id="button" value="convert" style="font-size:19px;" />
                </form>
	      </td>
              <td style="padding:30px; vertical-align:top; padding-top:0px;">
                <form onsubmit="return bomb2(this);" name="myform2" action="">
                  <h1 style="font-size:30px; color:#066"><a href="?" style="text-decoration:none; color:#666;">convert 2 ascii</a></h1>
                  <input type="text" name="giden" id="giden" style="font-size:19px; width:350px; border:18px #666 solid" />
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