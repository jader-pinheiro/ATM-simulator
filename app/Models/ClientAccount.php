<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientAccount extends Model
{
    use HasFactory;


    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function transaction()
    {
        return $this->hasMany('App\Models\Transaction');
    }
}
