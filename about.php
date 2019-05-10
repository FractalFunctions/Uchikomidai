<?php
session_start();
require_once("dbcontroller.php");
require_once("lib_uchi.php");
require_once("lib_topnav.php");
$db_handle = new DBController();
?>

<HTML>
<?php echo htmlHeader(); ?>

<BODY>
<?php echo htmlTopNav(); ?>
 <div id="product-grid">
	<div class="txt-heading">About Us / Contact Information</div>
 </div>

</BODY>

</HTML>
