<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function transactions() {
        return $this->hasMany('App\Transaction');
    }
}
