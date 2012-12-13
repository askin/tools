<?php
$title = "Unix Time Conversion";
include('page_header.php');
?>
        <form onsubmit="return timeToHuman();" action="" name="timestamp">
          <table width="800" cellspacing="0" cellpadding="0" border="0">
            <tr>
              <td width="50%" style="padding:30px; vertical-align:top; padding-top:0px;">
                <h1 style="font-size:30px;"><a href="?" style="text-decoration:none; color:#C00;">Unix Timestamp</a></h1>
                <input type="text" name="ts" id="ts" style="font-size:19px; width:350px; border:18px #C00 solid" />
                <br />
                <br />
                <input type="submit" name="button" id="button" value="convert" style="font-size:19px;" />
              </td>
              <td style="padding:30px; vertical-align:top; padding-top:0px;">
                <h1 style="font-size:30px; color:#066">
                  <a href="?" style="text-decoration:none; color:#666;">Date/Time</a>
                </h1>
                <input type="text" name="result" style="font-size:19px; width:350px; border:18px #666 solid" disabled="disabled" />
                <br />
                <br />
              </td>
            </tr>
          </table>
        </form>
 <?php include('footer.php'); ?>
