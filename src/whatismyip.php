<?php
$title = "What is my ip?";
include('page_header.php');
if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
?>
        <table width="800" cellspacing="0" cellpadding="0" border="0">
	  <tr>
            <td width="50%" style="padding:30px; vertical-align:top; padding-top:0px;">
              <h1 style="font-size:20px; text-decoration:none; color:#C00;">
                Your IP is <span style="color: #225533;"><?php echo $ip; ?></span>
              </h1>
	    </td>
          </tr>
        </table>
        <div id="sonuc" style="color:#666; font-size:16px; text-align:left; width: 750px;">
        </div>
        <br />
 <?php include('footer.php'); ?>

