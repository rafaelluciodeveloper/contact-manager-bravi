<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function person()
    {
        return $this->belongsTo('App\Model\Person');
    }
}
