<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'item_name',
        'company_province',
        'company_city',
        'company_email',
        'company_phone_number'
    ];

    public function getId()
    {
        return $this->id;
    }

    public function getItemName()
    {
        return $this->company_name;
    }

    public function getCompanyProvince()
    {
        return $this->company_province;
    }

    public function getCompanyCity()
    {
        return $this->company_city;
    }

    public function getCompanyEmail()
    {
        return $this->company_email;
    }

    public function getCompanyPhoneNumber()
    {
        return $this->company_phone_number;
    }

    public function setCompanyName($value)
    {
        $this->company_name = $value;
        return $this->save();
    }

    public function setCompanyProvince($value)
    {
        $this->company_province = $value;
        return $this->save();
    }

    public function setCompanyCity($value)
    {
        $this->company_city = $value;
        return $this->save();
    }

    public function setCompanyEmail($value)
    {
        $this->company_email = $value;
        return $this->save();
    }

    public function setCompanyPhoneNumber($value)
    {
        $this->company_phone_number = $value;
        return $this->save();
    }
}
