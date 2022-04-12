<?php
$price = $_REQUEST['price'];
$discount = 0.35;
function descuento35 ($precio, $descuento) {
   global $price, $discount;
    $priceWithDiscount = $price - ($price*$discount);
    return $priceWithDiscount;
}
echo descuento35($price, $discount);

?>