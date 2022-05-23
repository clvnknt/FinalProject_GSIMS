<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'is_admin',
        'password',
    ];

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getIsAdmin()
    {
        return $this->is_admin;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setName($value)
    {
        // UPDATE organizations SET name=$value
        $this->name = $value;
        return $this->save();
    }

    public function setEmail($value)
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
