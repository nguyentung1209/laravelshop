<?php

namespace App;

class Cart
{
	public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;
	public $totalPriceItem = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
            $this->totalPriceItem = $oldCart->totalPriceItem;
		}
	}

	public function add($item, $id){
		$newcart = ['qty'=>0, 'price' => $item->unit_price, 'item' => $item];
		if($this->items){
			if(array_key_exists($id, $this->items)){
                $newcart = $this->items[$id];
			}
		}
        $newcart['qty']++;
        $newcart['price'] = $item->unit_price * $newcart['qty'];
		$this->items[$id] = $newcart;
		$this->totalQty++;
		$this->totalPrice += $item->unit_price;
	}
	//xóa 1
	public function reduceByOne($id){
		$this->items[$id]['qty']--;
		$this->items[$id]['price'] -= $this->items[$id]['item']['price'];
		$this->totalQty--;
		$this->totalPrice -= $this->items[$id]['item']['price'];
		if($this->items[$id]['qty']<=0){
			unset($this->items[$id]);
		}
	}
	//xóa nhiều
	public function removeItem($id){
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['price'];
		unset($this->items[$id]);
	}
	public function updateItem($id, $quanty){
	    $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];

	    $this->items[$id]['qty'] = $quanty;
        $this->items[$id]['price'] = $quanty * $this->items[$id]['item']->unit_price;

        $this->totalQty += $this->items[$id]['qty'];
        $this->totalPrice += $this->items[$id]['price'];
    }
}
