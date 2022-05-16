<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name',
        'company_province',
        'company_city',
        'company_email',
        'company_phone_number'
    ];

    public function getId()
    {
        return $this->id;
    }

    public function getCompanyName()
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
        // UPDATE organizations SET name=$value
        $this->name = $value;
        return $this->save();
    }

    public function setCompanyProvince($value)
    {
        // UPDATE organizations SET address=$value
        $this->address = $value;
        return $this->save();
    }

    public function setCompanyCity($value)
    {
        $this->contact_number = $value;
        return $this->save();
    }

    public function setCompanyEmail($value)
    {
        $this->type = $value;
        return $this->save();
    }

    public function setCompanyPhoneNumber($value)
    {
        $this->website_url = $value;
        return $this->save();
    }

}
