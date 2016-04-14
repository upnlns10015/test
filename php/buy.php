<?php
class buy{
  var $owner;
  var $product;
  var $price;
  

  function get_owner(){
    return $this->owner;
  }

  function buy_product($item, $number1, $number2){
    $this->product[$item]= $number1;
	$this->price[$item]= $number2;
  }
} //cart
?>