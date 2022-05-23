<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'customer_payment_method',
        'customer_total',
        'customer_number_of_items_purchased',
    ];

    public function getId()
    {
        return $this->id;
    }

    public function getCustomerName()
    {
        return $this->customer_name;
    }

    public function getCustomerPaymentMethod()
    {
        return $this->customer_payment_method;
    }

    public function getCustomerTotal()
    {
        return $this->customer_total;
    }

    public function getCustomerNumberOfItemsPurchased()
    {
        return $this->customer_number_of_items_purchased;
    }

    public function setCustomerName($value)
    {
        // UPDATE transactions SET name=$value
        $this->customer_name = $value;
        return $this->save();
    }

    public function setCustomerPaymentMethod($value)
    {
        // UPDATE transactions SET address=$value
        $this->customer_payment_method = $value;
        return $this->save();
    }

    public function setCustomerTotal($value)
    {
        $this->customer_total = $value;
        return $this->save();
    }

    public function setCustomerNumberOfItemsPurchased($value)
    {
        $this->customer_number_of_items_purchased = $value;
        return $this->save();
    }

    public function isCash()
    {
        return ($this->customer_payment_method == 'cash');
    }

    public function isCreditCard()
    {
        return ($this->customer_payment_method == 'credit_card');
    }

    public function isDebitCard()
    {
        return ($this->customer_payment_method == 'debit_card');
    }

    public function isVirtualWallet()
    {
        return ($this->customer_payment_method == 'virtual_wallet');
    }
}