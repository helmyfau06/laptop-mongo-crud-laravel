<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as eloquent;

class laptop extends Eloquent
{
    
    protected $connection = 'mongodb';
    protected $collection = 'laptop';
    protected $fillable = [
        'merk', 'prosesor', 'penyimpanan', 'ram'
    ];

}
