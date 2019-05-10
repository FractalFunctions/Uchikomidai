<?php
session_start();
require_once("dbcontroller.php");
require_once("lib_uchi.php");
require_once("lib_topnav.php");
require_once("lib_product.php");
$db_handle = new DBController();
?>

<HTML>
<?php echo htmlHeader(); ?>

<BODY>
<?php echo htmlTopNav(); ?>
<?php echo htmlProductGrid($db_handle, "travel", "Hand-made Leather Bogu Bags") ?>
</BODY>

</HTML>
