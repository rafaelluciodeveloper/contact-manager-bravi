<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';

    public function contacts()
    {
        return $this->hasMany(Contact::class ,'person_id','id');
    }
}
