<?php
function htmlTopNav() {
$indexActive = "";
$productActive = "";
$partsActive = "";
$otherActive = "";
$shinaiActive = "";
$travelActive = "";
$leatherActive = "";
$aboutActive = "";
$cartActive = "";

$page = basename($_SERVER['PHP_SELF']); 

switch($page)
{
	case "product.php":
		$productActive = "active";
		break;
	case "parts.php":
		$partsActive = "active";
		break;
	case "shinai.php":
		$shinaiActive = "active";
		$otherActive = "active";
		break;
	case "travel.php":
		$travelActive = "active";
		$otherActive = "active";
		break;
	case "leather.php":
		$leatherActive = "active";
		$otherActive = "active";
		break;
	case "about.php":
		$aboutActive = "active";
		break;
	case "cart.php":
		$cartActive = "active";
		break;
	default:
		$indexActive = "active";
}


return <<<HTML

	<script>
	function myFunction() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "topnav") {
	    x.className += " responsive";
	  } else {
	    x.className = "topnav";
	  }
	}
	</script>


	<div class="topnav" id="myTopnav">
	  <a href="index.php" class="$indexActive logo"><img src="Logo_small.jpg" alt="Uchikomidai.com" height="50px"></a>
	  <a href="product.php" class="$productActive">Dummy</a>
	  <a href="parts.php" class="$partsActive">Parts</a>
	  <div class="dropdown $otherActive">
	    <button class="dropbtn">Other 
	      <i class="fa fa-caret-down"></i>
	    </button>
	    <div class="dropdown-content">
	      <a href="shinai.php" class="$shinaiActive">Shinai</a>
	      <a href="travel.php" class="$travelActive">Bogu Bags</a>
	      <a href="leather.php" class="$leatherActive">Leather Work</a>
	    </div>
	  </div> 
	  <a href="about.php" class="$aboutActive">About</a>
	  <div class="topnavR">
	  <a href="cart.php" class="$cartActive">Cart</a>
	  </div>
	  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
	</div>

HTML;
}
?>


