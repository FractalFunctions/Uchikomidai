<?php

function htmlProductGrid($db_handle, $section, $title)
{
$html = <<<HTML
 <div id="product-grid">
	<div class="txt-heading">$title</div>
HTML;
		
	$product_array = $db_handle->runQuery("SELECT * FROM tblproduct WHERE section='" . $section . "' ORDER BY id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
		  $baseName = basename($_SERVER['PHP_SELF']); 
		  $code = $product_array[$key]["code"];
		  $image = $product_array[$key]["image"];
		  $name = $product_array[$key]["name"];
	          $price = "$" . $product_array[$key]["price"]; 	  

$html .= <<<HTML
		<div class="product-item">
			<form method="post" action="$baseName?action=add&code=$code">
			<div class="product-image"><img src="$image"></div>
			<div class="product-tile-footer">
			<div class="product-title">$name</div>
			<div class="product-price">$price</div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>
		</div>
HTML;
		}
	}

$html .= "</div>";

return $html;
}

?>
