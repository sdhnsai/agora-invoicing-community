<?php

namespace App\Model\Github;

use App\BaseModel;

class Github extends BaseModel
{
    protected $table = 'githubs';
    protected $fillable = ['client_id', 'client_secret', 'username', 'password'];

    public function getPasswordAttribute($value)
    {
        if ($value) {
            $value = \Crypt::decrypt($value);
            // dd('dsf');
        }

        return $value;
    }

    public function setPasswordAttribute($value)
    {
        $value = \Crypt::encrypt($value);
        $this->attributes['password'] = $value;
    }
}
