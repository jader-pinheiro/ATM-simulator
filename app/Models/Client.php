<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['organization_id', 'name', 'email', 'cpf_cnpj', 'rg', 'type_client', 'obs', 'status'];

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
