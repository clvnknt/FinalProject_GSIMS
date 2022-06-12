<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_name',
        'item_company',
        'console_type',
        'item_quantity',
        'price',
    ];

    public function getId()
    {
        return $this->id;
    }

    public function getItemName()
    {
        return $this->item_name;
    }

    public function getItemCompany()
    {
        return $this->item_company;
    }

    public function getConsoleType()
    {
        return $this->console_type;
    }

    public function getItemQuantity()
    {
        return $this->item_quantity;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setItemName($value)
    {
        // UPDATE transactions SET name=$value
        $this->item_name = $value;
        return $this->save();
    }

    public function setItemCompany($value)
    {
        $this->item_company = $value;
        return $this->save();
    }

    public function isNintendoSwitch()
    {
        return ($this->nintendo_switch == 'nintendo_switch');
    }

    public function isPlayStationFour()
    {
        return ($this->console_type == 'ps4');
    }

    public function isPlayStationFive()
    {
        return ($this->console_type == 'ps5');
    }

    public function isXbox()
    {
        return ($this->console_type == 'xbox');
    }

    public function setItemQuantity($value)
    {
        $this->item_quantity = $value;
        return $this->save();
    }

    public function setPrice($value)
    {
        $this->price = $value;
        return $this->save();
    }

}