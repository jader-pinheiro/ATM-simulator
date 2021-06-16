<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function accountClient()
    {
        return $this->belongsTo(AccountClient::class);
    }
}
/*
php artisan make:controller AccountController --resource
php artisan make:controller ClientController --resource
php artisan make:controller AccountClientController --resource
php artisan make:controller TransactionController --resource



*/