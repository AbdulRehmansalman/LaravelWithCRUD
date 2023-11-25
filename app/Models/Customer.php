<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
     //todo :: Hum ne Customers wali table k sath ,ais k sath Map karna:
    protected $table ="customers";
    protected $primaryKey = "customers_id";

    // php artisan make:model Product --migration
    // aik product name ka model banai ga ,or aus k sath hy Migration(Table) banai ga.

}
