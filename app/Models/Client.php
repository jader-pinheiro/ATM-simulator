<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'cpf', 'birth_date'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function account()
    {
        return $this->hasMany('App\Models\Account');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function clientAccount()
    {
        return $this->hasMany('App\Models\ClientAccout');
    }
}
