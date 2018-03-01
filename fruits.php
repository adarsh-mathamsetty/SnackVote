<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fruits extends Model
{
    protected $fillable = ['Fruitname', 'userid', 'Numofvotes', 'Fruitid'];
}
