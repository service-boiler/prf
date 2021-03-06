<?php

namespace ServiceBoiler\Prf\Site\Models;

use Illuminate\Database\Eloquent\Model;
use Site;

class RetailOrderItem extends Model
{
	protected $table = 'retail_order_items';
	
	protected $fillable = [
		'product_id', 'price', 'quantity','currency_id',
	];

	protected static function boot()
	{
		static::creating(function (RetailOrderItem $item) {
			//$item->setAttribute('price', $item->product->price->getAttribute('price') ?? 0);
			//$item->setAttribute('currency_id', $item->product->price->getAttribute('currency_id') ?? 978);
			
		});
	}

	/**
	 * @return mixed
	 */
	public function subtotal()
	{
		return $this->price * $this->quantity;
	}

	/**
	 * Order
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function retailorder()
	{
		return $this->belongsTo(RetailOrder::class);
	}

	/**
	 * Product
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	/**
	 * Currency
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function currency()
	{
		return $this->belongsTo(Currency::class);
	}

	
	public function convertPrice($currency_id, $quantity)
	{
		return Site::convert($this->getAttribute('price'), $this->getAttribute('currency_id'), $currency_id, $quantity, false, false);
	}


}
